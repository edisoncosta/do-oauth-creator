<?php

namespace WebStax;

use Illuminate\Support\ServiceProvider;

class DigitalOceanOauthCreatorServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../config/oauth.php');

        $this->publishes([$source => config_path('oauth.php')]);

        $this->mergeConfigFrom($source, 'oauth');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('WebStax\OauthClient', function ($app) {
            $apiKey = $app->config->get('oauth.clientId');

            return new OauthClient($apiKey);
        });
    }
}
