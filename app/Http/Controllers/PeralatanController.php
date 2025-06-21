<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePeralatanRequest;
use App\Http\Requests\UpdatePeralatanRequest;
use App\Http\Resources\PeralatanResource;
use App\Models\MstPeralatan;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class PeralatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $peralatan = MstPeralatan::query()
            ->with(['hewan' => function($query) {
                $query->select('id', 'nama');
            }])
            ->latest()
            ->filter(request(['search', 'wajib']))
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => PeralatanResource::collection($peralatan),
            'message' => 'Daftar peralatan berhasil diambil'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeralatanRequest $request): JsonResponse
    {
        $data = $request->validated();
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('peralatan', 'public');
        }

        $peralatan = MstPeralatan::create($data);

        // Jika ada relasi many-to-many dengan hewan
        if ($request->has('hewan_ids')) {
            $peralatan->hewan()->attach($request->hewan_ids);
        }

        return response()->json([
            'success' => true,
            'data' => new PeralatanResource($peralatan),
            'message' => 'Peralatan berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MstPeralatan $peralatan): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new PeralatanResource($peralatan->load('hewan')),
            'message' => 'Detail peralatan berhasil diambil'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeralatanRequest $request, MstPeralatan $peralatan): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($peralatan->gambar) {
                Storage::disk('public')->delete($peralatan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('peralatan', 'public');
        }

        $peralatan->update($data);

        // Sync relasi many-to-many
        if ($request->has('hewan_ids')) {
            $peralatan->hewan()->sync($request->hewan_ids);
        }

        return response()->json([
            'success' => true,
            'data' => new PeralatanResource($peralatan),
            'message' => 'Data peralatan berhasil diperbarui'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MstPeralatan $peralatan): JsonResponse
    {
        // Hapus gambar terkait
        if ($peralatan->gambar) {
            Storage::disk('public')->delete($peralatan->gambar);
        }

        // Detach relasi many-to-many
        $peralatan->hewan()->detach();

        $peralatan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Peralatan berhasil dihapus'
        ]);
    }

    /**
     * Get peralatan wajib
     */
    public function wajib(): JsonResponse
    {
        $peralatan = MstPeralatan::where('wajib', true)
            ->with('hewan')
            ->get();

        return response()->json([
            'success' => true,
            'data' => PeralatanResource::collection($peralatan),
            'message' => 'Daftar peralatan wajib berhasil diambil'
        ]);
    }
}