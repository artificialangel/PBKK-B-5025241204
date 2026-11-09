<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nrp' => fake()->unique()->numerify('50252#####'),
            'nama' => fake()->name(),
            'prodi' => fake()->randomElement([
                'S1 Teknik Informatika',
                'S1 Sistem Informasi',
                'S1 Teknologi Informasi',
                'S1 Teknik Komputer',
            ]),
            'angkatan' => (string) fake()->numberBetween(2021, 2025),
            'ipk' => fake()->randomFloat(2, 2.00, 4.00),
        ];
    }
}
