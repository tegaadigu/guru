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
        'uses' => 'Operator@register',
    ]
);


Route::get(
    'operator/dashboard',
    [
        'as' => 'operator',
        'uses' => 'Operator@dashboard',
    ]
);

Route::get(
    'operator/logout',
    [
        'as' => 'operator',
        'uses' => 'Operator@logout',
    ]
);

Route::get(
    'operator/login',
    [
        'as' => 'operator',
        'uses' => 'Operator@login',
    ]
);
Route::post(
    'operator/signin',
    [
        'as' => 'operator',
        'uses' => 'Operator@signIn',
    ]
);

Route::get(
    'operator/vehicle',
    [
        'as' => 'operator',
        'uses' => 'OperatorVehicle@index',
    ]
);

Route::post(
    'signin',
    [
        'as' => 'user',
        'uses' => 'Index@signIn',
    ]
);

Route::get(
    'customer',
    [
        'middleware' => ['dashboardButtons'],
        'as' => 'user',
        'uses' => 'Customer@index'
    ]
);

Route::get(
    'customer/dashboard',
    [
        'middleware' => ['dashboardButtons'],
        'as' => 'user',
        'uses' => 'Customer@index',
    ]
);

Route::get(
    'customer/transit',
    [
        'as' => 'user',
        'uses' => 'Customer@transit',
    ]
);

Route::get(
    'api/googlePlaces',
    [
        'as' => 'api',
        'uses' => 'Api@googlePlaces'
    ]
);

Route::get(
  'customer/transitresult',
    [
        'as' => 'user',
        'uses' => 'Customer@transitResult'
    ]
);

Route::post('auth/register', 'Auth\AuthController@postRegister');
