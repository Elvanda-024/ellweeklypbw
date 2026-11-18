
@extends('layouts.backend')

@section('content')

    <h1>Data Mahasiswa</h1>

    <button type="button" class="btn btn-success mb-3">
        Tambah Data
    </button>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->prodi }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->nohp }}</td>
                <td>{{ $data->foto }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
