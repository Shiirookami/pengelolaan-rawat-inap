@extends('layouts.dashboard_master')
@section('title')
    Halaman Edit Kamar
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="clearfix mb-3">
                <h5 class="card-title d-inline">Edit Dokter</h5>
                <a href="{{ url()->previous() }}" class="btn btn-facebook float-right">Kembali</a>
            </div>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.kamar.update', $item->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <label for="edit_kamar" class="col-sm-2 col-form-label">Nama Kamar</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_kamar" id="edit_kamar"
                            value="{{ $item->nama_kamar }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="edit_kelas" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kelas" id="edit_kelas" required>
                            <option value="1" {{ $item->kelas == 1 ? 'selected' : '' }}>VIP</option>
                            <option value="2" {{ $item->kelas == 2 ? 'selected' : '' }}>EKOMOMI</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="edit_harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="harga" id="edit_harga"
                            value="{{ $item->harga }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    {{-- <label class="col-sm-10 col-form-label"></label> --}}
                    <div class="col-sm-2 offset-2"><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
@endsection
