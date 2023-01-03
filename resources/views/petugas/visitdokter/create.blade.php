@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Visit Dokter</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
    <form action="{{route('petugas.visitdokter.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Dokter</label>
            <div class="col-sm-10">
              <select class="form-control" name="id_dokter">
                <option disabled value> -- Nama dokter --</option>
                @foreach ($dokter as $item)
                    <option value="{{$item->id}}">{{$item->nama_dokter}}</option>
                @endforeach
              </select>
            </div>
          </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama pasien</label>
            <div class="col-sm-10">
              <select class="form-control" name="id_pasien_rawat_inap">
                <option disabled value> -- Nama Pasien --</option>
                @foreach ($visit as $item)
                    <option value="{{$item->id}}">{{$item->nama_lengkap}}</option>
                @endforeach
              </select>
            </div>
          </div>

        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Tensi Darah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tensi_darah">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Penyakit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="penyakit">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Obat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="obat">
            </div>
          </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Perkembangan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="perkembangan">
              </div>
            </div>
        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="col-sm-2 offset-2"><br>
            <button type="submit" class="btn btn-primary">Submits</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection
