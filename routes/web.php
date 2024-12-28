<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello_world', fn() => view('hello_world'));
Route::get('/hello', fn() => view('hello',['name' => 'taiki','course' => 'laravel']));
