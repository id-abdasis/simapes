<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SantriRequest extends FormRequest
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
            'nama_lengkap_santri' => 'required',
            // 'nama_panggilan_santri' => 'required',
            // 'tempat_lahir_santri'   => 'required',
            // 'tanggal_lahir_santri'  => 'required',
            // 'jenis_kelamin_santri'  => 'required',
            // 'alamat_lengkap_santri' =>  'required',
            // 'anak_ke'               => 'required',
            // 'jumlah_saudara'        => 'required',
            // 'tinggal_bersama'       => 'required',
            // 'sekolah_asal'          => 'required',
            // 'nama_sekolah'          => 'required',
            // 'alamat_sekolah'        => 'required',
            // 'tahun_masuk'           => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_lengkap_santri.required'  => 'Nama Lengkap Santri Wajib Diisi',
            'nama_lengkap_santri.max'       => 'Maksimal Nama Santri 3 Huruf',
        ];
    }
}
