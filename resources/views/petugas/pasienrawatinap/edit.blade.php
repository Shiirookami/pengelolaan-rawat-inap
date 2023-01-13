@extends('layouts.dashboard_master')
@section('title')
    Halaman Edit Pasien Rawat Inap
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Pasien Rawat Inap</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.pasienrawatinap.update', $item->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-2 col-form-label">No Identitas</label>
                    <div class="col-sm-10">
                        <input id="no_identitas" type="text" class="form-control" name="no_identitas"
                            value="{{ $item->no_identitas }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input id="nama_lengkap" type="text" class="form-control"name="nama_lengkap"
                            value="{{ $item->nama_lengkap }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input id="no_hp" type="number" class="form-control"name="no_hp" value="{{ $item->no_hp }}"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input id="alamat" type="text" class="form-control" name="alamat" value="{{ $item->alamat }}"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir"
                            value="{{ $item->tanggal_lahir }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select id="jenis_kelamin" class="form-select" aria-label="Default select example"
                            name="jenis_kelamin" value="{{ $item->jenis_kelamin }}" required>
                            <option value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                        <input id="tanggal_masuk" type="date" class="form-control" name="tanggal_masuk"
                            value="{{ $item->tanggal_masuk }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="golongan_darah" class="col-sm-2 col-form-label">Gol Darah</label>
                    <div class="col-sm-10">
                        <select id="golongan_darah" class="form-select" aria-label="Default select example"
                            name="golongan_darah" value="{{ $item->golongan_darah }}" required>
                            <option value="A" {{ $item->golongan_darah == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $item->golongan_darah == 'A' ? 'selected' : '' }}>B</option>
                            <option value="AB" {{ $item->golongan_darah == 'A' ? 'selected' : '' }}>AB</option>
                            <option value="O" {{ $item->golongan_darah == 'A' ? 'selected' : '' }}>O</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan" type="text" class="form-control" name="pekerjaan"
                            value="{{ $item->pekerjaan }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="warga_negara" class="col-sm-2 col-form-label">Warga Negara</label>
                    <div class="col-sm-10">
                        <select id="warga_negara" class="form-select" aria-label="Default select example"
                            name="warga_negara" value="{{ $item->warga_negara }}" required>
                            <option value="{{ $item->warga_negara }}">{{ $item->warga_negara }}</option>
                            <option value="WNI" {{ $item->warga_negara == 'WNI' ? 'selected' : '' }}>WNI</option>
                            <option value="WNA" {{ $item->warga_negara == 'WNA' ? 'selected' : '' }}>WNA</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-10">
                        <select id="agama" class="form-select" aria-label="Default select example" name="agama"
                            value="{{ $item->agama }}" required>
                            <option value="ISLAM" {{ $item->agama == 'ISLAM' ? 'selected' : '' }}>ISLAM</option>
                            <option value="BUDHA" {{ $item->agama == 'BUDHA' ? 'selected' : '' }}>BUDHA</option>
                            <option value="KRISTEN" {{ $item->agama == 'KRISTEN' ? 'selected' : '' }}>KRISTEN</option>
                            <option value="KATHOLIK" {{ $item->agama == 'KATHOLIK' ? 'selected' : '' }}>KATHOLIK</option>
                            <option value="HINDU" {{ $item->agama == 'HINDU' ? 'selected' : '' }}>HINDU</option>
                            <option value="KONGHUCU" {{ $item->agama == 'KONGHUCU' ? 'selected' : '' }}>KONGHUCU</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="status_pernikahan" class="col-sm-2 col-form-label">Status Pernikahan</label>
                    <div class="col-sm-10">
                        <select id="status_pernikahan" class="form-select" aria-label="Default select example"
                            name="status_pernikahan" value="{{ $item->status_pernikahan }}" required>
                            <option value="MENIKAH" {{ $item->status_pernikahan == 'MENIKAH' ? 'selected' : '' }}>MENIKAH
                            </option>
                            <option value="LAJANG" {{ $item->status_pernikahan == 'LAJANG' ? 'selected' : '' }}>LAJANG
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nama_kepala_keluarga" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
                    <div class="col-sm-10">
                        <input id="nama_kepala_keluarga" type="text" class="form-control" name="nama_kepala_keluarga"
                            value="{{ $item->nama_kepala_keluarga }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="pekerjaan_kepala_keluarga" class="col-sm-2 col-form-label">Pekerjaan Kepala
                        Keluarga</label>
                    <div class="col-sm-10">
                        <input id="pekerjaan_kepala_keluarga" type="text" class="form-control"
                            name="pekerjaan_kepala_keluarga" value="{{ $item->pekerjaan_kepala_keluarga }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_hp_orang_bertanggung_jawab" class="col-sm-2 col-form-label">No HP Yang Bertanggung
                        Jawab</label>
                    <div class="col-sm-10">
                        <input id="no_hp_orang_bertanggung_jawab" type="number" class="form-control"
                            name="no_hp_orang_bertanggung_jawab" value="{{ $item->no_hp_orang_bertanggung_jawab }}"
                            required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="status_asuransi" class="col-sm-2 col-form-label">Asuransi</label>
                    <div class="col-sm-10">
                        <select id="status_asuransi" class="form-select" aria-label="Default select example"
                            name="status_asuransi" value="{{ $item->status_asuransi }}" required>
                            <option value="BPJS" {{ $item->status_asuransi == 'BPJS' ? 'selected' : '' }}>BPJS</option>
                            <option value="UMUM" {{ $item->status_asuransi == 'UMUM' ? 'selected' : '' }}>UMUM</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="id_kamar" class="col-sm-2 col-form-label">Nama Kamar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="id_kamar" id="id_kamar" required>
                            @foreach ($kamars as $kamar)
                                <option value="{{ $kamar->id }}"
                                    {{ $kamar->id == $item->id_kamar ? 'selected' : '' }}>{{ $kamar->nama_kamar }}
                                </option>
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
