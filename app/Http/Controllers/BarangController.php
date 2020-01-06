<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tambahBarang()
    {
        return view('layouts.barang.tambah-barang');
    }
}
