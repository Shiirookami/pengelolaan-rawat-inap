<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_dokter' => ['required'],
            'no_identitas' => ['required', 'numeric', 'unique:dokters'],
            'spesialis' => ['required'],
            'hari_mulai' => ['required'],
            'hari_berakhir' => ['required'],
            'jam' => ['required'],
        ];
    }
}
