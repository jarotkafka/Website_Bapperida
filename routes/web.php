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



Route::get('/galeri-kegiatan', function () {
    return view('galeri-kegiatan');
})->name('galeri-kegiatan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
