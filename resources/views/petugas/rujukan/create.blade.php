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
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Rujukan</label>
                    <div class="col-sm-10">
                        <input id="tanggal" type="date" class="form-control"
                            value="{{ $errors->has('tanggal') ? '' : old('tanggal') }}" name="tanggal" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_rumah_sakit" class="col-sm-2 col-form-label">Nama Rumah Sakit Yang Dituju</label>
                    <div class="col-sm-10">
                        <input id="nama_rumah_sakit" type="text" class="form-control"
                            value="{{ $errors->has('nama_rumah_sakit') ? '' : old('nama_rumah_sakit') }}"
                            name="nama_rumah_sakit" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="diagnosis" class="col-sm-2 col-form-label">Diagnose/Gejala</label>
                    <div class="col-sm-10">
                        <input id="diagnosis" type="text" class="form-control"
                            value="{{ $errors->has('diagnosis') ? '' : old('diagnosis') }}" name="diagnosis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pertolongan_pertama" class="col-sm-2 col-form-label">Pertolongan Pertama</label>
                    <div class="col-sm-10">
                        <input id="pertolongan_pertama" type="text" class="form-control"
                            value="{{ $errors->has('pertolongan_pertama') ? '' : old('pertolongan_pertama') }}"
                            name="pertolongan_pertama" required>
                    </div>
                </div>
                @if ($id_pasien)
                    <input type="hidden" name="id_pasien_rawat_inap" value="{{ $pasien->id }}">
                    <div class="row mb-3">
                        <label for="no_identitas" class="col-sm-2 col-form-label">No Identitas</label>
                        <div class="col-sm-10">
                            <input name="no_identitas" id="no_identitas" type="number" class="form-control"
                                value="{{ $pasien->no_identitas }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input name="nama_pasien" id="nama_pasien" type="text" class="form-control"
                                value="{{ $pasien->nama_lengkap }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jenis_kelamin" class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                disabled>
                                <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control"
                                value="{{ $pasien->tanggal_lahir }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input id="alamat" type="text" class="form-control" value="{{ $pasien->alamat }}"
                                disabled>
                        </div>
                    </div>
                @else
                    <div class="row mb-3">
                        <label for="no_identitas" class="col-sm-2 col-form-label">No Identitas</label>
                        <div class="col-sm-10">
                            <input id="no_identitas" type="text" class="form-control" name="no_identitas"
                                value="{{ $errors->has('no_identitas') ? '' : old('no_identitas') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                        <div class="col-sm-10">
                            <input id="nama_pasien" type="text" class="form-control" name="nama_pasien"
                                value="{{ $errors->has('nama_pasien') ? '' : old('nama_pasien') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir"
                                value="{{ $errors->has('tanggal_lahir') ? '' : old('tanggal_lahir') }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        @php
                            $jenis_kelamin = $errors->has('jenis_kelamin') ? '' : old('jenis_kelamin');
                        @endphp
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                                <option value="" disabled selected>~Pilih Jenis Kelamin~</option>
                                <option value="Laki-laki" {{ $jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                                </option>
                                <option value="Perempuan" {{ $jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input id="alamat" type="text" class="form-control" name="alamat"
                                value="{{ $errors->has('alamat') ? '' : old('alamat') }}">
                        </div>
                    </div>
                @endif
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
