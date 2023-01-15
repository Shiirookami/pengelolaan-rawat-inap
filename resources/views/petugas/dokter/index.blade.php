@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Dokter</h5>
            <a href="{{ route('petugas.dokter.create') }}" class="btn btn-primary mb-2">Tambah</a>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">No Indetitas</th>
                        <th scope="col">Spesialis</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item => $dokter)
                        <tr>
                            <th scope="row">{{ $item + 1 }}</th>
                            <td>{{ $dokter->nama_dokter }}</td>
                            <td>{{ $dokter->no_identitas }}</td>
                            <td>{{ $dokter->spesialis }}</td>
                            <td>{{ $dokter->jadwal_dokter }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning btn-sm"
                                    href="{{ route('petugas.dokter.edit', $dokter->id) }}">Edit</a>
                                <form method="post" action="{{ route('petugas.dokter.destroy', $dokter->id) }}"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" onclick="deleteConfirmation('{{ $dokter->nama_dokter }}')"
                                        class="btn btn-danger btn-sm inline-block">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->

        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endpush
