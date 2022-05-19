@extends('admin.layouts.admin')

@section('title')
    edit courses
@endsection

@section('script')
    <script>
            $('#userSelect').change(function(){
                let userId = $(this).val();

                $.get(`{{ url('/adminindex/user-days/${userId}') }}`, function(response,
                    status) {
                    if (status == 'success') {

                    // console.log(response);

                    $('#days').find('div').remove();

                    let daysformgroup= $('<div/>',{
                           class : 'form-group col-md-4'
                       });

                    daysformgroup.append($('<lable/>',{
                            text : 'انتخاب روز'
                        }));


              var sel = $('<select>',{
                          name : 'day_id',
                         class : 'form-control'
                     }).appendTo(daysformgroup);

             response.forEach(day => {
               sel.append($("<option>").attr('value',day.id).text(day.day));
              });
            $('#days').append(daysformgroup);
                } else {
                        alert('مشکل در ایجاد فیلد روز ها');
                    }
                }).fail(function() {
                    alert('مشکل در دریافت لیست روزه ها');
                })
            });

            $('#image').change(function() {
                //get the file name
                var fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            });

            $("#czTag").czMore();

    </script>
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش دوره ی: {{ $course->course }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('courses.update' , ['course' => $course->slug]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="coursename">نام دوره:</label>
                        <input class="form-control" id="coursename" name="coursename" type="text" value="{{$course->coursename}}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="instrument_id">انتخاب ساز</label>
                        <select id="instrumentSelect" name="instrument_id" class="form-control" data-live-search="true">
                            <option value="{{ $course->instruments->id }}">{{ $course->instruments->instrument }}</option>
                            @foreach ($instruments as $instrument)
                                <option value="{{ $instrument->id }}">{{ $instrument->instrument }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="teaching_place">مکان کلاس:</label>
                        <input class="form-control" id="teaching_place" name="teaching_place" type="text" value="{{ $course->teaching_place }}" >
                    </div>

                    <div class="form-group col-md-3">
                        <label for="user_id">انتخاب مربی</label>
                        <select id="userSelect" name="user_id" class="form-control" data-live-search="true">
                            <option value="{{ $course->users->id }}">{{ $course->users->name }} {{ $course->users->faname }}</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{$user->name}} {{$user->faname}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-9">
                        <div id="days" class="row">
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tuition">شهریه:</label>
                        <input class="form-control" id="tuition" name="tuition" type="number" value="{{ $course->tuition }}" >
                    </div>

                    <div class="form-group col-md-3">
                        <label for="tuition_per">شهریه به ازای جلسه:</label>
                        <input class="form-control" id="tuition_per" name="tuition_per" type="number" value="{{ $course->tuition_per }}" >
                    </div>

                    <div class="form-group col-md-3">
                        <label for="wage">کارمزد:</label>
                        <input class="form-control" id="wage" name="wage" type="number" value="{{ $course->wage }}" >
                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $course->getRawOriginal('is_active') ? 'selected' : '' }}>فعال</option>
                            <option value="0" {{ $course->getRawOriginal('is_active') ? '' : 'selected' }} >غیرفعال</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" id="description"
                        name="description">{{ $course->description }}</textarea>
                    </div>

                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('courses.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
        <hr>
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <form action="{{ route('courses.images.change', ['course' => $course->slug]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <img class="card-img-top" src="{{ url('/upload/course/' . $course->courseimage) }}">
                    <div class="form-group col-md-4">
                        <label for="image">تغییر تصویر</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="image">
                            <label class="custom-file-label" for="image"> انتخاب فایل</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">تغییر</button>
                <a href="{{ route('courses.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
        <hr>
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">

                    @foreach ($course->tags as $tag)
                        <form action="{{ route('tags.update', ['tag' => $tag->slug]) }}" method="POST">
                            @csrf
                            @method('PUT')

                        <div class="form-group col-md-4">
                            <div class="row">
                            <input type="text" class="form-control" name="tag" value="{{$tag->tag}}">

                            <button class="btn btn-outline-primary btn-sm" type="submit">تغییر</button>
                            </form>
                            <form action="{{ route('tags.destroy', ['tag' => $tag->slug]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit">حذف</button>
                            </form>
                            </div>
                        </div>

                    @endforeach
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                    <div class="col-md-12 mt-5">
                <div id="czTag"> ایجاد تگ
                <div id="first">
                <div class="recordset">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label>ایجاد تگ</label>
                        <input class="form-control" name="tag[]" type="text">
                    </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm">ثبت</button>
            </form>
        </div>

    </div>

@endsection
