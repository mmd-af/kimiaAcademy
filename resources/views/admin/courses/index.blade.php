@extends('admin.layouts.admin')

@section('title')
    index courses
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست دوره ها</h5>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.courses.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد دوره
                    </a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام دوره</th>
                            <th>قیمت</th>
                            <th>با تخفیف</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody class="ml-5">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function () {
            let languages = {
                'fa': "{{url('assets/admin/script/datatables-translates/fa.json')}}"
            };
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                pagingType: "simple",
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                ajax: "{{ route('admin.courses.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'actual_price', name: 'actual_price'},
                    {data: 'discount_price', name: 'discount_price'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]
            });
        });
    </script>
@endsection
