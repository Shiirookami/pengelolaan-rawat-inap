<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasienRawatInapRequest extends FormRequest
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
            'no_identitas' => ['required', 'numeric'],
            'nama_lengkap' => ['required'],
            'no_hp' => ['required', 'numeric', 'min:11'],
            'alamat' => ['required'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required', 'in:Laki-laki,Perempuan'],
            'tanggal_masuk' => ['required', 'date'],
            'golongan_darah' => ['required', 'in:A,B,AB,O'],
            'pekerjaan' => ['required'],
            'warga_negara' => ['required', 'in:WNI,WNA'],
            'agama' => ['required'],
            'status_pernikahan' => ['required', 'in:MENIKAH,LAJANG'],
            'nama_kepala_keluarga' => ['required'],
            'pekerjaan_kepala_keluarga' => ['required'],
            'no_hp_orang_bertanggung_jawab' => ['required', 'numeric', 'min:11'],
            'status_asuransi' => ['required', 'in:BPJS,UMUM'],
            'id_kamar' => ['required', 'integer', 'exists:kamars,id'],
        ];
    }
}
