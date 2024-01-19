<?php

namespace App\Providers;

use App\Models\Profile;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.frontend_layouts.index', function($view){
            $all_profile_club_information = Profile::first();
            $view->with([
                'all_profile_club_information' => $all_profile_club_information
            ]);
        });
        Paginator::useBootstrap();
    }
}
