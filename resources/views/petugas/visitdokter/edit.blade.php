@extends('layouts.dashboard_master')
@section('title')
    Halaman Edit Visit Dokter
@endsection
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Visit Dokter</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
    <form action="{{route('petugas.visitdokter.update',$item->id)}}" method="POST">
        @csrf
        @method('put')
        {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Dokter</label>
            <div class="col-sm-10">
              <select class="form-control" name="id_dokter">
                <option value="{{$item->nama_dokter}}">{{$item->nama_dokter}}</option>
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
                <option value="{{$item->nama_lengkap}}"> {{$item->nama_lengkap}}</option>
                @foreach ($visit as $item)
                    <option value="{{$item->id}}">{{$item->nama_lengkap}}</option>
                @endforeach
              </select>
            </div>
          </div> --}}

        <div class="row mb-3">
          <label for="inputNumber" class="col-sm-2 col-form-label">Tensi Darah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tensi_darah" value="{{$item->tensi_darah}}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Penyakit</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="penyakit" value="{{$item->penyakit}}" >
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Obat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="obat" value="{{$item->obat}}">
            </div>
          </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Perkembangan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="perkembangan" value="{{$item->perkembangan}}">
              </div>
            </div>
        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="col-sm-2 offset-2"><br>
            <button type="submit" class="btn btn-primary">Submits</button>
            <button type="submit" class="btn btn-primary">rujuk</button>
          </div>
        </div>
      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection
