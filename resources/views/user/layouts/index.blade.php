@include('user.layouts.partials.header')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
@include('user.layouts.partials.sidebar')
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        @include('user.layouts.partials.topbar')
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Copyright -->

    @include('user.layouts.partials.copyright')
    <!-- End of Copyright -->
    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Footer -->

@include('user.layouts.partials.footer')
<!-- End of Footer -->
