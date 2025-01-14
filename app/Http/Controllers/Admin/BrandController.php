<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Brands',
        'create' => 'Add New',
        'edit' => 'Edit Brands',
        'route' => 'brands'
    ];


    public function index()
    {
        return view('admin.pages.brands.index', ['data' => $this->data]);
    }

    public function data()
    {

        $brands = Brand::query();

        $model = 'brands';
        return DataTables::of($brands)
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
        return view('admin.pages.brands.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'brands');
                $data['image'] = $image;
            }

            Brand::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/brands']);
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
        $row = Brand::query()->find($id);
        return view('admin.pages.brands.edit', ['data' => $this->data, 'row' => $row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        try {
            $brand = Brand::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('image')) {
                $image = $this->upload($request->file('image'), 'brands', $brand->image);
                $data['image'] = $image;
            }

            $brand->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/brands']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Brand::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
