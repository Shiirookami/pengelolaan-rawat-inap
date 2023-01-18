<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RujukanRequest extends FormRequest
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
            'tanggal' => ['required'],
            'nama_rumah_sakit' => ['required'],
            'diagnosis' => ['required'],
            'pertolongan_pertama' => ['required'],
        ];
    }
}
