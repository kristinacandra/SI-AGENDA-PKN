@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Tambah Data Pegawai</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('pegawai.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="string" class="form-control form-control-sm" name="nama" id="nama" placeholder="nama"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="string" class="form-control form-control-sm" name="email" id="email" placeholder="email"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">No.HP</label>
        <input type="string" class="form-control form-control-sm" name="no_hp" id="no_hp" placeholder="no_hp"
            value="">
    </div>
    <a href="{{route('pegawai')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection

