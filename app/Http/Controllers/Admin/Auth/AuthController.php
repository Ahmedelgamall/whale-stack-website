<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function doLogin(AdminAuthRequest $request)
    {
        $data = $request->validated();
        $remember = (bool)$request->remember;
        if (auth('admin')->attempt($data, $remember)) {
            session()->flash('success', 'Welcome Back Mr : ' . ucfirst(\auth('admin')->user()->name) . '👋');
            return final_response('success', null, ['redirect_url' => 'admin'], []);
        }
        return final_response('error', null, null, 'data is invalid', 500);
    }

    public function logout()
    {
        session()->flash('success', 'See You Later Mr  : ' . ucfirst(\auth('admin')->user()->name) . '👋');
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
