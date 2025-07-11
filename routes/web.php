<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::view('/', 'home.index')->name('home');
Route::view('/kategori', 'kategori.index')->name('kategori');

