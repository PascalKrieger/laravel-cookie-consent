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
        $request->session()->put('cookie-config', $request->all());

        return response($request->all())->cookie(
            Str::snake( env('APP_NAME') ) . '_cookie_config',
            true,
            60 * 24 * 7
        );
    }
}
