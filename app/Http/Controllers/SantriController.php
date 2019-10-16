<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function tambah_santri()
    {
        return view('layouts.santri.tambah-santri');
    }

    public function simpan_santri(Request $request)
    {
        return $request->all();
    }
}
