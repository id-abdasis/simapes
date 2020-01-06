<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang\KategoriBarang;
use Validator;
use Alert;

class KategoriBarangController extends Controller
{
    public function tambahKategori()
    {
        $kategoris   =   KategoriBarang::all();
        return view('layouts.barang.tambah-kategori')->with(['kategoris' => $kategoris, 'kategori' => $kategoris]);
    }

    public function storeKategori(Request $request)
    {
        $pesan  = [
            'required' => ':attribute harus diisi,',
            'unique'    => ':attribute sudah ada'
        ];
        $validator = Validator::make($request->all(), [
            'kode_kategori' => 'required|unique:kategori_barangs',
            'nama_kategori'   => 'required|unique:kategori_barangs',
            'diskripsi_kategori' => 'required',
        ], $pesan);
        if ($validator->fails()) {
            $errors = $validator->errors();
            
            if ($errors->any()) {
                Alert::error('Gagal', $errors->all());
                return redirect()->back()->withErrors($validator)->withInput();
            }
        } else {
            # code...
        }
        
        $kategori   =   KategoriBarang::create($request->all());
        return redirect()->route('pertokoan.tambah-kategori');
    }

    public function hapusKategori($id)
    {
        try {
            $kategori = KategoriBarang::findOrFail($id)->delete();
            if ($kategori) {
                Alert::success('Berhasil', 'Data berhasil dihapus');
                return redirect()->route('pertokoan.tambah-kategori');      
            }else{
                Alert::error('Gagal', 'Terjadi kesalahaan saat menghapus data');
                return redirect()->route('pertokoan.tambah-kategori');
            }
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function editKategori($id)
    {
        $kategoris   =   KategoriBarang::all();
        $kategori = KategoriBarang::findOrFail($id);
        return view('layouts.barang.edit-kategori')->with(['kategori' => $kategori, 'kategoris' => $kategoris]);
    }
}
