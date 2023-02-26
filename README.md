

# Laravel Cookie Consent

This package currently work in progress.

The package provides the views and controllers necessary to display a fixed message at the bottom of the window, prompting the user to accept the cookies or configure them.

If the user chooses to configure the cookies a modal will be displayed listing all types of cookies the website uses, allowing to disable or enable certain types. Once his preferences are saved a button is displayed enabling the user to configure his preferences.

The views are styled with tailwindcss and alpinejs leverages the rest, so these are prerequisite in your Laravel project.

Once the preferences are saved, you can check in your views if a certain type of cookies is allowed like this: 

```blade
@if(session('cookie-config.Functional')) 
    //Your code, maybe a Google Analytics tag 
@endif
```

Where 'Functional' is the type you specify in the config file.

## Installation

This package is intended for use in existing Laravel projects using Tailwindcss and AlpineJS. 

You can install the package via composer:

``` bash
composer require pascalkrieger/laravel-cookie-consent
```

Tailwindcss and AlpineJS should be installed, if not install them following the instructions in their documentation.

For Tailwindcss visit:  https://tailwindcss.com/docs/guides/laravel

For AlpineJS visit: https://alpinejs.dev/essentials/installation

Publish the views running: 

```bash
php artisan vendor:publish --provider="Pascalkrieger\LaravelCookieConsent\LaravelCookieConsentServiceProvider" --tag="laravel-cookie-consent-views"
```

Then run: 

```bash
npm run build
```

## Usage

Include the blade component at the bottom of your page or layout: 

```blade
    <x-laravel-cookie-consent::index /> 
```

You should publish and edit the config file, run this command:

```bash
    php artisan vendor:publish --provider="Pascalkrieger\LaravelCookieConsent\LaravelCookieConsentServiceProvider" --tag="laravel-cookie-consent-config"
```

The code is pretty basic and self explanatory. As stated before this is work in progress, in use right now in some of my other projects. You´re welcome to use it as you wish. 

## Localization

The package currently ships with translations for English and Spanish. you can easily add more languages, first publish the packages lang folder with:

```bash
    php artisan vendor:publish --provider="Pascalkrieger\LaravelCookieConsent\LaravelCookieConsentServiceProvider" --tag="laravel-cookie-consent-lang"
```

Add a folder to `lang/vendor/laravel-cookie-consent` with your language code, for example `lang/vendor/laravel-cookie-consent/de`, and place `text.php` with the following contents within it:

```php

// lang/vendor/laravel-cookie-consent/de/text.php

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel Cookie Consent Language Lines
    |--------------------------------------------------------------------------
    |
    |
    */

    'modal-heading' => 'Cookie-Konfiguration',
    'configure' => 'Konfigurieren',
    'accept' => 'Akzeptieren',
    'back' => 'Zurück',
    'my-cookies-button' => 'Meine Cookies',

    'modal-body' => 'Hier können Sie die von uns verwendeten Cookies überprüfen und konfigurieren, welche Cookies Sie in Ihrem Webbrowser installieren möchten.',

    'message' => 'Wir verwenden unsere eigenen Cookies und Cookies von Drittanbietern beim Surfen auf der Website, um den Zugriff auf die Funktionen der Website zu ermöglichen, Verkehrsstatistiken zu extrahieren und die Benutzererfahrung zu verbessern. Sie können alle Cookies akzeptieren und auswählen, welche Sie aktivieren möchten. Weitere Informationen finden Sie in unserer Cookie-Richtlinie.',

];


```
