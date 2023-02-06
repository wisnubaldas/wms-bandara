<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            \App\Repositories\ImpInvoiceheaderRepository::class, 
            \App\Repositories\ImpInvoiceheaderRepositoryEloquent::class
        );
        $this->app->bind(
            \App\UseCase\TesUseCaseInterface::class, 
            \App\Repositories\TesUseCase::class
        );
        //:end-bindings:
    }
}
