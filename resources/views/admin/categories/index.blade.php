@extends('admin.layouts.admin')

@section('title')
    index categories
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                    <h5 class="font-weight-bold mb-3 mb-md-0 text-light">لیست دسته بندی ها:</h5>
                    <a class="btn btn-sm btn-outline-light" href="{{ route('admin.categories.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد دسته بندی
                    </a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            {{--                            <th>#</th>--}}
                            <th>نام دسته بندی</th>
                            <th>نام انگلیسی</th>
                            <th>نوع دسته</th>
                            <th>نام دسته مادر</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

{{--    TODO change the route of fa.json to the lang folder --}}

<script>
        $(function () {
            let languages = {
                // 'fa': 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/fa.json'
                'fa': "{{url('fa.json')}}"
            };
            // let file = require('/lang/fa.json');
            // let languages = file;

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                pagingType: "simple",
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                ajax: "{{ route('admin.categories.ajax.getDatatableData') }}",
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'slug', name: 'slug'},
                    {data: 'type', name: 'type'},
                    {data: 'parent_id', name: 'parent_id'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},

                ]
            });
        });
    </script>

@endsection
