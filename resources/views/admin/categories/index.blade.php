@extends('admin.layouts.admin')

@section('title')
    index categories
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست دسته بندی ها: ({{ $categories->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.categories.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد دسته بندی
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام دسته بندی</th>
                        <th>نام انگلیسی</th>
                        <th>مرتبط</th>
                        <th>نوع دسته</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $key => $category)
                        <tr>
                            <th>
                                {{ $categories->firstItem() + $key }}
                            </th>
                            <th>
                                {{ $category->title }}
                            </th>

                            <th>
                                {{ $category->slug }}
                            </th>
                            <th>
                                {{ $category->type }}
                            </th>
                            <th>
                                {{$category->parent_id}}
                            </th>
                            <th>

                                <a class="btn btn-sm btn-outline-info"
                                   href="{{-- route('categories.edit', ['category' => $category->slug]) --}}">ویرایش</a>
                                <a class="btn btn-sm btn-outline-danger"
                                   href="{{-- route('categories.edit', ['category' => $category->slug]) --}}">حذف</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{ $categories->render() }}
            </div>
        </div>
    </div>



@endsection
