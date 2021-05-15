<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');
        view()->composer('*',function($view){
            $view->with([
                'logo_img' => url('/').env('ASSET_URL').'/logo.png',
                'web_source' => url('/').env('ASSET_URL').'/web',
                'admin_source' => url('/').env('ASSET_URL').'/dashboard',
            ]);
        });
    }
}
