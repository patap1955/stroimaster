<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.master', function ($view) {
            $view->with('pages', Page::menu());
        });
        view()->composer('layouts.master', function ($view) {
            $view->with('services', Service::services());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
