@extends('admin.layouts.admin')

@section('title')
    create item
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row ">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4 ">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">ایجاد فصل جدید</h5>
                </div>
                <div class="p-3">
                    @include('admin.layouts.partials.errors')
                    <form action="{{ route('admin.items.store') }}" method="POST">
                        @csrf
                        <div class="form-row mb-3">
                            <div class="col">
                                <label for="season_title">عنوان فصل</label>
                                <input type="text" class="form-control" name="season" id="season_title">
                            </div>
                            <div class="col">
                                <label for="course">انتخاب دوره</label>
                                <select class="form-control selectpicker" data-live-search="true" id="course" name="course">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div id="czContainer">
                                <div id="first">
                                    <div class="recordset  mt-3">
                                        <div class="card p-3">
                                            <div class="form-group pt-2">
                                                <span>درس شماره <strong id="title_1_number"></strong></span>
                                                </div>
                                                <div class="form-row py-2">
                                                    <div class="col">
                                                    <input type="text" class="form-control" placeholder="عنوان درس" id="title_1_cz" name="title[]">
                                                     </div>
                                                <div class="col">
                                                    <div class="input-group" dir="ltr">
                                                               <span class="input-group-btn">
                                                                 <a id="lfm_1_number" data-input="url_1_cz" data-preview="holder" class="btn btn-dark text-light">
                                                                   <i class="fa fa-picture-o"></i> آپلود فایل
                                                                 </a>
                                                               </span>
                                                        <input id="url_1_cz" class="form-control" type="text" name="url[]" >
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="custom-select" id="is_free_1_cz" name="is_free[]">
                                                        <option selected>نوع دوره</option>
                                                        <option value="1">غیر رایگان</option>
                                                        <option value="2">رایگان</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=" form-group">
                                                <textarea name="description[]" id="description_1_ck"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12 mt-3 mr-3">
                                <button class="btn btn-success px-4" type="submit">ثبت</button>
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

        $(function () {
            $('.selectpicker').selectpicker();
        });

        $("#czContainer").czMore({
            onAdd: function (index) {
                $('#title_' + index + '_number').html(index);
                CKEDITOR.replace('description_' + index + '_ck', options);

                $('#lfm_' + index + '_number').filemanager('file');

            }
        });


    </script>


@endsection
