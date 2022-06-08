@include('site.layouts.partials.head')
@include('site.layouts.partials.navbar')

{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}

<div class="container py-5">
    <div class="row">
        <div class="col-md-5 col-sm-12 border-1 shadow m-4">
            <div class="text-center pt-4">
                ثبت نام حساب کاربری
            </div>
            <form method="POST" action="{{ route('register')}}" class="px-4 py-3">
                @csrf
                <div class="form-group">
                    <small for="first_name" class="mr-1">نام</small>
                    <input type="text" name="first_name" class="form-control mt-2" id="first_name"
                           value="{{old('first_name')}}">
                </div>
                <div class="form-group">
                    <small for="email" class="mr-1">ایمیل</small>
                    <input type="email" name="email" class="form-control mt-2" id="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <small for="mobile_number" class="mr-1">شماره موبایل</small>
                    <input type="number" name="mobile_number" class="form-control mt-2" id="mobile_number"
                           value="{{old('mobile_number')}}">
                </div>
                <div class="form-group">
                    <small for="password" class="mr-1">رمز عبور</small>
                    <input type="password" name="password" class="form-control mt-2" id="password"
                           autocomplete="new-password">
                </div>
                <div class="form-group">
                    <small for="password_confirmation" class="mr-1">تایید رمز عبور</small>
                    <input type="password" name="password_confirmation" class="form-control mt-2"
                           id="password_confirmation">
                </div>
                <button type="submit" class="btn btn-light col-12 mt-5">ثبت نام</button>
            </form>
            {{--    {{TODO بعد از تاییدیه اگر خواست با هزینه بیشتر اضاف میکنیم}}--}}
            {{--    <div class="text-center">--}}
            {{--        <button type="submit" class="btn btn-light col-10 border-primary mt-2"><span class="small text-primary">ورود با حساب گوگل</span>--}}
            {{--        </button>--}}
            {{--        <button type="submit" class="btn btn-light col-10 border-primary mt-2 mb-3"><span class="small text-primary">ورود با حساب لینکدین</span>--}}
            {{--        </button>--}}
            {{--    </div>--}}

        </div>
        <div class="col-md-6 mt-5 pt-5 text-center">
            <img class="" src="{{asset('assets/site/images/login-page-image.jpg')}}" alt="">
        </div>
    </div>
</div>
@include('site.layouts.partials.footer')
