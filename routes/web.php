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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard.index');


Route::get('/client', function () {
    return view('clients.index');
});

Route::get('/client', 'ClientController@index')->name('client.index');
Route::get('/client_add', 'ClientController@create')->name('client.create');
Route::post('/client', 'ClientController@store')->name('client.store');
