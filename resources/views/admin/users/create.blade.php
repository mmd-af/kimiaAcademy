@extends('admin.layouts.index')

@section('title')
    create roles
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایحاد نقش</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="name">نام نمایشی</label>
                    <input class="form-control" name="display_name" type="text" value="{{ old('display_name') }}">
                </div>
                <div class="form-group col-md-3">
                    <label for="name">نام</label>
                    <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                </div>
                <div class="accordion col-md-12 mt-3" id="accordionPermission">
                    <div class="card">
                        <div class="card-header p-1" id="headingOne">
                            <label class="mb-0">
                                <div>
                                    مجوز های دسترسی
                                </div>
                            </label>
                        </div>
                        <div>
                            <div class="card-body row">
                                @foreach ($permissions as $permission)
                                    <div class="form-group form-check col-md-3">
                                        <input type="checkbox" class="form-check-input"
                                            id="permission_{{ $permission->id }}" name="{{ $permission->name }}"
                                            value="{{ $permission->name }}">
                                        <label class="form-check-label mr-3"
                                            for="permission_{{ $permission->id }}">{{ $permission->display_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button class="btn btn-success px-4" type="submit">ثبت</button>
                <a href="{{ route('admin.roles.index') }}" class="btn btn-outline-dark mr-3">بازگشت</a>
        </form>
        </div>


    </div>

@endsection
