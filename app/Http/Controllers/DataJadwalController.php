<?php

namespace App\Http\Controllers;

use App\Models\DataJadwal;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class DataJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataJadwal:: all();
        return view('dashboard.DataJadwal.index',compact('data')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.DataJadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul_kegiatan'=> 'required',
            'nama_pj'=> 'required',
            'tanggal'=> 'required',
            'waktu' => 'required',
        ]);
        DataJadwal::create($data);
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Tambah Data');
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
    public function edit(string $id)
    {
        $data = DataJadwal::where('id',$id)->first();
        return view('dashboard.DataJadwal.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'judul_kegiatan'=> 'required',
            'nama_pj'=> 'required',
            'tanggal'=> 'required',
            'waktu' => 'required',
        ]);
        DataJadwal::where('id',$id)->update($data);
        return redirect()->route('jadwal')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
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
