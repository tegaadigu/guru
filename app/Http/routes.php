<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get(
    '/',
    [
        'as' => 'index',
        'uses' => 'Index@index',
    ]
);

Route::get(
    '/operator',
    [
        'as' => 'operator',
        'uses' => 'Operator@index',
    ]
);

Route::post(
    '/operator/register',
    [
        'as' => 'operator',
        'uses' => 'Operator@register'
    ]
);


Route::get(
    '/dashboard',
    [
        'as' => 'operator',
        'uses' => 'Operator@dashboard',
    ]
);

Route::post('auth/register', 'Auth\AuthController@postRegister');
