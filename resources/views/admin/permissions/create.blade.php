@extends('admin.layouts.index')

@section('title')
    create permissions
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد سطح دسترسی</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.permissions.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="display_name">نام نمایشی</label>
                        <input class="form-control" name="display_name" type="text" id="display_name" value="{{ old('display_name') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="name">نام</label>
                        <input class="form-control" name="name" type="text" id="name" value="{{ old('name') }}">
                    </div>
                </div>
                <button class="btn btn-success px-4" type="submit">ثبت</button>
                <a href="{{ route('admin.permissions.index') }}" class="btn btn-outline-dark mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection
