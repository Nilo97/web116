<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login'); // se estiver em resources/views/login.blade.php
});

Route::get('/casos', function () {
    return view('casos'); // 
});


Route::get('/file-manager', function () {
    return view('file-manager'); // s
});


Route::get('/formDenuncia', function () {
    return view('formDenuncia'); // s
});



