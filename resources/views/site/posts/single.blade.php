@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">

                    <article class="entry shadow-lg">

                        <h1 class="entry-title">
                            <a href="{{route('site.posts.show', ['post' => $post->slug])}}">
                                {{$post->title}}
                            </a>
                        </h1>
                        <div class="entry-img my-3">
                            <img src="{{asset($post->images->url)}}" alt="{{$post->title}}"
                                 class="img-thumbnail">
                        </div>
                        <div class="entry-meta ">
                            <ul class="">
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                    نویسنده: {{$post->users->firstname .' '. $post->users->lastname}}</li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <time> تاریخ : {{verta($post->created_at)->format('j-n-Y')}}</time>
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content post-line-height">
                            {!!  $post->description !!}
                            <div class="align-self-end pb-3">
                                <a href="{{route('site.posts.index')}}" class="btn btn-article float-left align-bottom">همه
                                    ی مقالات</a>
                            </div>
                        </div>
                    </article><!-- End blog entry -->

                    <!-- End blog entry -->
                    <div class="justify-content-center">

                        {{--                            <li><a href="#">1</a></li>--}}
                        {{--                            <li class="active"><a href="#">2</a></li>--}}
                        {{--                            <li><a href="#">3</a></li>--}}
                    </div>

                </div><!-- End blog entries list -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">جستجو</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text" class="form-control">
                                <button type="submit" class=""><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->
                        <h3 class="sidebar-title">دسته بندی ها</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($postCategories as $category)
                                    <li>
                                        <form
                                            action="{{route('site.posts.categoryfilter', ['category' => $category->slug])}}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-link">{{$category->title}}
                                                {{--                                        <span>(25)</span>--}}
                                            </button>
                                        </form>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                    {{--                        <h3 class="sidebar-title">مطالب اخیر</h3>--}}
                    {{--                        <div class="sidebar-item recent-posts">--}}
                    {{--                            <div class="post-item clearfix">--}}
                    {{--                                <img src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture" alt="">--}}
                    {{--                                <h4><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h4>--}}
                    {{--                                <time datetime="2020-01-01">2 روز قبل</time>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="post-item clearfix">--}}
                    {{--                                <img src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture" alt="">--}}
                    {{--                                <h4><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h4>--}}
                    {{--                                <time datetime="2020-01-01">3 روز قبل</time>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="post-item clearfix">--}}
                    {{--                                <img src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture" alt="">--}}
                    {{--                                <h4><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h4>--}}
                    {{--                                <time datetime="2020-01-01">14 روز قبل</time>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="post-item clearfix">--}}
                    {{--                                <img src="holder.js/50x50?auto=yes&bg=666&fg=444&text=picture" alt="">--}}
                    {{--                                <h4><a href="blog-single.html">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a></h4>--}}
                    {{--                                <time datetime="2020-01-01">2 ماه پیش</time>--}}
                    {{--                            </div>--}}


                    {{--                        </div>--}}
                    <!-- End sidebar recent posts-->

                        {{--                        <h3 class="sidebar-title">Tags</h3>--}}
                        {{--                        <div class="sidebar-item tags">--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="#">App</a></li>--}}
                        {{--                                <li><a href="#">IT</a></li>--}}
                        {{--                                <li><a href="#">Business</a></li>--}}
                        {{--                                <li><a href="#">Mac</a></li>--}}
                        {{--                                <li><a href="#">Design</a></li>--}}
                        {{--                                <li><a href="#">Office</a></li>--}}
                        {{--                                <li><a href="#">Creative</a></li>--}}
                        {{--                                <li><a href="#">Studio</a></li>--}}
                        {{--                                <li><a href="#">Smart</a></li>--}}
                        {{--                                <li><a href="#">Tips</a></li>--}}
                        {{--                                <li><a href="#">Marketing</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div><!-- End sidebar tags-->--}}

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->




@endsection


