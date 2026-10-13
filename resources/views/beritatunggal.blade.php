@extends('layouts.main')

@section('content')

<h1>{{ $berita['judul'] }}</h1>

<h5>Penulis: {{ $berita['penulis'] }}</h5>

<p>
    {{ $berita['konten'] }}
</p>

<a href="/berita" class="btn btn-primary">
    Kembali ke Berita
</a>

@endsection
