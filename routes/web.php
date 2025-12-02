<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('posts', [PostController::class,'index'])->name('posts');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/posts/create', CreatePost::class)->name('create-post');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/my', [PostController::class, 'myPosts'])->name('posts.my');
});
