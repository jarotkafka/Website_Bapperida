<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profil');
})->name('profile');

Route::get('/struktur', function () {
    return view('struktur');
})->name('struktur');

Route::get('/pejabat', function () {
    return view('pejabat');
})->name('pejabat');

route::get('/pejabat-page2', function () {
    return view('pejabat-page2');
})->name('pejabat-page2');

Route::get('/pejabat-page3', function () {
    return view('pejabat-page3');
})->name('pejabat-page3');

Route::get('/pejabat-page4', function () {
    return view('pejabat-page4');
})->name('pejabat-page4');
