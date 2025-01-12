<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LanguageController extends Controller
{
    protected $data = [
        'page_title' => 'languages',
        'create' => 'Add New',
        'route' => 'languages'
    ];

    // public function __construct()
    // {
    //     $this->middleware(['auth', 'permission:create_languages'])->only('create');
    //     $this->middleware(['auth', 'permission:read_languages'])->only('index');
    //     $this->middleware(['auth', 'permission:update_languages'])->only('edit');
    //     $this->middleware(['auth', 'permission:delete_languages'])->only(['destroy', 'bulkDelete']);

    // }


    public function index()
    {
        return view('admin.pages.languages.index', ['data' => $this->data]);
    }

    public function data()
    {
        $languages = Language::query()->get();
        $model = 'languages';
        return DataTables::of($languages)
            ->addColumn('status', function ($raw) {
                $checked = $raw->status == 'active' ? "checked" : "";
                return '<div class="form-check form-check-success form-switch">
                          <input data-url="' . route('languages.updateStatus') . '" data-id="' . $raw->id . '" type="checkbox" ' . $checked . ' name="status" value="1" class="form-check-input status" id="customSwitch4">
                       </div>';
            })
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->addColumn('country', function ($raw) {
                return ' <span class="fi fi-' . $raw->abbr . '"></span>';
            })
            ->rawColumns(['status' => 'status', 'country' => 'country'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.languages.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {
        $data = $request->validated();
        $data['status'] = $request->status ?? "inactive";
        Language::create($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/languages'], null);

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
        $language = Language::find($id);
        return view('admin.pages.languages.edit', ['data' => $this->data, 'language' => $language]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(LanguageRequest $request, $id)
    {
        $lang = Language::find($id);
        $data = $request->validated();
        $data['status'] = $request->status ?? "inactive";
        $lang->update($data);
        session()->flash('success', 'data updated successfully');
        return final_response('success', '', ['redirect_url' => 'admin/languages']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Language::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Language::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }

    public function updateStatus(Request $request)
    {
        $language = Language::query()->find($request->id);
        if ($language->status == 'active') {
            $language->update(['status' => 'inactive']);
        } else {
            $language->update(['status' => 'active']);
        }
        return final_response('success', 'data updated successfully');
    }
}
