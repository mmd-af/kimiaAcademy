<nav class="navbar navbar-expand-lg navbar-dark bg-navbar shadow  ">
    <div class="container-fluid">
        <ul class="navbar-nav pr-0">
            <li class="navbar navbar-light ">
                <a class="navbar-brand mt-2" href="#">
                    <img src="{{asset('assets/site/images/icons/logo.png')}}" class="img-fluid" style="height:50px;" alt="">
                </a>
            </li>
        </ul>

        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto " id="topNavbar">
                <li class="nav-item">
                    <a class="nav-link ml-5" href="{{route('video')}}">دوره های آموزشی<span
                            class="sr-only">(current)</span></a>
                </li>
                {{--                <li class="nav-item ">--}}
                {{--                    <a class="nav-link ml-5" href="">محصولات</a>--}}
                {{--                </li>--}}
                <li class="nav-item ">
                    <a class="nav-link ml-5" href="{{route('blog')}}">مقالات آموزشی</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link ml-5" href="{{route('contact-us')}}">تماس با ما</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item mt-auto">
                    <span class="searchbar"><input type="text" placeholder="جستجو..."></span>
                    <span class="searchbar mx-md-3">
                        <i class="fas fa-search text-light"></i>
                    </span>
                </li>
                <li class="nav-item mt-sm-2">
                    <button class="btn btn-outline-light text-sm text-gray-700 dark:text-gray-500 underline "
                            href="{{ url('/admin/dashboard') }}"><i class="fa fa-user " aria-hidden="true"> </i> ناحیه
                        کاربری
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('site.layouts.components.search')
