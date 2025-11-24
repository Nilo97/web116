<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');;

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
})->name('users');

Route::get('/users2', function () {
    return view('users2');
})->name('users2');

Route::get('/configuracao', function () {
    return view('configuracao');
})->name('configuracao');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/perguntas', function () {
    return view('perguntas');
})->name('perguntas');

Route::get('/suporte', function () {
    return view('suporte');
})->name('suporte');



