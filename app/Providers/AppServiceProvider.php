<?php

namespace App\Providers;

use App\Models\staticPages;
use App\Models\staticPageMeta;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $gd = staticPages::getAllFields('GD');
        $calc_options = staticPageMeta::select('id','page_name','page_slug')->where('page_name','calculator')->get();

        View::share(['gd'=> @$gd, 'calc_options' => @$calc_options]);
        \Debugbar::disable();
    }
}
