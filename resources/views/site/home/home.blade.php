@extends('Site.layouts.app')

@section('content')
<div class="container mb-5 mt-5">

    <div class="text-center mb-5">
        <h3>دوره آموزشی داروسازی گیاهی کیمیاگر</h3>
    </div>

    <div class="row justify-content-md-center">

        <div class="col-md-4 ">
            <div class="card mt-3 shadow">
                <div class="product-1 align-items-center p-2 text-center">
                    <div class="image-container">
                        <img class="d-block w-100" src="holder.js/400x300?auto=yes&bg=666&fg=444&text=picture"
                             alt="Second slide"></div>
                    <div class="product-description py-2">
                        <h5>عنوان اصلی</h5>
                        <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                        <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn text-light btn-product btn-lg btn-block">خرید</button>
            </div>
        </div>


        <div class="col-md-4 ">
            <div class="card mt-3 shadow">
                <div class="product-1 align-items-center p-2 text-center">
                    <div class="image-container">
                        <img class="d-block w-100" src="holder.js/400x300?auto=yes&bg=666&fg=444&text=picture"
                             alt="Second slide"></div>
                    <div class="product-description py-2">
                        <h5>عنوان اصلی</h5>
                        <div class="mt-3 info"><span class="text1 d-block">توضیحات کوتاه</span></div>
                        <div class=" cost mt-3 text-dark"><span>14000 تومان</span>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn text-light btn-product btn-lg btn-block">خرید</button>
            </div>
        </div>

    </div>
</div>

@endsection
