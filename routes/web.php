<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('top');

Route::controller(UserController::class)->group(function () {
    Route::get('users/mypage', 'mypage')->name('mypage');
    Route::get('users/mypage/edit', 'edit')->name('mypage.edit');
    Route::put('users/mypage', 'update')->name('mypage.update');
    Route::get('users/mypage/password/edit', 'edit_password')->name('mypage.edit_password');
    Route::put('users/mypage/password', 'update_password')->name('mypage.update_password');
    Route::get('users/mypage/favorite', 'favorite')->name('mypage.favorite');
});

Route::controller(CartController::class)->group(function () {
    Route::get('users/carts', 'index')->name('carts.index');
    Route::post('users/carts', 'store')->name('carts.store');
    Route::delete('users/carts', 'destroy')->name('carts.destroy');
});

Route::get('/index', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');

Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');

Route::get('/show/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

Route::get('/edit/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');

Route::put('/update/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');

Route::delete('/destroy/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

Route::post('reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');

Route::get('products/{product}/favorite', [App\Http\Controllers\ProductController::class, 'favorite'])->name('products.favorite');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
