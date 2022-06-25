@extends('admin.layouts.index')

@section('title')
    index items
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست درس های دوره <span>{{$course->title}}</span></h5>
                    <a class="btn btn-sm btn-outline-primary"
                       href="{{ route('admin.items.create',['course' => $course->id]) }}">
                        <i class="fa fa-plus"></i>
                        <span>ایجاد درس</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-6">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary text-light mt-3">
                                <h6 class="mb-3 mb-md-0">   سر فصل ها</h6>
                            </div>
                        <div class="card shadow-lg table-responsive p-3">
                            <table
                                class="table table-bordered table-striped text-center data-table">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام سرفصل</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody class="ml-5">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between mt-3">
                            <h6 class="mb-3 mb-md-0">لیست درس ها</h6>
                        </div>
                        <div class="card shadow-lg table-responsive p-3">
                            <table class="table table-bordered table-striped text-center data-table2">
                                <thead>
                                <tr>
                                    <th>ردیف</th>
                                    <th>نام درس</th>
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
        </div>
    </div>

@endsection
@section('script')
    <script>
        $(function () {
            let url = '{{ route("admin.courses.ajax.getItemDatatableData", ":id") }}';
            url = url.replace(':id', {{$course->id}});
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
                ajax: url,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'is_free', name: 'is_free'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

    <script>
        $(function () {
            let url = '{{ route("admin.items.ajax.getItemDatatableData", ":id") }}';
            url = url.replace(':id', {{$item->id}});
            let languages = {
                'fa': "{{url('assets/admin/script/datatables-translates/fa.json')}}"
            };
            var table = $('.data-table2').DataTable({
                processing: true,
                serverSide: true,
                pagingType: "simple",
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                ajax: url,
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'is_free', name: 'is_free'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>

@endsection
