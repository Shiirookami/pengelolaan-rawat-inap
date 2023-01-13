@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Pasien Rawat Inap
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Pasien Rawat Inap</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.pasienrawatinap.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-2 col-form-label">No Identitas</label>
                    <div class="col-sm-10">
                        <input id="no_identitas" type="text" class="form-control" name="no_identitas" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input id="nama_lengkap" type="text" class="form-control"name="nama_lengkap" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_hp" id="no_hp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input id="alamat" type="text" class="form-control" name="alamat" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select id="jenis_kelamin" class="form-select" aria-label="Default select example"
                            name="jenis_kelamin" required>
                            <option value="" disabled selected>~Pilih Jenis Kelamin~</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input id="tanggal_masuk" type="date" class="form-control" name="tanggal_masuk" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="golongan_darah" class="col-sm-2 col-form-label">Gol Darah</label>
                    <div class="col-sm-10">
                        <select id="golongan_darah" class="form-select" aria-label="Default select example"
                            name="golongan_darah" required>
                            <option value="" disabled selected>~Pilih Golongan Darah~</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
                    <div class="col-sm-10">
                        <select id="warga_negara" class="form-select" aria-label="Default select example"
                            name="warga_negara" required>
                            <option value="" disabled selected>~Pilih Warga Negara~</option>
                            <option value="WNI">WNI</option>
                            <option value="WNA">WNA</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select id="agama" class="form-select" aria-label="Default select example" name="agama"
                            required>
                            <option value="" disabled selected>~Pilih Agama~</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="KATHOLIK">KATHOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-10">
                        <select id="status_pernikahan" class="form-select" aria-label="Default select example"
                            name="status_pernikahan" required>
                            <option value="" disabled selected>~Pilih Status Pernikahan~</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Lajang">Lajang</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_kepala_keluarga" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                    <div class="col-sm-10">
                        <input id="nama_kepala_keluarga" type="text" class="form-control" name="nama_kepala_keluarga"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan_kepala_keluarga" class="col-sm-2 col-form-label">Pekerjaan Kepala
                        Keluarga</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan_kepala_keluarga" type="text" class="form-control"
                            name="pekerjaan_kepala_keluarga" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp_orang_bertanggung_jawab" class="col-sm-2 col-form-label">No HP Yang Bertanggung
                        Jawab</label>
                    <div class="col-sm-10">
                        <input id="no_hp_orang_bertanggung_jawab" type="number" class="form-control"
                            name="no_hp_orang_bertanggung_jawab" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status_asuransi" class="col-sm-2 col-form-label">Status Asuransi</label>
                    <div class="col-sm-10">
                        <select id="status_asuransi" class="form-select" aria-label="Default select example"
                            name="status_asuransi" required>
                            <option value="" disabled selected>~Pilih Status Asurnasi~</option>
                            <option value="BPJS">BPJS</option>
                            <option value="UMUM">UMUM</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_kamar" class="col-sm-2 col-form-label">Nama kamar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_kamar" id="id_kamar">
                            <option value="" disabled selected>~Pilih Kamar~</option>
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
