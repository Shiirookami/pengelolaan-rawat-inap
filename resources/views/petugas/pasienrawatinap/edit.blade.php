@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Kamar</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
      <form action="{{route('petugas.pasienrawatinap.update',$item->id)}}" method="POST" >
        @csrf
        @method('put')
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
                <option value="{{$item->jenis_kelamin}}">{{$item->jenis_kelamin}}</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
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
                <option value="{{$item->golongan_darah}}">{{$item->golongan_darah}}</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
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
            <label class="col-sm-2 col-form-label">warga negara</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="warga_negara"value="{{$item->warga_negara}}">
                <option value="{{$item->warga_negara}}">{{$item->warga_negara}}</option>
                <option value="WNI">WNI</option>
                <option value="WNA">WNA</option>
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="agama"value="{{$item->agama}}">
                <option value="{{$item->agama}}">{{$item->agama}}</option>
                <option value="ISLAM">ISLAM</option>
                <option value="KRISLAM">KRISLAM</option>
                <option value="BUDHA">BUDHA</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATHOLIK">KATHOLIK</option>
                <option value="HINDU">HINDU</option>
                <option value="KONGHUCU">KONGHUCU</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">status pernikahan</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="status_pernikahan" value="{{$item->status_pernikahan}}" >
                <option value="{{$item->status_pernikahan}}">{{$item->status_pernikahan}}</option>
                <option value="MENIKAH">MENIKAH</option>
                <option value="LAJANG">LAJANG</option>
              </select>
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
            <label class="col-sm-2 col-form-label">asuransi</label>
            <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example" name="status_asuransi"value="{{$item->status_asuransi}}">
                <option value="{{$item->status_asuransi}}">{{$item->status_asuransi}}</option>
                <option value="BPJS">BPJS</option>
                <option value="UMUM">UMUM</option>
              </select>
            </div>
          </div>
        <div class="row mb-3">
            <label for="inputDate" class="col-sm-2 col-form-label">Nama kamar</label>
            <div class="col-sm-10">
              <select class="form-control" name="id_kamar" id="id_kamar">
                  <option disabled value>pilih nama kamar</option>
              @foreach ( $kamars as $item)
                  <option value="{{ $item->id }}">{{ $item->nama_kamar}}</option>
              @endforeach
          </select>
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
