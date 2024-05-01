<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.layouts.includes.preloader')

        <x-admin-nav-component/>


        @include('admin.layouts.includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->


   <x-admin-footer-component/>
    </div>
    <!-- ./wrapper -->
    @include('admin.layouts.includes.foot')
</body>

</html>
