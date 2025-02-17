@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Data Industri</h1>
        <table class="table border border-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Industri</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($industris as $industri)
                    <tr>
                        <td>{{ $industri->id_industri }}</td>
                        <td>{{ $industri->nama_industri }}</td>
                        <td>{{ $industri->alamat }}</td>
                        <td>{{ $industri->kontak }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection