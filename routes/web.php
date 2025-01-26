<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\BrandController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProjectController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home page */

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'getHome'])->name('web.home');

        /* Blogs Page */
        Route::get('/blogs', [BlogController::class, 'getBlogs'])->name('web.blogs');
        Route::get('/blog/{slug}', [BlogController::class, 'showBlog'])->name('web.show.blog');

        /* Projects Page */
        Route::get('/projects', [ProjectController::class, 'getProjects'])->name('web.projects');
        
        Route::get('/brands', [BrandController::class, 'getBrands'])->name('web.brands');
        /* About Page */
        Route::get('/about-us', [AboutController::class, 'getAbout'])->name('web.about');

        /* Contacts Page */
        Route::get('/contact-us', [ContactController::class, 'getContactUs'])->name('web.contact-us');

        Route::post('/contact-submit', [ContactController::class, 'submitContact'])->name('contact.submit');
    }
);

