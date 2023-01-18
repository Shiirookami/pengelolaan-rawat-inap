<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    {{-- <link href="{{ asset('template_bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <title>Rekam Medis - {{ $pinjamkamar->pasien->nama_lengkap }}</title>
</head>
<style>
    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    td {
        color: #808080
    }

    table {
        border-spacing: 0px;
    }

    .table td,
    .table th {
        padding: 0;
    }

    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #007bff;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff;
    }

    table {
        border-collapse: collapse;
    }

    th {
        text-align: inherit;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px;
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    @media print {

        *,
        ::after,
        ::before {
            text-shadow: none !important;
            box-shadow: none !important;
        }

        thead {
            display: table-header-group;
        }

        tr {
            page-break-inside: avoid;
        }

        body {
            min-width: 992px !important;
        }

        .container {
            min-width: 992px !important;
        }

        .table {
            border-collapse: collapse !important;
        }

        .table td,
        .table th {
            background-color: #fff !important;
        }
    }
</style>

<body>
    <div class="container">
        <table class="table">
            <tbody>
                <tr>
                    <td rowspan="4" style="padding-top:50px;  border: none; text-align: center">
                        <img src="{{ $_SERVER['DOCUMENT_ROOT'] }}/template/img/logo_puskesmas.png" width="150px"
                            height="150px">
                    </td>
                </tr>
                <tr>
                    <th style="font-size: 22px; border: none;" colspan="3">
                        PUSKESMAS KABUPATEN CIANJUR</th>
                </tr>
                <tr>
                    <td colspan="3" style="border: none; font-style: italic">Jl. Surya Kencana, Sawah Gede, Kec.
                        Cianjur, Kabupaten
                        Cianjur, Jawa Barat 43212
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; font-style: italic">0812-9011-7250</td>
                </tr>
                <tr>
                    <th style="font-size: 15px; border: none; text-align: center" colspan="3">REKAM MEDIS PASIEN
                    </th>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->pasien->nama_lengkap }}</td>
                </tr>
                <tr>
                    <td>No Identitas</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->pasien->no_identitas }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->pasien->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->tanggal_masuk }}</td>
                </tr>
                <tr>
                    <td>Tanggal Keluar</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->tanggal_keluar }}</td>
                </tr>
                <tr>
                    <td>Status Asuransi</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->pasien->status_asuransi }}</td>
                </tr>
                <tr>
                    <td>Durasi</td>
                    <td>:</td>
                    <td>{{ $durasi }} Hari</td>
                </tr>
                <tr>
                    <td>Nama Kamar</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->kamar->nama_kamar }}</td>
                </tr>
                <tr>
                    <td>Kelas Kamar</td>
                    <td>:</td>
                    <td>{{ $pinjamkamar->kamar->kelas_kamar == '1' ? 'VIP' : 'Ekonomi' }}</td>
                </tr>
                <tr>
                    <th colspan="3" style="border: none;">Visit Dokter</th>
                </tr>
                @foreach ($visitdokter as $key => $data)
                    <tr>
                        <td>Visit Ke {{ $key + 1 }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tensi Darah</td>
                        <td>:</td>
                        <td>{{ $data->tensi_darah }}</td>
                    </tr>
                    <tr>
                        <td>Obat</td>
                        <td>:</td>
                        <td>{{ $data->obat }}</td>
                    </tr>
                    <tr>
                        <td>Penyakit</td>
                        <td>:</td>
                        <td>{{ $data->penyakit }}</td>
                    </tr>
                    <tr>
                        <td>Perkembangan</td>
                        <td>:</td>
                        <td>{{ $data->perkembangan }}</td>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="3" style="border: none;">Rincian Biaya</th>
                </tr>
                <tr>
                    <td>Biaya Kamar</td>
                    <td>:</td>
                    <td>{{ $harga_kamar }}</td>
                </tr>
                <tr>
                    <td>Biaya Perawatan</td>
                    <td>:</td>
                    <td>{{ $biaya_perawatan }}</td>
                </tr>
                <tr>
                    <td>Total Biaya</td>
                    <td>:</td>
                    <td>{{ $total_bayar }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
