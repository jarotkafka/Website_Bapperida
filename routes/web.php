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

Route::get('/permohonan-keberatan', function () {
    return view('permohonan-keberatan');
})->name('permohonan-keberatan');

Route::get('/permohonan-informasi', function () {
    return view('permohonan-informasi');
})->name('permohonan-informasi');

Route::get('/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/galeri-kegiatan', function () {
    return view('galeri-kegiatan');
})->name('galeri-kegiatan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
