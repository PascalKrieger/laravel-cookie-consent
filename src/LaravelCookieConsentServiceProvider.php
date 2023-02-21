<?php

namespace Pascalkrieger\LaravelCookieConsent;

use Illuminate\Support\ServiceProvider;

class LaravelCookieConsentServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-cookie-consent.php', 'laravel-cookie-consent');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-cookie-consent');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-cookie-consent');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

}
