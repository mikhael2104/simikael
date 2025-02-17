@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Data Ajuan PKL</h1>
        <table class="table border border-3">
            <thead>
                <tr>
                    <th>Id Ajuan</th>
                    <th>Id Siswa</th>
                    <th>Id Industri</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ajuan_pkls as $ajuan_pkl)
                    <tr>
                        <td>{{ $ajuan_pkl->id_ajuan }}</td>
                        <td>{{ $ajuan_pkl->id_siswa }}</td>
                        <td>{{ $ajuan_pkl->id_industri }}</td>
                        <td>{{ $ajuan_pkl->tanggal_mulai }}</td>
                        <td>{{ $ajuan_pkl->tanggal_selesai }}</td>
                        <td>{{ $ajuan_pkl->tanggal_pengajuan }}</td>
                        <td>{{ $ajuan_pkl->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection