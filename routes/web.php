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
    return view('index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/record', 'Auth\RecordController@index')->name('record')->middleware('auth');
Route::post('/record', 'Auth\RecordController@create')->name('record.create')->middleware('auth');
Route::get('/view', 'Auth\ViewController@index')->name('view')->middleware('auth');