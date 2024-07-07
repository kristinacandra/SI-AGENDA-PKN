<?php

namespace App\Http\Controllers;

use App\Models\datalaporan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class DataLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datalaporan :: all();
        return view('dashboard.DataLaporan.index', compact('data'));
    }

    public function indexLurah()
    {
        $data = datalaporan :: all();
        return view('lurah.DataLaporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.DataLaporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'acara' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]);
        datalaporan::create($data);
        return redirect()->route('laporan')->with('success', 'Berhasil Melakukan Tambah Data');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $kegiatan = datalaporan::findOrFail($id);
    //     view()->share('kegiatan', $kegiatan);
    //     $pdf = FacadePdf::loadview('lurah.DataLaporan.report', compact('kegiatan'));
    //     return $pdf->download('kegiatan-'.$kegiatan->id.'.pdf');
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = datalaporan::where('id',$id)->first();
        return view('dashboard.DataLaporan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'tanggal' => 'required',
            'nama' => 'required',
            'acara' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]);
        datalaporan::where('id',$id)->update($data);
        return redirect()->route('laporan')->with('success', 'Berhasil Melakukan Update Data');
    }

    public function updateCatatan(Request $request, string $id){
        $request->validate([
            'catatan' => 'nullable|string',
        ]);

        $kegiatan = datalaporan::findOrFail($id);
        $kegiatan->update([
            'catatan' => $request->catatan,
        ]);
        return redirect()->route('LurahLaporan')->with('success', 'Berhasil Menambahkan Laporan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datalaporan::where('id',$id)->delete();
        return redirect()->route('laporan')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function exportpdf(){
        $data = datalaporan::all();
        view()->share('data', $data);
        $pdf = FacadePdf::loadview('dashboard.DataLaporan.report');
        return $pdf->download('DataLaporan.pdf');
    }

    public function cetak($id){
        $kegiatan = datalaporan::findOrFail($id);
        view()->share('kegiatan', $kegiatan);
        $pdf = FacadePdf::loadview('lurah.DataLaporan.report', compact('kegiatan'));
        return $pdf->download('DataLaporanKegiatan-'.$kegiatan->id.'.pdf');
    }
}
