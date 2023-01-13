@extends('layouts.dashboard_master')
@section('title')
    Halaman Edit Dokter
@endsection
@section('content')
    @php
        $data = explode('/', $item->jadwal_dokter);
        $hari = explode('-', $data[0]);
        $hari_mulai = trim($hari[0]);
        $hari_berakhir = trim($hari[1]);
        $jam = $data[1];
    @endphp
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Dokter</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.dokter.update', $item->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="nama_dokter" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <input type="text" id="nama_dokter" class="form-control" name="nama_dokter"
                            value="{{ $item->nama_dokter }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="no_identitas" class="col-sm-2 col-form-label">No Indentitas</label>
                    <div class="col-sm-10">
                        <input type="text" id="no_identitas" class="form-control" name="no_identitas"
                            value="{{ $item->no_identitas }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="spesialis" class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                        <input type="text" id="spesialis" class="form-control" name="spesialis"
                            value="{{ $item->spesialis }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="hariMulai" class="col-sm-2 col-form-label">Hari Mulai</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="hariMulai" required>
                            <option value="Senin" {{ $hari_mulai == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $hari_mulai == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $hari_mulai == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $hari_mulai == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Juma'at" {{ $hari_mulai == "Jum'at" ? 'selected' : '' }}>Juma'at</option>
                            <option value="Sabtu" {{ $hari_mulai == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="hariBerakhir" class="col-sm-2 col-form-label">Hari Berakhir</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="hariBerakhir" required>
                            <option value="Senin" {{ $hari_berakhir == 'Senin' ? 'selected' : '' }}>Senin</option>
                            <option value="Selasa" {{ $hari_berakhir == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                            <option value="Rabu" {{ $hari_berakhir == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                            <option value="Kamis" {{ $hari_berakhir == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                            <option value="Juma'at" {{ $hari_berakhir == "Jum'at" ? 'selected' : '' }}>Juma'at</option>
                            <option value="Sabtu" {{ $hari_berakhir == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jam" required value="{{ $jam }}">
                    </div>
                </div>
                {{-- <div class="row mb-3">
          <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="jadwal_dokter">
          </div>
        </div> --}}

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
