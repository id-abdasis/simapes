<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use App\Santri;
use App\User;
use Illuminate\Support\Facades\Hash;
use Str;
use Alert;
use Illuminate\Support\Facades\Validator;
use Session;
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
        $santri = Santri::all();
        return view('layouts.nasabah.daftar-nasabah', ['santris' => $santri, 'nasabahs' => $nasabah]);
    }

    public function tambah_nasabah()
    {
        $santri = Santri::all();
        return view('layouts.nasabah.tambah-nasabah', ['santris' => $santri]);
    }

    public function create_nasabah(Request $requestNasabah)
    {
        $rules = [
            'email_nasabah' =>  'required|unique:users,email',
            'nis_nasabah'   =>  'required|unique:nasabahs',
            'nomor_rekening'   =>  'required|unique:nasabahs',
        ];

        $validator  =   Validator::make($requestNasabah->all(), $rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->first('email_nasabah')) {
                Alert::error('Gagal', 'Email Sudah Terdaftar');
                return redirect()->back()->withErrors($validator)->withInput();
            }else if ($errors->first('nis_nasabah')) {
                Alert::error('Gagal', 'NIS Sudah Terdaftar');
                return redirect()->back()->withErrors($validator)->withInput();
            }else if ($errors->first('nomor_rekening')) {
                Alert::error('Gagal', 'Nomor Rekening Sudah Terdaftar');
                return redirect()->back()->withErrors($validator)->withInput();
            }
        } else{
            User::create([
                'name' =>   preg_replace('/\d/', '', $requestNasabah->nama_nasabah),
                'role' => 'nasabah',
                'email' => $requestNasabah->email_nasabah,
                'password' => Hash::make('rahasia'),
                'remember_token' => Str::random(60)
            ]);
            $user_id = User::all()->pluck('id')->last();
            $santri_id = preg_replace('/\D/', '', $requestNasabah->nama_nasabah);
            $user = User::find($user_id);
            $user->nasabah()->create([
                'nama_nasabah'  => preg_replace('/\d/', '', $requestNasabah->nama_nasabah),
                'nis_nasabah'  => $requestNasabah->nis_nasabah,
                'nomor_rekening'    => $requestNasabah->nomor_rekening,
                'email'         => $requestNasabah->email_nasabah,
                'jumlah_saldo'  => 0,
                'santri_id'     => $santri_id
            ]);
            Alert::success('Berhasil', 'Nasabah Berhasil di Tambahkan');
            return redirect('nasabah/tambah-nasabah');
        }


    }

    public function verifikasiNasabah(Request $request)
    {
        $statusNasabah = Nasabah::find($request->idNasabah);
        try {
            if ($statusNasabah['status'] === 'Sudah Aktif') {
                return response()->json(['error' => 'Akun Sudah Aktif'], 500);
            } else {
                $nasabah = Nasabah::where('id', $request->idNasabah)
                                ->where('status', 'Belum Aktif')
                                ->update(['status' => $request->status]);
                 return response()->json(['messages' => 'Nasabah Berhasil Diverifikasi'], 200);
            }
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    
}
