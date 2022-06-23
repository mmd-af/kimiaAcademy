@extends('admin.layouts.admin')

@section('title')
    index permissions
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">لیست دسترسی ها</h5>
                    <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.permissions.create') }}">
                        <i class="fa fa-plus"></i>
                        ایجاد دسترسی
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
                        @foreach ($permissions as $key => $permission)
                            <tr>
                                <th>
                                    {{ $permissions->firstItem() + $key }}
                                </th>
                                <th>
                                    {{ $permission->display_name }}
                                </th>
                                <th>
                                    {{ $permission->name }}
                                </th>
                                <th>
                                    <a class="btn btn-sm btn-outline-info mr-3"
                                       href="{{ route('admin.permissions.edit', ['permission' => $permission->id]) }}">ویرایش</a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $permissions->render() }}
            </div>

        </div>
    </div>
@endsection
