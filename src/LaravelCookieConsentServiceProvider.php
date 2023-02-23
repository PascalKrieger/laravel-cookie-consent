<?php

namespace Pascalkrieger\LaravelCookieConsent;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

class LaravelCookieConsentServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-cookie-consent.php', 'laravel-cookie-consent');
    }

    public function boot(): void
    {
        AboutCommand::add('Laravel Cookie Consent', fn () => ['Version' => 'dev-master']);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-cookie-consent');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-cookie-consent');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../config/laravel-cookie-consent.php' => config_path('laravel-cookie-consent.php'),
        ], 'laravel-cookie-consent-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-cookie-consent'),
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-cookie-consent'),
        ], 'laravel-cookie-consent-views');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-cookie-consent'),
        ], 'laravel-cookie-consent-lang');
    }

}
