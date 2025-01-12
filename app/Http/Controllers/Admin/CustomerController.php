<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\CustomerRequest;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Role;
use App\Models\Transaction;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'العمـــلاء',
        'create' => 'إضـــافـــة جديـــد',
        'edit' => 'تعديل عمــيـــل',
        'route' => 'customers'
    ];


    public function index()
    {
        return view('admin.pages.customers.index', ['data' => $this->data]);
    }

    public function data()
    {

        $customers = Customer::with('transactions')->get(); 

        $model = 'customers';
        return DataTables::of($customers)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->addColumn('total', function ($raw) {
                $credit  = collect($raw->transactions)->where('type','credit')->sum('quantity');
                $debt  = collect($raw->transactions)->where('type','debt')->sum('quantity');
                return abs($credit - $debt);
            })

            // ->addColumn('status', function ($raw) {
            //     $credit  = collect($raw->transactions)->where('type','credit')->sum('quantity');
            //     $debt  = collect($raw->transactions)->where('type','debt')->sum('quantity');
            //     if (($credit - $debt)> 0){
            //         return "<span class='badge bg-success'>مدفوع</span>";
            //     }elseif (($credit - $debt)<0){
            //     return "<span class='badge bg-danger'>متبقي</span>";

            //     }else{
            //         return "<span class='badge bg-primary'>-----</span>";
            //     }
            // })
            ->addColumn('photo', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->photo) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->rawColumns(['photo' => 'photo','total'=>'total','status'=>'status'])
            ->make(true);


    }

    public function create()
    {
        return view('admin.pages.customers.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        try {
            $data = $request->validated();
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'admins');
            }
            $customer = Customer::create($data);
        } catch (\Exception$exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/customers']);
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
        $customer = Customer::query()->find($id);
        return view('admin.pages.customers.edit', ['data' => $this->data, 'customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        try {
            $customer = Customer::query()->find($id);
            $data = $request->validated();
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'customers', $customer->photo);
            }
            $customer->update($data);
        } catch (\Exception$exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/customers']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Customer::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
