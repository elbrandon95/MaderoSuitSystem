<?php

namespace App\Providers;

use App\Models\admin\Menu;
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
        view()->composer('theme.lte.asside', function ($view) {
            $menus = Menu::getMenu(true);
            $view->with('menusComposer',$menus);
        });
        view()->share('theme', 'lte');
    }
}
