<?php

use Illuminate\Support\ServiceProvider;

class PassportSocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Create and configure a Password grant instance.
     *
     * @return PasswordGrant
     */
    private function makeCustomRequestGrant()
    {
        
    }
}