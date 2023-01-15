@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Pasien Rawat Inap
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Tambah Pasien Rawat Inap</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.pasienrawatinap.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-2 col-form-label">No Identitas</label>
                    <div class="col-sm-10">
                        <input id="no_identitas" type="text" class="form-control"
                            value="{{ $errors->has('no_identitas') ? '' : old('no_identitas') }}" name="no_identitas"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input id="nama_lengkap" type="text"
                            class="form-control"value="{{ $errors->has('nama_lengkap') ? '' : old('nama_lengkap') }}"
                            name="nama_lengkap" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" value="{{ $errors->has('no_hp') ? '' : old('no_hp') }}"
                            name="no_hp" id="no_hp">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input id="alamat" type="text" class="form-control"
                            value="{{ $errors->has('alamat') ? '' : old('alamat') }}" name="alamat" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input id="tanggal_lahir" type="date" class="form-control"
                            value="{{ $errors->has('tanggal_lahir') ? '' : old('tanggal_lahir') }}" name="tanggal_lahir">
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $jenis_kelamin = $errors->has('jenis_kelamin') ? '' : old('jenis_kelamin');
                    @endphp
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                            <option value="" disabled selected>~Pilih Jenis Kelamin~</option>
                            <option value="Laki-laki" {{ $jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input id="tanggal_masuk" type="date" class="form-control"
                            value="{{ $errors->has('tanggal_masuk') ? '' : old('tanggal_masuk') }}" name="tanggal_masuk"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $golongan_darah = $errors->has('golongan_darah') ? '' : old('golongan_darah');
                    @endphp
                    <label for="golongan_darah" class="col-sm-2 col-form-label">Gol Darah</label>
                    <div class="col-sm-10">
                        <select id="golongan_darah" class="form-control" name="golongan_darah" required>
                            <option value="" disabled selected>~Pilih Golongan Darah~</option>
                            <option value="A" {{ $golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $golongan_darah == 'B' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ $golongan_darah == 'AB' ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ $golongan_darah == 'O' ? 'selected' : '' }}>O</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan" type="text" class="form-control"
                            value="{{ $errors->has('pekerjaan') ? '' : old('pekerjaan') }}" name="pekerjaan" required>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $warga_negara = $errors->has('warga_negara') ? '' : old('warga_negara');
                    @endphp
                    <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
                    <div class="col-sm-10">
                        <select id="warga_negara" class="form-control" name="warga_negara" required>
                            <option value="" disabled selected>~Pilih Warga Negara~</option>
                            <option value="WNI" {{ $warga_negara == 'WNI' ? 'selected' : '' }}>WNI</option>
                            <option value="WNA" {{ $warga_negara == 'WNA' ? 'selected' : '' }}>WNA</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $agama = $errors->has('agama') ? '' : old('agama');
                    @endphp
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select id="agama" class="form-control" name="agama" required>
                            <option value="" disabled selected>~Pilih Agama~</option>
                            <option value="ISLAM" {{ $agama == 'ISLAM' ? 'selected' : '' }}>ISLAM</option>
                            <option value="BUDHA" {{ $agama == 'BUDHA' ? 'selected' : '' }}>BUDHA</option>
                            <option value="KRISTEN" {{ $agama == 'KRISTEN' ? 'selected' : '' }}>KRISTEN</option>
                            <option value="KATHOLIK" {{ $agama == 'KATHOLIK' ? 'selected' : '' }}>KATHOLIK</option>
                            <option value="HINDU" {{ $agama == 'ISLAM' ? 'selected' : '' }}>HINDU</option>
                            <option value="KONGHUCU" {{ $agama == 'KONGHUCU' ? 'selected' : '' }}>KONGHUCU</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $status_pernikahan = $errors->has('status_pernikahan') ? '' : old('status_pernikahan');
                    @endphp
                    <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-10">
                        <select id="status_pernikahan" class="form-control" name="status_pernikahan" required>
                            <option value="" disabled selected>~Pilih Status Pernikahan~</option>
                            <option value="Menikah" {{ $status_pernikahan == 'Menikah' ? 'selected' : '' }}>Menikah
                            </option>
                            <option value="Lajang" {{ $status_pernikahan == 'Lajang' ? 'selected' : '' }}>Lajang</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_kepala_keluarga" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                    <div class="col-sm-10">
                        <input id="nama_kepala_keluarga" type="text" class="form-control"
                            value="{{ $errors->has('nama_kepala_keluarga') ? '' : old('nama_kepala_keluarga') }}"
                            name="nama_kepala_keluarga" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan_kepala_keluarga" class="col-sm-2 col-form-label">Pekerjaan Kepala
                        Keluarga</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan_kepala_keluarga" type="text" class="form-control"
                            value="{{ $errors->has('pekerjaan_kepala_keluarga') ? '' : old('pekerjaan_kepala_keluarga') }}"
                            name="pekerjaan_kepala_keluarga" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp_orang_bertanggung_jawab" class="col-sm-2 col-form-label">No HP Yang Bertanggung
                        Jawab</label>
                    <div class="col-sm-10">
                        <input id="no_hp_orang_bertanggung_jawab" type="number" class="form-control"
                            value="{{ $errors->has('no_hp_orang_bertanggung_jawab') ? '' : old('no_hp_orang_bertanggung_jawab') }}"
                            name="no_hp_orang_bertanggung_jawab" required>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $status_asuransi = $errors->has('status_asuransi') ? '' : old('status_asuransi');
                    @endphp
                    <label for="status_asuransi" class="col-sm-2 col-form-label">Status Asuransi</label>
                    <div class="col-sm-10">
                        <select id="status_asuransi" class="form-control" name="status_asuransi" required>
                            <option value="" disabled selected>~Pilih Status Asurnasi~</option>
                            <option value="BPJS" {{ $status_asuransi == 'BPJS' ? 'selected' : '' }}>BPJS</option>
                            <option value="UMUM" {{ $status_asuransi == 'UMUM' ? 'selected' : '' }}>UMUM</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    @php
                        $id_kamar = $errors->has('id_kamar') ? '' : old('id_kamar');
                    @endphp
                    <label for="id_kamar" class="col-sm-2 col-form-label">Nama kamar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_kamar" id="id_kamar">
                            <option value="" disabled selected>~Pilih Kamar~</option>
                            @foreach ($kamars as $item)
                                <option value="{{ $item->id }}" {{ $id_kamar == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_kamar }}</option>
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
