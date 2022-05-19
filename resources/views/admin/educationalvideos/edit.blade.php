@extends('admin.layouts.admin')

@section('title')
    edit educationalvideos
@endsection


@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            {{--            <div class="mb-4 text-center text-md-right">--}}
            {{--                <h5 class="font-weight-bold">ویرایش مقاله ی: {{ $educational->title }}</h5>--}}
            {{--            </div>--}}
            <hr>

            @include('admin.layouts.partials.errors')
            <form action="{{ route('admin.educationalvideos.update' , ['educational' => $educational->id])}}"
                  method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="youtube_link">لینک یوتیوب:</label>
                        <input class="form-control" id="youtube_link" name="youtube_link" type="text"
                               value="{{$educational->youtube_link}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="aparat_link">لینک آپارات:</label>
                        <input class="form-control" id="aparat_link" name="aparat_link" type="text"
                               value="{{ $educational->aparat_link }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $educational->getRawOriginal('is_active') ? 'selected' : '' }}>
                                فعال
                            </option>
                            <option value="0" {{ $educational->getRawOriginal('is_active') ? '' : 'selected' }} >
                                غیرفعال
                            </option>
                        </select>
                    </div>

                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.educationalvideos.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });

        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
