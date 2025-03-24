<?php

use App\Http\Controllers\CardCategoryController;
use App\Http\Controllers\CardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cards', [CardController::class, "index"]);
Route::get('/categories', [CardCategoryController::class, "index"]);
