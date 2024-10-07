<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\permintaan_obat>
 */
class PermintaanObatFactory extends Factory
{
    protected $model = PermintaanObatFactory::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        "nama"=> $this->faker->word,
        "kelas"=> $this->faker->numberBetween(10, 12),
        "jurusan"=> $this->faker->word,
        'nama_obat' => $this->faker->word,
        'jumlah' => $this->faker->numberBetween(1, 100),
        'user_id' => \App\Models\User::factory(),
        ];
    }
}
