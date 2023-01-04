@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Rekam Medis
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Rekam Medis</h5>
            <!-- Table with hoverable rows -->
            <div class="table-responsive">
                <table id="example" class="display nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">No Identitas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kamar</th>
                            <th scope="col">Tanggal Masuk</th>
                            <th scope="col">Tanggal Keluar</th>
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
                            <td class="text-center"><button class="btn btn-primary">Detail</button></td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Table with hoverable rows -->

            </div>
        </div>
    </div>
@endsection
