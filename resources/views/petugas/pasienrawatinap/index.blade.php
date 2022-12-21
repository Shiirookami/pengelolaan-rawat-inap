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
            <th scope="col">No Indentitas</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">No HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Gol Darah</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Warga Negara</th>
            <th scope="col">Agama</th>
            <th scope="col">status Pernikahan</th>
            <th scope="col">Nama Kepala Keluarga</th>
            <th scope="col">Pekerjaan Kepala Keluarga</th>
            <th scope="col">No HP Yang Bertanggung Jawab</th>
            <th scope="col">Asuransi</th>
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
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
            <td class="text-center"><button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger" onclick="deleteConfirmation()">Hapus</button></td>
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