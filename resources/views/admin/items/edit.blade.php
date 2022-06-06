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
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام دسته بندی:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{$item->title}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $item->slug }}">
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <label for="type" class="pr-3">انتخاب دسته:</label>
                        <div class="form-group col-md-3" id="select_item">
                            <label for="course">دوره های آموزشی</label>
                            <input id="course" class="item_type" type="radio" value="1" name="cat_type"
                                   @if($item->getRawOriginal('type') == \App\Enums\ECategoryType::COURSE) checked @endif>
                            <label for="post" class="pr-5">مقالات</label>
                            <input id="post" class="item_type" type="radio" value="2" name="cat_type"
                                   @if($item->getRawOriginal('type') == \App\Enums\ECategoryType::POST) checked @endif>
                        </div>
                    </div>

                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-3">
                            <label for="parent_id">نوع دسته</label>
                            <select class="form-control item-select" id="parent_id" name="parent_id">

                                <option value="0" selected>ابتدا نوع دسته بندی را مشخص کنید ...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.items.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#select_item input').click(function () {

                let val = $(this).val();
                $('.item-select').empty();
                $('.item-select').append('<option value="0" selected>دسته ی مادر</option>');

                $.ajaxSetup(
                    {
                        'headers': {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                $.ajax({
                    url: '{{ route('admin.items.ajax.item_type') }}',
                    type: 'POST',
                    data: {value: val},
                    success: function (response) {

                        response.data.forEach(function (item, index) {
                            let option = `<option value=${item.id}>${item.title}</option>`;
                            $('.item-select').append(option);
                        });

                    }
                });
            });
        });


    </script>
@endsection
