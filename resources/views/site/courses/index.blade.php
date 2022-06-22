@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container mb-5 mt-5">
        <h4 class="mt-5 mx-3 pt-2">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        <div class="row">

            @foreach($courses as $course)
                <div class="col-md-4 col-sm-6">
                    <div class="card mt-3 shadow ">
                        <div class="card-body product-1 align-items-center p-2 text-center">
                            <div class="image-container">
                                <img class="d-block w-100" src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture"
                                     alt="Second slide"></div>
                            <div class="product-description py-2">
                                <h4>{{Str::limit($course->title ,25)}}</h4>
                                <div class="mt-3 info"><span
                                        class="text1 d-block">{!! Str::limit($course->description ,75) !!}
                                    </span></div>
                                <div class=" cost mt-3 text-dark">
                                    <span>{{number_format($course->actual_price)}} تومان </span>
                                </div>
                            </div>
                        </div>
                        {{--TODO btn hover--}}
                        <a type="button" class="btn text-light btn-product btn-lg btn-block stretched-link"
                           href="{{route('site.courses.show', ['course' => $course->slug])}}">جزئیات بیشتر</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection


