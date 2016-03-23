<?php

namespace Innovate\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class InnovateServiceProvider
 * @package App\Providers
 */
class InnovateServiceProvider extends ServiceProvider
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

        $this->registerBinding();
    }

    /**
     *  Bind all innovate module repository to there implementation
     *  which do not have there own service provider
     */
    private function registerBinding()
    {
        /**
         * bind Tax Repository to its Eloquent implementation
         */
        $this->app->bind(
            \Innovate\Repositories\Tax\TaxContract::class,
            \Innovate\Repositories\Tax\EloquentTaxRepository::class
        );
        /**
         * bind BankTransferInfoContract to its elquent implementation EloquentBankTransferInfoRepository
         */
        $this->app->bind(
            \Innovate\Repositories\StaticPages\BankTransferInfo\BankTransferInfoContract::class,
            \Innovate\Repositories\StaticPages\BankTransferInfo\EloquentBankTransferInfoRepository::class
        );

        /**
         *
         */
        $this->app->bind(
            \Innovate\Repositories\StaticPages\CheckOutAgreement\CheckOutAgreementContract::class,
            \Innovate\Repositories\StaticPages\CheckOutAgreement\EloquentCheckOutAgreementRepository::class
        );


    }
}
