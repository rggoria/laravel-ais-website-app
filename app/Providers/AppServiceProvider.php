<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;



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
    public function boot() {
        View::composer('partials.main-navbar', function ($view) {
            $products = Cache::remember('products_list', 60, function () {
                return Product::with('prices')->get();
            });
            $view->with('products', $products);
        });
        View::composer('partials.client-navbar', function ($view) {
            $products = Cache::remember('products_list', 60, function () {
                return Product::with('prices')->get();
            });
            $view->with('products', $products);
        });
    }
}
