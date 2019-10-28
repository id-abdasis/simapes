<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('layouts.nasabah.index');
    }

    public function tambah_nasabah()
    {
        return view('layouts.nasabah.tambah-nasabah');
    }

    public function create_nasabah(Request $requestNasabah)
    {
        return $requestNasabah->all();
    }
}
