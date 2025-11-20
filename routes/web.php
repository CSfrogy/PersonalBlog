<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('posts', function () {
    return view('posts');
})->name('posts');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');