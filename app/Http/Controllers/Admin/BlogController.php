<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Traits\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Blogs',
        'create' => 'Add New',
        'edit' => 'Edit Blogs',
        'route' => 'blogs'
    ];


    public function index()
    {
        return view('admin.pages.blogs.index', ['data' => $this->data]);
    }

    public function data()
    {

        $insghts = Blog::query()->with('category');

        $model = 'blogs';
        return DataTables::of($insghts)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('category', function ($raw) {
                return $raw->category?->name ?? '';
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->editColumn('image', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->image) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->rawColumns(['image' => 'image'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.blogs.create', ['data' => $this->data, 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'blogs');
                $data['image'] = $image;
            }

            // Create the blog record to get the ID
            $blog = Blog::create($data);
            // Update the slug by concatenating the ID
            $slug = Str::slug($data['en']['title']) . '-' . $blog->id;
            $blog->update(['slug' => $slug]);
            Artisan::call('generate:site-map');
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/blogs']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Blog::query()->find($id);
        return view('admin.pages.blogs.edit', ['data' => $this->data, 'row' => $row, 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        try {
            $blogs = Blog::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'blogs', $blogs->image);
                $data['image'] = $image;
            }

            $data['slug'] = Str::slug($data['en']['title']) . '-' . $blogs->id;
            $blogs->update($data);
            Artisan::call('generate:site-map');
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/blogs']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        Artisan::call('generate:site-map');
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Blog::destroy($request->items);
        Artisan::call('generate:site-map');
        return final_response('success', 'data deleted successfully');
    }
}
