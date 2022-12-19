<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>ORIARTISTS</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    @include('layouts.head')
    @yield('css')

</head>
<body>
<div id="canvas">
    <div id="box_wrapper">


@include('layouts.header')
@yield('content')
<!-- Footer Widgets -->



    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->



<!-- JS Files -->
@include('layouts.script')
@yield('script')

</body>
</html>
