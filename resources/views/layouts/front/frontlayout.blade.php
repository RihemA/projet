<!DOCTYPE html> 
<html lang="en">
	<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Mentoring</title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/all.min.css') }}">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
		
		<!-- Slick CSS -->
		<link rel="stylesheet" href="{{ asset('front/plugins/slick/slick.css') }}">
		<link rel="stylesheet" href="{{ asset('front/plugins/slick/slick-theme.css') }}">
		
		<!-- Aos CSS -->
		<link rel="stylesheet" href="{{ asset('front/plugins/aos/aos.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
	
	</head>
	<body class="body-home-one">
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
            @include('layouts.front.header')
			<!-- /Header -->
			
			@yield('content')
			
			<!-- Footer -->
			@include('layouts.front.footer')
			<!-- /Footer -->
		</div>
		<!-- /Main Wrapper -->

		
		
		<!-- jQuery -->
		<script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
		
		<!-- counterup JS -->
		<script src="{{ asset('front/js/jquery.waypoints.js') }}"></script>
		<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
		
		<!-- Owl Carousel -->
		<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>		
		
		<!-- Slick Slider -->
		<script src="{{ asset('front/plugins/slick/slick.js') }}"></script>
		
		<!-- Aos -->
		<script src="{{ asset('front/plugins/aos/aos.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('front/js/script.js') }}"></script>
		
	</body>
</html>