@extends('dashboard.layout.dash-layout')
@section('header')
    <div class="row mb-2 mx-2 justify-content-between">
        <div class="col-sm-5">
            <h1>Edit Data Agenda</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Daftar Agenda</li>
            </ol>
        </div>
    </div>
@endsection

@section('konten')
<form action="{{ route('agenda.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Program</label>
        <input type="string" class="form-control form-control-sm" name="program" id="program" placeholder=""
            value="{{$data->program}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Agenda Kegiatan</label>
        <input type="string" class="form-control form-control-sm" name="agenda_kegiatan" id="agenda_kegiatan" placeholder=""
            value="{{$data->agenda_program}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal Pelaksanaan</label>
        <input date="string" class="form-control form-control-sm" name="tgl_pelaksanaan" id="tgl_pelaksanaan" placeholder=""
            value="{{$data->tgl_pelaksanaan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Waktu Pelaksanaan</label>
        <input time="string" class="form-control form-control-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" placeholder=""
            value="{{$data->waktu_pelaksanaan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Status</label>
        <select name="status" class="form-control">
            <option value="">--- Pilih Status ---</option>
            <option value="Sudah Dilaksankan"></option>
            <option value="Sedang Dilaksankan"></option>
            <option value="Belum Dilaksankan"></option>
            {{-- @foreach ($agenda as $iddata)
                <option value="{{ $iddata->id }}" selected>{{ $iddata->id }}</option>
            @endforeach --}}
        </select>
    </div>
    <a href="{{route('agenda')}}" class="btn btn-secondary">Kembali</a>
    <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>
@endsection

