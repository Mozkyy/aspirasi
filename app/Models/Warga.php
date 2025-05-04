<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';

    protected $fillable = ['nama', 'nik', 'email', 'password', 'gambar'];

    // Kalau password tidak di-hash, jangan pakai mutator atau hidden
}
