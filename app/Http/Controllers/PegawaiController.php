<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
