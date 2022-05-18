@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container">
        <h4 class="mt-5 mx-3 pt-2">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        <div class="row">
            <div class="col-md-7 ml-md-5">
                {{--                {{TODO Admin}}--}}
                <div class="image-container mt-5 ">

                    {{--                    <img class="d-block img-fluid card-img" src="holder.js/300x150?auto=yes&bg=666&fg=444&text=Video"--}}
                    {{--                         alt="Second slide">--}}
                    <video controls width="100%">

                        <source src="{{asset('assets/site/videos/flower.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <h6 class="mt-5">این دوره مناسب چه کسانی است</h6>
                <div>
                    <div class="alert alert-video small mt-5">استراتژی درمانی</div>
                    <div class="alert alert-video small">استراتژی درمانی</div>
                    <div class="alert alert-video small">استراتژی درمانی</div>
                </div>

                <h6 class="mt-5 mb-5">سر فصل های این دوره</h6>
                <div class="mb-5 border">
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark "
                             src="{{asset('assets/site/images/icons/check-mark.svg')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark "
                             src="{{asset('assets/site/images/icons/check-mark.svg')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark "
                             src="{{asset('assets/site/images/icons/check-mark.svg')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark "
                             src="{{asset('assets/site/images/icons/check-mark.svg')}}"
                             alt="">دانشجو
                        استراتژی درمانی

                    </div>
                </div>




            </div>

            <div class="col-md-4 mr-md-3 mx-sm-2">
                <div class="card border  mt-5 ">
                    <div class="pt-4">
                        <strong class="m-3">قیمت : </strong>
                        <strong class="pl-3 float-left text-success ">800000 تومان</strong>
                        <del class="float-left pl-2 text-danger ">10000000 تومان</del>
                    </div>
                    <div class="align-content-center col-12 mt-5">
                        <button class="btn btn-product text-light col-12">خرید دوره</button>
                    </div>
                    <div>
                        <div class="mt-5">
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/student.svg')}}"
                                     alt="">
                                <strong>228</strong><span class="mr-2">دانشجو</span>
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/language.svg')}}"
                                     alt="">
                                زبان فارسی
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/clock.svg')}}"
                                     alt="">
                                دوره کامل پروژه محور
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/classes.svg')}}"
                                     alt="">
                                غیر حضوری
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
                                حجم فایل
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center border p-4">
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/comments.svg')}}"
                             alt="">
                        <strong>5</strong><span class="mr-2">دیدگاه</span>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/view.svg')}}"
                             alt="">
                        <strong>5</strong><span class="mr-2">بازدید</span>
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
        <div class="row">
            <div class="col-md-7 ml-md-5">


                {{--    comments component    --}}
                <div class="container  py-5 ">
                    <div class="row  ">
                        <div class="col-md-12 ">

                            <form action="" method="POST" >
                                <div class="form-group">
                                    <label for="comment">
                                        دیدگاه شما
                                    </label>
                                    <textarea class="form-control" name="comment" id="" cols="30" rows="5"
                                              required></textarea>
                                </div>

                                <div class="row form-group">
                                    <div class="col">
                                        <label for="name">نام </label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="col">
                                        <label for="email"> ایمیل </label>
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group mt-2">

                                    <button type="submit" class="btn btn-product mb-2 px-3 text-light">ثبت</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12  ">
                            <div class="card shadow-sm">
                                <div class="card-body ">

                                    <div class="row">
                                        <div class="col">
                                            <div class="d-flex flex-start">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                                     alt="avatar" width="65"
                                                     height="65"/>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mr-2">
                                                            <p class="mb-1">
                                                                مریم گلاب پاش<span class="small"> - 2 ساعت پیش </span>
                                                            </p>
                                                            <a href="#!"><i class="fas fa-reply fa-xs"></i><span
                                                                    class="small"> پاسخ </span></a>
                                                        </div>
                                                        <p class="small mb-0 mr-2">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                        </p>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                        <a class="me-3" href="#">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp"
                                                                 alt="avatar"
                                                                 width="65" height="65"/>
                                                        </a>
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center mr-2">
                                                                    <p class="mb-1">
                                                                        ساجده مهلا<span class="small"> - 1 ساعت پیش </span>
                                                                    </p>

                                                                </div>
                                                                <p class="small mb-0 mr-2">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="d-flex flex-start mt-4">
                                                <img class="rounded-circle shadow-1-strong me-3"
                                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(12).webp"
                                                     alt="avatar" width="65"
                                                     height="65"/>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center mr-2">
                                                            <p class="mb-1">
                                                                مرضیه قیثی<span class="small"> - 2 ساعت پیش </span>
                                                            </p>
                                                            <a href="#!"><i class="fas fa-reply fa-xs"></i><span
                                                                    class="small"> پاسخ </span></a>
                                                        </div>
                                                        <p class="small mb-0 mr-2">
                                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                        </p>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                        <a class="me-3" href="#">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(31).webp"
                                                                 alt="avatar"
                                                                 width="65" height="65"/>
                                                        </a>
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center mr-2">
                                                                    <p class="mb-1">
                                                                        هانیه طهماسبی<span class="small"> - 1 ساعت پیش </span>
                                                                    </p>

                                                                </div>
                                                                <p class="small mb-0 mr-2">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                        <a class="me-3" href="#">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(29).webp"
                                                                 alt="avatar"
                                                                 width="65" height="65"/>
                                                        </a>
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center mr-2">
                                                                    <p class="mb-1">
                                                                        محیوبه امیدی<span class="small"> - 1 ساعت پیش </span>
                                                                    </p>

                                                                </div>
                                                                <p class="small mb-0 mr-2">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-start mt-4">
                                                        <a class="me-3" href="#">
                                                            <img class="rounded-circle shadow-1-strong"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp"
                                                                 alt="avatar"
                                                                 width="65" height="65"/>
                                                        </a>
                                                        <div class="flex-grow-1 flex-shrink-1">
                                                            <div>
                                                                <div class="d-flex justify-content-between align-items-center mr-2">
                                                                    <p class="mb-1">
                                                                        امین کریمی<span class="small"> - 1 ساعت پیش </span>
                                                                    </p>

                                                                </div>
                                                                <p class="small mb-0 mr-2">
                                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection


