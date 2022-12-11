<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//




// ini saya coba push

Route::get('/','HomeController@index');
Route::post('/home/{id}','HomeController@insertComment')->name('insertComment');
Route::get('/home/{id}','HomeController@show');
// Route::resource('home','HomeController');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/berita/list', 'BeritaController@list');
    Route::resource('berita','BeritaController');
    Route::resource('tag','TagController');
    Route::resource('kategori','KategoriController');
    Route::resource('profile','ProfileController');
    
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
