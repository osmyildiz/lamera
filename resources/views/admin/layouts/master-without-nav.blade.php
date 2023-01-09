<!doctype html>
<html>

    <head>
        <meta charset="utf-8" />

        <title> LAMELA Admin Panel</title>
        <link rel="icon" type="image/x-icon" href="assets1/img/favico.png"/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Oriartists" name="description" />
        <meta content="Oriartists" name="author" />

        <!-- App favicon -->

        @include('admin.layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('admin.layouts.vendor-scripts')
    </body>
</html>
