<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SlideController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function() {
      
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

    Route::get('slides', [SlideController::class, 'index']);
    Route::get('add-slides', [SlideController::class, 'add']);
    Route::post('insert-slide', [SlideController::class, 'insert']);
    Route::get('edit-slide/{id}', [SlideController::class, 'edit']);
    Route::put('update-slide/{id}', [SlideController::class, 'update']);
    Route::get('delete-slide/{id}', [SlideController::class, 'destroy']);

    Route::get('news', [NewController::class, 'index']);
    Route::get('add-news', [NewController::class, 'add']);
    Route::post('insert-new', [NewController::class, 'insert']);
    Route::get('edit-news/{id}', [NewController::class, 'edit']);
    Route::put('update-news/{id}', [NewController::class, 'update']);
    Route::get('delete-news/{id}', [NewController::class, 'destroy']);
});
