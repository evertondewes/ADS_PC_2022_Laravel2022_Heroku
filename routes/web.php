<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('message', 'App\Http\Controllers\MessageController');

Route::get('/message', 'App\Http\Controllers\MessageController@index');
Route::post('/message', 'App\Http\Controllers\MessageController@store');
Route::get('/message/create', );

Route::get('/message/embaralhar/{id}', 'App\Http\Controllers\MessageController@embaralharMensagem');
