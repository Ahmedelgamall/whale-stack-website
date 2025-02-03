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
        $brands = Brand::orderBy('created_at', 'asc')->paginate(60);
        return view('website.pages.brands', compact('brands'));
    }
}
