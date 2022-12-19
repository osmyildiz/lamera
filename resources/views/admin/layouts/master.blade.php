<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title> @yield('title') ORIARTISTS Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="assets1/images/ico.png"/>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Best entertainment in London,
The best Singers in London,
Entertainment for private events ,
Luxury entertainment,
Music for high end events,
West end performers,
Book a singer for a party,
Bespoke Entertainment London
" name="description" />
    <meta content="Oriartists" name="keywords" />
    <meta content="Oriartists" name="author" />
    <!-- App favicon -->


    @include('admin.layouts.head-css')
</head>
@section('body')
    <body data-sidebar="dark">
@show
    <!-- Begin page -->
    <div id="layout-wrapper">
    @include('admin.layouts.topbar')
    @include('admin.layouts.sidebar1')



        <!--  -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('admin.layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    @include('admin.layouts.vendor-scripts')
</body>

</html>
