<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    protected $data = [
        'page_title' => 'roles',
        'create' => 'Add New',
        'route' => 'roles'
    ];

    public function __construct()
    {
        $this->middleware(['auth', 'permission:create_roles'])->only('create');
        $this->middleware(['auth', 'permission:read_roles'])->only('index');
        $this->middleware(['auth', 'permission:update_roles'])->only('edit');
        $this->middleware(['auth', 'permission:delete_roles'])->only(['destroy', 'bulkDelete']);

    }

    public function index()
    {
        return view('admin.pages.roles.index', ['data' => $this->data]);
    }

    public function data()
    {
        $roles = Role::query();
        $model = 'roles';
        return DataTables::of($roles)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['permissions'] = Permission::query()->get(['id', 'display_name', 'name']);
        return view('admin.pages.roles.create', ['data' => $this->data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        DB::beginTransaction();
        try {
            $role = collect($request->validated())->only('name')->toArray();
            $permissions = collect($request->validated())->only('permissions')->values()->flatten(1);
            $role = Role::create($role);
            $role->attachPermissions($permissions);
        } catch (\Exception $e) {
            return final_response('error', $e->getMessage(), '', $e->getMessage(), 500);
        }
        DB::commit();
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/roles']);
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
        $this->data['permissions'] = Permission::query()->get(['id', 'display_name', 'name']);
        $role = Role::query()->find($id);
        $this->data['create'] = $role->name;
        return view('admin.pages.roles.edit', ['data' => $this->data, 'role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id)
    {

        DB::beginTransaction();
        try {
            $role = Role::query()->find($id);
            $role_name = collect($request->validated())->only('name')->toArray();
            $permissions = collect($request->validated())->only('permissions')->values()->flatten(1);
            $role->update($role_name);
            $role->syncPermissions($permissions);
        } catch (\Exception $e) {
            return final_response('error', $e->getMessage(), '', $e->getMessage(), 500);
        }
        DB::commit();
        session()->flash('success', 'data updated successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/roles']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::destroy($id);
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {
        Role::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
