@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Data Siswa</h1>
        <table class="table border border-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id_siswa }}</td>
                        <td>{{ $siswa->nama_siswa }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>{{ $siswa->jurusan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection