@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container mb-5 mt-5 img-zoom">
        <h4 class="mt-5 mx-3 pt-2">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 col-sm-6">
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
                                    </span>
                                </div>
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
@endsection


