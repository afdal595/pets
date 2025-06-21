<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Ras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HewanController extends Controller
{
    // Frontend methods
    public function index()
    {
        $hewan = Hewan::with(['ras'])->paginate(10);
        return view('hewan.index', compact('hewan'));
    }

    public function show($id)
    {
        $hewan = Hewan::with(['ras', 'galeri'])->findOrFail($id);
        return view('hewan.show', compact('hewan'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');
        $hasil = Hewan::where('nama', 'LIKE', "%{$query}%")->get();

        return view('hewan.index', compact('hasil', 'query'));
    }

    // Admin CRUD methods
    public function adminIndex()
    {
        $hewans = Hewan::with('ras')->latest()->paginate(10);
        return view('admin.hewan.index', compact('hewans'));
    }

    public function adminCreate()
    {
        $rass = Ras::all();
        return view('admin.hewan.create', compact('rass'));
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'ras_id' => 'required|exists:mst_ras,id',
            'nama' => 'required|string|max:100',
            'biografi' => 'nullable|string',
            'umur_min_perawatan' => 'nullable|integer|min:0',
            'umur_max_perawatan' => 'nullable|integer|min:0',
            'gambar_utama' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar_utama')) {
            $gambar = $request->file('gambar_utama');
            $path = $gambar->store('hewan', 'public');
            $data['gambar_utama'] = $path;
        }
        
        Hewan::create($data);
        
        return redirect()->route('admin.hewan.index')->with('success', 'Data hewan berhasil ditambahkan');
    }

    public function adminShow(Hewan $hewan)
    {
        return view('admin.hewan.show', compact('hewan'));
    }

    public function adminEdit(Hewan $hewan)
    {
        $rass = Ras::all();
        return view('admin.hewan.edit', compact('hewan', 'rass'));
    }

    public function adminUpdate(Request $request, Hewan $hewan)
    {
        $request->validate([
            'ras_id' => 'required|exists:mst_ras,id',
            'nama' => 'required|string|max:100',
            'biografi' => 'nullable|string',
            'umur_min_perawatan' => 'nullable|integer|min:0',
            'umur_max_perawatan' => 'nullable|integer|min:0',
            'gambar_utama' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('gambar_utama')) {
            // Hapus file lama jika ada
            if ($hewan->getRawOriginal('gambar_utama') && Storage::disk('public')->exists($hewan->getRawOriginal('gambar_utama'))) {
                Storage::disk('public')->delete($hewan->getRawOriginal('gambar_utama'));
            }
            
            $gambar = $request->file('gambar_utama');
            $path = $gambar->store('hewan', 'public');
            $data['gambar_utama'] = $path;
        }
        
        $hewan->update($data);
        
        return redirect()->route('admin.hewan.index')->with('success', 'Data hewan berhasil diperbarui');
    }

    public function adminDestroy(Hewan $hewan)
    {
        // Delete the image if it exists
        if ($hewan->getRawOriginal('gambar_utama') && Storage::disk('public')->exists($hewan->getRawOriginal('gambar_utama'))) {
            Storage::disk('public')->delete($hewan->getRawOriginal('gambar_utama'));
        }
        
        $hewan->delete();
        
        return redirect()->route('admin.hewan.index')->with('success', 'Data hewan berhasil dihapus');
    }
}