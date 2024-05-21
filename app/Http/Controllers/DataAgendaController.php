<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAgenda;
use Illuminate\Support\Facades\Session;

class DataAgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataAgenda:: all();
        return view('dashboard.DataAgenda.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.DataAgenda.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Program' => 'required',
            'agenda_kegiatan' => 'required',
            'tgl_pelaksanaan' => 'required',
            'waktu_pelaksanaan' => 'required',
            'status' => 'required',
        ]);
        DataAgenda::create($data);
        return redirect()->route('agenda')->with('success', 'Berhasil Melakukan Tambah Data');
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
        // $data = DataPegawai::where('id',$id)->first();
        // return view('dashboard.DataPegawai.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'no_hp' => 'required',
           
        // ]);
        // DataPegawai::where('id',$id)->update($data);
        // return redirect()->route('pegawai')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DataPegawai::where('id',$id)->delete();
        // return redirect()->route('pegawai')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
