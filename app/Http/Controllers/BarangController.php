<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang\Barang;
use App\Models\Barang\KategoriBarang;

class BarangController extends Controller
{
    public function tambahBarang()
    {
        $kategoriBarang = KategoriBarang::all();
        return view('layouts.barang.tambah-barang')->with([
            'kategoriBarang' => $kategoriBarang,
            'supplier'
        ]);
    }

    public function storeBarang(Request $request)
    {

        $barang = Barang::create($request->all());
        return 'Data Berhasil di Tambahkan';
    }
}
