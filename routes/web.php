<?php

use App\Http\Controllers\AgendaController;
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

Route::get('/dokumen-perencanaan', function () {
    return view('dokumen-perencanaan');
})->name('dokumen-perencanaan');

Route::get('/dokumen-litbang', function () {
    return view('dokumen-litbang');
})->name('dokumen-litbang');

Route::get('/ppid', function () {
    return view('ppid');
})->name('ppid');

Route::get('/agenda/{date}', [AgendaController::class, 'show'])
    ->name('agenda.show');


