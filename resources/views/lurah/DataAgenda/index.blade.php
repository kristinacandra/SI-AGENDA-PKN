@extends('lurah.layout.dash-layout')


@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Agenda Eksternal</h1>
            <li class="breadcrumb-item active">Agenda diluar kelurahan Tunjungsekar</li>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Agenda Eksternal</li>
            </ol>
        </div>
    </div>
@endsection

{{-- @section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
                <a href="{{route('agenda.create')}}" class="btn btn-primary">+ Tambah Data</a>
                <a href="{{route('agenda.exportpdf')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
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
                    <th >Agenda Kegiatan</th>
                    <th >Nomor Surat</th>
                    <th >Waktu</th>
                    <th >Nama</th>
                    <th >Lokasi</th>
                    <th >Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-1">{{ $i }}</td>
                        <td class="col-2">{{ $item->agenda_kegiatan }}</td>
                        <td class="col-2">{{ $item->no_surat }}</td>
                        <td class="col-2">{{ $item->waktu_pelaksanaan }}</td>
                        <td class="col-2">{{ $item->nama }}</td>
                        <td class="col-2">{{ $item->lokasi }}</td>
                        <td class="col-2">{{ $item->status }}</td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
              </tbody>
            </table>
    </div>
@endsection
