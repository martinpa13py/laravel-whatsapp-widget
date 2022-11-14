<?php

/**
 * This file is part of the Deadan Group Software Stack
 *
 * (c) James Ngugi <james@dgl.co.ke>
 *
 * <code> Build something people want </code>
 *
 */

namespace DGL\LaravelWhatsappWidget;

use Illuminate\Support\ServiceProvider;

/**
 * Class ModuleServiceProvider
 *
 * @package DGL\LaravelWhatsappWidget\Providers
 */
class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerResources();
        $this->defineAssetPublishing();
        $this->offerPublishing();
    }

    /**
     * Register the Horizon resources.
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-whatsapp-widget');
    }

    /**
     * Define the asset publishing configuration.
     *
     * @return void
     */
    public function defineAssetPublishing()
    {
        $this->publishes([
            WHATSAPP_WIDGET_PATH.'/public' => public_path('vendor/laravel-whatsapp-widget'),
        ], [
            'laravel-whatsapp-assets',
        ]);
    }

    /**
     * Setup the resource publishing groups for Horizon.
     *
     * @return void
     */
    protected function offerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-whatsapp-widget.php' => config_path('laravel-whatsapp-widget.php'),
            ], 'laravel-whatsapp-widget-config');
        }
    }

    /**
     *
     */
    public function register()
    {
        if (! defined('WHATSAPP_WIDGET_PATH')) {
            define('WHATSAPP_WIDGET_PATH', realpath(__DIR__.'/../'));
        }
    }
}
