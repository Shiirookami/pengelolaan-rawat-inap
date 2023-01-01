@extends('layouts.dashboard_master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Dokter</h5>
      <a href="{{route('petugas.dokter.create')}}" class="btn btn-primary mb-2">tambah</a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover" id="mytable">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">No Indetitas</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Tanggal</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $item => $dokter)

            <tr>
                <th scope="row">{{$item +1}}</th>
                <td>{{$dokter->nama_dokter}}</td>
                <td>{{$dokter->no_identitas}}</td>
                <td>{{$dokter->spesialis}}</td>
                <td>{{$dokter->jadwal_dokter}}</td>
                <td class="text-center">
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger" onclick="deleteConfirmation()">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection
