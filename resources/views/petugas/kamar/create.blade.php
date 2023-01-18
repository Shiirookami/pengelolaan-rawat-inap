@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Kamar
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Tambah Kamar</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.kamar.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="nama_kamar" class="col-sm-2 col-form-label">Nama Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            value="{{ $errors->has('nama_kamar') ? '' : old('nama_kamar') }}" name="nama_kamar"
                            id="nama_kamar" required>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $kelas = $errors->has('kelas') ? '' : old('kelas');
                    @endphp
                    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kelas" id="kelas" required>
                            <option value="" disabled selected>~Pilih Kamar~</option>
                            <option value="1" {{ $kelas == '1' ? 'selected' : '' }}>VIP</option>
                            <option value="2" {{ $kelas == '2' ? 'selected' : '' }}>EKOMOMI</option>
                            {{-- <option value="3">BPJS</option>
                            <option value="4">ASURANSI</option> --}}
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $errors->has('harga') ? '' : old('harga') }}"
                            name="harga" id="harga" required>
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
