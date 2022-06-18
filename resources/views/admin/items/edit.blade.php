@extends('admin.layouts.admin')

@section('title')
    edit items
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش: {{ $item->title }}</h5>
            </div>
            <hr>
            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.items.update' , ['item' => $item->id])}}"
                  method="POST">
                @csrf
                @method('put')
                @if($item->getRawOriginal('parent_id') == \App\Enums\EItemType::SEASON)
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="title">عنوان فصل</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$item->title}}">
                        </div>
                    </div>
                @else
                <div class="form-row mb-3">
                    <div class="col">
                        <label for="season_title">عنوان فصل</label>
                        <input type="text" class="form-control" name="season" id="season_title" value="{{$item->parent_id}}" disabled>
                    </div>
                    <div class="col">
                        <label for="course"> دوره</label>
                        <input class="form-control selectpicker" data-live-search="true" id="course" name="course" value="{{$item->course->title}}" disabled>
                    </div>
                </div>
                <div class="form-row py-2 mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="عنوان درس"
                               id="title_1_cz" name="title" value="{{$item->title}}">
                    </div>
                    <div class="col">
                        <div class="input-group" dir="ltr">
                            <span class="input-group-btn">
                                <a id="files" data-input="url_1_cz" data-preview="holder"
                                   class="btn btn-dark text-light"><i class="fa fa-picture-o">
                                    </i> آپلود فایل</a>
                            </span>
                            <input id="url_1_cz" class="form-control" type="text" name="url" value="{{$item->videos->url}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <select class="custom-select" id="is_free_1_cz" name="is_free" >
                            <option value="1" {{ $item->getRawOriginal('is_free')==\App\Enums\EItemIsFree::PAID ? 'selected' : '' }}>غیر رایگان</option>
                            <option value="2" {{ $item->getRawOriginal('is_free')==\App\Enums\EItemIsFree::FREE ? 'selected' : '' }}>رایگان</option>
                        </select>
                    </div>
                </div>
                <div class=" form-group">
                    <textarea name="description" id="description">{{$item->description}}</textarea>
                </div>
                @endif
                <button class="btn btn-success mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.courses.show',$item->course->id) }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        {{--$(document).ready(function () {--}}
        {{--    $('#select_item input').click(function () {--}}

        {{--        let val = $(this).val();--}}
        {{--        $('.item-select').empty();--}}
        {{--        $('.item-select').append('<option value="0" selected>دسته ی مادر</option>');--}}

        {{--        $.ajaxSetup(--}}
        {{--            {--}}
        {{--                'headers': {--}}
        {{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--                }--}}
        {{--            });--}}

        {{--        $.ajax({--}}
        {{--            url: '{{ route('admin.items.ajax.item_type') }}',--}}
        {{--            type: 'POST',--}}
        {{--            data: {value: val},--}}
        {{--            success: function (response) {--}}

        {{--                response.data.forEach(function (item, index) {--}}
        {{--                    let option = `<option value=${item.id}>${item.title}</option>`;--}}
        {{--                    $('.item-select').append(option);--}}
        {{--                });--}}

        {{--            }--}}
        {{--        });--}}
        {{--    });--}}
        {{--});--}}

        $(function () {
            $('.selectpicker').selectpicker();
        });
        CKEDITOR.replace('description', options);



    </script>
@endsection
