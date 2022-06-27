@extends('Site.layouts.app')
@section('title','کیمیا آکادمی')

@section('content')
    @include('site.layouts.partials.header')
    <div class="container mb-5 mt-5">
        <div class="text-center mb-2 pt-md-2">
            <h4 class="font-weight-bold">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        </div>
        <div class="row justify-content-center img-zoom">
            <div class=" slick-carousel">
                @foreach($courses as $course)
                    <div class="col-md-12 col-sm-6 py-4">
                        <div class="card mt-3 shadow">
                            <div class="card-body product-1 align-items-center p-2 text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('site.courses.show', ['course' => $course->slug])}}">
                                        <img class="img-fluid fix-edu-img" src="{{asset($course->images->url)}}"
                                             alt="Second slide">
                                    </a>
                                </div>
                                <div class="product-description py-2">
                                    <h4>{{Str::limit($course->title ,25)}}</h4>
                                    <div class="mt-3 info"><span
                                            class="text1 d-block">{!! Str::limit($course->description ,75) !!}
                                    </span></div>
                                    <div class="cost mt-3">
                                        <div class="pt-4">
                                            {{--                                            <strong class="m-3">قیمت : </strong>--}}
                                            @if($course->discount_price==0 or $course->discount_price ==null)
                                                <strong class="pl-3 text-success">
                                                    {{ctpn(number_format($course->actual_price))}}
                                                    تومان </strong>
                                            @else
                                                <del class="pl-2 text-danger ">{{ctpn(number_format($course->actual_price))}}
                                                    تومان
                                                </del>
                                                <strong class="pl-3 text-success">
                                                    {{ctpn(number_format($course->discount_price))}}
                                                    تومان </strong>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a type="button" class="btn text-light btn-product btn-lg btn-block"
                               href="{{route('site.courses.show', ['course' => $course->slug])}}">جزئیات بیشتر</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="course-education half-circle mb-3">
        <div class="container mb-5 mt-5 ">
            <div class="top-circle"></div>
            <div class="text-center pt-md-4 pb-md-2">
                <h3 class="font-weight-bold">ویدیو های آموزشی</h3>
            </div>
            <div class="row  justify-content-center img-zoom">
                <div class=" slick-carousel section-video">
                    @foreach($educationalvideos as $educationalvideo)
                        <div class="col-md-12 col-sm-6 py-4">
                            <div class="card mt-3 shadow radius-video">
                                <div class="card-body product-1 align-items-center p-2 text-center">
                                    <div class="d-flex justify-content-center radius-video">
                                        <a href="">
                                            <img class="img-fluid fix-edu-img"
                                                 src="{{asset($educationalvideo->images->url)}}"
                                                 alt="Second slide">
                                        </a>
                                    </div>
                                    <div class="product-description py-2 text-right">
                                        <h5 class="text-center">{{$educationalvideo->title}}</h5>
                                        <div class="mt-3 info px-2">
                                            <a href="{{$educationalvideo->aparat_link}}" class="text-gray"
                                               target="_blank">
                                                <img class="aparat-icon mx-2"
                                                     src="{{asset('assets/site/images/icons/aparat-25x25.svg')}}"
                                                     alt="">
                                                لینک آپارات
                                            </a>
                                        </div>
                                        <div class="mt-3 info px-2">
                                            <a href="{{$educationalvideo->youtube_link}}" target="_blank">
                                                <i class="fab fa-youtube mx-2 aparat-icon fa-lg"></i>
                                                لینک یوتیوب
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="bottom-circle"></div>
        </div>
    </div>
    <div class="container mb-5 mt-5 ">
        <div class="text-center mb-4 home-hr-text col-md-8 pt-md-4">
            <h4 class="font-weight-bold">مقالات آموزشی <span class="text-article-pharmacology">داروشناسی</span></h4>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-8 mt-4">
                @foreach($pharmacologyPost as $post)
                    <div class="card border-0 mb-4 ">
                        <div class="card-body row justify-content-between">
                            <div class="col-4 col-md-3">
                                <img class="rounded img-fluid img-thumbnail"
                                     src="{{asset($post->images->url)}}"
                                     alt="Responsive image">
                            </div>
                            <div class="col-8 col-md-9">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">
                                    {!! Str::limit($post->description, 150) !!}
                                </p>
                                <div class="align-self-end mt-2">
                                    <a href="{{route('site.posts.show', ['post' => $post->slug])}}"
                                       class="btn btn-article float-left align-bottom">مطالعه بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mb-3 mt-5">
        <div class="text-center mb-4 home-hr-text-green  col-md-8 py-4">
            <h4 class="font-weight-bold">مقالات آموزشی <span
                    class="span-block text-success">طب سنتی و گیاهان دارویی</span></h4>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-8  mt-4">
                @foreach($medicinalPost as $post)
                    <div class="card border-0 mb-4 ">
                        <div class="card-body row justify-content-between">
                            <div class="col-4 col-md-3">
                                <img class="rounded img-fluid img-thumbnail"
                                     src="{{asset($post->images->url)}}"
                                     alt="Responsive image">
                            </div>
                            <div class="col-8 col-md-9">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">
                                    {!! Str::limit($post->description, 150) !!}
                                </p>
                                <div class="align-self-end mt-2">
                                    <a href="{{route('site.posts.show', ['post' => $post->slug])}}"
                                       class="btn btn-article float-left align-bottom">مطالعه بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('.slick-carousel').slick({
            dots: true,
            infinite: false,
            speed: 300,
            rtl: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.3,
                        slidesToScroll: 1,
                        arrows: false,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
@endsection
