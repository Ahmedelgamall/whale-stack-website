<?php

namespace App\Http\Controllers\Web;

use App\Enums\PageType;
use App\Http\Controllers\Controller;
use App\Models\StaticText;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get Home Page For End User.
     *
     * @return View
     */
    public function getHome()
    {
        $rows = StaticText::where('page_id', PageType::HOME)->get();
        return view('website.pages.home', compact('rows'));
    }
}
