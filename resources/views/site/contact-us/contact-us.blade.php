@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <div class="container-fluid">
        <header>
            <div class="row  justify-content-center">
                <div class="container-fluid bg-contact py-4">

                </div>
            </div>
        </header>
        <div class="container  contact-container">
            <div class="row contact-list mx-auto px-auto justify-content-center">
                <div class="col-md-3 p-3 ">
                    <div class="card text-center pt-4 shadow-sm">
                        <div class="text-light contact-span ">
                            <img class="card-img-top contact-icons "
                                 src="{{asset('assets/site/images/icons/mobile.svg')}}"
                                 alt="">
                        </div>
                        <div class="card-body mt-4">
                            <span class="card-title">تماس با شماره پشتیبانی </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3 ">
                    <div class="card text-center pt-4 shadow-sm">
                        <div class="text-light contact-span ">
                            <img class="card-img-top contact-icons   "
                                 src="{{asset('assets/site/images/icons/email.svg')}}"
                                 alt="">
                        </div>
                        <div class="card-body mt-4">
                            <span class="card-title">ارسال ایمیل </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-3">
                    <div class="card text-center pt-4 shadow-sm">
                        <div class="text-light contact-span ">
                            <img class="card-img-top contact-icons  "
                                 src="{{asset('assets/site/images/icons/telegram.svg')}}"
                                 alt="">
                        </div>
                        <div class="card-body mt-4">
                            <span class="card-title">ارسال پیام در تلگرام </span>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center my-2 my-sm-5">
            <div class="container mt-0 mt-sm-5">
                <div class="col-10 col-sm-4 border mx-auto  p-3 rounded">
                    @include('site.layouts.partials.errors')
                    <form action="{{route('site.messages.store')}}" method="post">
                        @csrf
                        <div class="form-group pt-4 ">
                            <input type="text" name="name" placeholder="نام و نام خانوادگی" class="form-control"
                                   value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mobile_number" placeholder="شماره تلفن همراه" class="form-control"
                                   value="{{old('mobile_number')}}">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="آدرس ایمیل" class="form-control"
                                   value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" rows="4"
                                      placeholder="درخواستتان را اینجا بنویسید ...">{{old('description')}}</textarea>
                        </div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-product mb-2 px-3 text-light">ارسال درخواست</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>




@endsection


