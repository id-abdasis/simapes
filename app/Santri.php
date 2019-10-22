<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'santri';
    protected $fillable = [
        'status',
        'nama_lengkap',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_lengkap',
        'no_telepon',
        'jarak_tempuh',
        'berat_badan',
        'tinggi_badan',
        'golongan_darah',
        'kewarganegaraan',
        'anak_ke',
        'jumlah_saudara',
        'tinggal_bersama',
        'asal_sekolah',
        'nama_sekolah_asal',
        'alamat_sekolah_asal',
        'tahun_masuk',
    ];

    public function ibu()
    {
        return $this->hasOne(Ibu::class);
    }

    public function ayah()
    {
        return $this->hasOne(Ayah::class);
    }

    public function wali()
    {
        return $this->hasOne(Wali::class);
    }
}
