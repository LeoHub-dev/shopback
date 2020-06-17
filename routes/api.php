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

Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function () {

    Route::apiResource('products', 'ProductController');
    Route::apiResource('carts', 'CartController');
    Route::post('cartproduct', 'CartProductController@store');
    Route::post('cartproduct-delete', 'CartProductController@destroy');

});