@extends('layouts.dashboard_master')

@section('content')
<<div class="card">
    <div class="card-body">
      <h5 class="card-title">Pasien</h5>
      <a href="{{route('petugas.pasienrawatinap.create')}}" class="btn btn-primary mb-2">tambah</a>
      <!-- Table with hoverable rows -->
      <div class="table-responsive">
      <table class="table table-hover" id="mytable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Rumah Sakit</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Diagnose</th>
            <th scope="col">Pertologan</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td class="text-center"><button class="btn btn-primary">Print</button></td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
</div>
@endsection

@section('content')
    
@endsection