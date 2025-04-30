<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
//Route::view('/', 'home')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
