<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Ayah;
use App\Http\Requests\SantriRequest;
use App\Http\Requests\AyahRequest;
use App\Http\Requests\IbuRequest;
use App\Http\Requests\WaliRequest;
use App\Ibu;
use App\Wali;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Alert;

class SantriController extends Controller
{



    public function tambah_santri()
    {
        return view('layouts.santri.tambah-santri');
    }


    public function simpan_santri(Request $requestSantri)
    {


        $rules = [
            'nama_lengkap_santri'   => 'required',
            'alamat_santri'         => 'required',
            'tempat_lahir_santri'   => 'required',
            'tanggal_lahir_santri'  => 'required',
            'alamat_santri'         => 'required',
            'anak_ke'               => 'required',
            'jumlah_saudara'        => 'required',
            'tinggal_bersama'       => 'required',
            'asal_sekolah'          => 'required',
        ];

        $messages = [
            'nama_lengkap_santri.required' => 'Nama Santri Harus Diisi.',
            'nama_lengkap_santri.max'       => 'Maksimal 3 Karakter',
            'alamat_santri.max'       => 'Maksimal 3 Karakter',
        ];


        $validator = Validator::make($requestSantri->all(), $rules, $messages);
        if ($requestSantri->hasFile('photo_profil')) {
            $extention = $requestSantri->file('photo_profil')->getClientOriginalExtension();
            $foto_profil = $requestSantri->file('photo_profil')->move('avatar/', $requestSantri->nama_lengkap_santri . date('dmy:s') . '_' . 'avatar' . '.'.$extention);
        } else {
            $foto_profil = 'avatar/avatar-default.png';
        }


        if ($validator->fails()) {
            return redirect('/santri/tambah-santri')
                ->withErrors($validator)
                ->withInput();
        }else{

            Santri::create([
                'status'                =>  'Belum Aktif',
                'nama_lengkap'          =>  $requestSantri->nama_lengkap_santri,
                'nama_panggilan'        =>  $requestSantri->nama_panggilan_santri,
                'tempat_lahir'          =>  $requestSantri->tempat_lahir_santri,
                'tanggal_lahir'         =>  $requestSantri->tanggal_lahir_santri,
                'jenis_kelamin'         =>  $requestSantri->jenis_kelamin_santri,
                'alamat_lengkap'        =>  $requestSantri->alamat_santri,
                'no_telepon'            =>  $requestSantri->no_telepon_santri,
                'jarak_tempuh'          =>  $requestSantri->jarak_kepondok,
                'berat_badan'           =>  $requestSantri->berat_badan,
                'tinggi_badan'          =>  $requestSantri->tinggi_badan,
                'golongan_darah'        =>  $requestSantri->golongan_darah_santri,
                'kewarganegaraan'       =>  $requestSantri->kewarganegaraan_santri,
                'anak_ke'               =>  $requestSantri->anak_ke,
                'jumlah_saudara'        =>  $requestSantri->jumlah_saudara,
                'tinggal_bersama'       =>  $requestSantri->tinggal_bersama,
                'asal_sekolah'          =>  $requestSantri->asal_sekolah,
                'nama_sekolah_asal'     =>  $requestSantri->nama_sekolah,
                'alamat_sekolah_asal'   =>  $requestSantri->alamat_sekolah,
                'tahun_masuk'           =>  $requestSantri->tahun_masuk,
                'foto_profil'           =>  $foto_profil,
            ]);

            $santri_id = Santri::all()->pluck('id')->last();
            $santri = Santri::find($santri_id);

            $santri->ayah()->create([
                'nama_lengkap'          =>  $requestSantri->nama_ayah,
                'tempat_lahir'          =>  $requestSantri->tempat_lahir_ayah,
                'tanggal_lahir'         =>  $requestSantri->tanggal_lahir_ayah,
                'pendidikan'            =>  $requestSantri->pendidikan_ayah,
                'pekerjaan'             =>  $requestSantri->pekerjaan_ayah,
                'penghasilan'           =>  $requestSantri->penghasilan_ayah,
                'telepon'               =>  $requestSantri->telepon_ayah,
                'email'                 =>  $requestSantri->email_ayah,
                'keterangan'            =>  $requestSantri->keterangan_ayah,
                'provinsi'              =>  $requestSantri->provinsi_ortu,
                'kabupaten'             =>  $requestSantri->kabupaten_ortu,
                'kecamatan'             =>  $requestSantri->kecamatan_ortu,
                'desa'                  =>  $requestSantri->kelurahan_ortu,
                'dusun'                 =>  $requestSantri->dusun_ortu,
                'rt'                    =>  $requestSantri->rt_ortu,
                'rw'                    =>  $requestSantri->rw_ortu,
                'nama_jalan'            =>  $requestSantri->alamat_jalan_ortu,
            ]);

            $santri->ibu()->create([
                'nama_lengkap'          =>  $requestSantri->nama_ibu,
                'tempat_lahir'          =>  $requestSantri->tempat_lahir_ibu,
                'tanggal_lahir'         =>  $requestSantri->tanggal_lahir_ibu,
                'pendidikan'            =>  $requestSantri->pendidikan_ibu,
                'pekerjaan'             =>  $requestSantri->pekerjaan_ibu,
                'penghasilan'           =>  $requestSantri->penghasilan_ibu,
                'telepon'               =>  $requestSantri->telepon_ibu,
                'email'                 =>  $requestSantri->email_ibu,
                'keterangan'            =>  $requestSantri->keterangan_ibu,
                'provinsi'              =>  $requestSantri->provinsi_ortu,
                'kabupaten'             =>  $requestSantri->kabupaten_ortu,
                'kecamatan'             =>  $requestSantri->kecamatan_ortu,
                'desa'                  =>  $requestSantri->kelurahan_ortu,
                'dusun'                 =>  $requestSantri->dusun_ortu,
                'rt'                    =>  $requestSantri->rt_ortu,
                'rw'                    =>  $requestSantri->rw_ortu,
                'nama_jalan'            =>  $requestSantri->alamat_jalan_ortu,
            ]);

            $santri->wali()->create([
                'nama_lengkap'          =>  $requestSantri->nama_wali,
                'tempat_lahir'          =>  $requestSantri->tempat_lahir_wali,
                'tanggal_lahir'         =>  $requestSantri->tanggal_lahir_wali,
                'pendidikan'            =>  $requestSantri->pendidikan_wali,
                'pekerjaan'             =>  $requestSantri->pekerjaan_wali,
                'penghasilan'           =>  $requestSantri->penghasilan_wali,
                'telepon'               =>  $requestSantri->telepon_wali,
                'email'                 =>  $requestSantri->email_wali,
                'keterangan'            =>  $requestSantri->keterangan_wali,
                'provinsi'              =>  $requestSantri->provinsi_ortu,
                'kabupaten'             =>  $requestSantri->kabupaten_ortu,
                'kecamatan'             =>  $requestSantri->kecamatan_ortu,
                'desa'                  =>  $requestSantri->kelurahan_ortu,
                'dusun'                 =>  $requestSantri->dusun_ortu,
                'rt'                    =>  $requestSantri->rt_ortu,
                'rw'                    =>  $requestSantri->rw_ortu,
                'nama_jalan'            =>  $requestSantri->alamat_jalan_ortu,
            ]);
            Alert::success('Berhasil', 'Berhasil Menambahkan Santri');
            return redirect('/santri/daftar-santri');

        }

    }

    public function sunting_santri($id,  $nama_lengkap)
    {
        if (Santri::find($id)->count() > 0) {
            $santri = Santri::find($id);
            return view('layouts.santri.sunting-santri', ['santri' => $santri]);
        }else {
            $jenis_error = 'Data dengan ID ' . $id . ' Tidak di temukan';
            return view('errors.404', ['jenis_error' => $jenis_error]);
        }
    }

    public function daftar_santri()
    {
        if (Santri::all()->count() > 0) {
            $santris = Santri::paginate(16);
            return view('layouts.santri.daftar-santri', ['santris' => $santris]);
        }else{
            $jenis_error = 'Masih Belum Ada Data';
            return view('errors.404', ['jenis_error' => $jenis_error]);
        }

    }

    public function update_santri(Request $request)
    {

    }

    public function cari_santri(Request $requestSantri)
    {
        $nama_santri    = $requestSantri->nama_santri;
        $santri = Santri::where('nama_lengkap', $nama_santri)->paginate(16);
        return view('layouts.santri.daftar-santri', ['santris' => $santri] );
    }
}
