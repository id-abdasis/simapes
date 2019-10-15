<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function tambah_santri()
    {
        return view('layouts.santri.tambah-santri');
    }
}
