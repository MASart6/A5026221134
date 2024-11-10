<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk /contoh1 yang merender resources/views/contoh1/home.blade.php
Route::get('/contoh1', function () {
    return view('contoh1.home');
});

// Route untuk /contoh2 yang merender resources/views/contoh2/home.blade.php
Route::get('/contoh2', function () {
    return view('contoh2.home');
});

Route::get('/Week1', function(){
    return view('Week1.home');
});
