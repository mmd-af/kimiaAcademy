@extends('admin.layouts.admin')

@section('title')
    create educational video
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد ویدئو آموزشی</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.educationalvideos.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="title">عنوان:</label>
                            <input class="form-control" id="title" name="title" type="text"
                                   value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="youtube_link">لینک یوتیوب:</label>
                            <input class="form-control" id="youtube_link" name="youtube_link" type="text"
                                   value="{{ old('youtube_link') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3 mt">
                            <label for="aparat_link">لینک آپارات:</label>
                            <input class="form-control" id="aparat_link" name="aparat_link" type="text"
                                   value="{{ old('aparat_link') }}">
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" selected>فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                        <a href="{{ route('admin.educationalvideos.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
