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
}
