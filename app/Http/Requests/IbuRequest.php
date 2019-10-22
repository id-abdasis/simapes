<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IbuRequest extends FormRequest
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
            'nama_ibu'     => 'required|min:3',
            'tempat_lahir_ibu'   => 'required|min:5',
            'tanggal_lahir_ibu'  => 'required|min:5',
            'telepon_ibu'  => 'required',
            'pendidikan_ibu'  => 'required',
            'pekerjaan_ibu'  => 'required',
            'keterangan_ibu' =>  'required|min:5',
            'pekerjaan_ibu'  => 'required',
            'provinsi_ibu'  => 'required',
            'kabupaten_ibu'  => 'required',
            'kecamatan_ibu'  => 'required',
            'kelurahan_ibu'  => 'required',
            'desa_ibu'  => 'required',

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
