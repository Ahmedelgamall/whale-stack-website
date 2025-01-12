<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Country;
use App\Models\User;
use App\Traits\Files;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    use Files;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $data = [
        'page_title' => 'Users',
        'create' => 'Add New',
        'route' => 'users'
    ];

    public function __construct()
    {
        $this->middleware(['auth', 'permission:create_users'])->only('create');
        $this->middleware(['auth', 'permission:read_users'])->only('index');
        $this->middleware(['auth', 'permission:update_users'])->only('edit');
        $this->middleware(['auth', 'permission:delete_users'])->only(['destroy', 'bulkDelete']);
    }


    public function index()
    {
        return view('admin.pages.users.index', ['data' => $this->data]);
    }

    public function data()
    {
        $users = User::query()->with('country')->get();
        $model = 'users';

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('check', function ($raw) {
                return view('admin.includes.checkbox', compact('raw'));
            })
            ->addColumn('actions', function ($raw) use ($model) {
                return view('admin.includes.actions', compact('raw', 'model'));
            })
            ->addColumn('status', function ($raw) {

                $checked = $raw->is_active == true ? "checked" : "";

                return '<div class="form-check form-check-success form-switch">
                      <input data-url="' . route('users.updateStatus') . '" data-id="' . $raw->id . '" type="checkbox" ' . $checked . ' name="is_active" value="1" class="form-check-input status">
                   </div>';
            })
            ->addColumn('image', function ($raw) {
                return '<div class="avatar"><img src="' . getFile($raw->image) . '" alt="user-avatar" height="32" width="32"> </div>';
            })
            ->rawColumns(['image' => 'image', 'status' => 'status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        return view('admin.pages.users.create', [
            'data' => $this->data,
            'countries' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['registeration_date'] = now();
        if ($request->has('is_active') && $request->is_active == 'on') {
            $data['is_active'] = true;
        } else {
            $data['is_active'] = false;
        }
        if ($request->hasFile('image')) {
            $image = $this->upload($request->file('image'), 'users');
            $data['image'] = $image;
        }

        User::create($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/users']);
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
        $user = User::query()->find($id);
        $countries = Country::all();

        return view('admin.pages.users.edit', [
            'data' => $this->data,
            'countries' => $countries,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::query()->findOrFail($id);

        $data = $request->validated();
        $data['registeration_date'] = now();

        if ($request->has('is_active') && $request->is_active == 'on') {
            $data['is_active'] = true;
        } else {
            $data['is_active'] = false;
        }

        if ($request->hasFile('image')) {
            $image = $this->upload($request->file('image'), 'users', $user->image);
            $data['image'] = $image;
        }

        $user->update($data);
        session()->flash('success', 'data updated successfully');
        return final_response('success', 'data updated successfully', ['redirect_url' => 'admin/users']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $user->delete();
        return final_response('success', 'data deleted successfully');
    }

    public function bulkDelete(Request $request)
    {


        User::destroy($request->items);
        return final_response('success', 'data deleted successfully');
    }

    public function updateStatus(Request $request)
    {
        $user = User::query()->find($request->id);

        if ($user->is_active == true) {
            $user->update(['is_active' => false]);
        } else {
            $user->update(['is_active' => true]);
        }

        return final_response('success', 'data updated successfully');
    }
}
