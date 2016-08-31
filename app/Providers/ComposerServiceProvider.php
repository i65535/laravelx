<?php

namespace App\Providers;


use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // 使用类来指定视图组件
        View::composer('shared.nav', 'App\Http\ViewComposers\ProfileComposer');

        // 使用闭包来指定视图组件
        view()->composer('shared.footer', function ($view) {
            $view->with('hello', '--------------------------hello footer-------------------------------');
        });
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
