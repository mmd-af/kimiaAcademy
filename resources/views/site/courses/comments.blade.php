<div class="col">
    @auth
            <form action="{{ route('site.courses.comments.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="course_slug" value="{{$course->slug}}">
                <div class="form-group">
                    <label for="comment">
                        دیدگاه شما
                    </label>
                    <textarea class="form-control" name="body" id="{{ $course->id }}" cols="30"
                              rows="5" required></textarea>

                </div>
{{--                <div class="row form-group">--}}
{{--                    <div class="col">--}}
{{--                        <label for="name">نام </label>--}}
{{--                        <input type="text" name="name" class="form-control" required>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <label for="email"> ایمیل </label>--}}
{{--                        <input type="text" name="email" class="form-control" required>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-product mb-2 px-3 text-light">ثبت
                    </button>
                </div>
            </form>
    @else
        <div class="m-5 text-center">
            <strong class="text-warning">برای ثبت دیدگاه ابتدا
                <a href="{{route('login')}}">لاگین</a>
                کنید</strong>
        </div>
    @endauth
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    @foreach($comments as $comment)
                        <div class="d-flex flex-start p-3 m-3 shadow">
                            <i class="far fa-user-circle fa-2x"></i>
                            <div class="flex-grow-1 flex-shrink-1">
                                <div
                                    class="d-flex justify-content-between align-items-center mr-2">
                                    <p class="mb-1">
                                        {{$comment->user_id}}
                                    </p>
                                </div>
                                <p class="small mb-0 mr-2">
                                    {{ $comment->body }}
                                </p>
                                <span
                                    class="small float-left"> {{ctpn(verta($comment->created_at)->format('H:i Y/n/j'))}} </span>
                                @foreach($childComments->where('parent_id',$comment->id) as $childComment)
                                    <div class="d-flex flex-start mt-4 p-2 shadow">
                                        <i class="far fa-user-circle fa-2x"></i>
                                        <div class="flex-grow-1 flex-shrink-1">
                                            <div>
                                                <div
                                                    class="d-flex justify-content-between align-items-center mr-2">
                                                    <p class="mb-1">
                                                        {{$childComment->user_id}}
                                                        <span
                                                            class="small">{{ctpn(verta($childComment->created_at)->format('H:i Y/n/j'))}}</span>
                                                    </p>
                                                </div>
                                                <p class="small mb-0 mr-2">
                                                    {{ $childComment->body }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

