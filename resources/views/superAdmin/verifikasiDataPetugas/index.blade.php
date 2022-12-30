@extends('layouts.dashboard_master')
@section('content')

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Kelola Data Petugas</h5>
      <!-- Table with hoverable rows -->
      <table class="table table-hover" id="mytable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID Petugas</th>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
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
             <td class="text-center"><button class="btn btn-primary">Verifikasi</button>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection