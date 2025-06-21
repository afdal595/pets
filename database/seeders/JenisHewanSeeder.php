<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MstJenisHewan;

class JenisHewanSeeder extends Seeder
{
    public function run(): void
    {
        MstJenisHewan::create([
            'nama' => 'Anjing',
            'deskripsi' => 'Hewan peliharaan setia'
        ]);

        MstJenisHewan::create([
            'nama' => 'Kucing',
            'deskripsi' => 'Hewan rumahan yang mandiri'
        ]);
    }
}
