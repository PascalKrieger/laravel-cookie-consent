

# Laravel Cookie Consent

This package currently work in progress.

The package provides the views and controllers necessary to display a fixed message at the bottom of the window, prompting the user to accept the cookies or configure them.

If the user chooses to configure the cookies a modal will be displayed listing all types of cookies the website uses, allowing to disable or enable certain types. Once his preferences are saved a button is displayed enabling the user to configure his preferences.

You should publish and edit the config file, run this command:

`  
php artisan vendor:publish --provider="Pascalkrieger\LaravelCookieConsent\LaravelCookieConsentServiceProvider" --tag="laravel-cookie-consent-config"  
`

