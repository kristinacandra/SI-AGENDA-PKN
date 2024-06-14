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
        ]);
        datalaporan::create($data);
        return redirect()->route('laporan')->with('success', 'Berhasil Melakukan Tambah Data');
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
        ]);
        datalaporan::where('id',$id)->update($data);
        return redirect()->route('laporan')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datalaporan::where('id',$id)->delete();
        return redirect()->route('lpaoran')->with('success', 'Berhasil Melakukan Delete Data');
    }

    public function exportpdf(){
        $data = datalaporan::all();
        view()->share('data', $data);
        $pdf = FacadePdf::loadview('dashboard.DataLaporan.report');
        return $pdf->stream('DataLaporan.pdf');
    }
}
