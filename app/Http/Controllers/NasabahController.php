<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use App\Santri;

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
        return $requestNasabah->all();
    }
}
