<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Rio_Branco');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         Paginator::useBootstrap();
        //Paginator::useTailwind();
    }
}
