<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EbankController extends Controller
{
    public function index()
    {
        return view('layouts.transaksi.index');
    }

    public function setor_tunai()
    {
        return view('layouts.transaksi.setor-tunai');
    }

    public function tarik_tunai()
    {
        return view('layouts.transaksi.tarik-tunai');
    }

    public function mutasi_tabungan()
    {
        return view('layouts.transaksi.mutasi-tabungan');
    }

    public function laporan_ebank()
    {
        return view('layouts.transaksi.laporan-ebank');
    }
}
