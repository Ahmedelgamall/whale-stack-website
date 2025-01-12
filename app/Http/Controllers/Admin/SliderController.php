<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Sliders',
        'create' => 'Add New',
        'route' => 'sliders'
    ];


    public function __construct()
    {
        $this->middleware(['auth', 'permission:create_sliders'])->only('create');
        $this->middleware(['auth', 'permission:read_sliders'])->only('index');
        $this->middleware(['auth', 'permission:update_sliders'])->only('edit');
        $this->middleware(['auth', 'permission:delete_sliders'])->only(['destroy', 'bulkDelete']);

    }


    public function index()
    {
        return view('admin.pages.sliders.index', ['data' => $this->data]);
    }

    public function data()
    {
        $sliders = Slider::query()->get();
        $model = 'sliders';
        return DataTables::of($sliders)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->addColumn('photo', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->photo) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sliders.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $photo = $this->upload($request->file('photo'), 'sliders');
            $data['photo'] = $photo;
        }
        Slider::create($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/sliders']);

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
        $slider = Slider::query()->find($id);
        return view('admin.pages.sliders.edit', ['data' => $this->data, 'slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $data = $request->validated();
        $slider = Slider::query()->find($id);
        if ($request->hasFile('photo')) {
            $photo = $this->upload($request->file('photo'), 'sliders', $slider->photo);
            $data['photo'] = $photo;
        }
        $slider->update($data);
        session()->flash('success', 'data updated successfully');
        return final_response('success', 'data updated successfully', ['redirect_url' => 'admin/sliders']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Slider::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
