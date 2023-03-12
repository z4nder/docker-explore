<?php

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

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show']);
Route::get('/posts/{post}/comments', [\App\Http\Controllers\CommentController::class, 'index']);
Route::get('/posts/{post}/comments/{comment}', [\App\Http\Controllers\CommentController::class, 'show']);
