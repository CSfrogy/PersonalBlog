<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('posts', [PostController::class,'index'])->name('posts');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');
