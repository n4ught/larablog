<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      view()->composer('layouts.nav', function($view){
          //get all parent categories with their subcategories
          $categories = Category::all();
          //attach the categories to the view.     
          $view->with(compact('categories'));
      });
    }
}
