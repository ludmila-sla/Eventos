<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;


Auth::routes();
Route::get('/', 'EventController@index');
Route::get('/events/create', 'EventController@create')->middleware('auth');
Route::get('/events/{id}', 'EventController@show');
Route::post('/events', 'EventController@store');
Route::get('/auth/login', 'LoginController@login');
Route::get('/auth/register', 'LoginController@register');
Route::post('/auth', 'LoginController@store');
Route::get('/dashboard', 'EventController@dashboard')->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
   
});










