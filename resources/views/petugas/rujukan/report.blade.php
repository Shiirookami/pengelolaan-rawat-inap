<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Surat Rujukan {{ $rujukan->pasien->nama_lengkap }}</title>
    <style type="text/css">
        table {
            font-size: 50px;
        }

        thead {

            color: black;
        }

        td {
            padding: 10px;
            font-size: 12px;

        }

        th {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <div align="center">
        <table border="1">

            <thead>
                <tr>
                    <th colspan="8"
                        style="padding: 5px 20px 5px;  font-style: italic; font-size: 42px; font-weight: bold ";>
                        PEMERINTAHAN KABUPATEN CIANJUR</th>
                </tr>
                <tr>
                    <th colspan="8" style=" font-size: 28px";>DINAS KESEHATAN KABUPATEN CIANJUR</th>
                </tr>
                <tr>
                    <th colspan="8" style=" font-size: 18px";>Jl. Prof. Moch Yamin No.8, Solokpandan, Kec. Cianjur,
                        Kabupaten Cianjur, Jawa Barat 43214</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">Hal:</td>
                    <td>Pengiriman</td>
                    <td colspan="6 ">Cianjur, {{ \Carbon\Carbon::now()->toFormattedDateString() }}</td>

                </tr>
                <tr>
                    <td colspan="2">Pederita Bernama:</td>
                    <td colspan="1">{{ $rujukan->pasien->nama_lengkap }}</td>
                    <td colspan="5">Kepada</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="1"></td>
                    <td colspan="5">Yth. Rumah Sakit {{ $rujukan->nama_rumah_sakit }}</td>
                </tr>
                <tr>
                    <td colspan="8" rowspan="2">Dengan Hormat <br> Kirimkan Penderita:</td>
                </tr>
                <tr></tr>
                <tr>
                    <td colspan="2">Nama:</td>
                    <td colspan="5">{{ $rujukan->pasien->nama_lengkap }}</td>
                </tr>
                <tr>
                    <td colspan="2">Tanggal Lahir:</td>
                    <td colspan="5">{{ \Carbon\Carbon::parse($rujukan->pasien->tanggal_lahir)->format('M d Y') }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Jenis Kelamin:</td>
                    <td colspan="5">{{ $rujukan->pasien->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td colspan="2">Alamat :</td>
                    <td colspan="5">{{ $rujukan->pasien->alamat }}</td>
                </tr>
                <tr>
                    <td colspan="2">Diagnose/Gejala:</td>
                    <td colspan="5">{{ $rujukan->diagnosis }}</td>
                </tr>
                <tr>
                    <td colspan="2">Petolongan Pertama:</td>
                    <td colspan="5">{{ $rujukan->pertolongan_pertama }}</td>
                </tr>
                <tr>
                    <th colspan="8" style="padding-left: 35rem; position: relative;">Terimakasih<br> <br> <br> <br>
                        (....................)</th>
                </tr>
                <tr></tr>
            </tbody>
        </table>
    </div>
</body>

</html>
