@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Data Guru</h1>
        <table class="table border border-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Guru</th>
                    <th>NIP</th>
                    <th>Bidang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gurus as $guru)
                    <tr>
                        <td>{{ $guru->id_guru }}</td>
                        <td>{{ $guru->nama_guru }}</td>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->bidang }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection