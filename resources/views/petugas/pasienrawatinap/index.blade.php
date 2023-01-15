@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Pasien Rawat Inap
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Pasien Rawat Inap</h5>
            <div class="mb-2">
                <a href="{{ route('petugas.pasienrawatinap.create') }}" class="btn btn-primary">Tambah</a>
                <a href="{{ route('petugas.pasienrawatinap.export') }}" class="btn btn-success">Export</a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#importPasien">Import
                </button>
            </div>
            <!-- Table with hoverable rows -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Indentitas</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item => $pasien)
                            <tr>
                                <th scope="row">{{ $item + 1 }}</th>
                                <td>{{ $pasien->no_identitas }}</td>
                                <td>{{ $pasien->nama_lengkap }}</td>
                                <td>{{ $pasien->no_hp }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm"
                                        href="{{ route('petugas.pasienrawatinap.edit', $pasien->id) }}">Edit</a>
                                    <button type="button" class="btn btn-primary btn-sm btnGetPasien" data-toggle="modal"
                                        data-target="#getPasien" data-id="{{ $pasien->id }}">
                                        Detail
                                    </button>
                                    <form method="post"
                                        action="{{ route('petugas.pasienrawatinap.destroy', $pasien->id) }}"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="button" onclick="deleteConfirmation('{{ $pasien->nama_lengkap }}')"
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
    </div>
    {{-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                ...
            </div>
        </div>
    </div> --}}
    <!-- Modal -->
    <div class="modal fade" id="importPasien" tabindex="-1" role="dialog" aria-labelledby="importPasienLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importPasienLabel">Import Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('petugas.pasienrawatinap.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file_pasien" required>
                            <label class="custom-file-label" for="file">Choose file...</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="modal fade" id="getPasien" tabindex="-1" role="dialog" aria-labelledby="getPasienLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="getPasienLabel">Detail Pasien Rawat Inap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No Indentitas</th>
                            <td id="no_identitas">...</td>
                        </tr>
                        <tr>
                            <th>Nama Lengkap</th>
                            <td id="nama_lengkap">...</td>
                        </tr>
                        <tr>
                            <th>No HP</th>
                            <td id="no_hp">...</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td id="alamat">...</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td id="tanggal_lahir">...</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td id="jenis_kelamin">...</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td id="tanggal_masuk">...</td>
                        </tr>
                        <tr>
                            <th>Gol Darah</th>
                            <td id="golongan_darah">...</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td id="pekerjaan">...</td>
                        </tr>
                        <tr>
                            <th>Warga Negara</th>
                            <td id="warga_negara">...</td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td id="agama">...</td>
                        </tr>
                        <tr>
                            <th>Status Pernikahan</th>
                            <td id="status_pernikahan">...</td>
                        </tr>
                        <tr>
                            <th>Nama Kepala Keluarga</th>
                            <td id="nama_kepala_keluarga">...</td>
                        </tr>
                        <tr>
                            <th>Pekerjaan Kepala Keluarga</th>
                            <td id="pekerjaan_kepala_keluarga">...</td>
                        </tr>
                        <tr>
                            <th>No HP Yang Bertanggung Jawab</th>
                            <td id="no_hp_orang_bertanggung_jawab">...</td>
                        </tr>
                        <tr>
                            <th>Status Asuransi</th>
                            <td id="status_asuransi">...</td>
                        </tr>
                        <tr>
                            <th>Nama Kamar</th>
                            <td id="nama_kamar">...</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(".btnGetPasien").click(function() {
            var pasien_id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ route('petugas.pasienrawatinap.getPasien') }}",
                data: {
                    'pasien_id': pasien_id
                },
                success: function(data) {
                    data = data[0];
                    $("#no_identitas").html(data.no_identitas);
                    $("#nama_lengkap").html(data.nama_lengkap);
                    $("#no_hp").html(data.no_hp);
                    $("#alamat").html(data.alamat);
                    $("#tanggal_lahir").html(data.tanggal_lahir);
                    $("#jenis_kelamin").html(data.jenis_kelamin);
                    $("#tanggal_masuk").html(data.tanggal_masuk);
                    $("#golongan_darah").html(data.golongan_darah);
                    $("#pekerjaan").html(data.pekerjaan);
                    $("#warga_negara").html(data.warga_negara);
                    $("#agama").html(data.agama);
                    $("#status_pernikahan").html(data.status_pernikahan);
                    $("#nama_kepala_keluarga").html(data.nama_kepala_keluarga);
                    $("#pekerjaan_kepala_keluarga").html(data.pekerjaan_kepala_keluarga);
                    $("#no_hp_orang_bertanggung_jawab").html(data.no_hp_orang_bertanggung_jawab);
                    $("#status_asuransi").html(data.status_asuransi);
                    $("#nama_kamar").html(data.kamar.nama_kamar);
                }
            });
        });
    </script>
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endpush
