@extends('admin.layouts.admin')

@section('title')
    index roles
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست نقش ها</h5>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.roles.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد نقش
                    </a>
                </div>
                <div class="table-responsive p-3">
                    <table class="table table-bordered table-striped text-center data-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام نمایشی</th>
                            <th>نام</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)
                            <tr>
                                <th>
                                    {{ $roles->firstItem() + $key }}
                                </th>
                                <th>
                                    {{ $role->display_name }}
                                </th>
                                <th>
                                    {{ $role->name }}
                                </th>
                                <th>
{{--                                    <a class="btn btn-sm btn-outline-success"--}}
{{--                                        href="{{ route('admin.roles.show', ['role' => $role->id]) }}">--}}
{{--                                        نمایش--}}
{{--                                    </a>--}}
                                    <a class="btn btn-sm btn-outline-info mr-3"
                                        href="{{ route('admin.roles.edit', ['role' => $role->id]) }}">
                                        ویرایش
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{ $roles->render() }}
            </div>

        </div>

    </div>
@endsection
