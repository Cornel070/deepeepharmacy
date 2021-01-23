<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Cart;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('layouts.frontend-master', function ($view) {
            $view->with(['cartCount'=> Cart::getContent()->count(), 'current' => 'current_page_item current-menu-item']);
        });
    }
}
