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
            @foreach ($items as $item => $kamar)

            <tr>
                <th scope="row">{{$item +1}}</th>
                <td>{{$kamar->nama_kamar}}</td>
                <td>{{$kamar->kelas}}</td>
                <td>{{$kamar->harga}}</td>
                <td class="text-center">
                    <form method="post" action="{{route('petugas.kamar.destroy',$kamar->id)}}">
                        <button type="button" class="btn btn-warning">
                            <a href="{{route('petugas.kamar.edit',$kamar->id)}}">Edit</a>
                        </button>
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="deleteConfirmation()" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
                @endforeach
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>
@endsection

@section('content')

@endsection
