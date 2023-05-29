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

Route::get('/official', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about_us', function () {
    return view('about');
})->name('about');

Route::get('/posts/create', function () {
    return view('create');
})->name('posts.create');

Route::post('/post', function () {
    return redirect()
    ->route('posts.create');
})->name('posts.store');