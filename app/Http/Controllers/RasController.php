<?php

// app/Http/Controllers/RasController.php
namespace App\Http\Controllers;

use App\Models\Ras;
use Illuminate\Http\Request;

class RasController extends Controller
{
    // Get semua ras
    public function index()
    {
        return response()->json(Ras::with('jenisHewan')->get());
    }

    // Get ras by ID
    public function show($id)
    {
        $ras = Ras::with('jenisHewan')->find($id);
        return $ras ? response()->json($ras) : response()->json(['error' => 'Ras tidak ditemukan'], 404);
    }

    // Tambah ras baru
    public function store(Request $request)
    {
        $request->validate([
            'jenis_hewan_id' => 'required|exists:mst_jenis_hewan,id',
            'deskripsi' => 'required',
            'karakteristik' => 'required',
        ]);

        $ras = Ras::create($request->all());
        return response()->json($ras, 201);
    }

    // Update ras
    public function update(Request $request, $id)
    {
        $ras = Ras::findOrFail($id);
        $ras->update($request->all());
        return response()->json($ras);
    }

    // Form untuk tambah ras baru
    public function create()
    {
        return view('ras.create');
    }

    // Form untuk edit ras
    public function edit($id)
    {
        $ras = Ras::findOrFail($id);
        return view('ras.edit', compact('ras'));
    }

    // Hapus ras
    public function destroy($id)
    {
        $ras = Ras::findOrFail($id);
        $ras->delete();
        return response()->json(['message' => 'Ras berhasil dihapus']);
    }
}