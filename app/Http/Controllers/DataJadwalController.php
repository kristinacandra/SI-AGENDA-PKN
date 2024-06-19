<?php

namespace App\Http\Controllers;
use App\Models\DataJadwal;
use App\Models\DataPegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;


class DataJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data = DataJadwal:: all();
        $pegawai = DataPegawai::all();
        return view('dashboard.DataJadwal.index',compact('data','pegawai')) ;
    }

    public function indexLurah(){
        $data = DataJadwal:: all();
        $pegawai = DataPegawai::all();
        return view('lurah.DataJadwal.index',compact('data','pegawai')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $pegawai = datapegawai::all();
        return view('dashboard.DataJadwal.create', ['pegawai' => $pegawai]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data = [
            'judul_kegiatan' => $request->judul_kegiatan,
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,

        ];
        $pegawai = DataPegawai::all();
        DataJadwal::create($data);
        return redirect()->route('jadwal',compact('pegawai'))->with('success', 'Berhasil Menambahkan Data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $data = DataJadwal::findOrFail($id);
        $pegawai = DataPegawai::all();
        return view('dashboard.DataJadwal.edit', compact('data', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $data = [
            'judul_kegiatan' => $request->judul_kegiatan,
            'id_pegawai' => $request->id_pegawai,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
        ];
        DataJadwal::where('id', $id)->update($data);
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        DataJadwal::where('id',$id)->delete();
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function exportpdf(){
        $data = DataJadwal::all();
        view()->share('data', $data);
        $pdf = FacadePdf::loadview('dashboard.DataJadwal.report');
        return $pdf->stream('DataJadwal.pdf');
    }
}
