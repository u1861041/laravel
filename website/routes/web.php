<?php

use App\Http\Controllers\PersonController;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});



Auth::routes();

Route::get('/update', 'PersonController@update')->name('update');

Route::delete('/destroy', [PersonController::class, 'destroy'])->name('destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/index' , [PersonController::class, 'index'])->name('index');
Route::get('/index/{person}' , [PersonController::class , 'show']);


Route::get('/create_people/', [PersonController::class, 'create'])->name('create');
Route::post('/create_people/', [PersonController::class, 'store'])->name('create1');

Route::get('/people1/', [PersonController::class, 'edit'])->name('people1');
Route::put('/people1/', [PersonController::class, 'update'])->name('people1update');



Route::resource('people', 'PersonController');

