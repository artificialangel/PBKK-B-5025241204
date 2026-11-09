<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            'view-dashboard',
            'view-data',
            'create-data',
            'edit-data',
            'delete-data',
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate(['name' => $name, 'guard_name' => 'web']);
        }

        // admin: akses penuh
        Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web'])
            ->syncPermissions(Permission::all());

        // staf: terbatas (tanpa delete-data)
        Role::firstOrCreate(['name' => 'staf', 'guard_name' => 'web'])
            ->syncPermissions(['view-dashboard', 'view-data', 'create-data', 'edit-data']);

        Role::firstOrCreate(['name' => 'mahasiswa', 'guard_name' => 'web']);
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
