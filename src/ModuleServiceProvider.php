<?php
/*
 *
 *  This is file is part of DGL's tech stack.
 *
 *  @copyright (c) 2024, Deadan Group Limited (DGL).
 *  @link https://www.dgl.co.ke/apps
 *  All rights reserved.
 *
 *  <code>Build something people want!</code>
 */

/**
 * This file is part of the DGL Software Stack
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
        $this->offerPublishing();
        $this->configure();
    }

    /**
     * Merge configuration with the application configuration.
     *
     * @return void
     */
    private function configure(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-whatsapp-widget.php', 'laravel-whatsapp-widget');
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
}
