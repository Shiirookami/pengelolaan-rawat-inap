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
            @foreach ($items as $item => $pasien)

            <tr>
                <th scope="row">{{$item +1}}</th>
                <td>{{$pasien->no_identitas}}</td>
                <td>{{$pasien->nama_lengkap}}</td>
                <td>{{$pasien->no_hp}}</td>
                <td>{{$pasien->alamat}}</td>
                <td>{{$pasien->tanggal_lahir}}</td>
                <td>{{$pasien->jenis_kelamin}}</td>
                <td>{{$pasien->tanggal_masuk}}</td>
                <td>{{$pasien->golongan_darah}}</td>
                <td>{{$pasien->pekerjaan}}</td>
                <td>{{$pasien->warga_negara}}</td>
                <td>{{$pasien->agama}}</td>
                <td>{{$pasien->status_pernikahan}}</td>
                <td>{{$pasien->nama_kepala_keluarga}}</td>
                <td>{{$pasien->pekerjaan_kepala_keluarga}}</td>
                <td>{{$pasien->no_hp_orang_bertanggung_jawab}}</td>
                <td>{{$pasien->no_hp_orang_bertanggung_jawab}}</td>
                <td>{{$pasien->status_asuransi}}</td>
                @endforeach
            <td class="text-center">
                <form method="post" action="{{route('petugas.pasienrawatinap.destroy',$items->id)}}">
                    <button type="button" class="btn btn-warning">
                        <a href="{{route('petugas.pasienrawatinap.edit',$items->id)}}">Edit</a>
                    </button>
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="deleteConfirmation()" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
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
ion('content')

@endsection
