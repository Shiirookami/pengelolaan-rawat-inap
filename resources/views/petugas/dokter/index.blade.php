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
            <th scope="col">#</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">No Indetitas</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Tanggal</th>
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
            <td class="text-center"><button class="btn btn-warning">Edit</button>
                <button class="btn btn-danger" onclick="deleteConfirmation()">Hapus</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <td>2011-08-12</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Angus Grady</td>
            <td>HR</td>
            <td>34</td>
            <td>2012-06-11</td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Raheem Lehner</td>
            <td>Dynamic Division Officer</td>
            <td>47</td>
            <td>2011-04-19</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection