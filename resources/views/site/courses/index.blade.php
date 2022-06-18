@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container mb-5 mt-5">
        <h4 class="mt-5 mx-3 pt-2">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        <div class="row">

            <div class="col-md-4 col-sm-6">
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
                       href="">خرید</a>
                </div>
            </div>


        </div>
    </div>



@endsection


