<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use App\Models\Ras;
use App\Models\JenisHewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HewanController extends Controller
{
    public function index()
    {
        $hewans = Hewan::with(['ras', 'jenis'])->get();
        $jenisList = JenisHewan::all();
        $rasList = Ras::all();
        return view('admin.hewan.index', compact('hewans', 'jenisList', 'rasList'));
    }

    public function create()
    {
        $jenisList = JenisHewan::all();
        $rasList = Ras::all();
        return view('admin.hewan.create', compact('jenisList', 'rasList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_id' => 'required|exists:mst_jenis_hewan,id',
            'ras_id' => 'required|exists:mst_ras,id',
            'biografi' => 'nullable|string',
            'umur_min_perawatan' => 'required|integer|min:0',
            'umur_max_perawatan' => 'required|integer|min:0',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/hewan');
            $validated['gambar'] = Storage::url($gambarPath);
        }

        $hewan = Hewan::create($validated);
        return redirect()->route('admin.hewan.index')->with('success', 'Hewan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $hewan = Hewan::findOrFail($id);
        $jenisList = JenisHewan::all();
        $rasList = Ras::all();
        return view('admin.hewan.edit', compact('hewan', 'jenisList', 'rasList'));
    }

    public function update(Request $request, $id)
    {
        $hewan = Hewan::findOrFail($id);
        
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_id' => 'required|exists:mst_jenis_hewan,id',
            'ras_id' => 'required|exists:mst_ras,id',
            'biografi' => 'nullable|string',
            'umur_min_perawatan' => 'required|integer|min:0',
            'umur_max_perawatan' => 'required|integer|min:0',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($hewan->gambar) {
                Storage::delete(str_replace('/storage', 'public', $hewan->gambar));
            }
            $gambarPath = $request->file('gambar')->store('public/hewan');
            $validated['gambar'] = Storage::url($gambarPath);
        }

        $hewan->update($validated);
        return redirect()->route('admin.hewan.index')->with('success', 'Hewan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $hewan = Hewan::findOrFail($id);
        if ($hewan->gambar) {
            Storage::delete(str_replace('/storage', 'public', $hewan->gambar));
        }
        $hewan->delete();
        return redirect()->route('admin.hewan.index')->with('success', 'Hewan berhasil dihapus');
    }
}