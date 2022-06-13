@extends('Site.layouts.app')
@section('title','کیمیا آکادمی')

@section('content')
    @include('site.layouts.partials.header')
    <div class="container mb-5 mt-5 ">
        {{--TODO admin dashbord--}}
        <div class="text-center mb-2 pt-md-2">
            <h4 class="font-weight-bold">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        </div>
        <div class="row  justify-content-center ">
            <div class=" slick-carousel">
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
                <div class="col-md-12 col-sm-6 py-4">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h5>عنوان اصلی</h5>
                                <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                                <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('video')}}">خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-education half-circle mb-3">
        <div class="container mb-5 mt-5 ">
            <div class="top-circle"></div>
            <div class="text-center pt-md-4 pb-md-2">
                <h3 class="font-weight-bold">ویدیو های آموزشی</h3>
            </div>
            <div class="row  justify-content-center ">
                <div class=" slick-carousel section-video">
                    @foreach($educationalvideos as $educationalvideo)
                        <div class="col-md-12 col-sm-6 py-4">
                            <div class="card mt-3 shadow radius-video">
                                <div class="card-body product-1 align-items-center p-2 text-center">
                                    <div class="image-container radius-video">
                                        <img class="d-block w-100 fix-edu-img"
                                             src="{{asset($educationalvideo->images->url)}}"
                                             alt="Second slide"></div>
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
                                            <a href="{{$educationalvideo->youtube_link}}" target="_blank"><i
                                                    class="fab fa-youtube mx-2 aparat-icon fa-lg"></i>
                                                لینک یوتیوب
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--TODO btn hover--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="bottom-circle"></div>
        </div>
    </div>
    <div class="container mb-5 mt-5 ">
        {{--TODO admin dashbord--}}
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
                                    {{ Str::limit($post->description, 250)}}
                                </p>
                                <div class="align-self-end mt-2">
                                    <a href="#" class="btn btn-article float-left align-bottom">مطالعه بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container mb-3 mt-5">
        {{--TODO admin dashbord--}}
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
                                    {{ Str::limit($post->description, 250)}}
                                </p>
                                <div class="align-self-end mt-2">
                                    <a href="#" class="btn btn-article float-left align-bottom">مطالعه بیشتر</a>
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
