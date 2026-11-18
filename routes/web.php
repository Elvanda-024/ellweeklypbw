<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "elvanda sri utami",
        "nim" => "1324252620024",
        "prodi" => "Teknologi informasi",
        "gambar" => "elv.jpeg",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact",
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/datamahasiswa', [MahasiswaController::class, 'index'])->name('datamahasiswa');
