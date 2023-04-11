<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

    <title>Eduor || Online Education Learning HTML Template</title>

    <link rel="icon" type="image/png" href="{{ asset('front/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animated_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('front/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
</head>

<body class="home_3">
    
    @include('layouts.front.header')

    @yield('content')
    @include('layouts.front.footer')

    <!--=================================
        FOOTER 3 START
    ==================================-->
    
    <!--=================================
        FOOTER 3 END
    ==================================-->


    <!--=============================
        SCROLL BUTTON 2 START
    ==============================-->
    <div class="tf__scroll_btn_2 tf__scroll_btn"><i class="far fa-long-arrow-up"></i></div>
    <!--=============================
        SCROLL BUTTON 2 END 
    ==============================-->


    <!--jquery library js-->
    <script src="{{ asset('front/js/jquery-3.6.3.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('front/js/Font-Awesome.js') }}"></script>
    <!--venobox js-->
    <script src="{{ asset('front/js/venobox.min.js') }}"></script>
    <!--slick slider js-->
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <!--counterup js-->
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countup.min.js') }}"></script>
    <!--animated barfiller js-->
    <script src="{{ asset('front/js/animated_barfiller.js') }}"></script>
    <!--sticky sidebar js-->
    <script src="{{ asset('front/js/sticky_sidebar.js') }}"></script>
    <!--nice select js-->
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>