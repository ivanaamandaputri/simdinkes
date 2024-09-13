<?php

namespace App\Http\Controllers;

use App\Models\Bbm;
use App\Models\Pegawai;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class BbmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bbms = Bbm::with(['pegawai', 'kendaraan'])->get();
        return view('bbm.index', compact('bbms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        $kendaraan = Kendaraan::all();
        return view('bbm.create', compact('pegawai', 'kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required|exists:t_pegawai,id',
            'nopol' => 'required|exists:t_kendaraan,id',
            'nama_kendaraan' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        Bbm::create($request->all());

        return redirect()->route('bbm.index')->with('success', 'Data BBM berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bbm $bbm)
    {
        return view('bbm.show', compact('bbm'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bbm $bbm)
    {
        $pegawai = Pegawai::all();
        $kendaraan = Kendaraan::all();
        return view('bbm.edit', compact('bbm', 'pegawai', 'kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bbm $bbm)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required|exists:t_pegawai,id',
            'nopol' => 'required|exists:t_kendaraan,id',
            'nama_kendaraan' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        $bbm->update($request->all());

        return redirect()->route('bbm.index')->with('success', 'Data BBM berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bbm $bbm)
    {
        $bbm->delete();

        return redirect()->route('bbm.index')->with('success', 'Data BBM berhasil dihapus');
    }
}
