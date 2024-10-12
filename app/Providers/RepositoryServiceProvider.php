<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstAirlinesRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstAirlinesRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstArrivalRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstArrivalRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstBeacukaiRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstBeacukaiRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstCountryRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstCountryRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstCustomerRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstCustomerRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstDepartureRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstDepartureRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\WarehouseJKT\MstCountryRepository::class, \App\Repositories\Eloquent\WarehouseJKT\MstCountryRepositoryEloquent::class);
        $this->app->bind(\App\Contracts\Repositories\TPS\ThInboundRepository::class, \App\Repositories\Eloquent\TPS\ThInboundRepositoryEloquent::class);
        //:end-bindings:
    }
}
