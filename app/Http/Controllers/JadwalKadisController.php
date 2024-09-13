<?php

namespace App\Http\Controllers;

use App\Models\JadwalKadis;
use Illuminate\Http\Request;

class JadwalKadisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalkadiss = JadwalKadis::all();
        return view('jadwalkadis.index', compact('jadwalkadiss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwalkadis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'lokasi' => 'required',
        ]);

        JadwalKadis::create($request->all());
        return redirect()->route('jadwalkadis.index')->with('success', 'Jadwal Kepala Dinas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwalkadis = JadwalKadis::find($id);
        return view('jadwalkadis.show', compact('jadwalkadis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwalkadis = JadwalKadis::find($id);
        return view('jadwalkadis.edit', compact('jadwalkadis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'keterangan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'lokasi' => 'required',
        ]);
        $jadwalkadis = JadwalKadis::find($id);
        $jadwalkadis->update($request->all());

        return redirect()->route('jadwalkadis.index')->with('success', 'Jadwal Kepala Dinas berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwalkadis = JadwalKadis::find($id);
        $jadwalkadis->delete();

        return redirect()->route('jadwalkadis.index')->with('success', 'Jadwal Kepala Dinas berhasil dihapus');
    }
}
