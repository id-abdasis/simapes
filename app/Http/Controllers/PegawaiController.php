<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('layouts.pegawai.index');
    }

    public function tambah_pegawai()
    {
        return view('layouts.pegawai.tambah-pegawai');
    }

    public function store_pegawai(Request $requestPegawai)
    {
        User::create([
            'name' => $requestPegawai->nama_pegawai,
            'role' => $requestPegawai->jabatan,
            'email' => $requestPegawai->email_pegawai,
            'password' => Hash::make('rahasia'),
            'remember_token' => Str::random(60)
        ]);

        if ($requestPegawai->hasFile('avatar_pegawai')) {
            $extention = $requestPegawai->file('avatar_pegawai')->getClientOriginalExtention();
            $requestPegawai->avatar_pegawai = $requestPegawai->file('avatar_pegawai')->move('avatar/'. $requestPegawai->nama_pegawai . '_' . date(dmyhs) . '.' . $extention);
        }else{
            $requestPegawai->request->add(['avatar_pegawai' => 'avatar/default-pegawai.png']);
        }


        $user_id = User::all()->pluck('id')->last();
        $user = User::find($user_id);
        $user->pegawai()->create($requestPegawai->all());
        return 'Berhasil Disimpan';
    }
}
