@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Visit Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Visit Dokter</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.visitdokter.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="id_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <select id="id_dokter" class="form-control" name="id_dokter" required>
                            <option value="" disabled selected>~Pilih Nama Dokter~</option>
                            @foreach ($dokter as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_dokter }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_pasien_rawat_inap" class="col-sm-2 col-form-label">Nama pasien</label>
                    <div class="col-sm-10">
                        <select id="id_pasien_rawat_inap" class="form-control" name="id_pasien_rawat_inap" required>
                            <option value="" disabled selected>~Pilih Nama Pasien~</option>
                            @foreach ($pasien as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tensi_darah" class="col-sm-2 col-form-label">Tensi Darah</label>
                    <div class="col-sm-10">
                        <input id="tensi_darah" type="text" class="form-control" name="tensi_darah" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penyakit" class="col-sm-2 col-form-label">Penyakit</label>
                    <div class="col-sm-10">
                        <input id="penyakit" type="text" class="form-control" name="penyakit" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                    <div class="col-sm-10">
                        <input id="obat" type="text" class="form-control" name="obat" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="perkembangan" class="col-sm-2 col-form-label">Perkembangan</label>
                    <div class="col-sm-10">
                        <input id="perkembangan" type="text" class="form-control" name="perkembangan" required>
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="col-sm-2 offset-2"><br>
                        <button type="submit" class="btn btn-primary">Submits</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->

        </div>
    </div>
    </div>
@endsection
