@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Pasien Rawat Inap
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Pasien Rawat Inap</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.pasienrawatinap.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">No identitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_identitas">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"name="nama_lengkap">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"name="no_hp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example"name="jenis_kelamin">
                            <option selected>Open this select menu</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal_masuk">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Gol Darah</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="golongan_darah">
                            <option selected>Open this select menu</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pekerjaan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="status_pernikahan">
                            <option selected>Open this select menu</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="agama">
                            <option selected>Open this select menu</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISLAM">KRISLAM</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="KATHOLIK">KATHOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">status pernikahan</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="status_pernikahan">
                            <option selected>Open this select menu</option>
                            <option value="MENIKAH">MENIKAH</option>
                            <option value="LAJANG">LAJANG</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kepala_keluarga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Kepala Keluarga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pekerjaan_kepala_keluarga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">No HP Yang bertanggung jawab</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_hp_orang_bertanggung_jawab">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="status_asuransi">
                            <option selected>Open this select menu</option>
                            <option value="BPJS">BPJS</option>
                            <option value="UMUM">UMUM</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Nama kamar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_kamar" id="id_kamar">
                            <option disabled value>pilih nama kamar</option>
                            @foreach ($kamars as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kamar }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="col-sm-2 offset-2"><br>
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
@endsection
