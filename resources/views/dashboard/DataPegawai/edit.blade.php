@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Edit Data Pegawai</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('pegawai.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="string" class="form-control form-control-sm" name="nama" id="nama" placeholder=""
            value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="string" class="form-control form-control-sm" name="email" id="" placeholder=""
            value="{{$data->email}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">No.Hp</label>
        <input type="string" class="form-control form-control-sm" name="nohp" id="nohp" placeholder=""
            value="{{$data->nohp}}">
    </div>
    <a href="{{route('pegawai')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

