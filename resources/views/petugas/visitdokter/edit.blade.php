@extends('layouts.dashboard_master')
@section('title')
    Halaman Edit Visit Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Edit Visit Dokter</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tensi Darah</th>
                        <th scope="col">Penyakit</th>
                        <th scope="col">Obat</th>
                        <th scope="col">Perkembangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visit_dokters as $key => $visit_dokter)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $visit_dokter->tensi_darah }}</td>
                            <td>{{ $visit_dokter->penyakit }}</td>
                            <td>{{ $visit_dokter->obat }}</td>
                            <td>{{ $visit_dokter->perkembangan }}</td>
                            </form>
                            </td>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
            <!-- General Form Elements -->
            <form action="{{ route('petugas.visitdokter.update', $item->id_pasien_rawat_inap) }}" method="POST">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <input id="nama_dokter" type="text" class="form-control" value="{{ $item->dokter->nama_dokter }}"
                            disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_pasien" class="col-sm-2 col-form-label">Nama Pasien</label>
                    <div class="col-sm-10">
                        <input id="nama_pasien" type="text" class="form-control"
                            value="{{ $item->pasien->nama_lengkap }}" disabled>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Tensi Darah</label>
                    <div class="col-sm-10">
                        <input id="tensi_darah" type="text" class="form-control" name="tensi_darah"
                            value="{{ $item->tensi_darah }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penyakit" class="col-sm-2 col-form-label">Penyakit</label>
                    <div class="col-sm-10">
                        <input id="penyakit" type="text" class="form-control" name="penyakit"
                            value="{{ $item->penyakit }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="obat" class="col-sm-2 col-form-label">Obat</label>
                    <div class="col-sm-10">
                        <input id="obat" type="text" class="form-control" name="obat"
                            value="{{ $item->obat }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="perkembangan" class="col-sm-2 col-form-label">Perkembangan</label>
                    <div class="col-sm-10">
                        <input id="perkembangan" type="text" class="form-control" name="perkembangan"
                            value="{{ $item->perkembangan }}">
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="col-sm-2 offset-2"><br>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('petugas.rujukan.create', $item->id_pasien_rawat_inap) }}"
                            class="btn btn-danger">Rujuk</a>
                    </div>
                </div>
            </form><!-- End General Form Elements -->

        </div>
    </div>
@endsection
