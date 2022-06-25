@extends('admin.layouts.index')

@section('title')
    edit courses
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش دوره ی: {{ $course->title }}</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.courses.update' , ['course' => $course->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام دوره:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ $course->title }}">
                    </div>
                    <div class="form-group col-md-3 mt">
                        <label for="slug">نام دوره به انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $course->slug }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="category_id">نوع دسته</label>
                        <select class="form-control selectpicker" data-live-search="true" id="category_id"
                                name="category_id">
                            <option value="{{$courseCategory->id}}">{{$courseCategory->title}}</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-12 mt-5">
                        <div class="form-group col-md-3">
                            <label for="image_url">تصویر دوره:</label>
                            <div class="input-group">
                                <input id="thumbnail" class="form-control" type="text" name="image_url"
                                       value="{{$course->images->url}}">
                                <a id="images" data-input="thumbnail" data-preview="holder"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-5">
                        <div class="form-group col-md-3">
                            <label for="url">ویدئو دوره:</label>
                            <div class="input-group">
                                <input id="thumbnail2" class="form-control" type="text" name="url"
                                       value="{{$course->videos->url}}">
                                <a id="files" data-input="thumbnail2" data-preview="holder2"
                                   class="btn btn-primary text-light">
                                    انتخاب
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <label for="description">توضیحات:</label>
                        <textarea name="description" id="editor">{{$course->description}}</textarea>

                    </div>

                    <div class="form-group col-md-3 mt-3">
                        <label for="actual_price">قیمت دوره:</label>
                        <input class="form-control" id="actual_price" name="actual_price" type="number"
                               value="{{ $course->actual_price }}">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="discount_price">تخفیف دوره:</label>
                        <input class="form-control" id="discount_price" name="discount_price" type="number"
                               value="{{ $course->discount_price }}">
                    </div>


                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_lang">زبان دوره</label>
                            <input class="form-control" id="course_lang" name="course_lang" type="text"
                                   value="{{ $course->course_lang }}">
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_time">زمان دوره</label>
                            <input class="form-control" id="course_time" name="course_time" type="text"
                                   value="{{ $course->course_time }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_size">حجم دوره</label>
                            <input class="form-control" id="course_size" name="course_size" type="text"
                                   value="{{ $course->course_size }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_kind">نوع دوره</label>
                            <input class="form-control" id="course_kind" name="course_kind" type="text"
                                   value="{{ $course->course_kind }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" {{ $course->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                                </option>
                                <option value="0" {{ $course->getRawOriginal('is_active') ? '' : 'selected' }} >غیرفعال
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <button class="btn btn-success mt-5" type="submit">ثبت</button>
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

