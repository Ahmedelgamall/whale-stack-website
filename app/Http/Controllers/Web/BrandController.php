<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Get Projects Page For End User.
     *
     * @return View
     */
    public function getBrands()
    {
        $brands = Brand::latest()->paginate(9);
        return view('website.pages.brands', compact('brands'));
    }
}
