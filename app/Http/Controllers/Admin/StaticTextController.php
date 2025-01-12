<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PageType;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaticTextRequest;
use App\Models\StaticText;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StaticTextController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Static Text',
        'create' => 'Add New',
        'edit' => 'Edit Text',
        'route' => 'static_texts'
    ];


    public function index()
    {
        return view('admin.pages.static_texts.index', ['data' => $this->data]);
    }

    public function data(Request $request)
    {

        $texts = StaticText::query();

        $model = 'static_texts';
        return DataTables::of($texts)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->editColumn('image', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->image) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->addColumn('page', function ($raw) {
                return $raw->page_id->label();
            })
            ->addColumn('section', function ($raw) {
                return $raw->section->label();
            })
            ->filter(function ($query) {
                if (request()->has('search') && $search = request('search')['value']) {
                    $query->where(function ($q) use ($search) {
                    $q->where('id', 'LIKE', "%{$search}%")
                        ->orWhere('page_name', 'LIKE', "%{$search}%");

                        $q->orWhereHas('translations', function ($translationQuery) use ($search) {
                            $translationQuery->where('locale', app()->getLocale())
                                ->where(function ($tq) use ($search) {
                                    $tq->where('title', 'LIKE', "%{$search}%")
                                        ->orWhere('description', 'LIKE', "%{$search}%");
                                });
                        });
                    });
                }
            })
            ->rawColumns(['image' => 'image'])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.static_texts.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaticTextRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'static_texts');
                $data['image'] = $image;
            }

            $data['page_name'] = PageType::labelByValue($data['page_id']);

            StaticText::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/static_texts']);
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
        $row = StaticText::query()->find($id);
        return view('admin.pages.static_texts.edit', ['data' => $this->data, 'row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StaticTextRequest $request, $id)
    {
        try {
            $row = StaticText::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'static_texts', $row->image);
                $data['image'] = $image;
            }
            $data['page_name'] = PageType::labelByValue($data['page_id']);
            $row->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/static_texts']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StaticText::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        StaticText::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
