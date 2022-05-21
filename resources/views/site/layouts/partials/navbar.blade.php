<nav class="navbar navbar-expand-lg navbar-dark bg-navbar py-3 shadow  " >
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">گروه آموزشی دارویی کیمیاگر</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto " id="topNavbar">
                <li class="nav-item ">
                    <a class="nav-link ml-5 " href="{{route('video')}}">دوره های آموزشی<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link ml-5" href="">محصولات</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link ml-5" href="{{route('blog')}}">مقالات آموزشی</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link ml-5" href="{{route('contact-us')}}">تماس با ما</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item align-self-lg-center"><a class="text-light ml-4" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search "
                                                                                                 aria-hidden="true"></i></a>
                </li>
                <li class="nav-item ">
                    <button class="btn btn-outline-light text-sm text-gray-700 dark:text-gray-500 underline "
                            href="{{ url('/admin/dashboard') }}"><i class="fa fa-user " aria-hidden="true"> </i> ناحیه کاربری
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
@include('site.layouts.components.search')
