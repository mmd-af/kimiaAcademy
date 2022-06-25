@extends('admin.layouts.index')

@section('title')
    index roles
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست کاربران</h5>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>شماره ی همراه</th>
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
                ajax: "{{ route('admin.users.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'firstname', name: 'firstname'},
                    {data: 'lastname', name: 'lastname'},
                    {data: 'mobile_number', name: 'mobile_number'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
