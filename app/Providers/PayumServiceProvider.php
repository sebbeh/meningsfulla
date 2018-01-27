<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Payum\Core\PayumBuilder;

class PayumServiceProvider extends ServiceProvider
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
        $this->app->resolving('payum.builder', function(PayumBuilder $payumBuilder)
        {
            $payumBuilder
            // this method registers filesystem storages, consider to change them to something more
            // sophisticated, like eloquent storage
            ->addDefaultStorages()

            ->addGateway('klarna', [
                'factory' => 'klarna_checkout',
                'merchant_id' => 'PK00614_a7fbe3f70e2b',
                'secret' => 'sEn4ax0VuAVIyEfl'
            ]);
        });
    }
}
