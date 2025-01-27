<?php

namespace App\Http\Controllers\Admin;

use App\Enums\WebsiteType;
use App\Http\Controllers\Controller;
use App\Models\Website;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class SubscriptionController extends Controller
{
    protected $data = [
        'page_title' => 'Subscription Website',
        'create' => 'Add New',
        'route' => 'subscription-website'
    ];


    public function index()
    {
        return view('admin.pages.subscription_website.index', ['data' => $this->data]);
    }

    public function data()
    {

        $contacts = Website::query()->where('type', WebsiteType::SUBSCRIBTION);

        $model = 'subscription-website';
        return DataTables::of($contacts)
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->rawColumns([])
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
