@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Edit Data Laporan Kegiatan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Laporan Kegiatan</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('laporan.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Tanggal</label>
        <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" placeholder=""
            value="{{$data->tanggal}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="string" class="form-control form-control-sm" name="nama" id="nama" placeholder=""
            value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Agenda Kegiatan</label>
        <input type="string" class="form-control form-control-sm" name="acara" id="acara" placeholder=""
            value="{{$data->acara}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Lokasi</label>
        <input type="sting" class="form-control form-control-sm" name="lokasi" id="lokasi" placeholder=""
            value="{{$data->lokasi}}">
    </div>
    <a href="{{route('laporan')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

