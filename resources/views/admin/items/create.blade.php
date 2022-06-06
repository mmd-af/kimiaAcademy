@extends('admin.layouts.admin')

@section('title')
    create item
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">ایجاد دسته بندی</h5>
                </div>
                <div>
                    @include('admin.layouts.partials.errors')
                    <form action="{{ route('admin.items.store') }}" method="POST">
                        @csrf
                        <div class="form-row p-4">
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3">
                                    <label for="Category_title">نام دسته بندی:</label>
                                    <input class="form-control" id="Category_title" name="Category_title" type="text"
                                           value="{{ old('Category_title') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3 mt">
                                    <label for="slug">نام دسته بندی به انگلیسی:</label>
                                    <input class="form-control" id="slug" name="slug" type="text"
                                           value="{{ old('slug') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <label for="type" class="pr-3">انتخاب دسته:</label>
                                <div class="form-group col-md-3" id="select_item">
                                        <label for="course">دوره های آموزشی</label>
                                        <input id="course" class="item_type" type="radio" value="1"
                                               name="cat_type">
                                        <label for="post" class="mr-2">مقالات</label>
                                        <input id="post" class="item_type" type="radio" value="2"
                                               name="cat_type">
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
                            <div class="form-group col-md-12 mt-3 mr-3">
                                <button class="btn btn-outline-success px-4" type="submit">ثبت</button>
                                <a href="{{ route('admin.items.index') }}"
                                   class="btn btn-outline-dark mr-3">بازگشت</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        {{--$(document).ready(function () {--}}
        {{--    $.ajaxSetup({--}}
        {{--        headers: {--}}
        {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--        }--}}
        {{--    });--}}

        {{--    let a = $('input[type=radio][name=cat_type]').change(function () {--}}

        {{--        let b = $('.item_type').on('click', function () {--}}
        {{--            $('.item_type').click().val();--}}
        {{--        });--}}

        {{--        $.ajax({--}}
        {{--            type: "POST",--}}
        {{--            url: "{{ route('admin.items.ajax.item_type') }}",--}}

        {{--            data: function (a) {--}}
        {{--                return {--}}
        {{--                    method: POST,--}}
        {{--                    type: type,--}}
        {{--                    data: a,--}}
        {{--                };--}}
        {{--            }--}}
        {{--        });--}}


        {{--                console.log(cateId);--}}


        {{--            };--}}
        {{--        });--}}


        {{--    });--}}


        {{--});--}}
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


                        // console.log(response.data)

                    }
                });
            });
        });


    </script>
@endsection