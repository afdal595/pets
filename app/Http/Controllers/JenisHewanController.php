<?php
namespace App\Http\Controllers;

use App\Models\JenisHewan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JenisHewanController extends Controller
{
    /**
     * Display a listing of animal types.
     */
    public function index()
    {
        $jenisHewan = JenisHewan::withCount('ras')->latest()->paginate(10);
        return view('admin.jenis.index', compact('jenisHewan'));
    }

    /**
     * Show the form for creating a new animal type.
     */
    public function create()
    {
        return view('admin.jenis.create');
    }

    /**
     * Store a newly created animal type.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100|unique:mst_jenis_hewan,nama',
            'deskripsi' => 'nullable|string',
            'icon' => 'required|string|in:cat,dog,bird,other'
        ], [
            'nama.required' => 'Nama jenis hewan wajib diisi',
            'nama.unique' => 'Nama jenis hewan sudah digunakan',
            'icon.required' => 'Icon wajib dipilih',
            'icon.in' => 'Icon yang dipilih tidak valid'
        ]);

        try {
            JenisHewan::create([
                'nama' => $validated['nama'],
                'deskripsi' => $validated['deskripsi'],
                'icon' => $validated['icon']
            ]);

            Log::info('Jenis hewan baru berhasil ditambahkan: ' . $validated['nama']);
            return redirect()
                ->route('admin.jenis.index')
                ->with('success', 'Jenis hewan berhasil ditambahkan!');
        } catch (\Exception $e) {
            Log::error('Gagal menambahkan jenis hewan: ' . $e->getMessage());
            return redirect()
                ->route('admin.jenis.create')
                ->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }

    /**
     * Display the specified animal type.
     */
    public function show(JenisHewan $jenisHewan)
    {
        return view('admin.jenis.show', compact('jenisHewan'));
    }

    /**
     * Show the form for editing an animal type.
     */
    public function edit(JenisHewan $jenisHewan)
    {
        return view('admin.jenis.edit', compact('jenisHewan'));
    }

    /**
     * Update the specified animal type.
     */
    public function update(Request $request, JenisHewan $jenisHewan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100|unique:mst_jenis_hewan,nama,' . $jenisHewan->id,
            'deskripsi' => 'nullable|string',
            'icon' => 'required|string|in:cat,dog,bird,other'
        ], [
            'nama.required' => 'Nama jenis hewan wajib diisi',
            'nama.unique' => 'Nama jenis hewan sudah digunakan',
            'icon.required' => 'Icon wajib dipilih',
            'icon.in' => 'Icon yang dipilih tidak valid'
        ]);

        try {
            $jenisHewan->update([
                'nama' => $validated['nama'],
                'deskripsi' => $validated['deskripsi'],
                'icon' => $validated['icon']
            ]);

            Log::info('Jenis hewan berhasil diperbarui: ' . $validated['nama']);
            return redirect()
                ->route('admin.jenis.index')
                ->with('success', 'Jenis hewan berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Gagal memperbarui jenis hewan: ' . $e->getMessage());
            return redirect()
                ->route('admin.jenis.edit', $jenisHewan->id)
                ->withInput()
                ->withErrors(['error' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }

    /**
     * Remove the specified animal type.
     */
    public function destroy(JenisHewan $jenisHewan)
    {
        try {
            // Check if there are any related Ras
            if ($jenisHewan->ras()->exists()) {
                return redirect()
                    ->route('admin.jenis.index')
                    ->withErrors(['error' => 'Tidak dapat menghapus jenis hewan yang masih memiliki data ras terkait.']);
            }

            $jenisHewan->delete();
            Log::info('Jenis hewan berhasil dihapus: ' . $jenisHewan->nama);
            
            return redirect()
                ->route('admin.jenis.index')
                ->with('success', 'Jenis hewan berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Gagal menghapus jenis hewan: ' . $e->getMessage());
            return redirect()
                ->route('admin.jenis.index')
                ->withErrors(['error' => 'Gagal menghapus jenis hewan. Silakan coba lagi.']);
        }
    }

    /**
     * Get the list of Ras for a specific animal type (API method)
     */
    public function getRasByJenis(JenisHewan $jenisHewan)
    {
        return response()->json($jenisHewan->ras);
    }
}