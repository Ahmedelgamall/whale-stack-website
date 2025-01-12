<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * Get About Pages Why Choose Us For End User.
     *
     * @return View
     */
    public function getWhyChooseUs()
    {
        //TODO
        return view('website.pages.about_pages.why_choose_us');
    }

    /**
     * Get About Pages Our Cluture For End User.
     *
     * @return View
     */
    public function getOurCluture()
    {
        //TODO
        return view('website.pages.about_pages.our_cluture');
    }

    /**
     * Get About Pages Leader Ship Team For End User.
     *
     * @return View
     */
    public function getLeaderShipTeam()
    {
        //TODO
        return view('website.pages.about_pages.leader_ship_team');
    }
}
