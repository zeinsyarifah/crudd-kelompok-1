<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_buku' => 'BK-' . fake()->unique()->numerify('#####'),
            'judul' => fake()->sentence(3),
            'kategori' => fake()->randomElement(['Novel', 'Sains', 'Sejarah', 'Teknologi']),
            'penulis' => fake()->name(),
            'tahun_terbit' => fake()->numberBetween(2000, 2024),
            'jumlah' => fake()->numberBetween(1, 50),
            'keterangan' => fake()->paragraph(),
        ];
    
    }
}
