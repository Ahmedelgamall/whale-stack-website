<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Services',
        'create' => 'Add New',
        'edit' => 'Edit Services',
        'route' => 'services'
    ];


    public function index()
    {
        return view('admin.pages.services.index', ['data' => $this->data]);
    }

    public function data()
    {

        $services = Service::query();

        $model = 'services';
        return DataTables::of($services)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
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
        return view('admin.pages.services.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'services');
                $data['image'] = $image;
            }

            $service = Service::create($data);

            // Update the slug by concatenating the ID
            $slug = Str::slug($data['en']['title']) . '-' . $service->id;
            $service->update(['slug' => $slug]);

        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/services']);
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
        $row = Service::query()->find($id);
        return view('admin.pages.services.edit', ['data' => $this->data, 'row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        try {
            $service = Service::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'services', $service->image);
                $data['image'] = $image;
            }

            $data['slug'] = Str::slug($data['en']['title']) . '-' . $service->id;
            $service->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/services']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Service::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
