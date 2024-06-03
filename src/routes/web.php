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

Route::get('/', function () {
    return view('upload');
});

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/create', 'PostController@create')->name('create');
    Route::post('/', 'PostController@upload')->name('upload');
    Route::post('/', 'PostController@store')->name('store');
    Route::get('/show', 'PostController@show')->name('show');
    Route::put('/update', 'PostController@update')->name('update');
    Route::post('/destroy', 'PostController@destroy')->name('destroy');
    Route::get('/like', 'LikesController@show')->name('like.show');
    Route::post('/like', 'LikesController@store')->name('like.store');
    Route::post('/like/destroy', 'LikesController@destroy')->name('like.destroy');
});
