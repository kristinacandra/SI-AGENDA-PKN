@extends('lurah.layout.dash-layout')


@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Laporan Kegiatan</h1>
            <li class="breadcrumb-item active">Laporan Agenda di kelurahan Tunjungsekar</li>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Laporan Kegiatan</li>
            </ol>
        </div>
    </div>
@endsection
{{--
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
                <a href="{{route('laporan.create')}}" class="btn btn-primary">+ Tambah Data</a>
                <a href="{{route('laporan.exportpdf')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
                    Print</a>
            </div>

        </div>
    </div>
@endsection --}}

@section('konten')
    <div class="table table-bordered">
        <table>
            <thead>
                <tr>
                    <th >No</th>
                    <th >Tanggal</th>
                    <th >Nama</th>
                    <th >Agenda Kegiatan</th>
                    <th >Lokasi</th>
                    <th >Deskripsi</th>
                    <th >Catatan</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-1">{{ $i }}</td>
                        <td class="col-2">{{ $item->tanggal }}</td>
                        <td class="col-2">{{ $item->nama}}</td>
                        <td class="col-2">{{ $item->acara }}</td>
                        <td class="col-2">{{ $item->lokasi }}</td>
                        <td class="col-2">{{ $item->deskripsi }}</td>
                        <td class="col-2">
                            <form action="{{ route('laporan.updateCatatan', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <textarea name="catatan" class="form-control">{{ $item->catatan }}</textarea>
                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                            </form>
                        </td>
                        <td class="col-2">
                            <a href="{{ route('report.cetak', $item->id) }}" class="btn btn-warning">Cetak</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
              </tbody>
            </table>
    </div>
@endsection
