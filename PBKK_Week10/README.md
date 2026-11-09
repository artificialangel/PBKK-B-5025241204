# Portal Akademik PBKK — Dashboard & RBAC

Proyek Laravel 12 (PBKK Kelompok 4). Fitur publik tugas sebelumnya (beranda, about, agent, calculator, hitung IPK, profil mahasiswa) **tetap utuh**. Tugas ini menambahkan backoffice **AdminLTE** dengan autentikasi **Laravel Breeze** dan RBAC **spatie/laravel-permission**.

## Instalasi

Prasyarat: PHP ≥ 8.2, Composer, Node.js + npm, ekstensi SQLite.

```bash
git clone <url-repo> && cd <folder-repo>
bash setup-rbac.sh        # install paket (Breeze, Spatie, AdminLTE), migrate --seed, npm build
php artisan serve
```

Jika paket sudah ter-install (`vendor/` ada), cukup:

```bash
cp .env.example .env
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
npm install && npm run build
php artisan serve
```

`.env` dan `vendor/` tidak di-commit (sudah ada di `.gitignore`).

## Akun demo

| Role  | Email               | Password   |
|-------|---------------------|------------|
| Admin | admin@example.com   | `password` |
| Staf  | staf@example.com    | `password` |

Login di `/login`, setelah itu otomatis menuju dashboard.

## URL Admin

- Dashboard: `http://localhost:8000/admin/dashboard`
- Data Mahasiswa (search + pagination): `http://localhost:8000/admin/mahasiswa`

Semua `/admin/*` memakai middleware `auth` — guest diarahkan ke `/login`.

## Role & Permission

Disimpan di database (tabel Spatie), dibuat oleh `RolePermissionSeeder` dengan `firstOrCreate()`.

| Permission       | admin | staf |
|------------------|:-----:|:----:|
| `view-dashboard` | ✅ | ✅ |
| `view-data`      | ✅ | ✅ |
| `create-data`    | ✅ | ✅ |
| `edit-data`      | ✅ | ✅ |
| `delete-data`    | ✅ | ❌ |

Hapus data dilindungi dua lapis:
1. **Blade** — tombol Hapus dibungkus `@can('delete-data')`, tidak dirender untuk staf.
2. **Server** — route `DELETE /admin/mahasiswa/{id}` memakai middleware `permission:delete-data`; staf yang mengirim request manual mendapat **403**.

## Data & Seeder

`php artisan migrate --seed` aman dijalankan berulang (user & role memakai `firstOrCreate`, data dummy Faker tidak menumpuk). Seeder membuat role/permission, 2 akun demo, dan ±31 data mahasiswa.

## Pengujian

```bash
php artisan test
```

## Screenshot Dashboard

![Dashboard Admin](docs/dashboard.png)

> Ambil screenshot `/admin/dashboard` setelah login sebagai admin, simpan ke `docs/dashboard.png`.
