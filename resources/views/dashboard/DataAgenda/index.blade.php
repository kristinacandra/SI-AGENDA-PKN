@extends('dashboard.layout.dash-layout')


@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Agenda</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Agenda</li>
            </ol>
        </div>
    </div>
@endsection

@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
                <a href="{{route('agenda.create')}}" class="btn btn-primary">+ Tambah Data</a>
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
                    <th >No</th>
                    <th >Program</th>
                    <th >Agenda Kegiatan</th>
                    <th >Tanggal Pelaksanaan</th>
                    <th >Waktu Pelaksanaan</th>
                    <th >Status</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $item)
                    <tr>
                        <td class="col-1">{{ $i }}</td>
                        <td class="col-2">{{ $item->Program }}</td>
                        <td class="col-2">{{ $item->agenda_kegiatan }}</td>
                        <td class="col-2">{{ $item->tgl_pelaksanaan }}</td>
                        <td class="col-2">{{ $item->waktu_pelaksanaan }}</td>
                        <td class="col-2">{{ $item->status }}</td>
                        <td class="col-2">
                            <a href="{{route('agenda.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" 
                              action=" {{ route('agenda.destroy', $item->id) }}"
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
    </div>
@endsection
