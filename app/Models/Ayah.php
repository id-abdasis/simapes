<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayah extends Model
{
    protected $table = 'ayahs';

    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'pendidikan',
        'pekerjaan',
        'penghasilan',
        'telepon',
        'email',
        'keterangan',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'dusun',
        'rt',
        'rw',
        'nama_jalan',
        'santri_id',
    ];

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
