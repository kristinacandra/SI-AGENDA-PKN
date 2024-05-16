<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datauser;
use Illuminate\Support\Facades\Session;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datauser :: all();
        return view('user.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);
        datauser::create($data);
        return redirect()->route('user')->with('success', 'Berhasil Melakukan Tambah Data');
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
        $data = datauser::where('id',$id)->first();
        return view('user.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nohp' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);
        datauser::where('id',$id)->update($data);
        return redirect()->route('user')->with('success', 'Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datauser::where('id',$id)->delete();
        return redirect()->route('user')->with('success', 'Berhasil Melakukan Delete Data');
    }
}
