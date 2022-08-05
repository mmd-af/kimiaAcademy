@extends('site.layouts.app')

@section('content')
    {{--    @include('site.layouts.partials.header')--}}

    {{--        <!-- Session Status -->--}}
    {{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

    {{--        <!-- Validation Errors -->--}}
    {{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

    {{--        <form method="POST" action="{{ route('login') }}">--}}
    {{--            @csrf--}}

    {{--            <!-- Email Address -->--}}
    {{--            <div>--}}
    {{--                <x-label for="email" :value="__('Email')" />--}}

    {{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
    {{--            </div>--}}

    {{--            <!-- Password -->--}}
    {{--            <div class="mt-4">--}}
    {{--                <x-label for="password" :value="__('Password')" />--}}

    {{--                <x-input id="password" class="block mt-1 w-full"--}}
    {{--                                type="password"--}}
    {{--                                name="password"--}}
    {{--                                required autocomplete="current-password" />--}}
    {{--            </div>--}}

    {{--            <!-- Remember Me -->--}}
    {{--            <div class="block mt-4">--}}
    {{--                <label for="remember_me" class="inline-flex items-center">--}}
    {{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
    {{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
    {{--                </label>--}}
    {{--            </div>--}}

    {{--            <div class="flex items-center justify-end mt-4">--}}
    {{--                @if (Route::has('password.request'))--}}
    {{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
    {{--                        {{ __('Forgot your password?') }}--}}
    {{--                    </a>--}}
    {{--                @endif--}}

    {{--                <x-button class="ml-3">--}}
    {{--                    {{ __('Log in') }}--}}
    {{--                </x-button>--}}
    {{--            </div>--}}
    {{--        </form>--}}
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 col-sm-12 border-1 shadow m-4">
                <form class="px-4 py-3" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="text-center p-4">
                        ورود به حساب کاربری
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <div class="form-group mt-2">
                        <small>
                            <label for="exampleDropdownFormEmail1">شماره موبایل یا ایمیل</label>
                        </small>
                        <input class="form-control mt-2 " id="exampleDropdownFormEmail1"
                               type="email" name="email">
                        {{--                    {{TODO اضاف کردن متن بعد از اقدام به خرید اگر ثبت نام نکرده باشد}}--}}
                        {{--                    <small class="small text-danger">برای ثبت سفارش نیازمند ورود به حساب کاربریتان هستید.</small>--}}
                    </div>
                    <div class="form-group">
                        <small>
                            <label for="exampleDropdownFormPassword1" class="mr-1">رمز عبور</label>
                        </small>
                        <input type="password" name="password" required autocomplete="current-password"
                               class="form-control mt-2" id="exampleDropdownFormPassword1">
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <div class="form-check pb-3">--}}
                    {{--                            <a class="form-check-label small text-primary " href="">رمز عبور خود را فراموش کرده اید؟</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <button type="submit" class="btn btn-primary mt-5 col-12">ورود</button>
                </form>
                {{--    {{TODO بعد از تاییدیه اگر خواست با هزینه بیشتر اضاف میکنیم}}--}}
                {{--    <div class="text-center">--}}
                {{--        <button type="submit" class="btn btn-light col-10 border-primary mt-2"><span class="small text-primary">ورود با حساب گوگل</span>--}}
                {{--        </button>--}}
                {{--        <button type="submit" class="btn btn-light col-10 border-primary mt-2 mb-3"><span class="small text-primary">ورود با حساب لینکدین</span>--}}
                {{--        </button>--}}
                {{--    </div>--}}
                <div class="text-center pb-3">
                    <span class="small">هنوز عضو نشده اید؟ <a href="{{route('register')}}"
                                                              class="small text-primary">ثبت نام </a>کنید </span>
                </div>
            </div>

            <div class="col-md-6 mt-5 text-center">
                <img class="" src="{{asset('assets/site/images/login-page-image.jpg')}}" alt="">
            </div>
        </div>

    </div>
@endsection

{{--@include('site.layouts.partials.footer')--}}

