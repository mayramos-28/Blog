<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Events\Login;
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
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [AuthController::class, 'show'])->name('get-login');
    Route::post('/login', [AuthController::class, 'login'])->name('post-login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');    
})->middleware('auth:sanctum');

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('show/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('create', [PostController::class, 'create'])->name('posts.create')->middleware('auth:sanctum');
    Route::get('getCreate', [PostController::class, 'getCreate'])->name('posts.getCreate')->middleware('auth:sanctum');
    Route::post('update/{id}', [PostController::class, 'update'])->name('posts.update')->middleware('auth:sanctum');
    Route::get('getUpdate/{id}', [PostController::class, 'getUpdate'])->name('posts.getUpdate')->middleware('auth:sanctum');   
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('posts.delete')->middleware('auth:sanctum');   
});
