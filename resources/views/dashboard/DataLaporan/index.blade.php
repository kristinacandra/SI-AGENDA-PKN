@extends('dashboard.layout.dash-layout')


@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Laporan</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Laporan</li>
            </ol>
        </div>
    </div>
@endsection

@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
                <a href="" class="btn btn-primary">+ Tambah Data</a>
                <a href="\reportdosen" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
                    Print</a>
            </div>

        </div>
    </div>
@endsection

@section('konten')
<table class="table table-bordered">
    <thead>
        <br/>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">No.Hp</th>
        <th scope="col">Role</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Workshop Penyuluhan “Cerdas Tanpa Stunting”</td>
        <td>Ibu</td>
        <td>20 Februari 2024</td>
        <td>08.40</td>
        <td>Edit | Delete</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Webinar “Menuju KelurahanTerdigital”</td>
        <td>Bapak</td>
        <td>22 Februari 2024</td>
        <td>10.20</td>
        <td>Edit | Delete</td>
      </tr>
        <tr>
            <td>3</td>
            <td>Webinar “Menuju KelurahanTerdigital”</td>
            <td>Ibu</td>
            <td>1 Maret 2024</td>
            <td>9.20</td>
            <td>Edit | Delete</td>
      </tr>
@endsection
