<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\JenisHewan;
use App\Models\Ras;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data jenis hewan (anjing dan kucing)
        $jenisHewan = JenisHewan::all();
        
        // Ambil data ras untuk setiap jenis hewan
        $dogBreeds = Ras::whereHas('jenisHewan', function($query) {
            $query->where('nama', 'like', '%Anjing%');
        })->with(['jenisHewan'])->get();

        $catBreeds = Ras::whereHas('jenisHewan', function($query) {
            $query->where('nama', 'like', '%Kucing%');
        })->with(['jenisHewan'])->get();

        return view('home', [
            'jenisHewan' => $jenisHewan,
            'dogBreeds' => $dogBreeds,
            'catBreeds' => $catBreeds,
        ]);
    }

    public function breeds()
    {
        $type = request('type', 'all');
        
        $query = Ras::with(['jenisHewan', 'hewan', 'peralatan'])
            ->orderBy('nama');
            
        if ($type === 'cat') {
            $query->whereHas('jenisHewan', function($q) {
                $q->where('nama', 'like', '%Kucing%');
            });
        } elseif ($type === 'dog') {
            $query->whereHas('jenisHewan', function($q) {
                $q->where('nama', 'like', '%Anjing%');
            });
        }
        
        $breeds = $query->get();
        
        return view('breeds.index', compact('breeds', 'type'));
    }

    public function showBreedDetail($breed)
    {
        // Find the breed by slug (converting from URL format)
        $breedName = str_replace('-', ' ', $breed);
        $breed = Ras::with([
            'jenisHewan',
            'hewan' => function($query) {
                $query->latest();
            },
            'peralatan',
            'galeri'
        ])->where('nama', 'like', "%{$breedName}%")
            ->firstOrFail();

        return view('breeds.show', compact('breed'));
    }
}