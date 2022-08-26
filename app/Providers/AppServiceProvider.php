<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Schema;
use DB;
use Auth;


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
       

            view()->composer('*', function ($view) 
    {
        if(Auth::check())
{
   $company=DB::table('usermanagements')->where('name',Auth::user()->role)->get();    
}    
else
{
    $company="-";
}  

        //...with this variable
        $view->with('key', $company );    
    });  
    }
}



