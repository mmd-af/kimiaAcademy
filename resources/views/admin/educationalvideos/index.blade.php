@extends('admin.layouts.admin')

@section('title')
    index educational videos
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست ویدئو ها</h5>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.educationalvideos.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد ویدئو
                    </a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>عنوان</th>
                            <th>لینک یوتیوب</th>
                            <th>لینک آپارات</th>
                            <th>وضعیت</th>
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
                ajax: "{{ route('admin.educationalvideos.ajax.getDatatableData') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'youtube_link', name: 'youtube_link'},
                    {data: 'aparat_link', name: 'aparat_link'},
                    {data: 'is_active', name: 'is_active'},
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
