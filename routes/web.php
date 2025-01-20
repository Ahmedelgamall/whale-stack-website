<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\InsightController;
use Illuminate\Support\Facades\Redirect;
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

        /* About Pages */
        Route::get('/why-choose-us', [AboutController::class, 'getWhyChooseUs'])->name('web.why-choose-us');
        Route::get('/our-cluture', [AboutController::class, 'getOurCluture'])->name('web.our-cluture');
        Route::get('/leader-ship-team', [AboutController::class, 'getLeaderShipTeam'])->name('web.leader-ship-team');

        /* Careers Page */
        Route::get('/careers', [CareerController::class, 'getCareer'])->name('web.careers');

        /* Insights Page */
        Route::get('/insights', [InsightController::class, 'getInsight'])->name('web.insights');

        /* Careers Page */
        Route::get('/contact-us', [ContactController::class, 'getContactUs'])->name('web.contact-us');

        Route::post('/contact-submit', [ContactController::class, 'submitContact'])->name('contact.submit');
    }
);
