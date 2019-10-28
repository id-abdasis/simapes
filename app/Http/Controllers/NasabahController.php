<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use App\Santri;
use App\User;
use Illuminate\Support\Facades\Hash;
use Str;
use Alert;
class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('layouts.nasabah.index');
    }

    public function daftar_nasabah()
    {
        $nasabah = Nasabah::all();
        return view('layouts.nasabah.daftar-nasabah', ['santris' => $nasabah]);
    }

    public function tambah_nasabah()
    {
        $santri = Santri::all();
        return view('layouts.nasabah.tambah-nasabah', ['santris' => $santri]);
    }

    public function create_nasabah(Request $requestNasabah)
    {
        User::create([
            'name' => $requestNasabah->nama_nasabah,
            'role' => 'Nasabah',
            'email' => $requestNasabah->email_nasabah,
            'password' => Hash::make('rahasia'),
            'remember_token' => Str::random(60)
        ]);


        $user_id = User::all()->pluck('id')->last();
        $santri_id = preg_replace('/\D/', '', $requestNasabah->nama_nasabah);
        $user = User::find($user_id);
        $user->nasabah()->create([
            'nama_nasabah'  => $requestNasabah->nama_nasabah,
            'nomor_rekening'    => $requestNasabah->nomor_rekening,
            'email'         => $requestNasabah->email_nasabah,
            'jumlah_saldo'  => 0,
            'santri_id'     => $santri_id
        ]);

        Alert::success('Berhasil', 'Nasabah Berhasil di Tambahkan');
        return redirect('nasabah/tambah-nasabah');


    }
}
