<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Application\Services\Interfaces\ProductServiceInterface',
            'Application\Services\ProductService'
        );

        $this->app->bind(
            'Domain\Interfaces\Repository\ProductRepositoryInterface',
            'Infrastructure\Persistence\Eloquent\Repositories\ProductRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
