<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 *
 * @package App\Providers
 */
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
        // Passes current controller name into the layout
        app('view')->composer('layouts.frontend.app', function ($view) {
            $action = app('request')->route()->getAction();
            $controller = class_basename($action['controller']);
            [$controller, $action] = explode('@', $controller);
            $view->with(compact('controller', 'action'));
        });
    }
}
