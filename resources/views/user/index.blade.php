@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Data Pengguna</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Pengguna</li>
            </ol>
        </div>
    </div>
@endsection

@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div>
              <a href="{{route('user.create')}}" class="btn btn-primary">+ Tambah Data</a>
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
      <?php $i = 1; ?>
      @foreach ($data as $item)
          <tr>
              <td class="col-1">{{ $i }}</td>
              <td class="col-2">{{ $item->nama }}</td>
              <td class="col-2">{{ $item->nohp }}</td>
              <td class="col-2">{{ $item->role }}</td>
              <td class="col-2">{{ $item->email }}</td>
              <td class="col-2">
                  <a href="{{route('user.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                  <form onsubmit="return confirm('Apakah Anda Ingin Menghapus Data Ini?')" 
                    action=" {{ route('user.destroy', $item->id) }}"
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
@endsection
