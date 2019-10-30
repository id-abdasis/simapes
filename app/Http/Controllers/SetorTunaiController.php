<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabah;
use Auth;
use App\User;

class SetorTunaiController extends Controller
{

    public function setor_tunai()
    {
        $nasabah = Nasabah::all();
        return view('layouts.transaksi.setor-tunai')->with(['nasabahs' => $nasabah]);
    }
    public function store_setor_tunai(Request $requestSetor)
    {
        return $requestSetor->all();
    }
}
