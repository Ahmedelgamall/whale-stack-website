<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectCategoryRequest;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProjectCategoryController extends Controller
{

    protected $data = [
        'page_title' => 'Project Categories',
        'create' => 'Add New',
        'edit' => 'Edit Project Category',
        'route' => 'project-categories'
    ];


    public function index()
    {
        return view('admin.pages.project_categories.index', ['data' => $this->data]);
    }

    public function data()
    {

        $categories = ProjectCategory::query();

        $model = 'project-categories';
        return DataTables::of($categories)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->rawColumns([])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.project_categories.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCategoryRequest $request)
    {
        try {
            $data = $request->validated();
            ProjectCategory::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/project-categories']);
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
        $row = ProjectCategory::query()->find($id);
        return view('admin.pages.project_categories.edit', ['data' => $this->data, 'row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectCategoryRequest $request, $id)
    {
        try {
            $category = ProjectCategory::query()->find($id);
            $data = $request->validated();
            $category->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/project-categories']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectCategory::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        ProjectCategory::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
