<?php

namespace App\Http\Controllers\Web;

use App\Enums\PageType;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Faq;
use App\Models\Project;
use App\Models\Service;
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
        $brands = Brand::orderBy('created_at', 'asc')->limit(18)->get();
        $testimonials = Testimonial::orderBy('created_at', 'asc')->get();
        $faqs = Faq::orderBy('created_at', 'asc')->limit(12)->get();
        $icons = [
            'fa-chart-simple icon-sm text-primary',
            'fa-file icon-sm text-success',
            'fa-user-group icon-sm text-danger',
            'fa-spell-check icon-sm text-dark',
            'fa-cog icon-sm text-warning',
        ];
        $services = Service::orderBy('created_at','asc')->limit(5)->get()->map(function ($service, $index) use ($icons) {
            $service->icon = $icons[$index % count($icons)];
            return $service;
        });
        $blogs = Blog::with('category')->latest()->limit(3)->get();
        $projects = Project::with('category')->latest()->limit(9)->get();
        return view('website.pages.home', compact('rows', 'brands', 'testimonials', 'faqs', 'blogs', 'services', 'projects'));
    }
}
