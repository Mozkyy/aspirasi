<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    //

    protected $table = 'aspirasi';
    protected $fillable = [
        'warga_id',
        'isi',
        'telpon',
        'rt',
        'rw',
        'kategori',
        'gambar',
        'status_proses',
        'tanggal_respon'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
