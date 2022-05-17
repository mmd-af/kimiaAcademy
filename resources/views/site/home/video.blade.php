@extends('Site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container">
        <h4 class="mt-5 mx-3">دوره آموزشی داروسازی گیاهی کیمیاگر</h4>
        <div class="row col-md-12 ">
            <div class="col-md-7 ml-5">
                {{--                {{TODO Admin}}--}}
                <div class="image-container mt-5 ">
                    <img class="d-block img-fluid card-img" src="holder.js/300x150?auto=yes&bg=666&fg=444&text=picture"
                         alt="Second slide">
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
                        <img class="svg-icon ml-3 check-mark " src="{{asset('assets/site/images/icons/check-mark.icons')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark " src="{{asset('assets/site/images/icons/check-mark.icons')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark " src="{{asset('assets/site/images/icons/check-mark.icons')}}"
                             alt="">دانشجو
                        استراتژی درمانی
                        <hr>
                    </div>
                    <div class="small mx-5 p-2 pt-4">
                        <img class="svg-icon ml-3 check-mark " src="{{asset('assets/site/images/icons/check-mark.icons')}}"
                             alt="">دانشجو
                        استراتژی درمانی

                    </div>
                </div>
            </div>

            <div class="col-md-4 ">
                <div class="card border row mt-5">
                    <div class="pt-4">
                        <strong class="m-3">قیمت</strong>
                        <strong class="pl-3 float-left text-success ">800000 تومان</strong>
                        <del class="float-left pl-2 text-danger ">10000000 تومان</del>
                    </div>
                    <div class="align-content-center col-12 mt-5">
                        <button class="btn btn-product text-light col-12">خرید دوره</button>
                    </div>
                    <div>
                        <div class="mt-5">
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/student.icons')}}"
                                     alt="">
                                <strong>228</strong><span class="mr-2">دانشجو</span>
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/language.icons')}}"
                                     alt="">
                                زبان فارسی
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/clock.icons')}}"
                                     alt="">
                                دوره کامل پروژه محور
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/classes.icons')}}"
                                     alt="">
                                غیر حضوری
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/file.icons')}}"
                                     alt="">
                                mp4
                                <hr>
                            </div>
                            <div class="mx-3">
                                <img class="svg-icon ml-3 mb-3 " src="{{asset('assets/site/images/icons/file-size.icons')}}"
                                     alt="">
                                حجم فایل
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center border p-4">
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/comments.icons')}}"
                             alt="">
                        <strong>5</strong><span class="mr-2">دیدگاه</span>
                    </div>
                    <div class="vr"></div>
                    <div class="mx-3">
                        <img class="svg-icon ml-3 " src="{{asset('assets/site/images/icons/view.icons')}}"
                             alt="">
                        <strong>5</strong><span class="mr-2">بازدید</span>
                    </div>
                </div>
                <div class="mt-5 row justify-content-center border p-4 about-teacher">
                    <div class=" about-teacher-title border py-2 px-4">
                        <span>درباره ی اساتید</span>
                    </div>
                    <div class="mx-3">
                        <img class="svg-icon rounded-circle ml-3 " src="{{asset('assets/site/images/rmp.png')}}"
                             alt="">
                        <span class="mr-2">بازدید</span>
                    </div>
                </div>
            </div>
        </div>

@endsection


