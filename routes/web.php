<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloHtml', function(){
    return view('helloHtml.home');
});

Route::get('/styleCss', function(){
    return view('styleCss.home');
});

Route::get('/responsive', function(){
    return view('responsive.home');
});

Route::get('/form', function(){
    return view('form.home');
});

Route::get('/linktree', function(){
    return view('linktree.home');
});

Route::get('/ourTestimoni', function(){
    return view('ourTestimoni.home');
});
