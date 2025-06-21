<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMakananRequest;
use App\Http\Requests\UpdateMakananRequest;
use App\Http\Resources\MakananResource;
use App\Models\MstMakanan;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $makanan = MstMakanan::query()
            ->with('hewan') // Jika ada relasi
            ->filter(request(['search', 'umur_min', 'umur_max']))
            ->latest()
            ->paginate(10);

        return response()->json([
            'success' => true,
            'data' => MakananResource::collection($makanan),
            'message' => 'Daftar makanan berhasil diambil'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMakananRequest $request): JsonResponse
    {
        $data = $request->validated();
        
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('makanan', 'public');
        }

        $makanan = MstMakanan::create($data);

        return response()->json([
            'success' => true,
            'data' => new MakananResource($makanan),
            'message' => 'Makanan berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MstMakanan $makanan): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new MakananResource($makanan->load('hewan')),
            'message' => 'Detail makanan berhasil diambil'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMakananRequest $request, MstMakanan $makanan): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($makanan->gambar) {
                Storage::disk('public')->delete($makanan->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('makanan', 'public');
        }

        $makanan->update($data);

        return response()->json([
            'success' => true,
            'data' => new MakananResource($makanan),
            'message' => 'Data makanan berhasil diperbarui'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MstMakanan $makanan): JsonResponse
    {
        if ($makanan->gambar) {
            Storage::disk('public')->delete($makanan->gambar);
        }

        $makanan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Makanan berhasil dihapus'
        ]);
    }

    /**
     * Get makanan by age range
     */
    public function byAge(int $umur): JsonResponse
    {
        $makanan = MstMakanan::where('umur_min', '<=', $umur)
            ->where('umur_max', '>=', $umur)
            ->get();

        return response()->json([
            'success' => true,
            'data' => MakananResource::collection($makanan),
            'message' => 'Makanan sesuai umur berhasil diambil'
        ]);
    }
}