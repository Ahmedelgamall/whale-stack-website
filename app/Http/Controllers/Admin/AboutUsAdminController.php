<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\AboutUs;
use App\Traits\Files;

class AboutUsAdminController extends Controller
{
    use Files;

    public $title = 'About Us';


    public function __construct()
    {
        $this->middleware(['auth', 'permission:create_about-us'])->only('create');
        $this->middleware(['auth', 'permission:read_about-us'])->only('index');
        $this->middleware(['auth', 'permission:update_about-us'])->only('edit');
        $this->middleware(['auth', 'permission:delete_about-us'])->only(['delete', 'bulkDelete']);
    }


    public function index()
    {

        $raw = AboutUs::first();
        if (isset($raw)) {
            return view('admin.pages.about_us.edit', ['title' => $this->title, 'raw' => $raw]);
        } else {
            return view('admin.pages.about_us.create', ['title' => $this->title]);
        }


    }


    public function storeAbout(AboutRequest $request, $id = null)
    {

        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $photo = $this->upload($request->file('photo'), 'about');
            $data['photo'] = $photo;
        }
        AboutUs::create($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/about-us']);

    }

    public function updateAbout(AboutRequest $request, $id)
    {
        $about = AboutUs::find($id);
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $photo = $this->upload($request->file('photo'), 'about', $about->photo);
            $data['photo'] = $photo;
        }
        $about->update($data);
        session()->flash('success', 'data stored successfully');
        return final_response('success', 'data stored successfully', ['redirect_url' => 'admin/about-us']);

    }
}
