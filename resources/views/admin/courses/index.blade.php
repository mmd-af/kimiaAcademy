@extends('admin.layouts.admin')

@section('title')
    index courses
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست دوره ها: ({{ $courses->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.courses.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد دوره
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام دوره</th>
                        <th>توضیحات</th>
                        <th>قیمت</th>
                        <th>با تخفیف</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($courses as $key => $course)
                        <tr>
                            <th>
                                {{ $courses->firstItem() + $key }}
                            </th>
                            {{--                            <th>--}}
                            {{--                                <a href="{{ asset('upload/course/' . $course->courseimage) }}"--}}
                            {{--                                   data-lightbox="image-1"><img class="w-65 rounded mx-auto d-block" height="150px"--}}
                            {{--                                                                src="{{ asset('upload/course/' . $course->courseimage) }}"/></a>--}}

                            {{--                            </th>--}}
                            <th>
                                {{ $course->title }}
                            </th>
                            <th>
                                {!! $course->description !!}
                            </th>
                            <th>
                                {{$course->actual_price}}
                            </th>
                            <th>
                                {{$course->discount_price}}
                            </th>
                            <th>

                                 <span
                                     class="{{ $course->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                    {{ $course->is_active }}
                                </span>

                            </th>
                            <th>
                                <a class="btn btn-sm btn-outline-success"
                                   href="#" data-toggle="modal" data-target="#productModal-{{$course->id}}">نمایش</a>
                                <a class="btn btn-sm btn-outline-info"
                                   href="{{-- route('courses.edit', ['course' => $course->slug]) --}}">ویرایش</a>
                                <a class="btn btn-sm btn-outline-danger"
                                   href="{{-- route('courses.edit', ['course' => $course->slug]) --}}">حذف</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{ $courses->render() }}
            </div>
        </div>
    </div>

@endsection
