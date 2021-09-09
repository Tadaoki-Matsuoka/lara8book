<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [App\Http\Controllers\BookController::class, 'create'])->name('book.create');
Route::post('/book', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');
Route::get('/book/{id}/show', [App\Http\Controllers\BookController::class, 'show'])->name('book.show');
Route::get('/book/{id}/edit', [App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
Route::put('/book/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('book.update');

Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index'])->name('author.index');
Route::get('/author/create', [App\Http\Controllers\AuthorController::class, 'create'])->name('author.create');
Route::post('/author', [App\Http\Controllers\AuthorController::class, 'store'])->name('author.store');
Route::get('/author/{id}/show', [App\Http\Controllers\AuthorController::class, 'show'])->name('author.show');
Route::get('/author/{id}/edit', [App\Http\Controllers\AuthorController::class, 'edit'])->name('author.edit');
Route::put('/author/{id}', [App\Http\Controllers\AuthorController::class, 'update'])->name('author.update');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/show', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');
Route::get('/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
