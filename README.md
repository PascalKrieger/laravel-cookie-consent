

# Laravel Cookie Consent

This package currently work in progress.

The package provides the views and controllers necessary to display a fixed message at the bottom of the window, prompting the user to accept the cookies or configure them.

If the user chooses to configure the cookies a modal will be displayed listing all types of cookies the website uses, allowing to disable or enable certain types. Once his preferences are saved a button is displayed enabling the user to configure his preferences.

The views are styled with tailwindcss and alpinejs leverages the rest, so these are prerequisite in your Laravel project.

Once the preferences are saved, you can check in your views if a certain type of cookies is allowed like this: 

`
    @if(session('cookie-config.Functional')) 
        //Your code, maybe a Google Analytics tag 
    @endif
`

Where 'Functional' is the type you specify in the config file.

Include the blade component at the bottom of your page or layout: 

`
    <x-laravel-cookie-consent::index />
`

You should publish and edit the config file, run this command:

`
    php artisan vendor:publish --provider="Pascalkrieger\LaravelCookieConsent\LaravelCookieConsentServiceProvider" --tag="laravel-cookie-consent-config"
`

The code is pretty basic and self explanatory. As stated before this is work in progress, in use right now in some of my other projects. You´re welcome to use it as you wish. 

