<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Mentoring - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('back/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('back/css/font-awesome.min.css')}}">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="{{ asset('back/css/feathericon.min.css')}}">
		
		<!-- Morris CSS -->
		<link rel="stylesheet" href="{{ asset('back/plugins/morris/morris.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('back/css/style.css')}}">
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            @include('layouts.back.navbar')
			<!-- /Header -->
			
			<!-- Sidebar -->
            @include('layouts.back.sidebar')
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">			
                @yield('admin')		
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
		<script src="{{ asset('back/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('back/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Feather Icon JS -->
		<script src="{{ asset('back/js/feather.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{ asset('back/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Raphael JS -->
		<script src="{{ asset('back/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Morris JS -->
		<script src="{{ asset('back/plugins/morris/morris.min.js')}}"></script>  

		<!-- Chart JS -->
		<script src="{{ asset('back/js/chart.morris.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{ asset('back/js/script.js')}}"></script>
		
    </body>
</html>