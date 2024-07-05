@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Tambah Data Agenda Eksternal</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Agenda Eksternal</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('agenda.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Agenda Kegiatan</label>
        <input type="string" class="form-control form-control-sm" name="agenda_kegiatan" id="agenda_kegiatan" placeholder="Agenda Kegiatan"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nomor Surat</label>
        <input type="string" class="form-control form-control-sm" name="no_surat" id="no_surat" placeholder="Nomor Surat"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Waktu Pelaksanaan</label>
        <input type="datetime-local" class="form-control form-control-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" placeholder=""
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Pegawai</label>
        <input type="string" class="form-control form-control-sm" name="nama" id="nama" placeholder="Nama Pegawai"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Lokasi</label>
        <input type="string" class="form-control form-control-sm" name="lokasi" id="lokasi" placeholder="Lokasi"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <select name="status" class="form-control">
            <option value="">--- Pilih Status ---</option>
            <option value="Belum Dilaksankan">Belum Dilaksankan</option>
            <option value="Sedang Dilaksankan">Sedang Dilaksankan</option>
            <option value="Sudah Dilaksankan">Sudah Dilaksankan</option>
        </select>
    </div>

    <a href="{{route('agenda')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

