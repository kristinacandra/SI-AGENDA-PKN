@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Tambah Data Jadwal</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Jadwal</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Judul Kegiatan</label>
        <input type="string" class="form-control form-control-sm" name="judul_kegiatan" id="judul_kegiatan" placeholder="Judul Kegiatan"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Penanggungjawab</label>
        <input type="string" class="form-control form-control-sm" name="nama_pj" id="nama_pj" placeholder="Nama Penanggungjawab"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal</label>
        <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" placeholder="Tanggal"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Waktu</label>
        <input type="time" class="form-control form-control-sm" name="waktu" id="waktu" placeholder="Waktu"
            value="">
    </div>

    <a href="{{route('agenda')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

