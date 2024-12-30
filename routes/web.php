<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilityController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\sampleRequestController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn() => view('index'));

Route::get('/hello_world', fn() => view('hello_world'));
Route::get('/curriculum', fn() => view('curriculum'));
Route::get('/hello', fn() => view('hello',['name' => 'taiki','course' => 'laravel']));

// 世界の時間
Route::get('/world-time', [UtilityController::class, 'worldTime']);

// おみくじ
Route::get('/omikuji', [GameController::class, 'omikuji']);

// モンティ・ホール問題
Route::get('/monty-hall', [GameController::class, 'montyHall']);

Route::get('/form', [sampleRequestController::class, 'form']);
Route::get('/query-strings', [sampleRequestController::class, 'queryStrings']);
Route::get('/profile/{id}', [sampleRequestController::class, 'profile'])->name("profile"); ;
Route::get('/productsArchive/{category}/{year}', [sampleRequestController::class, 'productsArchive']);
Route::get('route-links', [sampleRequestController::class, 'routeLinks']);