<?php

use App\Http\Controllers\CardCategoryController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'cards'], function(){
    Route::get('/index', [CardController::class, 'index'])->name('cards.index');
});

// Route::get('/categories', [CardCategoryController::class, "index"]);


Route::get('/about', function () { return 'À propos'; }); // Exemple temporaire