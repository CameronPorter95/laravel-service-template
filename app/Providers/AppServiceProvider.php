<?php

namespace App\Providers;

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
        $this->app->instance('path.storage', env('APP_STORAGE', base_path() . '/storage'));
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // print_r(resource_path('views'));
        // print_r(file_exists(resource_path('views').'/welcome.blade.php') ? "true" : "false");
        // exit;
        // print_r(realpath(base_path('resources/views')));
        // exit;
    }
}
