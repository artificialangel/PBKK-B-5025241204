<?php

use App\Models\Mahasiswa;
use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(RolePermissionSeeder::class);
});

it('mengarahkan guest dari /admin/dashboard ke login', function () {
    $this->get('/admin/dashboard')->assertRedirect('/login');
});

it('mengizinkan staf melihat dashboard', function () {
    $staf = User::factory()->create()->assignRole('staf');

    $this->actingAs($staf)->get('/admin/dashboard')->assertOk();
});

it('menolak staf menghapus data lewat request langsung', function () {
    $staf = User::factory()->create()->assignRole('staf');
    $m = Mahasiswa::factory()->create();

    $this->actingAs($staf)->delete("/admin/mahasiswa/{$m->id}")->assertForbidden();
    expect(Mahasiswa::find($m->id))->not->toBeNull();
});

it('mengizinkan admin menghapus data', function () {
    $admin = User::factory()->create()->assignRole('admin');
    $m = Mahasiswa::factory()->create();

    $this->actingAs($admin)->delete("/admin/mahasiswa/{$m->id}")->assertRedirect();
    expect(Mahasiswa::find($m->id))->toBeNull();
});

it('tidak menampilkan tombol hapus untuk staf', function () {
    $staf = User::factory()->create()->assignRole('staf');
    Mahasiswa::factory()->create();

    $this->actingAs($staf)->get('/admin/mahasiswa')->assertOk()->assertDontSee('Hapus');
});

it('menjaga filter pencarian di link pagination', function () {
    $admin = User::factory()->create()->assignRole('admin');
    Mahasiswa::factory(25)->create(['prodi' => 'S1 Sistem Informasi']);

    $this->actingAs($admin)->get('/admin/mahasiswa?search=Sistem')
        ->assertOk()->assertSee('search=Sistem', false);
});
