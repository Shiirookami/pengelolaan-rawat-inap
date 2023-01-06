@extends('layouts.dashboard_master')
@section('title')
    Halaman Rujukan
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Rujukan</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{route('petugas.rujukan.update',$rujukans->id)}}" method="POST">
                @csrf
                @method('put')
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal" value="{{$rujukans -> tanggal}}">
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama Rumah Sakit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_rumah_sakit"value="{{$rujukans -> nama_rumah_sakit}}">
                    </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Diagnose/Gejala</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="diagnosis"value="{{$rujukans -> diagnosis}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Pertolongan Pertama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pertolongan_pertama"value="{{$rujukans -> pertolongan_pertama}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <select name="id_pasien" id="">
                        <option value="disabled">-- pilih nama pasien --</option>
                            @foreach ($pasiens as $item)
                                <option value="{{$item -> id}}">{{$item -> nama_lengkap}}</option>
                            @endforeach
                        </select>
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
