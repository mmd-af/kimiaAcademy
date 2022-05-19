<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pr-0" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{--        <div class="sidebar-brand-icon rotate-n-15">--}}
        {{--            <i class="fas fa-laugh-wink"></i>--}}
        {{--        </div>--}}
        <div class="sidebar-brand-text">kimyagaracademy.com</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> داشبورد </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        مدیریت
    </div>

    <!-- Nav Item - categories -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.categories.index')}}">
            <i class="fas fa-store"></i>
            <span>دسته بندی ها </span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
           aria-expanded="true"
           aria-controls="collapsePages">
            <i class="fas fa-fw fa-cart-plus"></i>
            <span>دوره های آموزشی</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin.courses.index')}}">همه ی دوره ها</a>
                <a class="collapse-item" href="#">آیتم ها</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.posts.index')}}">
            <i class="fas fa-store"></i>
            <span> مقالات </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-store"></i>
            <span> نظرات </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-store"></i>
            <span> پیام ها </span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
