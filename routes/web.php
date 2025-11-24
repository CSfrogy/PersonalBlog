<?php

use App\Livewire\Posts\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/posts',[Index::class,'render'])->name('posts.index');


Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');
