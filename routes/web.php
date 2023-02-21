<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Pascalkrieger\LaravelCookieConsent\Http\Controllers\CookieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::post('/save-cookie-config', CookieController::class);
});
