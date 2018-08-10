<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('shop') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('shop') }}/css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('shop') }}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('shop') }}/css/component.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
    />
    <script src="{{ asset('shop') }}/js/jquery.min.js"></script>
    {{--<script src="{{ asset('shop') }}/js/simpleCart.min.js"> </script>--}}
    <!-- start menu -->
    <link href="{{ asset('shop') }}/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('shop') }}/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
</head><!--/head-->

<body>

@include('shop.includes.header')

{{--@yield('slider');--}}

<section>
    <div class="container">
        <div class="row">
            {{--<div class="col-sm-3">
                @include('shop.includes.sidebar')
            </div>--}}

            <div class="col-sm-9 padding-right">
                @yield('content')
            </div>
        </div>
    </div>
</section>

@include('shop.includes.footer')




</body>
</html>