<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ArtikelPages@PageList');
Route::get('/ArtikelPages/ListAjax', 'App\Http\Controllers\ArtikelPages@ListAjax')->name('ArtikelPages.ListAjax');

Route::get('/ArtikelPages/PageDetail', 'App\Http\Controllers\ArtikelPages@PageDetail');

Route::get('/ArtikelPages/PageTambah', 'App\Http\Controllers\ArtikelPages@PageTambah');
Route::post('/ArtikelPages/Tambah', 'App\Http\Controllers\ArtikelPages@Tambah');

Route::get('/ArtikelPages/PageEdit', 'App\Http\Controllers\ArtikelPages@PageEdit');
Route::get('/ArtikelPages/Update', 'App\Http\Controllers\ArtikelPages@Update');

Route::get('/ArtikelPages/Hapus', 'App\Http\Controllers\ArtikelPages@Hapus');
