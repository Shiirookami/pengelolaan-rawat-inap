@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Rujukan
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Tambah Rujukan</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.rujukan.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input id="tanggal" type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_rumah_sakit" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                    <div class="col-sm-10">
                        <input id="nama_rumah_sakit" type="text" class="form-control" name="nama_rumah_sakit" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="diagnosis" class="col-sm-2 col-form-label">Diagnose/Gejala</label>
                    <div class="col-sm-10">
                        <input id="diagnosis" type="text" class="form-control" name="diagnosis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pertolongan_pertama" class="col-sm-2 col-form-label">Pertolongan Pertama</label>
                    <div class="col-sm-10">
                        <input id="pertolongan_pertama" type="text" class="form-control" name="pertolongan_pertama"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_pasien" id="id_pasien" required>
                            <option value="" disabled selected>~Pilih Nama Pasien~</option>
                            @foreach ($pasiens as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="col-sm-2 offset-2"><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
@endsection
