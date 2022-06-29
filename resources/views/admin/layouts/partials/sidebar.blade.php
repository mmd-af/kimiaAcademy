<ul class="navbar-nav adminSliderColor sidebar sidebar-dark accordion pr-0" id="accordionSidebar">
{{--TODO after the Deploy Remove this comment files--}}
{{--
categoryControl
courseControl
postControl
educationControl
commentControl
messageControl
sitemapControl

--}}
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('site.home.index')}}">
        {{--        <div class="sidebar-brand-icon rotate-n-15">--}}
        {{--            <i class="fas fa-laugh-wink"></i>--}}
        {{--        </div>--}}
        <div class="sidebar-brand-text">kimyagaracademy.com</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> داشبورد </span></a>
    </li>
@can('categoryControl')
    <!-- Nav Item - categories -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories.index')}}">
                <i class="fas fa-window-restore"></i>
                <span>دسته بندی ها </span>
            </a>
        </li>
    @endcan
    @can('courseControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.courses.index')}}">
            <i class="fas fa-film"></i>
            <span>دوره های آموزشی</span>
        </a>
    </li>
    @endcan
    @can('postControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.posts.index')}}">
            <i class="fas fa-file"></i>
            <span> مقالات </span>
        </a>
    </li>
    @endcan
    @can('educationControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.educationalvideos.index')}}">
            <i class="fas fa-video"></i>
            <span> ویدئو های آموزشی </span>
        </a>
    </li>
    @endcan
    @can('commentControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.comments.index')}}">
            <i class="fas fa-comment"></i>
            <span> نظرات </span>
        </a>
    </li>
    @endcan
    @can('messageControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.messages.index')}}">
            <i class="fas fa-object-ungroup"></i>
            <span> پیام ها </span>
        </a>
    </li>
    @endcan
    @can('sitemapControl')
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.sitemaps.index')}}">
            <i class="fas fa-object-ungroup"></i>
            <span>نقشه ی سایت</span>
        </a>
    </li>
    @endcan

    @if (auth()->user()->rolles == 'admin')
        <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        <div class="sidebar-heading">
            مدیریت
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
               aria-expanded="true"
               aria-controls="collapsePages">
                <i class="fas fa-fw fa-users"></i>
                <span> کاربران </span>
            </a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.users.index')}}">لیست کاربران</a>
                    <a class="collapse-item" href="{{route('admin.roles.index')}}">گروه های کاربری</a>
                    <a class="collapse-item" href="{{route('admin.permissions.index')}}">سطح دسترسی ها</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.orders.index')}}">
                <i class="fas fa-object-ungroup"></i>
                <span>دوره های خریده شده</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.transactions.index')}}">
                <i class="fas fa-object-ungroup"></i>
                <span>تراکنش ها</span>
            </a>
        </li>
        <hr class="sidebar-divider">
@endif

<!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
