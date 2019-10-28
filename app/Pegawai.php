<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawais';
    protected $fillable = ['nama_pegawai', 'user_id', 'telepon_pegawai', 'alamat_pegawai', 'avatar_pegawai', 'tanggal_masuk', 'jabatan'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
