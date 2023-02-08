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
            \App\UseCase\SendingInvoiceUseCaseInterface::class, 
            \App\Repositories\SendingInvoiceUseCase::class
        );
        $this->app->bind(\App\Repositories\EksInvoiceHeaderRepository::class, \App\Repositories\EksInvoiceHeaderRepositoryEloquent::class);
        //:end-bindings:
    }
}
