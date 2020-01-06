<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table = 'nasabahs';


    protected $fillable = ['nama_nasabah', 'nis_nasabah' , 'nomor_rekening', 'email', 'jumlah_saldo', 'status', 'user_id', 'santri_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }
}
