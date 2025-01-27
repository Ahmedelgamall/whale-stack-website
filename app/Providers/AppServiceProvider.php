<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // dd('boot');
        if (Schema::hasTable('languages')) {
            $activeLanguages = \App\Models\Language::query()->where('status', 'active')->get(['name', 'locale', 'abbr']);
            view()->share('activeLanguages', $activeLanguages);
        }

        Schema::defaultStringLength(191);
    }
}
