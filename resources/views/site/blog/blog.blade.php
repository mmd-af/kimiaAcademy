@extends('site.layouts.app')
@section('title','کیمیا آکادمی')
@section('content')
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @foreach($posts as $post)
                        <article class="entry shadow-lg">
                            <div class="entry-img">
                                <img src="{{asset($post->images->url)}}" alt="{{$post->title}}"
                                     class="img-thumbnail">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    {{$post->title}}
                                </a>
                            </h2>
                            <div class="entry-meta ">
                                <ul class="">
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html"> نویسنده: {{$post->users->firstname}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html">
                                            <time> تاریخ : {{verta($post->created_at)->format('j-n-Y')}}</time>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                {!!  Str::limit($post->description,150) !!}
                                <div class="align-self-end pb-3">
                                    <a href="#" class="btn btn-article float-left align-bottom">مطالعه بیشتر</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                @endforeach
                <!-- End blog entry -->
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
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
                                        <form action="{{route('blog.categoryfilter', ['category' => $category->id])}}"
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


