<!DOCTYPE html> 
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Mentoring</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/plugins/select2/css/select2.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
                <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.html" class="navbar-brand logo">
                            <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li class="active has-submenu">
                                <a href="/">Accueil</a>
                             </li>
                             <li class="active has-submenu">
                                <a href="/event">Événement</a>
                             </li>
                             <li class="login-link">
                                <a href="/login">Connexion / Inscription</a>
                             </li>
                        </ul>		 
                    </div>		 
                    <ul class="nav header-navbar-rht">
                        
                        <!-- User Menu -->
                        <li class="nav-item dropdown has-arrow logged-item">
                            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <span class="user-img">
                                    {{ auth()->user()->name }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="user-header">
                                    <div class="avatar avatar-sm">
                                    </div>
                                    <div class="user-text">
                                        <h6>{{ auth()->user()->name }}</h6>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </li>
                        <!-- /User Menu -->
    
                    </ul>
                </nav>
                </div>
            </header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Blog</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Add Blog</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Sidebar -->
							<div class="profile-sidebar">
                                <div class="user-widget">
                                    <div class="pro-avatar">{{ auth()->user()->name }}</div>
    
                                    <div class="user-info-cont">
                                        <h4 class="usr-name">{{ auth()->user()->name }}</h4>
                                    </div>
                                </div>
                                <div class="custom-sidebar-nav">
                                    <ul>
                                        <li><a href="/profile"><i class="fas fa-home"></i>Dashboard <span><i
                                                        class="fas fa-chevron-right"></i></span></a></li>
                                        <li><a href="/profile/ideas"><i class="fas fa-clock"></i>Propositions <span><i
                                                        class="fas fa-chevron-right"></i></span></a></li>
                                        <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>Logout <span><i
                                                        class="fas fa-chevron-right"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
							<!-- /Sidebar -->

						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9 custom-edit-service">
							
							<div class="row">
								<div class="col-12">
									<div class="card">
										<div class="card-body">	
											<h3 class="pb-3">Add Blog</h3>
							
											<form method="POST" action="{{ route('events.store') }}" class="form-validate" enctype="multipart/form-data">
												<div class="service-fields mb-3">
													<h4 class="heading-2">Service Information</h4>
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Event Title <span class="text-danger">*</span></label>
																<input class="form-control" type="text" value="Abacus Study for beginner - Part I">
															</div>
														</div>
													</div>
												</div>
												
												<div class="service-fields mb-3">
													<h4 class="heading-2">Date</h4>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Start date <span class="text-danger">*</span></label>
																<input type="date" name="start_time" class="form-control" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>End date<span class="text-danger">*</span></label>
																<input type="date" class="form-control" id="fv-subject"
                                                        name="end_time" required>
															</div>
														</div>
													</div>
												</div>
												
												<div class="service-fields mb-3">
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Descriptions <span class="text-danger">*</span></label>
																<textarea class="form-control form-control-sm" id="description" name="description" placeholder="Write your message"
                                                        required></textarea>
															</div>
														</div>
													</div>
												</div>
												
												<div class="service-fields mb-3">
													<h4 class="heading-2">Blog Images </h4>
													<div class="row">
														<div class="col-lg-12">
															<div class="service-upload">
																<i class="fas fa-cloud-upload-alt"></i>
																<span>Upload Service Images *</span>
																<input type="file" name="photo" id="images" >
															
															</div>	
                                                            <div class="form-group">
                                                                <label for="photos">Gallery Photos</label>
                                                                <input type="file" name="photos[]" class="form-control-file" multiple>
                                                            </div>
															
														</div>
													</div>
												</div>
												<div class="submit-section">
													<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
												</div>
											</form>

										</div>
									</div>
								</div>


							</div>

						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="assets/img/logo.png" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Mentee</h2>
									<ul>
										<li><a href="search.html">Search Mentors</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="booking.html">Booking</a></li>
										<li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Mentors</h2>
									<ul>
										<li><a href="appointments.html">Appointments</a></li>
										<li><a href="chat.html">Chat</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="register.html">Register</a></li>
										<li><a href="dashboard.html">Mentor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											mentoring@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
			    <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-12 text-center">
									<div class="copyright-text">
										<p class="mb-0">&copy; 2020 Mentoring. All rights reserved.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ asset('front/assets/js/jquery-3.6.0.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('front/assets/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Select2 JS -->
		<script src="{{ asset('front/assets/plugins/select2/js/select2.min.js')}}"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="{{ asset('front/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
        <script src="{{ asset('front/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('front/assets/js/script.js')}}"></script>
		
	</body>
</html>