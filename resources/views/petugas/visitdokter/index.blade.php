@extends('layouts.dashboard_master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Visit Dokter</h5>
      <a href="{{route('petugas.visitdokter.create')}}" class="btn btn-primary mb-2">tambah</a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover" id="mytable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">No Indetitas Dokter</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">No Indetitas Pasien</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Status Pasien</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>255</td>
            <td>Renaldy</td>
            <td>55255</td>
            <td>Laki-laki</td>
            <td>2016-05-25</td>
             <td class="text-center"><button class="btn btn-pri mary">Detail</button>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection