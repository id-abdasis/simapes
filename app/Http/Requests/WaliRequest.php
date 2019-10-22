<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaliRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // validasi untuk form santri
            'nama_wali'     => 'required|min:3',
            'tempat_lahir_wali'   => 'required|min:5',
            'tanggal_lahir_wali'  => 'required|min:5',
            'telepon_wali'  => 'required',
            'pendidikan_wali'  => 'required',
            'pekerjaan_wali'  => 'required',
            'keterangan_wali' =>  'required|min:5',
            'pekerjaan_wali'  => 'required',
            'provinsi_wali'  => 'required',
            'kabupaten_wali'  => 'required',
            'kecamatan_wali'  => 'required',
            'kelurahan_wali'  => 'required',
            'desa_wali'  => 'required',

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
