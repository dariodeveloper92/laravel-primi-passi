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
    return view('home');
    //return '<h1>Hello World</h1>';
    //rinomino la rotta
})->name('homepage');

// Rotta About
Route::get('/about', function () {
    return view('about');
})->name('noi');

// Rotta Contacts
Route::get('/contacts', function () {
    return view('contacts');
})->name('contatti');
