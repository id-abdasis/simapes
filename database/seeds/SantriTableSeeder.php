<?php

use Illuminate\Database\Seeder;
use DB;

class SantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('santri')->create([
            'status' => Str::random(20),
            'nama_lengkap' => Str::random(100),
            'nama_panggilan' => Str::random(50),
            'tempat_lahir' => Str::random(50),
            'tanggal_lahir' => mt_rand(12122019, 12122019),
            'jenis_kelamin' => Str::random(20),
            'alamat_lengkap' => Str::random(100),
            'no_telepon' => rand(999999999999),
        ]);
    }
}
