@extends('admin.layouts.admin')

@section('title')
    create course
@endsection

@section('script')
    <script>
        {{--$('#userSelect').change(function(){--}}
        {{--    let userId = $(this).val();--}}

        {{--    $.get(`{{ url('/user-days/${userId}') }}`, function(response,--}}
        {{--                                                        status) {--}}
        {{--        if (status == 'success') {--}}

        {{--            // console.log(response);--}}

        {{--            $('#days').find('div').remove();--}}

        {{--            let daysformgroup= $('<div/>',{--}}
        {{--                class : 'form-group col-md-4'--}}
        {{--            });--}}

        {{--            daysformgroup.append($('<lable/>',{--}}
        {{--                text : 'انتخاب روز'--}}
        {{--            }));--}}


        {{--            var sel = $('<select>',{--}}
        {{--                name : 'day_id',--}}
        {{--                class : 'form-control'--}}
        {{--            }).appendTo(daysformgroup);--}}

        {{--            response.forEach(day => {--}}
        {{--                sel.append($("<option>").attr('value',day.id).text(day.day));--}}
        {{--            });--}}
        {{--            $('#days').append(daysformgroup);--}}
        {{--        } else {--}}
        {{--            alert('مشکل در ایجاد فیلد روز ها');--}}
        {{--        }--}}
        {{--    }).fail(function() {--}}
        {{--        alert('مشکل در دریافت لیست روزه ها');--}}
        {{--    })--}}
        {{--});--}}

        // $('#image').change(function() {
        //     //get the file name
        //     var fileName = $(this).val();
        //     //replace the "Choose a file" label
        //     $(this).next('.custom-file-label').html(fileName);
        // });
        // $("#czTag").czMore();


    </script>

@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد دوره</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام دوره:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ old('title') }}">
                    </div>
                    <div class="form-group col-md-3 mt">
                        <label for="slug">نام دوره به انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ old('slug') }}">
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="image">تصویر دوره:</label>
                            {{--                        <div class="custom-file">--}}
                            {{--                            <input type="file" name="image" class="custom-file-input" id="image">--}}
                            {{--                            <label class="custom-file-label" for="image"> انتخاب فایل </label>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <label for="description">توضیحات:</label>
                        <textarea name="description" id="editor"></textarea>

                    </div>

                    <div class="form-group col-md-3 mt-3">
                        <label for="actual_price">قیمت دوره:</label>
                        <input class="form-control" id="actual_price" name="actual_price" type="text"
                               value="{{ old('actual_price') }}">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="discount_price">تخفیف دوره:</label>
                        <input class="form-control" id="discount_price" name="discount_price" type="text"
                               value="{{ old('discount_price') }}">
                    </div>


                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_lang">زبان دوره</label>
                            <input class="form-control" id="course_lang" name="course_lang" type="text"
                                   value="{{ old('course_lang') }}">
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_time">زمان دوره</label>
                            <input class="form-control" id="course_time" name="course_time" type="text"
                                   value="{{ old('course_time') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_size">حجم دوره</label>
                            <input class="form-control" id="course_size" name="course_size" type="text"
                                   value="{{ old('course_size') }}">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="course_lind">نوع دوره</label>
                            <input class="form-control" id="course_lind" name="course_lind" type="text"
                                   value="{{ old('course_lind') }}">
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
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection