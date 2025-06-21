<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\JenisHewan;
use App\Models\Ras;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Statistik dasar
        $totalHewan = Hewan::count();
        $totalRas = Ras::count();
        $totalJenis = JenisHewan::count();
        $totalPencarian = 0; // Implementasikan sesuai kebutuhan

        // Ras terpopuler (5 teratas)
        $popularRas = Ras::withCount('hewan')
            ->orderBy('hewan_count', 'desc')
            ->take(5)
            ->get();

        // Hewan terbaru (5 teratas)
        $latestPets = Hewan::with(['ras.jenisHewan'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalHewan',
            'totalRas',
            'totalJenis',
            'totalPencarian',
            'popularRas',
            'latestPets'
        ));
    }

    public function createRas()
    {
        // Get list of jenis hewan for dropdown
        $jenisHewan = JenisHewan::all();
        return view('admin.ras.create', compact('jenisHewan'));
    }

    public function createJenis()
    {
        // Tampilkan halaman untuk menambahkan jenis hewan
        return view('admin.jenis.create');
    }
}
