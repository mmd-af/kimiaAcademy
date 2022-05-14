@extends('admin.layouts.admin')

@section('title')
    create category
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
                <h5 class="font-weight-bold">ایجاد دسته بندی</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <input type="hidden" name="category_id" value="1">
                    <div class="form-group col-md-3">
                        <label for="Category_title">نام دسته بندی:</label>
                        <input class="form-control" id="Category_title" name="Category_title" type="text"
                               value="{{ old('Category_title') }}">
                    </div>
                    <div class="form-group col-md-3 mt">
                        <label for="slug">نام دسته بندی به انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ old('slug') }}">
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="parent_id">نوع دسته</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="0" selected>دسته ی مادر</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
