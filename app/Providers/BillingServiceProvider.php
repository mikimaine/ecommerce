<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class BillingServiceProvider.
 */
class BillingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(
            \App\Services\Billing\BillingContract::class,
            \App\Services\Billing\StripeGateway::class
        );
    }
}
