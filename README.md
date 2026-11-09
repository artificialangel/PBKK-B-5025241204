# PBKK-B-5025241204

## Assignment 1 - Week 1
### Deployed Project
https://pbkk-b-5025241204-h3j5-six.vercel.app
### Running Locally

```bash
cd PBKK_Tugas-1
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Open `http://localhost:8000` in your browser.

## Assignment 2 - Week 2

### Deployed Project
https://5025241204-pbkk-tugas-2.vercel.app

### Running Locally

```bash
cd PBKK_Tugas-2
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Open `http://localhost:8000` in your browser.

## Assignment 3 - Week 4

### Deployed Project

https://pbkk-tugas-3-deploy-gbfvs33i9-lilys-projects-d1cb9298.vercel.app

### Running Locally
```bash
cd PBKK_Tugas-3
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```


## Assignment Week 10

## Ringkasan Perubahan Week 10

| Area | Perubahan |
|------|-----------|
| Autentikasi | Laravel Breeze (login, register, logout, reset password) |
| RBAC | `spatie/laravel-permission` — role `admin` dan `staf`, permission tersimpan di database |
| Backoffice | AdminLTE (`jeroennoten/laravel-adminlte`), dashboard di `/admin/dashboard` dengan 4 widget dinamis |
| Data | Model `Mahasiswa` baru (migration, factory, seeder) + CRUD admin dengan pencarian dan pagination |
| Keamanan hapus | Tombol Hapus hanya untuk admin (`@can`) **dan** route dilindungi middleware `permission:delete-data` |
| Navbar publik | Tambah link **Login**; setelah login berubah menjadi **Dashboard** dan **Logout** |
| Tampilan | Halaman login/register dan admin disamakan dengan UI publik (kartu, font serif, tombol outline) |
| Seeder | Role, permission, akun demo admin/staf, dan data dummy Faker (aman dijalankan berulang) |
| Pengujian | 6 tes Pest untuk akses dan RBAC |

## Daftar File yang Ditambah / Diubah

**Ditambah**

| File | Fungsi |
|------|--------|
| `app/Http/Controllers/Controller.php` | Base controller (dibutuhkan Breeze dan controller admin) |
| `app/Http/Controllers/Admin/DashboardController.php` | Statistik dashboard |
| `app/Http/Controllers/Admin/MahasiswaController.php` | CRUD mahasiswa, search + pagination |
| `app/Models/Mahasiswa.php`, `database/factories/MahasiswaFactory.php` | Model dan factory data mahasiswa |
| `database/migrations/2026_11_09_000001_create_mahasiswas_table.php` | Tabel `mahasiswas` |
| `database/seeders/RolePermissionSeeder.php` | Role dan permission (`firstOrCreate`) |
| `database/seeders/MahasiswaSeeder.php` | Data mahasiswa asli + Faker |
| `resources/views/admin/dashboard.blade.php` | Dashboard AdminLTE |
| `resources/views/admin/mahasiswa/index.blade.php`, `form.blade.php` | Tabel data dan form tambah/edit |
| `public/css/admin-theme.css` | Tema admin agar sama dengan UI publik |
| `tests/Feature/RbacTest.php` | Tes RBAC |
| `setup-rbac.sh` | Script instalasi paket (Linux/macOS/Git Bash) |
| *(dari paket)* `routes/auth.php`, `resources/views/auth/*`, `config/permission.php`, migration Spatie | Dibuat oleh Breeze / Spatie |

**Diubah**

| File | Perubahan |
|------|-----------|
| `app/Models/User.php` | Tambah trait `HasRoles` |
| `bootstrap/app.php` | Alias middleware `role`, `permission`, `role_or_permission` |
| `routes/web.php` | Grup route `/admin/*` (middleware `auth` + `permission`), route `/dashboard`, memuat `routes/auth.php` |
| `database/seeders/DatabaseSeeder.php` | Memanggil seeder role, akun demo, mahasiswa |
| `config/adminlte.php` | Judul, menu (dengan `can`), logout POST, memuat `admin-theme.css` |
| `resources/views/layouts/app.blade.php` | Link Login / Dashboard / Logout di navbar |
| `resources/views/layouts/guest.blade.php` | Halaman auth memakai layout publik |
| `resources/views/auth/login.blade.php`, `register.blade.php` | Tampilan sesuai tema |
| `resources/views/components/text-input`, `input-label`, `primary-button` | Gaya form sesuai tema |
| `README.md` | Dokumen ini |

## Instalasi

Prasyarat: PHP ≥ 8.2 (ekstensi `sqlite3`, `pdo_sqlite`, `mbstring`, `xml`, `curl`), Composer, Node.js + npm.

```powershell
git clone <url-repo>
cd <folder-repo>

copy .env.example .env
composer install
php artisan key:generate
New-Item -ItemType File -Force database\database.sqlite

php artisan migrate --seed
npm install
npm run build

php artisan serve
```

Buka `http://localhost:8000`. File `.env` dan folder `vendor/` **tidak** di-commit (ada di `.gitignore`).

> Untuk memasang paket dari nol di proyek yang belum punya Breeze/Spatie/AdminLTE:
> `composer require laravel/breeze --dev`, `php artisan breeze:install blade --pest`,
> `composer require spatie/laravel-permission jeroennoten/laravel-adminlte`,
> `php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"`,
> `php artisan adminlte:install`. Breeze menimpa `routes/web.php` dan `layouts/app.blade.php`,
> jadi backup dulu file tersebut (lihat `setup-rbac.sh`).

## Akun Demo

| Role | Email | Password |
|------|-------|----------|
| Admin | `admin@example.com` | `password` |
| Staf | `staf@example.com` | `password` |

## URL Penting

| URL | Keterangan |
|-----|-----------|
| `/login` | Halaman login |
| `/admin/dashboard` | **Dashboard admin** |
| `/admin/mahasiswa` | Data mahasiswa (search + pagination) |

Semua `/admin/*` wajib login. Guest diarahkan ke `/login`.

## Role & Permission

Dikelola Spatie (database-backed), dibuat oleh `RolePermissionSeeder`.

| Permission | admin | staf |
|------------|:----:|:----:|
| `view-dashboard` | ✅ | ✅ |
| `view-data` | ✅ | ✅ |
| `create-data` | ✅ | ✅ |
| `edit-data` | ✅ | ✅ |
| `delete-data` | ✅ | ❌ |

- **admin**: akses penuh.
- **staf**: dapat melihat, menambah, dan mengubah data, tetapi tidak dapat menghapus.
- Pengguna tanpa role tidak punya `view-dashboard`, sehingga mendapat **403** di `/admin/*`.

### Hapus Data Dilindungi Dua Lapis
1. **Blade** — tombol Hapus dibungkus `@can('delete-data')`, tidak dirender untuk staf.
2. **Server** — `DELETE /admin/mahasiswa/{id}` memakai `permission:delete-data`. Staf yang mengirim request manual mendapat **403**.

## Dashboard

Empat widget statistik dinamis (bukan angka hardcode):

- Total Mahasiswa — `Mahasiswa::count()`
- Total Pengguna — `User::count()`
- Pengguna Role Staf — `User::role('staf')->count()`
- Rata-rata IPK — `Mahasiswa::avg('ipk')`

Ditambah tabel 5 mahasiswa terbaru.

## Pencarian & Pagination

`/admin/mahasiswa` mencari berdasarkan nama, NRP, atau prodi (`->when($request->search, ...)`) dan memfilter angkatan. Pagination 10 data per halaman dengan `->paginate(10)->withQueryString()`, sehingga kata kunci dan filter tetap terbawa saat pindah halaman.

## Alur Login

1. Guest membuka **Login** di navbar publik → `/login`.
2. Setelah login, Breeze mengarahkan ke `/dashboard`, lalu diteruskan ke `/admin/dashboard`.
3. Saat login, navbar publik menampilkan **Dashboard** (hanya jika punya `view-dashboard`) dan **Logout** (form `POST` dengan CSRF).

## Seeder

`php artisan migrate --seed` aman dijalankan berulang: role dan user memakai `firstOrCreate`, dan data dummy Faker tidak menumpuk (hanya ditambah jika tabel masih < 30 baris). Untuk mengulang dari awal: `php artisan migrate:fresh --seed`.

## Pengujian

```powershell
php artisan test
```

Tes mencakup: guest dialihkan ke login, staf dapat membuka dashboard, staf tidak dapat menghapus (403), admin dapat menghapus, tombol Hapus tidak tampil untuk staf, dan pagination mempertahankan filter pencarian.

## Pemecahan Masalah

| Gejala | Penyebab / solusi |
|--------|-------------------|
| `require(routes/auth.php)` gagal saat install | `routes/auth.php` baru ada setelah Breeze terpasang; pakai `if (file_exists(...))` di `routes/web.php` |
| `breeze:install` error `welcome.blade.php` tidak ada | Buat file dummy `resources/views/welcome.blade.php` sementara, jalankan ulang, lalu hapus |
| `bash setup-rbac.sh` gagal di PowerShell | `bash` membuka WSL; jalankan langkah satu per satu di PowerShell atau pakai Git Bash |
| Teks halaman tidak terlihat / gaya rusak | `npm install && npm run build` lalu hard refresh |
| `ERR_TOO_MANY_REDIRECTS` di `/admin/dashboard` | Pastikan route memakai `Admin\DashboardController@index`; jalankan `php artisan optimize:clear` dan hapus cookie `localhost` |
| `RoleDoesNotExist` saat register | Jalankan `php artisan db:seed` dahulu |
