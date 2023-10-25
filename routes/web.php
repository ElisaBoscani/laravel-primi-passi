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
    $message = "Home page";
    return view('home', compact("message"));
})->name('home');

Route::get('/about', function () {
    $message = "About";
    return view('about', compact("message"));
})->name('about');

Route::get('/contact', function () {
    $message = "Contact";
    return view('contact', compact("message"));
})->name('contact');
