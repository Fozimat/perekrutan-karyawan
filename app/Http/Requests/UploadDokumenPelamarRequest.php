<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadDokumenPelamarRequest extends FormRequest
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
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'ktp' => 'required|mimes:jpg,jpeg,png|max:2048',
            'cv' => 'required|mimes:jpg,jpeg,png|max:2048',
            'ijazah' => 'required|mimes:jpg,jpeg,png|max:2048',
            'sim' => 'required|mimes:jpg,jpeg,png|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'foto.required' => 'Foto tidak boleh kosong',
            'ktp.required' => 'KTP tidak boleh kosong',
            'cv.required' => 'CV tidak boleh kosong',
            'ijazah.required' => 'Ijazah tidak boleh kosong',
            'sim.required' => 'SIM tidak boleh kosong',
            'foto.mimes' => 'Foto harus jpg,jpeg,png',
            'ktp.mimes' => 'KTP harus jpg,jpeg,png',
            'cv.mimes' => 'CV harus jpg,jpeg,png',
            'ijazah.mimes' => 'Ijazah harus jpg,jpeg,png',
            'sim.mimes' => 'SIM harus jpg,jpeg,png',
            'ktp.max' => 'Ukuran KTP maksimal 2 MB',
            'foto.max' => 'Ukuran Foto maksimal 2 MB',
            'cv.max' => 'Ukuran CV maksimal 2 MB',
            'ijazah.max' => 'Ukuran Ijazah maksimal 2 MB',
            'sim.max' => 'Ukuran SIM maksimal 2 MB',
        ];
    }
}
