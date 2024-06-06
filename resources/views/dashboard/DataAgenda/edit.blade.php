@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Edit Data Agenda Eksternal</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Agenda Eksternal</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('agenda.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Agenda Kegiatan</label>
        <input type="string" class="form-control form-control-sm" name="agenda_kegiatan" id="agenda_kegiatan" placeholder=""
            value="{{$data->agenda_kegiatan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nomor Surat</label>
        <input type="string" class="form-control form-control-sm" name="no_surat" id="no_surat" placeholder=""
            value="{{$data->no_surat}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal Pelaksanaan</label>
        <input type="date" class="form-control form-control-sm" name="tgl_pelaksanaan" id="tgl_pelaksanaan" placeholder=""
            value="{{$data->tgl_pelaksanaan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Waktu Pelaksanaan</label>
        <input type="time" class="form-control form-control-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" placeholder=""
            value="{{$data->waktu_pelaksanaan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <select name="status" class="form-control">
            <option value="Belum Terlaksana" {{ $data->status == 'Belum Terlaksana' ? 'selected' : '' }}>Belum Terlaksana</option>
            <option value="Sedang Terlaksana" {{ $data->status == 'Sedang Terlaksana' ? 'selected' : '' }}>Sedang Terlaksana</option>
            <option value="Sudah Terlaksana" {{ $data->status == 'Sudah Terlaksana' ? 'selected' : '' }}>Sudah Terlaksana</option>
        </select>
    </div>
    <a href="{{route('agenda')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

