<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SetorTunai extends Model
{
    protected $table = 'setor_tunai';

    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class);
    }
}
