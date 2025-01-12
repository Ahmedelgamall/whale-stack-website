<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'FAQs',
        'create' => 'Add New',
        'edit' => 'Edit FAQ',
        'route' => 'faqs'
    ];


    public function index()
    {
        return view('admin.pages.faqs.index', ['data' => $this->data]);
    }

    public function data()
    {

        $faqs = Faq::get();

        $model = 'faqs';
        return DataTables::of($faqs)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->editColumn('answer', function ($raw) {
                return strip_tags($raw->answer);
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->rawColumns([])
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.faqs.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqRequest $request)
    {
        try {
            $data = $request->validated();
            Faq::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/faqs']);
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
        $faq = Faq::query()->find($id);
        return view('admin.pages.faqs.edit', ['data' => $this->data, 'category' => $faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqRequest $request, $id)
    {
        try {
            $faq = Faq::query()->find($id);
            $data = $request->validated();
            $faq->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/faqs']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Faq::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
