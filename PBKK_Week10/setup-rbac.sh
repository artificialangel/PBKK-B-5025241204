#!/usr/bin/env bash
# Instalasi paket untuk tugas Dashboard & RBAC.
# Jalankan SEKALI dari root proyek: bash setup-rbac.sh
# Breeze akan menimpa beberapa file; script ini mem-backup lalu mengembalikan file milik proyek.
set -euo pipefail

BK=.backup-pre-rbac
mkdir -p "$BK"
cp routes/web.php "$BK/web.php"
cp resources/views/layouts/app.blade.php "$BK/layout-app.blade.php"
cp resources/css/app.css "$BK/app.css"
cp resources/js/app.js "$BK/app.js"
cp vite.config.js "$BK/vite.config.js"
cp package.json "$BK/package.json"
cp config/adminlte.php "$BK/adminlte.override.php"

[ -f .env ] || cp .env.example .env
composer install
php artisan key:generate --ansi
mkdir -p database && touch database/database.sqlite

# 1) Breeze (auth). Menimpa web.php, layouts/app.blade.php, css/js, vite/package.json.
composer require laravel/breeze --dev
php artisan breeze:install blade --pest --no-interaction || true

# Kembalikan file milik proyek (UI publik tetap utuh)
cp "$BK/web.php" routes/web.php
cp "$BK/layout-app.blade.php" resources/views/layouts/app.blade.php
cp "$BK/app.css" resources/css/app.css
cp "$BK/app.js" resources/js/app.js
cp "$BK/vite.config.js" vite.config.js
cp "$BK/package.json" package.json
rm -f tailwind.config.js postcss.config.js

# 2) Spatie permission + AdminLTE
composer require spatie/laravel-permission jeroennoten/laravel-adminlte
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
php artisan adminlte:install --no-interaction
cp "$BK/adminlte.override.php" config/adminlte.php

# 3) Migrasi + seed, lalu frontend
php artisan migrate --seed
npm install && npm run build

echo "Selesai. Jalankan: php artisan serve  ->  http://localhost:8000/login"
