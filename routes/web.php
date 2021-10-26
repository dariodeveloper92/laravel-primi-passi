<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rotta Home
Route::get('/homepage', function () {
    $data = [
        'nome_corso' => 'Boolean',
        'lista_studenti' => [
            'Marco Verdi',
            'Carlo Bianchi',
            'Luca Neri'
        ]
    ];
    return view('home', $data);
    //return '<h1>Hello World</h1>';
    //rinomino la rotta
})->name('homepage');

// Rotta About
Route::get('/about', function () {
    $data = [
        'info' => [
            'studente',
            'corso',
            'struttura'
        ]
    ];
    return view('about', $data);
})->name('noi');

// Rotta Contacts
Route::get('/contacts', function () {
    $data = [
        'contatti' => [
            'Telefono',
            'Indirizzo',
            'Maps'
        ]
    ];
    return view('contacts', $data);
})->name('contatti');
