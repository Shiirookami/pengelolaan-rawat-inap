@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Pinjam Kamar
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Pinjam Kamar</h5>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kamar</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tanggal Masuk</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $key => $pinjam_kamar)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $pinjam_kamar->kamar->nama_kamar }}</td>
                            <td>{{ $pinjam_kamar->pasien->nama_lengkap }}</td>
                            <td>{{ $pinjam_kamar->tanggal_masuk }}</td>
                            <td class="text-center">
                                <form method="post" action="{{ route('petugas.pinjamkamar.update', $pinjam_kamar->id) }}"
                                    class="d-inline">
                                    @method('put')
                                    @csrf
                                    <button type="button"
                                        onclick="editConfirmation('{{ $pinjam_kamar->pasien->nama_lengkap }}', '{{ $pinjam_kamar->kamar->nama_kamar }}')"
                                        class="btn btn-primary btn-sm">Pasien Keluar</button>
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
    <script>
        function editConfirmation(nama, kamar) {
            var form = event.target.form;
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                icon: 'warning',
                html: "Pasien dengan nama <strong>" + nama +
                    "</strong> akan meninggalkan kamar <strong>" + kamar + "</strong>",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, saya yakin!',
            }).then((result) => {
                if (result.value) {
                    form.submit();
                }
            });
        }
    </script>
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endpush
