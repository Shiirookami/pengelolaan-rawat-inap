@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Visit Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Visit Dokter</h5>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('petugas.visitdokter.create') }}" class="btn btn-primary mb-2">Tambah</a>
            </div>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tensi Darah</th>
                        <th scope="col">Penyakit</th>
                        <th scope="col">Obat</th>
                        <th scope="col">Perkembangan</th>
                        <th scope="col">Nama Dokter</th>
                        {{-- <th scope="col">No Indetitas Dokter</th> --}}
                        <th scope="col">Nama Pasien</th>
                        {{-- <th scope="col">No Indetitas Pasien</th> --}}
                        <th scope="col">Jenis Kelamin</th>
                        {{-- <th scope="col">Status Pasien</th> --}}
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item => $visit_dokter)
                        <tr>
                            <th scope="row">{{ $item + 1 }}</th>
                            <td>{{ $visit_dokter->tensi_darah }}</td>
                            <td>{{ $visit_dokter->penyakit }}</td>
                            <td>{{ $visit_dokter->obat }}</td>
                            <td>{{ $visit_dokter->perkembangan }}</td>
                            <td>{{ $visit_dokter->dokter->nama_dokter }}</td>
                            {{-- <td>{{$visit_dokter->dokter->no_identitas}}</td> --}}
                            <td>{{ $visit_dokter->pasien->nama_lengkap }}</td>
                            {{-- <td>{{$visit_dokter->pasien->no_identitas}}</td> --}}
                            <td>{{ $visit_dokter->pasien->jenis_kelamin }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning btn-sm"
                                    href="{{ route('petugas.visitdokter.edit', $visit_dokter->id) }}">Edit</a>
                                {{-- <form method="post"
                                    action="{{ route('petugas.visitdokter.destroy', $visit_dokter->id) }}">
                                    <button type="button" class="btn btn-warning">
                                    </button>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="deleteConfirmation()"
                                        class="btn btn-danger">Delete</button> --}}
                                </form>
                            </td>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection
