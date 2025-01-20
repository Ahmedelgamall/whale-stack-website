<?php

namespace App\Http\Controllers\Web;

use App\Enums\PageType;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Faq;
use App\Models\StaticText;
use App\Models\Testimonial;
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
        $brands = Brand::all();
        $testimonials = Testimonial::all();
        $faqs = Faq::all();
        $blogs = Blog::with('category')->latest()->limit(3)->get();
        return view('website.pages.home', compact('rows', 'brands', 'testimonials', 'faqs', 'blogs'));
    }
}
