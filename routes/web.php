<?php

use App\Http\Controllers\PostController;
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
    return redirect(route("posts.index"));
});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('show/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('create', [PostController::class, 'create'])->name('posts.create');
    Route::get('getCreate', [PostController::class, 'getCreate'])->name('posts.getCreate');
    Route::post('update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('getUpdate/{id}', [PostController::class, 'getUpdate'])->name('posts.getUpdate');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('posts.delete');
});
