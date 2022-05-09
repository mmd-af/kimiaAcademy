@include('site.layouts.partials.head')

@include('site.layouts.partials.header')


@yield('content')

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center">

                    <div class="image-container">

                        <img class="d-block w-100" src="holder.js/800x300?auto=yes&bg=666&fg=444&text=محصول اول " alt="Second slide">

                    </div>


                    <h5>عنوان اصلی</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" cost mt-3 text-dark"> <span>$40</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="p-3 bg-danger text-center text-white mt-3 cursor cart"> <span class="text-uppercase cart-text">خرید</span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center">

                    <div class="image-container">

                        <img class="d-block w-100" src="holder.js/800x300?auto=yes&bg=666&fg=444&text=محصول دوم " alt="Second slide">


                    </div>



                    <h5>Smart watch</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" watchcost mt-3 text-dark"> <span>$120</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="watch p-3 text-center text-white mt-3 cursor cart"> <span class="text-uppercase cart-text">Add to cart</span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center">




                    <div class="image-container">
                        <img class="d-block w-100" src="holder.js/800x300?auto=yes&bg=666&fg=444&text=محصول سوم" alt="Second slide">


                    </div>




                    <h5>Top for Women</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" tshirtcost mt-3 text-dark"> <span>$20</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class=" tshirt p-3 text-center text-white mt-3 cursor cart"> <span class="text-uppercase cart-text">Add to cart</span> </div>
            </div>
        </div>
    </div>
</div>
@include('site.layouts.partials.footer')
