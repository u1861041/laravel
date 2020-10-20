<?php

use App\Http\Controllers\PersonController;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});



Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/people' , [PersonController::class, 'index']);
Route::get('/people/{person}' , [PersonController::class , 'show']);

