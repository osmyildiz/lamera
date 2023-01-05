<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>LAMERA</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}


    @include('layouts.head')
    @yield('css')

</head>
<body>
<div id="canvas">
    <div id="box_wrapper">


@include('layouts.header')
@yield('content')
<!-- Footer Widgets -->

@include('layouts.footer')

    </div><!-- eof #box_wrapper -->
</div><!-- eof #canvas -->



<!-- JS Files -->
@include('layouts.script')
@yield('script')

</body>
</html>
