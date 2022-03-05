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
            'nik' => 'required|integer',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'agama' => 'required',
            'telephone' => 'required'
        ];
    }
}
