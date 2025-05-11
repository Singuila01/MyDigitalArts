<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CardCategoryController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\LoggerMiddleWare;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::group(['prefix'=>'cards'], function(){
//     Route::get('/index', [CardController::class, 'index'])->name('cards.index');
// });

// Route::get('/categories', [CardCategoryController::class, 'index']);

// Route::get('/categories', [CardCategoryController::class, "index"]);
// Route::get('/categories', function () {
//     return view('categories.index');
// });

Route::get('/cards', function () {
    return view('cards.index');
});
// Route::get('/cards', [CardController::class, "index"]);

Route::resource('cards', CardController::class)->middleware(LoggerMiddleWare::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', function () {
    return view('auth.user');
});


// PARTIE POUR L'ADMINISTATEUR
Route::get('/admin', function () {
    return view('auth.admin.login');
})->name('admin');
Route::get('/admin/register', function () {
    return view('auth.admin.register');
})->name('admin.register');

Route::get('/admin/dashboard', function () {
    return view('admin.index');
});

// Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
// Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

Route::get('/admin/dashboard', [UserController::class, 'countUsers']);
Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create'); 
Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

// Route::get('/admin/dashboard', [CardCategoryController::class, 'countCategory']);
Route::get('/admin/category', [CardCategoryController::class, 'index'])->name('admin.category.index');
Route::get('/admin/category/create', [CardCategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category', [CardCategoryController::class, 'store'])->name('admin.category.store');
Route::delete('/admin/category/{id}', [CardCategoryController::class, 'destroy'])->name('admin.category.destroy');
Route::get('/admin/category/{id}/edit', [CardCategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/{id}', [CardCategoryController::class, 'update'])->name('admin.category.update');