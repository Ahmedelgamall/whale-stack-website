<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StaticTextController;
use App\Http\Controllers\Admin\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
            Route::get('/', [HomeController::class, 'home'])->name('dashboard');
            Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

            //admins
            Route::get('admins/data', [AdminController::class, 'data'])->name('admins.data');
            Route::post('admins/bulk-delete', [AdminController::class, 'bulkDelete'])->name('admins.bulkDelete');
            Route::resource('admins', AdminController::class);

            // // customers
            // Route::get('customers/data', [CustomerController::class, 'data'])->name('customers.data');
            // Route::post('customers/bulk-delete', [CustomerController::class, 'bulkDelete'])->name('customers.bulkDelete');
            // Route::resource('customers', CustomerController::class);

            // //About us
            // Route::get('about-us', [AboutUsAdminController::class, 'index'])->name('about.index');
            // Route::post('about-us', [AboutUsAdminController::class, 'storeAbout'])->name('about.store');
            // Route::any('about-us/update/{id}', [AboutUsAdminController::class, 'updateAbout'])->name('about.update');

            // categories
            Route::get('categories/data', [CategoryController::class, 'data'])->name('categories.data');
            Route::post('categories/bulk-delete', [CategoryController::class, 'bulkDelete'])->name('categories.bulkDelete');
            Route::resource('categories', CategoryController::class);

            // faqs
            Route::get('faqs/data', [FaqController::class, 'data'])->name('faqs.data');
            Route::post('faqs/bulk-delete', [FaqController::class, 'bulkDelete'])->name('faqs.bulkDelete');
            Route::resource('faqs', FaqController::class);

            // blogs
            Route::get('blogs/data', [BlogController::class, 'data'])->name('blogs.data');
            Route::post('blogs/bulk-delete', [BlogController::class, 'bulkDelete'])->name('blogs.bulkDelete');
            Route::resource('blogs', BlogController::class);

            // static_texts
            Route::get('static_texts/data', [StaticTextController::class, 'data'])->name('static_texts.data');
            Route::post('static_texts/bulk-delete', [StaticTextController::class, 'bulkDelete'])->name('static_texts.bulkDelete');
            Route::resource('static_texts', StaticTextController::class);

            // seo_settings
            Route::get('seo_settings/data', [SeoSettingController::class, 'data'])->name('seo_settings.data');
            Route::post('seo_settings/bulk-delete', [SeoSettingController::class, 'bulkDelete'])->name('seo_settings.bulkDelete');
            Route::resource('seo_settings', SeoSettingController::class);

            // testimonials
            Route::get('testimonials/data', [TestimonialController::class, 'data'])->name('testimonials.data');
            Route::post('testimonials/bulk-delete', [TestimonialController::class, 'bulkDelete'])->name('testimonials.bulkDelete');
            Route::resource('testimonials', TestimonialController::class);

            // languages
            Route::get('languages/data', [LanguageController::class, 'data'])->name('languages.data');
            Route::post('languages/update-status', [LanguageController::class, 'updateStatus'])->name('languages.updateStatus');
            Route::post('languages/bulk-delete', [LanguageController::class, 'bulkDelete'])->name('languages.bulkDelete');
            Route::resource('languages', LanguageController::class);

            // settings
            Route::get('settings/{section?}', [SettingController::class, 'index'])->name('settings.index');
            Route::put('settings/{id}', [SettingController::class, 'update'])->name('settings.update');
        });

        Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
            Route::get('/login', [AuthController::class, 'login'])->name('login');
            Route::post('/login', [AuthController::class, 'DoLogin'])->name('admin.doLogin');
        });
    }
);
