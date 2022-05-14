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




    <!-- Modal -->
    {{--    @foreach ($courses as $course)--}}
    {{--        <div class="modal fade" id="productModal-{{$course->id}}" tabindex="-1" role="dialog">--}}
    {{--            <div class="modal-dialog modal-xl" role="document">--}}
    {{--                <div class="modal-content">--}}
    {{--                    <div class="modal-header">--}}
    {{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                            <span aria-hidden="true"><i class="fa fa-window-close fa-xs" aria-hidden="true"></i></span>--}}
    {{--                        </button>--}}
    {{--                    </div>--}}
    {{--                    <div class="modal-body">--}}
    {{--                        <div class="row">--}}


    {{--                            <div class="col-md-4 col-sm-4 col-xs-4" style="direction: rtl;">--}}
    {{--                                <div class="course-details-content quickview-content">--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>نام دوره:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{ $course->coursename }}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>نام ساز:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{ $course->instruments->instrument }}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>نام معلم:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{$course->users->name}} {{$course->users->faname}}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>روز کلاس:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{weekConvert($course->days->day)}}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>مکان تدریس</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{$course->teaching_place}}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>شهریه:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{ctpn(number_format($course->tuition))}}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>شهریه به ازای:</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{$course->tuition_per}} جلسه</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>کارمزد</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{$course->wage}} %</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}


    {{--                            <div class="col-md-8 col-sm-8 col-xs-8">--}}
    {{--                                <div class="tab-content">--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>توضیحات</span>--}}
    {{--                                        <ul>--}}
    {{--                                            <li>{{$course->description}}</li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <hr>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>وضعیت ساعت ها</span>--}}
    {{--                                        <ul>--}}

    {{--                                            <div class="table-responsive">--}}
    {{--                                                <table class="table table-bordered table-striped text-center">--}}
    {{--                                                    <thead>--}}
    {{--                                                    <th>لیست ساعت ها</th>--}}
    {{--                                                    <th>وضعیت رزرو</th>--}}
    {{--                                                    </thead>--}}
    {{--                                                    <tbody>--}}
    {{--                                                    @foreach ($hours->where('day_id',$course->days->id) as $hour)--}}
    {{--                                                        <tr>--}}
    {{--                                                            <td>{{ctpn(\Carbon\Carbon::createFromFormat('H:i:s',$hour->hour)->format('H:i'))}}</td>--}}
    {{--                                                            <td>{{$hour->reserve}}</td>--}}
    {{--                                                        </tr>--}}
    {{--                                                    @endforeach--}}
    {{--                                                    </tbody>--}}
    {{--                                                </table>--}}
    {{--                                            </div>--}}


    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="pro-details-meta">--}}
    {{--                                        <span>تگ ها</span>--}}
    {{--                                        <ul>--}}
    {{--                                            @foreach ($course->tags as $tag)--}}
    {{--                                                <li>{{$tag->slug}}</li>--}}
    {{--                                            @endforeach--}}

    {{--                                        </ul>--}}
    {{--                                    </div>--}}

    {{--                                </div>--}}
    {{--                            </div>--}}


    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    @endforeach--}}
    <!-- Modal end -->

@endsection
