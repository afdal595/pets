<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PetGuild;
use Illuminate\Http\Request;
use App\Http\Requests\StorePetGuildRequest;
use App\Http\Requests\UpdatePetGuildRequest;
use App\Http\Resources\PetGuildResource;
use Illuminate\Support\Facades\Log;

class PetGuildController extends Controller
{
    /**
     * Menampilkan semua data guild (GET /api/pet-guilds)
     */
    public function index()
    {
        try {
            $guilds = PetGuild::all();
            return PetGuildResource::collection($guilds);
        } catch (\Exception $e) {
            Log::error('Error fetching pet guilds: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Menyimpan data guild baru (POST /api/pet-guilds)
     */
    public function store(StorePetGuildRequest $request)
    {
        try {
            $validated = $request->validated();
            $guild = PetGuild::create($validated);
            return new PetGuildResource($guild, 201);
        } catch (\Exception $e) {
            Log::error('Error creating pet guild: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create record'], 500);
        }
    }

    /**
     * Menampilkan detail guild (GET /api/pet-guilds/{id})
     */
    public function show($id)
    {
        try {
            $guild = PetGuild::findOrFail($id);
            return new PetGuildResource($guild);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Guild not found'], 404);
        }
    }

    /**
     * Mengupdate data guild (PUT /api/pet-guilds/{id})
     */
    public function update(UpdatePetGuildRequest $request, $id)
    {
        try {
            $guild = PetGuild::findOrFail($id);
            $validated = $request->validated();
            $guild->update($validated);
            return new PetGuildResource($guild);
        } catch (\Exception $e) {
            Log::error('Error updating pet guild: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update record'], 500);
        }
    }

    /**
     * Menghapus data guild (DELETE /api/pet-guilds/{id})
     */
    public function destroy($id)
    {
        try {
            $guild = PetGuild::findOrFail($id);
            $guild->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            Log::error('Error deleting pet guild: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to delete record'], 500);
        }
    }
}