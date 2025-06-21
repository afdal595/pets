<?php

namespace Database\Factories;

use App\Models\MstJenisHewan;
use Illuminate\Database\Eloquent\Factories\Factory;

class MstJenisHewanFactory extends Factory
{
    protected $model = MstJenisHewan::class;

    public function definition(): array
    {
        $jenisHewan = $this->faker->unique()->randomElement([
            'Anjing', 'Kucing', 'Burung', 'Ikan', 'Reptil', 
            'Kelinci', 'Hamster', 'Unggas', 'Ternak'
        ]);

        return [
            'nama' => $jenisHewan,
            'deskripsi' => $this->faker->paragraph(3),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }

    // State untuk data spesifik
    public function anjing(): static
    {
        return $this->state(fn (array $attributes) => [
            'nama' => 'Anjing',
            'deskripsi' => 'Hewan peliharaan setia dari famili Canidae',
        ]);
    }

    public function kucing(): static
    {
        return $this->state(fn (array $attributes) => [
            'nama' => 'Kucing',
            'deskripsi' => 'Hewan karnivora dari famili Felidae',
        ]);
    }
}