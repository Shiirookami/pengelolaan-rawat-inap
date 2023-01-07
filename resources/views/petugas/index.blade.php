@extends('layouts.dashboard_master')
@section('content')
@section('title')
    Halaman Dashboard
@endsection
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kamar Kelas VIP</div>
                                @foreach ($kamars as $item)
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->kelas}}</div>
                                @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kamar Kelas I</div>
                            @foreach ($kamars as $item)
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->kelas}}</div>
                            @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kamar Kelas II</div>
                            @foreach ($kamars as $item)
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->kelas}}</div>
                            @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kamar Kelas III</div>
                            @foreach ($kamars as $item)
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$item->kelas}}</div>
                            @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Dokter </h5>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">No Indetitas</th>
                        <th scope="col">Spesialis</th>
                        {{-- <th scope="col">Tanggal</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokters as $item => $dokter)
                        <tr>
                            <th scope="row">{{ $item + 1 }}</th>
                            <td>{{ $dokter->nama_dokter }}</td>
                            <td>{{ $dokter->no_identitas }}</td>
                            <td>{{ $dokter->spesialis }}</td>
                            {{-- <td>{{ $dokter->jadwal_dokter }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with hoverable rows -->
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('template/js/demo/chart-pie-demo.js') }}"></script>
@endpush
