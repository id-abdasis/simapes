<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AyahRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            // validasi untuk form santri
            'nama_ayah'     => 'required|min:3',
            'tempat_lahir_ayah'   => 'required|min:5',
            'tanggal_lahir_ayah'  => 'required|min:5',
            'telepon_ayah'  => 'required',
            'pendidikan_ayah'  => 'required',
            'pekerjaan_ayah'  => 'required',
            'keterangan_ayah' =>  'required|min:5',
            'pekerjaan_ayah'  => 'required',
            'provinsi_ayah'  => 'required',
            'kabupaten_ayah'  => 'required',
            'kecamatan_ayah'  => 'required',
            'kelurahan_ayah'  => 'required',
            'desa_ayah'  => 'required',

        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Anda Harus Mengisi Form Ini',
            'max'       => 'Maksimal hanya :max untuk form ini',
            'minx'      => 'Setidak mengisi :min Karakter untuk form ini'
        ];
    }
}
