<?php

namespace App\Imports;

use App\Models\PasienRawatInap;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Str;

class PasienImport implements ToCollection, WithHeadingRow, WithValidation
{
    /**
    * @param Collection $collection
    */
    use Importable;

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            PasienRawatInap::create([
                'no_identitas' => $row['no_identitas'],
                'nama_lengkap' => $row['nama_lengkap'],
                'no_hp' => $row['no_hp'],
                'alamat' => $row['alamat'],
                'tanggal_lahir' => $row['tanggal_lahir'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'tanggal_masuk' => $row['tanggal_masuk'],
                'golongan_darah' => $row['golongan_darah'],
                'pekerjaan' => $row['pekerjaan'],
                'warga_negara' => $row['warga_negara'],
                'agama' => $row['agama'],
                'status_pernikahan' => $row['status_pernikahan'],
                'nama_kepala_keluarga' => $row['nama_kepala_keluarga'],
                'pekerjaan_kepala_keluarga' => $row['pekerjaan_kepala_keluarga'],
                'no_hp_orang_bertanggung_jawab' => $row['no_hp_orang_bertanggung_jawab'],
                'status_asuransi' => $row['status_asuransi'],
                'id_kamar' => $row['id_kamar'],
            ]);
        }
    }

    public function headingRow(): int
    {
        return 1;
    }

    public function rules(): array
    {
        return [
            'no_identitas' => ['required', 'numeric', 'unique:pasien_rawat_inaps'],
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
            'status_pernikahan' => ['required', 'in:Menikah,Lajang'],
            'nama_kepala_keluarga' => ['required'],
            'pekerjaan_kepala_keluarga' => ['required'],
            'no_hp_orang_bertanggung_jawab' => ['required', 'numeric', 'min:11'],
            'status_asuransi' => ['required', 'in:BPJS,UMUM'],
            'id_kamar' => ['required', 'integer', 'exists:kamars,id'],
        ];
    }
}
