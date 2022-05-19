@extends('admin.layouts.admin')

@section('title')
    index educationalvideos
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست پست ها: ({{ $educationalvideos->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.educationalvideos.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد پست
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>لینک یوتیوب</th>
                        <th>لینک آپارات</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($educationalvideos as $key => $educationalvideo)
                        <tr>
                            <th>
                                {{ $educationalvideos->firstItem() + $key }}
                            </th>
                            <th>
                                {{ $educationalvideo->youtube_link }}
                            </th>

                            <th>
                                {!! $educationalvideo->aparat_link !!}
                            </th>
                            <th>
                                <span
                                    class="{{ $educationalvideo->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                    {{ $educationalvideo->is_active }}
                                </span>
                            </th>
                            <th>
                                <a class="btn btn-sm btn-outline-info"
                                   href=" {{route('admin.educationalvideos.edit', ['educational' => $educationalvideo->id])}} ">ویرایش</a>
                                <a class="btn btn-sm btn-outline-danger"
                                   href="{{-- route('educationalvideos.edit', ['educationalvideo' => $educationalvideo->slug]) --}}">حذف</a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $educationalvideos->render() }}
            </div>
        </div>
    </div>
@endsection
