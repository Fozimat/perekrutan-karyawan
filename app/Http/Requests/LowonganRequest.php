<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LowonganRequest extends FormRequest
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
        if (request()->isMethod('put')) {
            return [
                'posisi' => 'required',
                'batas_lamaran' => 'required',
            ];
            if (request('poster')) {
                $rules['poster'] = 'required|mimes:jpg,jpeg,png|max:2048';
            }
        } else {
            return [
                'posisi' => 'required',
                'batas_lamaran' => 'required',
                'poster' => 'required|mimes:jpg,jpeg,png|max:2048'
            ];
        }
    }

    public function messages()
    {
        return [
            'posisi.required' => 'Posisi tidak boleh kosong',
            'batas_lamaran.required' => 'Batas Lamaran tidak boleh kosong',
            'poster.required' => 'Poster tidak boleh kosong',
            'poster.mimes' => 'Poster harus jpg,jpeg,png',
            'poster.max' => 'Ukuran Poster maksimal 2 MB',
        ];
    }
}
