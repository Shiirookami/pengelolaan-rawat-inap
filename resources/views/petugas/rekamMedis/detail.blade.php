@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Detail Rekam Medis</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
      <form>
        <fieldset disabled="">
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Pasien</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">No Identitas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="number" class="form-control">
            </div>
                </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-10">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal Keluar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Status BPJS</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Hari Ke 1</label>
            <div class="col-sm-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-7">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Hari Ke 2</label>
            <div class="col-sm-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-7">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Hari Ke 3</label>
            <div class="col-sm-3">
              <input type="text" class="form-control">
            </div>
            <div class="col-sm-7">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Kamar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
                <input type="text" class="form-control">
                <input type="text" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Biaya Perawatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
          </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Kamar</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
              </div>
          </div>
        </fieldset>

        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="d-grid col-1 mx-auto"><br>
            <button type="submit" class="btn btn-danger">Print</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection