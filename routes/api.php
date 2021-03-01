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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('artikel', 'App\Http\Controllers\ArtikelController@index');
Route::get('/artikel/{id}', 'App\Http\Controllers\ArtikelController@show');

Route::post('artikel','App\Http\Controllers\ArtikelController@create');
Route::post('/artikel/{id}','App\Http\Controllers\ArtikelController@update');

Route::delete('/artikel/{id}','App\Http\Controllers\ArtikelController@destroy');
