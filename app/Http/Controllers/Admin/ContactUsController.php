<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    protected $data = [
        'page_title' => 'Contacts',
        'create' => 'Add New',
        'route' => 'contact-us'
    ];


    public function index()
    {
        return view('admin.pages.contacts.index', ['data' => $this->data]);
    }

    public function data()
    {

        $contacts = ContactUs::query();

        $model = 'contact-us';
        return DataTables::of($contacts)
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->editColumn('name', function ($raw) {
                return $raw->first_name . ' ' . $raw->last_name;
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
        ContactUs::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        ContactUs::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
