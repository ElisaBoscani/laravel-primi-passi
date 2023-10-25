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


Route::get('/',  function () {
    $message = "Hello Laravel";
    return view('home', compact("message"));
});
Route::get('/about', function () {
    $message = "Hello About";
    return view('about', compact("message"));
});
/* $url = route('about');
return redirect()->route('about');

return to_route('about'); */
