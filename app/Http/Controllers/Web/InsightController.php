<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsightController extends Controller
{
    /**
     * Get Insight Page For End User.
     *
     * @return View
     */
    public function getInsight()
    {
        //TODO
        return view('website.pages.insight');
    }
}
