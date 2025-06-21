<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisHewan;
use App\Models\Ras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RasController extends Controller
{
    public function index()
    {
        $rasList = Ras::with('jenisHewan')->latest()->paginate(10);
        return view('admin.ras.index', compact('rasList'));
    }

    public function create()
    {
        $jenisHewan = JenisHewan::all();
        return view('admin.ras.create', compact('jenisHewan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_hewan_id' => 'required|exists:mst_jenis_hewan,id',
            'deskripsi' => 'required|string',
            'karakteristik' => 'nullable|string',
            'perawatan' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/ras');
            $validated['gambar'] = Storage::url($gambarPath);
        }

        if ($request->hasFile('gambar_thumbnail')) {
            $thumbnailPath = $request->file('gambar_thumbnail')->store('public/ras/thumbnails');
            $validated['gambar_thumbnail'] = Storage::url($thumbnailPath);
        }

        Ras::create($validated);

        return redirect()->route('admin.ras.index')
            ->with('success', 'Ras hewan berhasil ditambahkan');
    }

    public function show(Ras $ras)
    {
        return view('admin.ras.show', compact('ras'));
    }

    public function edit(Ras $ras)
    {
        $jenisHewan = JenisHewan::all();
        return view('admin.ras.edit', compact('ras', 'jenisHewan'));
    }

    public function update(Request $request, Ras $ras)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_hewan_id' => 'required|exists:mst_jenis_hewan,id',
            'deskripsi' => 'required|string',
            'karakteristik' => 'nullable|string',
            'perawatan' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($ras->gambar && Storage::exists('public' . str_replace('/storage', '', $ras->gambar))) {
                Storage::delete('public' . str_replace('/storage', '', $ras->gambar));
            }
            $gambarPath = $request->file('gambar')->store('public/ras');
            $validated['gambar'] = Storage::url($gambarPath);
        }

        if ($request->hasFile('gambar_thumbnail')) {
            // Delete old thumbnail if exists
            if ($ras->gambar_thumbnail && Storage::exists('public' . str_replace('/storage', '', $ras->gambar_thumbnail))) {
                Storage::delete('public' . str_replace('/storage', '', $ras->gambar_thumbnail));
            }
            $thumbnailPath = $request->file('gambar_thumbnail')->store('public/ras/thumbnails');
            $validated['gambar_thumbnail'] = Storage::url($thumbnailPath);
        }

        $ras->update($validated);

        return redirect()->route('admin.ras.index')
            ->with('success', 'Ras hewan berhasil diperbarui');
    }

    public function destroy(Ras $ras)
    {
        // Delete images if they exist
        if ($ras->gambar && Storage::exists('public' . str_replace('/storage', '', $ras->gambar))) {
            Storage::delete('public' . str_replace('/storage', '', $ras->gambar));
        }
        if ($ras->gambar_thumbnail && Storage::exists('public' . str_replace('/storage', '', $ras->gambar_thumbnail))) {
            Storage::delete('public' . str_replace('/storage', '', $ras->gambar_thumbnail));
        }

        $ras->delete();

        return redirect()->route('admin.ras.index')
            ->with('success', 'Ras hewan berhasil dihapus');
    }
}
