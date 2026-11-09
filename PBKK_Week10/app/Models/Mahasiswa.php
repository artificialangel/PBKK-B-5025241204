<?php

namespace App\Models;

use Database\Factories\MahasiswaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /** @use HasFactory<MahasiswaFactory> */
    use HasFactory;

    protected $fillable = ['nrp', 'nama', 'prodi', 'angkatan', 'ipk'];

    protected function casts(): array
    {
        return ['ipk' => 'decimal:2'];
    }
}
