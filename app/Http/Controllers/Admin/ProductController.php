<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Unit;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'الأصنـــاف',
        'create' => 'إضافة جديد',
        'route' => 'products'
    ];


    public function index()
    {
        return view('admin.pages.products.index', ['data' => $this->data]);
    }

    public function data()
    {

        $products = Product::with('unit')->get(); //whereDoesntHaveRoles(['Admin'])->

        $model = 'products';
        return DataTables::of($products)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->addColumn('photo', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->photo) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->editColumn('details', function ($raw) {
                return strip_tags($raw->details);
            })
            ->editColumn('details',function ($raw){
                if (!isset($raw->details)||$raw->details == ''||$raw->details == null){
                    return 'لايوجد تفاصيل';
                }else{
                    return  $raw->details;
                }
            })
            ->rawColumns(['photo' => 'photo'])
            ->make(true);


    }

    public function create()
    {
        $units = Unit::get();
        return view('admin.pages.products.create', ['data' => $this->data,'units'=>$units]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'admins');
            }
            $product = Product::create($data);
        } catch (\Exception$exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/products']);
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
        $units = Unit::get();
        $product = Product::query()->with('unit')->find($id);
        return view('admin.pages.products.edit', ['data' => $this->data, 'product' => $product,'units'=>$units]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        try {
            $product = Product::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'products', $product->photo);
            }
            $product->update($data);
        } catch (\Exception$exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/products']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Product::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
