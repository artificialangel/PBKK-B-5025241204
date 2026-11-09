<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // Data asli dari PageController@mahasiswa (aman dijalankan berulang)
        Mahasiswa::firstOrCreate(['nrp' => '5025241204'], [
            'nama' => 'Fathiya Nayla Husna Wibowo',
            'prodi' => 'S1 Teknik Informatika',
            'angkatan' => '2024',
            'ipk' => null,
        ]);

        // Faker dummy data, hanya jika tabel masih sedikit (hindari duplikasi tiap seed)
        if (Mahasiswa::count() < 30) {
            Mahasiswa::factory(30)->create();
        }
    }
}
