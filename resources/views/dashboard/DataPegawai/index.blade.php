@extends('dashboard.layout.dash-layout')


@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Pegawai</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Pegawai</li>
            </ol>
        </div>
    </div>
@endsection

@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
                <a href="{{route('pegawai.create')}}" class="btn btn-primary">+ Tambah Data</a>
                <a href="\reportdosen" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
                    Print</a>
            </div>

        </div>
    </div>
@endsection

@section('konten')
    <div class="table table-bordered">
        <table>
            <thead>
                <tr>
                    <th >Nama</th>
                    <th >Email</th>
                    <th >No.Hp</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="col-1">Cornelia</td>
                        <td class="col-2">Corneliaboro@gmail.com</td>
                        <td class="col-2">089767114342</td>
                        <td>Edit | Delete</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
