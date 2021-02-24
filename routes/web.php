<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard.index');
Route::get('/client', function () {
    return view('clients.index');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');


Route::get('/client', 'ClientController@index')->name('client.index');
Route::get('/client_add', 'ClientController@create')->name('client.create');
Route::post('/client', 'ClientController@store')->name('client.store');

Route::resource('commerce','CommerceController');
//Route::post('/circuit', 'ClientController@store')->name('circuit.store');




Route::get('/home', 'HomeController@index')->name('home');
