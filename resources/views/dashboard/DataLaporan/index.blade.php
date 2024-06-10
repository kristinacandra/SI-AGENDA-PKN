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
                <a href="{{route('pegawai.create')}}" class="btn btn-primary">+ Tambah Data</a>
                <a href="{{route('pegawai.exportpdf')}}" rel="noopener" target="_blank" class="btn btn-secondary"><i class="fas fa-print"></i>
                    Print</a>
            </div>

        </div>
    </div>
@endsection

@section('konten')

<div class="mb-3">
    <label for="" class="form-label">Jenis Agenda Kegiatan</label>
    <select name="status" class="form-control">
        <option value="">--- Pilih Status ---</option>
        <option value="Data Agenda Kegiatan Eksternal">Data Agenda Kegiatan Eksternal</option>
        <option value="Data Jadwal Kegiatan">Data Jadwal Kegiatan</option>
    </select>
</div>
    {{-- <div class="table table-bordered">
        <table>
            <thead>
                <tr>
                    <th >No</th>
                    <th >Jenis Kegiatan</th>
                    <th >Laporan</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-1">{{ $i }}</td>
                        <td class="col-2">{{ $item->nama }}</td>
                        <td class="col-2">{{ $item->email }}</td>
                        <td class="col-2">{{ $item->no_hp }}</td>
                        <td class="col-2">
                            <a href="{{route('pegawai.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')"
                              action=" {{ route('pegawai.destroy', $item->id) }}"
                              class="d-inline" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-sm btn-danger" type="submit" name="submit">
                                Del
                              </button>
                          </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
              </tbody>
        </table>
    </div> --}}
@endsection
