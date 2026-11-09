<?php

/*
 | Override konfigurasi AdminLTE (jeroennoten/laravel-adminlte).
 | Hanya key yang diubah; sisanya memakai default paket.
 | Jalankan `php artisan adminlte:install` DULU, lalu timpa file ini dengan versi repo.
 */
return [
    'title' => 'Portal Akademik - Admin',
    'title_prefix' => '',
    'title_postfix' => '',
    'logo' => '<b>Portal</b> Admin',
    'logo_img_alt' => 'Portal Admin',
    'dashboard_url' => 'admin/dashboard',
    'logout_url' => 'logout',
    'logout_method' => 'POST',
    'login_url' => 'login',
    'use_route_url' => false,
    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'layout_topnav' => null,
    'menu' => [
        ['header' => 'MENU UTAMA'],
        [
            'text' => 'Dashboard',
            'url' => 'admin/dashboard',
            'icon' => 'fas fa-fw fa-tachometer-alt',
            'can' => 'view-dashboard',
        ],
        [
            'text' => 'Data Mahasiswa',
            'url' => 'admin/mahasiswa',
            'icon' => 'fas fa-fw fa-user-graduate',
            'can' => 'view-data',
        ],
        ['header' => 'LAINNYA'],
        [
            'text' => 'Halaman Publik',
            'url' => '/',
            'icon' => 'fas fa-fw fa-globe',
        ],
    ],
];
