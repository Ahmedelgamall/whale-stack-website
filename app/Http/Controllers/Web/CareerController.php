<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Get Career Page For End User.
     *
     * @return View
     */
    public function getCareer()
    {
        //TODO
        return view('website.pages.career');
    }
}
