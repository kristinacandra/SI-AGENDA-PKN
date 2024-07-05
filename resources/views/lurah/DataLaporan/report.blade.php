@extends('layout/aplikasi')

@section('content')
<div class="container">
    <h1>Detail Kegiatan</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <td>{{ $kegiatan->id }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $kegiatan->tanggal }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td>{{ $kegiatan->nama }}</td>
        </tr>
        <tr>
            <th>Agenda Kegiatan</th>
            <td>{{ $kegiatan->acara }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $kegiatan->lokasi }}</td>
        </tr>
    </table>
    {{-- <button onclick="window.print();" class="btn btn-primary">Cetak</button> --}}
</div>
@endsection
