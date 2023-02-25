<?php

namespace Pascalkrieger\LaravelCookieConsent\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class CookieController extends BaseController
{

    /**
     * Save cookie config on session.
     */
    public function __invoke(Request $request): Response
    {
        $allowed_cookies = config('laravel-cookie-consent.cookies');
        $validation_rules = [];
        foreach($allowed_cookies as $cookie) {
            $validation_rules[$cookie['type']] = 'required|boolean';
        }

        $valid_data = $request->validate($validation_rules);
        
        $request->session()->put('cookie-config', $request->all());

        return response($request->all())->cookie(config('laravel-cookie-consent.cookie_name'), true, config('laravel-cookie-consent.life_time'));

    }
}
