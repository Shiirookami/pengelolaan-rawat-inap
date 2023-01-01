@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Kamar</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
      <form action="{{route('petugas.pasienrawatinap.store'$item->id)}}" method="POST" >
        @csrf
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">No identitas</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="no_identitas" value="{{$item->no_identitas}}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"name="nama_lengkap"value="{{$item->nama_lengkap}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-10">
              <input type="number" class="form-control"name="no_hp"value="{{$item->no_hp}}">
            </div>
                </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="alamat"value="{{$item->alamat}}">
                </div>
              </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="tanggal_lahir"value="{{$item->tanggal_lahir}}">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example"name="jenis_kelamin"value="{{$item->jenis_kelamin}}">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
            <div class="col-sm-10">
              <input type="desable" class="form-control" name="tanggal_masuk"value="{{$item->tanggal_masuk}}">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Gol Darah</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="golongan_darah"value="{{$item->golongan_darah}}">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pekerjaan"value="{{$item->pekerjaan}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Warga Negara</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="warga_negara"value="{{$item->warga_negara}}">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="agama"value="{{$item->agama}}">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-form-label col-sm-2 pt-0">Status Pernikahan</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status_pernikahan" id="gridRadios1" value="{{$item->status_pernikahan}}" checked>
                <label class="form-check-label" for="gridRadios1">
                  First radio
                </label>
              </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status_pernikahan" id="gridRadios1" value="{{$item->status_pernikahan}}" checked>
                  <label class="form-check-label" for="gridRadios1">
                    First radio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status_pernikahan" id="gridRadios1" value="{{$item->status_pernikahan}}" checked>
                  <label class="form-check-label" for="gridRadios1">
                    First radio
                  </label>
                </div>
              </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_kepala_keluarga"value="{{$item->nama_kepala_keluarga}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Pekerjaan Kepala Keluarga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pekerjaan_kepala_keluarga"value="{{$item->pekerjaan_kepala_keluarga}}">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">No HP Yang bertanggung jawab</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="no_hp_orang_bertanggung_jawab"value="{{$item->no_hp_orang_bertanggung_jawab}}">
            </div>
        </div>
        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Asuransi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="status_asuransi"value="{{$item->status_asuransi}}">
          </div>
        </div>
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
