<?php

namespace App\Http\Controllers\Admin;

use App\Enums\WebsiteType;
use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FullWebsiteController extends Controller
{
    protected $data = [
        'page_title' => 'Full Website',
        'create' => 'Add New',
        'route' => 'full-website'
    ];


    public function index()
    {
        return view('admin.pages.full_website.index', ['data' => $this->data]);
    }

    public function data()
    {

        $contacts = Website::query()->where('type', WebsiteType::FULL);

        $model = 'full-website';
        return DataTables::of($contacts)
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->editColumn('url', function ($raw) {
                return '<a href="' . $raw->url . '" target="_blank">' . $raw->url . '</a>';
            })
            ->editColumn('country', function ($raw) {
                return __('app.' . $raw->country);
            })
            ->rawColumns(["url"])
            ->make(true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Website::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Website::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
