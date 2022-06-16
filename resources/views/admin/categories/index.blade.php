@extends('admin.layouts.admin')

@section('title')
    index categories
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست دسته بندی ها</h5>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.categories.create') }}">
                        <i class="fa fa-plus"></i>
                        <span>ایجاد دسته بندی</span>
                    </a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام دسته بندی</th>
                            <th>نام انگلیسی</th>
                            <th>نوع دسته</th>
                            <th>نام دسته مادر</th>
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
                ajax: "{{ route('admin.categories.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'slug', name: 'slug'},
                    {data: 'type', name: 'type'},
                    {data: 'parent_id', name: 'parent_id'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });

        function fireSweetAlert(form) {
                swal({
                    title: "آیا از پاک کردن این اطلاعات مطمئن هستید؟",
                    text: "در صورت تایید برای همیشه پاک می شود",
                    icon: "error",
                    buttons: true,
                    dangerMode: true,
                })
                    .then(function (isOkay) {
                        if (isOkay) {
                            form.submit();
                        }
                    });
                return false;
        }
    </script>
@endsection
