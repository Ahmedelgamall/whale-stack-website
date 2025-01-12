<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PageType;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeoSettingRequest;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SeoSettingController extends Controller
{
    protected $data = [
        'page_title' => 'SEO Setting',
        'create' => 'Add New',
        'edit' => 'Edit Setting',
        'route' => 'seo_settings'
    ];


    public function index()
    {
        return view('admin.pages.seo_settings.index', ['data' => $this->data]);
    }

    public function data()
    {

        $texts = SeoSetting::query();

        $model = 'seo_settings';
        return DataTables::of($texts)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            // ->editColumn('image', function ($raw) {
            //     return '<div class="avatar"><img src="' . getFile($raw->image) . '" alt="user-avatar" height="32" width="32"> </div>';
            // })
            ->addColumn('page', function ($raw) {
                return $raw->page_id->label();
            })
            ->rawColumns([])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.seo_settings.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeoSettingRequest $request)
    {
        try {
            $data = $request->validated();

            $data['page_name'] = PageType::labelByValue($data['page_id']);
            SeoSetting::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/seo_settings']);
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
        $row = SeoSetting::query()->find($id);
        return view('admin.pages.seo_settings.edit', ['data' => $this->data, 'row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeoSettingRequest $request, $id)
    {
        try {
            $row = SeoSetting::query()->find($id);
            $data = $request->validated();
            $data['page_name'] = PageType::labelByValue($data['page_id']);
            $row->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/seo_settings']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SeoSetting::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        SeoSetting::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
