<?php

use App\Http\Controllers\CardCategoryController;
use App\Http\Controllers\CardController;
use App\Http\Middleware\LoggerMiddleWare;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'cards'], function(){
    Route::get('/index', [CardController::class, 'index'])->name('cards.index');
});

// Route::get('/categories', [CardCategoryController::class, "index"]);

Route::resource('cards', CardController::class)->middleware(LoggerMiddleWare::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', function () { return 'À propos'; }); // Exemple temporaire