<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController:: class, 'greet']);

Route::get('/about' , function () {
    return view('about');
});

Route::get('/product' , function () {
    return view('product');
});
 