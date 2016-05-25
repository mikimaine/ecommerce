<?php

namespace Innovate\Providers;

use Innovate\Services\Product\Product;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->registerProduct();
        $this->registerFacade();
        $this->registerBinding();
    }

    public function registerProduct()
    {
        $this->app->bind('product', function ($app) {

            return new Product($app);
        });
    }


    public function registerBinding()
    {

        $this->app->bind(
            \Innovate\Repositories\Product\ProductContract::class,
            \Innovate\Repositories\Product\EloquentProductRepository::class
        );


    }

    public function registerFacade()
    {
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Product', \Innovate\Services\Product\Facades\Product::class);
        });

    }
}
