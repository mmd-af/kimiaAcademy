@extends('admin.layouts.index')

@section('title')
    index messsages
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام</th>
                            <th>شماره ی همراه</th>
                            <th>آدرس ایمیل</th>
                            <th>توضیحات</th>
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
                ajax: "{{ route('admin.messages.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'mobile_number', name: 'mobile_number'},
                    {data: 'email', name: 'email'},
                    {data: 'description', name: 'description'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection
