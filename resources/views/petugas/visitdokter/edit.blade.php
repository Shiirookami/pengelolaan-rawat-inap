@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Edit Visit Dokter</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
      <form>
        <fieldset disabled="">
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Nama Dokter</label>
            <div class="col-sm-10">
              <input type="disable" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Nama Pasien</label>
            <div class="col-sm-10">
              <input type="disable" class="form-control">
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Tensi Darah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Penyakit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Obat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Perkembangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>

          

        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="col-sm-2 offset-2"><br>
            <button type="submit" class="btn btn-success">Submits</button>
            <button type="submit" class="btn btn-danger">Rujuk</button>
          </div>
        </div>
        

      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection