<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PermissionController extends Controller
{
    protected $data = [
        'page_title' => 'permissions',
        'create' => 'Add New',
        'edit' => '',
        'route' => 'permissions'
    ];

    public function __construct()
    {
        $this->middleware(['auth', 'permission:create_permissions'])->only('create');
        $this->middleware(['auth', 'permission:read_permissions'])->only('index');
        $this->middleware(['auth', 'permission:update_permissions'])->only('edit');
        $this->middleware(['auth', 'permission:delete_permissions'])->only(['destroy', 'bulkDelete']);

    }

    public function index()
    {
        return view('admin.pages.permissions.index', ['data' => $this->data]);

    }

    public function data()
    {
        $model = 'permissions';
        $permissions = Permission::query();
        return DataTables::of($permissions)
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.pages.permissions.create', ['data' => $this->data]);

    }

    public function store(PermissionRequest $request)
    {
        $data = $request->validated();
        Permission::create($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/permissions']);
    }

    public function edit($id)
    {
        $permission = Permission::query()->find($id);
        $this->data['create'] = $permission->name;
        return view('admin.pages.permissions.edit', ['data' => $this->data, 'permission' => $permission]);
    }

    public function update(PermissionRequest $request, $id)
    {
        $permission = Permission::query()->find($id);
        $data = $request->validated();
        $permission->update($data);
        session()->flash('success', 'data updated successfully');
        return final_response('success', 'data updated successfully', ['redirect_url' => 'admin/permissions']);
    }

    public function destroy($id)
    {
        Permission::destroy($id);
        return final_response('success', 'data deleted successfully');

    }

    public function bulkDelete(Request $request)
    {
        Permission::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }
}
