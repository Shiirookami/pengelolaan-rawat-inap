@extends('layouts.dashboard_master')
@section('title')
    Halaman Kelola Petugas
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kelola Data Petugas</h5>
            <!-- Table with hoverable rows -->
            <table class="table table-hover" id="mytable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $key => $data)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>
                                <input data-id="{{ $data->id }}" class="toggle-class" type="checkbox"
                                    data-onstyle="success" data-offstyle="warning" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $data->status ? 'checked' : '' }}>

                                {{-- @if ($data->status == 1)
                                    <span class="badge badge-success">Aktif</span>
                                @else
                                    <span class="badge badge-danger">Tidak Aktif</span>
                                @endif --}}
                            </td>
                            <td class="text-center">
                                <form method="post" action="{{ route('admin.petugas.destroy', $data->id) }}"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="button" onclick="deleteConfirmation('{{ $data->name }}')"
                                        class="btn btn-danger">Delete</button>
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

@push('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endpush
@push('scripts')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "{{ route('admin.petugas.changeStatus') }}",
                    data: {
                        'status': status,
                        'user_id': user_id
                    },
                    success: function(data) {
                        Swal.fire(
                            'Success',
                            data.success,
                            'success'
                        )
                    }
                });
            })
        })
    </script>
@endpush
