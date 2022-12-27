@extends('layouts.dashboard_master')

@section('content')
<<div class="card">
    <div class="card-body">
      <h5 class="card-title">Kamar</h5>
      <a href="{{route('petugas.kamar.create')}}" class="btn btn-primary mb-2">tambah</a>
      <!-- Table with hoverable rows -->
      <table class="table table-hover" id="mytable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kamar</th>
            <th scope="col">Kelas</th>
            <th scope="col">Harga</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td class="text-center"><button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger" onclick="deleteConfirmation()">Hapus</button></td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection

@section('content')
    
@endsection