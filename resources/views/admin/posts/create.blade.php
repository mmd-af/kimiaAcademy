@extends('admin.layouts.index')

@section('title')
    create post
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد پست</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="title">عنوان</label>
                            <input class="form-control" id="title" name="title" type="text"
                                   value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3 mt">
                            <label for="slug">عنوان پست به انگلیسی:</label>
                            <input class="form-control" id="slug" name="slug" type="text"
                                   value="{{ old('slug') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="url">تصویر:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="url"
                                       value="{{ old('url') }}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="category_id">نوع دسته</label>
                        <select class="form-control selectpicker" data-live-search="true" id="category_id"
                                name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <label for="description">توضیحات:</label>
                        <textarea name="description" id="editor"></textarea>

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
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

