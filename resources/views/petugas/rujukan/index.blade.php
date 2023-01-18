@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Rujukan
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Rujukan</h5>
            <a href="{{ route('petugas.rujukan.create') }}" class="btn btn-primary mb-2">Tambah</a>
            <!-- Table with hoverable rows -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama Rumah Sakit</th>
                            <th scope="col">No Identitas</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Diagnose</th>
                            <th scope="col">Pertologan</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rujukans as $item => $rujukan)
                            <tr>
                                <th scope="row">{{ $item + 1 }}</th>
                                <td>{{ $rujukan->tanggal }}</td>
                                <td>{{ $rujukan->nama_rumah_sakit }}</td>
                                <td>{{ $rujukan->no_identitas }}</td>
                                <td>{{ $rujukan->nama_pasien }}</td>
                                <td>{{ $rujukan->tanggal_lahir }}</td>
                                <td>{{ $rujukan->jenis_kelamin }}</td>
                                <td>{{ $rujukan->alamat }}</td>
                                <td>{{ $rujukan->diagnosis }}</td>
                                <td>{{ $rujukan->pertolongan_pertama }}</td>
                                <td class="text-center">
                                    <a href="{{ route('petugas.rujukan.print', $rujukan->id) }}"
                                        class="btn btn-danger">Print</a>
                                    {{-- <a class="btn btn-warning"
                                        href="{{ route('petugas.rujukan.edit', $rujukan->id) }}">Edit</a>
                                    <form method="post" action="{{ route('petugas.rujukan.destroy', $rujukan->id) }}"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="button" onclick="deleteConfirmation('{{  }}')"
                                            class="btn btn-danger btn-sm">Delete</button>
                                    </form> --}}
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
