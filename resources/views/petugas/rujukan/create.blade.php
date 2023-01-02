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
            <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="disable" class="form-control">
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="btn-group">
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
                    <label class="btn btn-secondary" for="option1">Laki-laki</label>
                  
                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
                    <label class="btn btn-primary" for="option2">Perempuan</label>
                  
                  </div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Diagnose/Gejala</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Pertolongan Pertama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Nama Rumah Sakit Yang Dituju</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="btn-group">
                    <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
                    <label class="btn btn-secondary" for="option1">Laki-laki</label>
                  
                    <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
                    <label class="btn btn-primary" for="option2">Perempuan</label>
                  </div>
            </div>
          </div>
          <fieldset disabled="">
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="disable" class="form-control">
                </div>
              </div>
          </fieldset>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Diagnose/Gejala</label>
            <div class="col-sm-10">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Pertolongan Pertama Yang Di Berikan</label>
            <div class="col-sm-10">
              <input type="disable" class="form-control">
            </div>
          </div>
          
        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="col-sm-2 offset-2"><br>
            <button type="submit" class="btn btn-success">Submits</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection