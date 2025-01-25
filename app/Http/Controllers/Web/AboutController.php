<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * Get About Pages Why Choose Us For End User.
     *
     * @return View
     */
    public function getAbout()
    {
        $members = Member::latest()->get();
        $testimonials = Testimonial::latest()->get();
        return view('website.pages.about_us', \compact('members', 'testimonials'));
    }
}
