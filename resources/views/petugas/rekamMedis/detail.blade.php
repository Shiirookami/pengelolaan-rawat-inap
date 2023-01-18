@extends('layouts.dashboard_master')
@section('title')
    Halaman Detail Rekam Medis
@endsection
@section('content')
    @php
        $date1 = $pinjamkamar->tanggal_masuk;
        $date2 = $pinjamkamar->tanggal_keluar;
        $difference = strtotime($date2) - strtotime($date1);
        $range = $difference / (24 * 60 * 60);
        $hari = $range == 0 ? 1 : $range;
        $harga_kamar = $pinjamkamar->kamar->harga * $hari;
    @endphp
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Detail Rekam Medis</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.rekammedis.print', $pinjamkamar->id_pasien_rawat_inap) }}" method="POST">
                @csrf
                <fieldset disabled="">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->pasien->nama_lengkap }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Identitas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->pasien->no_identitas }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->pasien->alamat }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->pasien->jenis_kelamin }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" value="{{ $pinjamkamar->tanggal_masuk }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" value="{{ $pinjamkamar->tanggal_keluar }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Status BPJS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->pasien->status_asuransi }}">
                        </div>
                    </div>
                    @foreach ($visitdokter as $key => $data)
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">VisitDokter Ke
                                {{ $key + 1 }}</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" value="{{ $data->created_at }}">
                            </div>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" value="Tensi Darah: {{ $data->tensi_darah }}">
                                <input type="text" class="form-control" value="Obat: {{ $data->obat }}">
                                <input type="text" class="form-control" value="Penyakit: {{ $data->penyakit }}">
                                <input type="text" class="form-control" value="Perkembangan: {{ $data->perkembangan }}">
                            </div>
                        </div>
                    @endforeach
                    <div class="row mb-3">
                        <label for="inputDate" class="col-sm-2 col-form-label">Kamar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $pinjamkamar->kamar->nama_kamar }}">
                            <input type="text" class="form-control"
                                value="Rp. {{ $pinjamkamar->kamar->harga }} * ({{ $hari }} Hari)">
                            <input type="text" class="form-control" value="Rp. {{ $harga_kamar }}">
                        </div>
                    </div>
                    @if ($pinjamkamar->pasien->status_asuransi == 'BPJS')
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Biaya Perawatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Rp. 0">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-2 col-form-label">Total Pembayaran</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Rp. {{ $harga_kamar }}">
                            </div>
                        </div>
                </fieldset>
            @else
                </fieldset>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Biaya Perawatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="biaya_perawatan">
                    </div>
                </div>
                @endif

                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="d-grid col-1 mx-auto"><br>
                        <button type="submit" class="btn btn-danger">Print</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
@endsection
