<?php

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

$data_berita = [
    [
        "judul" => "Kisah Kancil dan Buaya",
        "slug" => "kisah-kancil-dan-buaya",
        "penulis" => "Elvanda",
        "konten" => "Kisah Kancil dan Buaya merupakan salah satu cerita yang cukup dikenal di Indonesia. Cerita ini menggambarkan seekor kancil yang memiliki kecerdikan dalam menghadapi berbagai masalah. Meskipun memiliki tubuh yang kecil, Kancil mampu menggunakan akalnya untuk menghadapi Buaya. Dari cerita tersebut, kita dapat belajar bahwa kecerdikan dan kemampuan berpikir dapat membantu seseorang dalam menyelesaikan masalah.",
    ],
    [
        "judul" => "Indonesia Juara ASEAN",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Amin",
        "konten" => "Indonesia merupakan salah satu negara yang memiliki banyak prestasi di kawasan ASEAN. Berbagai prestasi dapat diraih melalui bidang pendidikan, olahraga, teknologi, maupun bidang lainnya. Prestasi tersebut menunjukkan bahwa generasi muda Indonesia memiliki kemampuan dan potensi yang dapat terus dikembangkan untuk membawa nama Indonesia menjadi lebih baik.",
    ],
];

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Contact",
    ]);
});

Route::get('/berita', function () use ($data_berita) {
    return view('berita', [
        "title" => "Berita",
        "beritas" => $data_berita
    ]);
});

// Routing untuk menampilkan 1 berita
Route::get('/berita/{slug}', function ($slug) use ($data_berita) {

    $berita = collect($data_berita)->firstWhere('slug', $slug);

    if (!$berita) {
        abort(404);
    }

    return view('beritatunggal', [
        "title" => "Berita",
        "berita" => $berita
    ]);
}); 
