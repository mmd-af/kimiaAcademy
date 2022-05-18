<!-- Content Row -->
<div class="row">
    <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
        <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
            <h5 class="font-weight-bold mb-3 mb-md-0">لیست دوره ها:</h5>
        </div>
        <div class="row">
            @php
            use App\Models\Course\Course;
                $courses= Course::latest()->paginate(10);
            @endphp
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="card mb-3 bg-secondary" style="max-width: 740px;">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="card-body d-flex justify-content-center">
                                    <img src="{{ asset('upload/course/' . $course->courseimage) }}"
                                         alt="{{$course->teaching_place}}" class="img-thumbnail rounded-start">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card-body">
                                    <h5 class="card-title text-light">{{$course->coursename}}</h5>
                                    <p class="card-text text-light">{{short($course->description,70)}}</p>

                                    <div class="card" id="smallfont">
                                        <ul class="list-group list-group-flush">
                                            <li>نام معلم: {{$course->users->name}} {{$course->users->faname}}</li>
                                            <li>مکان تدریس: {{short($course->teaching_place,25)}}</li>
                                            <li>روز کلاس: {{weekConvert($course->days->day)}}</li>
                                            <li>شهریه:
                                                @if ($course->tuition <= 0)
                                                    رایگان
                                                @else
                                                    {{ctpn(number_format($course->tuition))}}
                                                    <small>تومان به ازای {{ctpn($course->tuition_per)}}
                                                        جلسه</small> @endif</li>
                                        </ul>
                                    </div>

                                    <a href="{{route('courseregister.create', $course->slug )}}"
                                       class="btn btn-primary">شرکت در دوره</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $courses->render() }}
        </div>
    </div>
</div>

