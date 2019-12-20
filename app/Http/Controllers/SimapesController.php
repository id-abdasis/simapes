<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
class SimapesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function install()
    {
        if (User::all()->count() < 1) {
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('rahasia'),
                'role'  => 'admin'
            ]);

            if ($user) {
                return redirect('login');
            }else{
                return 'ada kesalahan';
            }

        }else{
            return "Sudah Ada User terdaftar";
        }
    }
}
