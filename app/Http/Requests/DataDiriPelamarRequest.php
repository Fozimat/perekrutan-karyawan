<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataDiriPelamarRequest extends FormRequest
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
            'id_user' => 'required',
            'nik' => 'required|integer|unique:data_diri,nik,' . $this->id,
            'nama_lengkap' => 'required',
            'id_lowongan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'agama' => 'required',
            'telephone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nik.required' => 'NIK tidak boleh kosong',
            'nik.integer' => 'NIK harus angka',
            'nik.unique' => 'NIK sudah pernah digunakan',
            'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
            'id_lowongan.required' => 'Posisi tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan Terakhir tidak boleh kosong',
            'agama.required' => 'Agana tidak boleh kosong',
            'telephone.required' => 'Nomor Telephone tidak boleh kosong',
        ];
    }
}
