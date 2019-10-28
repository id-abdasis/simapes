<?php

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class SantriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 50; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('santri')->insert([
    			'status'            => 'Belum Aktif',
                'nama_lengkap'      => $faker->name, 
                'nama_panggilan'    => $faker->lastName,
                'tempat_lahir'      => $faker->city,
                'tanggal_lahir'     => $faker->date($format = 'Y-m-d', $max = 'now'),
                'jenis_kelamin'     => 'Laki-Laki',
                'alamat_lengkap'    => $faker->address,
                'no_telepon'        => $faker->phoneNumber,
                'jarak_tempuh'      => rand(1,100),
                'berat_badan'       => rand(1, 100),      
                'tinggi_badan'      => rand(1,200),
                'golongan_darah'    => 'A',
                'kewarganegaraan'   => 'WNI',
                'anak_ke'          => rand(1, 10),
                'jumlah_saudara'    => rand(1, 10),
                'tinggal_bersama'  => 'Tinggal Bersama Ortu',
                'asal_sekolah'      => 'MD',
                'nama_sekolah_asal' => $faker->city,
                'alamat_sekolah_asal'   => $faker->city,
                'tahun_masuk'       => $faker->date($format = 'Y-m-d', $max = 'now'),
                'foto_profil'       => 'avatar/default-avatar.png',  
    		]);

    	}
    }
}
