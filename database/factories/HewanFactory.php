<?php

namespace Database\Factories;

use App\Models\Ras;
use Illuminate\Database\Eloquent\Factories\Factory;

class HewanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ras_id' => Ras::factory(),
            'nama' => $this->faker->name,
            'biografi' => $this->faker->paragraph,
            'gambar_utama' => 'hewan/'.$this->faker->image('public/storage/hewan', 640, 480, null, false),
            'umur_min_perawatan' => $this->faker->numberBetween(1, 12),
            'umur_max_perawatan' => $this->faker->numberBetween(12, 20),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}