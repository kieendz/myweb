<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('mymusic','App\Http\Controllers\MusicController@index');
