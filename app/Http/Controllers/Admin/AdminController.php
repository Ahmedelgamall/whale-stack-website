<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\Role;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'Admins',
        'create' => 'Add New',
        'route' => 'admins'
    ];


    public function index()
    {
        return view('admin.pages.admins.index', ['data' => $this->data]);
    }

    public function data()
    {

        $admins = Admin::get(); //whereDoesntHaveRoles(['Admin'])->

        $model = 'admins';
        return DataTables::of($admins)
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

    public function create()
    {
        return view('admin.pages.admins.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        try {
            $data = collect($request->validated())->except(['role'])->toArray();
            $data['password'] = bcrypt($request->password);
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'admins');
            }
            $admin = Admin::create($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/admins']);
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
        $admin = Admin::query()->find($id);
        return view('admin.pages.admins.edit', ['data' => $this->data, 'admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {

        try {
            $data = $request->validated();
            $admin = Admin::query()->find($id);
            if ($request->password) {
                $data['password'] =  bcrypt($request->password);
            } else {
                unset($data['password']);
            }
            if ($request->hasFile('photo')) {
                $data['photo'] = $this->upload($request->file('photo'), 'admins', $admin->photo);
            }
            $admin->update($data);
        } catch (\Exception $exception) {
            return final_response('error', $exception->getMessage(), '', $exception->getMessage(), 500);
        }

        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/admins']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Admin::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
