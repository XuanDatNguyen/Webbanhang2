<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Webbanhang</title>
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/css/prettyPhoto.css" rel="stylesheet">
    <link href="/frontend/css/price-range.css" rel="stylesheet">
    <link href="/frontend/css/animate.css" rel="stylesheet">
    <link href="/frontend/css/main.css" rel="stylesheet">
    <link href="/frontend/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="/frontend/js/html5shiv.js"></script>
    <script src="/frontend/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
@include('frontend.layouts.header')

@yield('slider')

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

@yield('contact')

@include('frontend.layouts.footer')



<script src="/frontend/js/jquery.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/jquery.scrollUp.min.js"></script>
<script src="/frontend/js/price-range.js"></script>
<script src="/frontend/js/jquery.prettyPhoto.js"></script>
<script src="/frontend/js/main.js"></script>

@yield('my_javascript')

</body>
</html>
