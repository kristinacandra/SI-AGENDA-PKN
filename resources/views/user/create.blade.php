@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Tambah Data Pengguna</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Pengguna</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nama</label>
        <input type="string" class="form-control form-control-sm" name="nama" id="nama" placeholder="nama"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">No. HP</label>
        <input type="string" class="form-control form-control-sm" name="nohp" id="nohp" placeholder="nohp"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Role</label>
        <input type="string" class="form-control form-control-sm" name="role" id="role" placeholder="role"
            value="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="string" class="form-control form-control-sm" name="email" id="email" placeholder="email"
            value="">
    </div>
    <a href="{{route('user')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>    
</form>
@endsection

