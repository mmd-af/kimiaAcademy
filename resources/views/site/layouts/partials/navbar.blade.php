<nav class="navbar navbar-expand-lg navbar-dark bg-mine py-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">گروه آموزشی دارویی کیمیاگر</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item active">
                    <a class="nav-link mr-4" href="#">خانه <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mr-4" href="#">محصولات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#">مقالات آموزشی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="#">تماس با ما</a>
                </li>

            </ul>
            <a class="text-light ml-4" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search fa-lg"
                                                                                         aria-hidden="true"></i></a>
            <a class="btn btn-outline-light" href="{{ url('/admin/dashboard') }}"
               class="text-sm text-gray-700 dark:text-gray-500 underline">ناحیه کاربری</a>

        </div>
    </div>
</nav>
@include('site.layouts.components.search')
