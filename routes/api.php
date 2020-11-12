<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api'], function () {


    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::get('getInfo', 'AuthController@getInfo');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::apiResource('users', 'UserController');
        Route::apiResource('comments', 'CommentController');
    });
});
