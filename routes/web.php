<?php

use App\Http\Controllers\CardCategoryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'cards'], function(){
    Route::get('/index', [CardController::class, 'index'])->name('cards.index');
});

Route::get('/categories', [CardCategoryController::class, 'index']);

// Route::get('/categories', [CardCategoryController::class, "index"]);
// Route::get('/categories', function () {
//     return view('categories.index');
// });

Route::get('/cards', [CardController::class, "index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/about', function () { return 'À propos'; }); // Exemple temporaire
// Route::get('/about', [UserController::class, 'index'])->name(name: 'auth.about'); // Exemple temporaire
Route::get('/user', function () {
    return view('auth.user');
});