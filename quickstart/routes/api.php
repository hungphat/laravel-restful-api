<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer', 'CustomerController@on_get');
Route::get('/customer/{id}', 'CustomerController@on_get_by_id');
Route::post('/customer/', 'CustomerController@on_post');
Route::put('/customer/{id}', 'CustomerController@on_put');
Route::delete('/customer/{id}', 'CustomerController@on_delete');
