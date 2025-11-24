<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Rotas protegidas que requerem autenticação
Route::middleware(['api.token'])->group(function () {
    Route::get('/casos', function () {
        return view('casos');
    });

    Route::get('/file-manager', function () {
        return view('file-manager');
    });

    Route::get('/formDenuncia', function () {
        return view('formDenuncia');
    });
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/users2', function () {
    return view('users2');
});



