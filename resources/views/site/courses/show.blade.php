@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container">
        <h4 class="mt-5 mx-3 pt-2">{{$course->title}}</h4>
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="image-container mt-5" id="divVideo">
                    <video controls width="100%" height="380px">
                        <source src="{{asset($course->videos->url)}}" type="video/mp4">
                    </video>
                </div>
                <div class="py-5" id="descript">
                    {!! $course->description !!}
                </div>
                <div class="py-5" id="itemDescript">
                </div>
                <h6 class="mt-5 mb-5">سر فصل های این دوره</h6>
                <div class="mb-5 border">
                    <div id="accordion">
                        @foreach($courseSeason as $season)
                            <div class="card">
                                <div class="card-header" data-toggle="collapse"
                                     data-target="#collapse-{{$season->id}}"
                                     aria-expanded="true" aria-controls="collapse-{{$season->id}}"
                                     id="heading-{{$season->id}}">
                                    <h5 class="mb-0">
                                        <button class="btn btn-outline" data-toggle="collapse"
                                                data-target="#collapse-{{$season->id}}"
                                                aria-expanded="true" aria-controls="collapse-{{$season->id}}">
                                            <img class="svg-icon ml-3 check-mark"
                                                 src="{{asset('assets/site/images/icons/check-mark.svg')}}"
                                                 alt="">
                                            <b>
                                                {{$season->title}}
                                            </b>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse-{{$season->id}}" class="collapse"
                                     aria-labelledby="heading-{{$season->id}}"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        {{--                                        TODO inja query N+1 darim --}}
                                        @foreach($season->children as $item)
                                            <div class="card-header my-3">
                                                <div class="d-flex justify-content-between">
                                                    <div class="mt-2">
                                                        @auth
                                                            @if($item->getRawOriginal('is_free')==0)
                                                                @if($checkOrder)
                                                                    <input id="itemUrl-{{$item->id}}" name="url"
                                                                           type="hidden"
                                                                           value="{{$item->videos->url}}">
                                                                    <input id="itemDescription-{{$item->id}}" name="url"
                                                                           type="hidden"
                                                                           value="{{$item->description}}">
                                                                @endif
                                                            @else
                                                                <input id="itemUrl-{{$item->id}}" name="url"
                                                                       type="hidden"
                                                                       value="{{$item->videos->url}}">
                                                                <input id="itemDescription-{{$item->id}}" name="url"
                                                                       type="hidden"
                                                                       value="{{$item->description}}">
                                                            @endif
                                                        @endauth
                                                        <p class="btn btn-outline"
                                                           onclick="showVideo({{$item->id}})">{{$item->title}}</p>
                                                    </div>
                                                    <div class="mt-3">
                                                        @if(empty($checkOrder))
                                                            @if($item->getRawOriginal('is_free')==0)
                                                                <i class="fa fa-lock"></i>
                                                            @else
                                                                {{$item->is_free}}
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('site.courses.comments')
            </div>
            <div class="col-sm-12 col-md-4 mr-md-3 mx-sm-2">
                <div class="card border mt-5">
                    @if(empty($checkOrder))
                        <div class="pt-4">
                            <strong class="m-3">قیمت : </strong>
                            @if($course->discount_price==0 or $course->discount_price ==null)
                                <strong class="pl-3 float-left text-success">
                                    {{ctpn(number_format($course->actual_price))}}
                                    تومان </strong>
                            @else
                                <strong class="pl-3 float-left text-success">
                                    {{ctpn(number_format($course->discount_price))}}
                                    تومان </strong>
                                <del class="float-left pl-2 text-danger ">{{ctpn(number_format($course->actual_price))}}
                                    تومان
                                </del>
                            @endif
                        </div>
                    @endif
                    <div class="align-content-center col-12 mt-5">
                        @auth
                            @if(empty($checkOrder))
                                <form action="{{route('site.orders.request')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <button type="submit" class="btn btn-product text-light col-12">خرید دوره</button>
                                </form>
                            @else
                                <div class="d-flex justify-content-center">
                                    <span class="text-success">این دوره برای شما فعال است</span>
                                </div>
                            @endif
                        @else
                            <div class="mx-3">
                                <strong class="text-warning">برای خرید دوره ابتدا
                                    <a href="{{route('login')}}">لاگین</a>
                                    کنید</strong>
                            </div>
                        @endauth
                    </div>
                    <div>
                        <div class="mt-5">
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/student.svg')}}"
                                     alt="">
                                <strong>{{$course->subscriber_count}}</strong><span class="mr-2">دانشجو</span>
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/language.svg')}}"
                                     alt="">
                                زبان: {{ $course->course_lang }}
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/clock.svg')}}"
                                     alt="">
                                مدت زمان: {{ $course->course_time }}
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/classes.svg')}}"
                                     alt="">
                                نوع دوره: {{ $course->course_kind }}
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/file.svg')}}"
                                     alt="">
                                mp4
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 mb-3 "
                                     src="{{asset('assets/site/images/icons/file-size.svg')}}"
                                     alt="">
                                حجم فایل: {{$course->course_size}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center border p-4">
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/comments.svg')}}"
                             alt="">
                        <strong>{{ctpn(count($comments)+count($childComments))}}</strong><span
                            class="mr-2">دیدگاه</span>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/view.svg')}}"
                             alt="">
                        <strong>{{ctpn($course->view_count)}}</strong><span class="mr-2">بازدید</span>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center border p-4 about-teacher">
                    <div class=" about-teacher-title border py-2 px-4">
                        <span>درباره ی اساتید</span>
                    </div>
                    <div class="mx-3 pt-3 col-md-12 justify-content-center">
                        <img class=" ml-3 teacher-circle" src="{{asset('assets/site/images/course/rmp.png')}}"
                             alt="">
                        <span class="mr-2">دکتر رضا معاف پوریان</span>
                        <hr>
                        <div class=" text-center">
                            <small>دکترای دارو سازی از دانشگاه پادوا ایتالیا</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function showVideo(id) {
            if ({!! json_encode(Auth::check()) !!}) {
                var url = $("#itemUrl-" + id).val();
                var description = $("#itemDescription-" + id).val();
                $('#descript p').html(description);
                $('#divVideo video source').attr('src', url);
                $("#divVideo video")[0].load();
                // $("#divVideo video")[0].play();
            } else {
                swal({
                    title: "برای دیدن ویدئو ها باید لاگین کنید",
                    icon: "warning",
                });
            }
        }
    </script>
@endsection

