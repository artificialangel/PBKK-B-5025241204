<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Role & permission harus dibuat lebih dulu sebelum user diberi role
        $this->call(RolePermissionSeeder::class);

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin Demo', 'password' => 'password', 'email_verified_at' => now()]
        );
        $admin->syncRoles('admin');

        $staf = User::firstOrCreate(
            ['email' => 'staf@example.com'],
            ['name' => 'Staf Demo', 'password' => 'password', 'email_verified_at' => now()]
        );
        $staf->syncRoles('staf');

        $mahasiswa = User::firstOrCreate(
            ['email' => 'mahasiswa@example.com'],
            ['name' => 'Mahasiswa Demo', 'password' => 'password', 'email_verified_at' => now()]
        );
        $mahasiswa->syncRoles('mahasiswa');
        
        $this->call(MahasiswaSeeder::class);
    }
}
