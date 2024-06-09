<?php

namespace App\Providers;

use App\Models\Students;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('LoginTitle','ADMIN LOGIN');
        View::share('RegisterTitle', 'ADMIN REGISTER');
        View::share('TabTitle', 'STUDENT MANAGEMENT');

        View::composer('students.index', function($view){
            $view->with('students', Students::get());
        });
    }
}
