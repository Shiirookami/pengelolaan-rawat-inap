<?php

namespace App\Exports;


use App\Models\PasienRawatInap;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PasienExport implements FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        $pasiens =  PasienRawatInap::with('kamar')->get();
        $pasiens = $pasiens->toArray();
        $data = [];
        for ($i = 0; $i < count($pasiens); $i++) {
            $data[$i]['id'] = $i+1;
            $data[$i]['no_identitas'] = $pasiens[$i]['no_identitas'];
            $data[$i]['nama_lengkap'] = $pasiens[$i]['nama_lengkap'];
            $data[$i]['no_hp'] = $pasiens[$i]['no_hp'];
            $data[$i]['alamat'] = $pasiens[$i]['alamat'];
            $data[$i]['tanggal_lahir'] = $pasiens[$i]['tanggal_lahir'];
            $data[$i]['jenis_kelamin'] = $pasiens[$i]['jenis_kelamin'];
            $data[$i]['tanggal_masuk'] = $pasiens[$i]['tanggal_masuk'];
            $data[$i]['golongan_darah'] = $pasiens[$i]['golongan_darah'];
            $data[$i]['pekerjaan'] = $pasiens[$i]['pekerjaan'];
            $data[$i]['warga_negara'] = $pasiens[$i]['warga_negara'];
            $data[$i]['agama'] = $pasiens[$i]['agama'];
            $data[$i]['status_pernikahan'] = $pasiens[$i]['status_pernikahan'];
            $data[$i]['nama_kepala_keluarga'] = $pasiens[$i]['nama_kepala_keluarga'];
            $data[$i]['pekerjaan_kepala_keluarga'] = $pasiens[$i]['pekerjaan_kepala_keluarga'];
            $data[$i]['no_hp_orang_bertanggung_jawab'] = $pasiens[$i]['no_hp_orang_bertanggung_jawab'];
            $data[$i]['status_asuransi'] = $pasiens[$i]['status_asuransi'];
            $data[$i]['nama_kamar'] = $pasiens[$i]['kamar']['nama_kamar'];
        }
        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'No Identitas',
            'Nama Lengkap',
            'No HP',
            'Alamat',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Tanggal Masuk',
            'Golongan Darah',
            'Pekerjaan',
            'Warga Negara',
            'Agama',
            'Status Pernikahan',
            'Nama Kepala Keluarga',
            'Pekerjaan Kepala Keluarga',
            'No HP Orang Yang Bertanggung Jawab',
            'Status Asuransi',
            'Nama Kamar',
        ];
    }
}
