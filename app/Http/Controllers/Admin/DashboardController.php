<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use App\Models\JenisHewan;
use App\Models\Ras;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'jumlahRas' => Ras::count(),
            'jumlahJenis' => JenisHewan::count(),
            'jumlahUser' => User::count(),
            'hewanList' => Hewan::with(['ras', 'jenis'])->latest()->get(),
            'jenisList' => JenisHewan::all(),
            'rasList' => Ras::all(),
        ];

        return view('dashboard', $data);
    }
}
