<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $dosen = Dosen::all();
        $matkul = MataKuliah::with('dosen')->get();
        return view('Matkul.tampilanMapel',[
            'matkul' => $matkul,
            'dosen' => $dosen
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MataKuliah::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'sks' => $request->sks,
            'kode_dosen' => $request->kode_dosen
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::all();
        $matkul = MataKuliah::with('dosen')->findOrFail($id);
        return view('Matkul.editMapel', [
            'matkul' => $matkul,
            'dosen' => $dosen,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $matkul = MataKuliah::findOrFail($id);
        $matkul->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'sks' => $request->sks,
            'kode_dosen' => $request->kode_dosen
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $matkul = MataKuliah::findOrFail($id);
        $matkul->delete();

        return redirect()->back();
    }
}
