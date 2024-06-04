@extends('backend.master')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Semua Data Artikel!</h4>
                <a href="{{route('article.create')}}" class="btn btn-primary mb-3 text-white">Tambah Data</a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>title</th>
                                <th>Content</th>
                                <th  style="width: 30px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($article as $key => $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td style="width: 30px">
                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href=""
                                                class="btn btn-warning btn-sm text-white">Edit</a>
                                            <button type="submit" class="btn btn-danger btn-sm text-white">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
@endsection

@push('scripts')
    <script>
        let table;
        $(function() {
            table = $('.table').DataTable();
        })
    </script>
@endpush

