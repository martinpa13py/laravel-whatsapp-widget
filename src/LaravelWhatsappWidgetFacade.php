<?php

namespace DGL\LaravelWhatsappWidget;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DGL\LaravelWhatsappWidget\LaravelWhatsappWidget
 */
class LaravelWhatsappWidgetFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-whatsapp-widget';
    }
}
