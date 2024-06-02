<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotController;

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
    Route::post('/upload', 'PhotController@upload')->name('upload');
    });
