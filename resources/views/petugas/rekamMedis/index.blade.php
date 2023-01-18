@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Rekam Medis
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Rekam Medis</h5>
            <!-- Table with hoverable rows -->
            <div class="table-responsive">
                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">No Identitas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Tanggal Keluar</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $data)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $data->pasien->nama_lengkap }}</td>
                                <td>{{ $data->pasien->no_identitas }}</td>
                                <td>{{ $data->pasien->alamat }}</td>
                                <td>{{ $data->pasien->jenis_kelamin }}</td>
                                <td>{{ $data->kamar->nama_kamar }}</td>
                                <td>{{ $data->tanggal_masuk }}</td>
                                <td>{{ $data->tanggal_keluar }}</td>
                                <td class="text-center">
                                    <a href="{{ route('petugas.rekammedis.detail', $data->id_pasien_rawat_inap) }}"
                                        class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with hoverable rows -->

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endpush
