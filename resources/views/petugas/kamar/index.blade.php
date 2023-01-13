@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Kamar
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Kamar</h5>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('petugas.kamar.create') }}" class="btn btn-primary mb-2">Tambah</a>
            </div>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kamar</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Harga</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item => $kamar)
                        <tr>
                            <th scope="row">{{ $item + 1 }}</th>
                            <td>{{ $kamar->nama_kamar }}</td>
                            <td>{{ $kamar->kelas == '1' ? 'VIP' : 'Ekonomi' }}</td>
                            <td>{{ $kamar->harga }}</td>
                            <td class="text-center">
                                <a class="btn btn-warning btn-sm"
                                    href="{{ route('petugas.kamar.edit', $kamar->id) }}">Edit</a>
                                <form method="post" action="{{ route('petugas.kamar.destroy', $kamar->id) }}"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" onclick="deleteConfirmation('{{ $kamar->nama_kamar }}')"
                                        class="btn btn-danger btn-sm">Delete</button>
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
