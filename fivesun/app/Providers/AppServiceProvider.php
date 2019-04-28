<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\City;
use View;

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
        \Carbon\Carbon::setLocale('zh');

        $cities = City::all();
        View::share('cities',$cities);
    }
}
