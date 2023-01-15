@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Tambah Dokter</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.dokter.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <input id="nama_dokter" type="text" class="form-control" name="nama_dokter" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-2 col-form-label">No Indentitas</label>
                    <div class="col-sm-10">
                        <input id="no_identitas" type="text" class="form-control" name="no_identitas" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                        <input type="text" id="spesialis" class="form-control" name="spesialis" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="hari_mulai" class="col-sm-2 col-form-label">Hari Mulai</label>
                    <div class="col-sm-10">
                        <select id="hari_mulai" class="form-control" name="hari_mulai" required>
                            <option value="" disabled selected>~Pilih Hari Mulai~</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Juma'at">Juma'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="hari_berakhir" class="col-sm-2 col-form-label">Hari Berakhir</label>
                    <div class="col-sm-10">
                        <select id="hari_berakhir" class="form-control" name="hari_berakhir" required>
                            <option value="" disabled selected>~Pilih Hari Berakhir~</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Juma'at">Juma'at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input id="jam" type="text" class="form-control" name="jam" required>
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

@push('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(function() {
            $('input[name="jam"]').daterangepicker({
                timePicker: true,
                timePicker24Hour: true,
                timePickerIncrement: 1,
                locale: {
                    format: 'HH:mm'
                }
            }).on('show.daterangepicker', function(ev, picker) {
                picker.container.find(".calendar-table").hide();
            });
        });
    </script>
@endpush
