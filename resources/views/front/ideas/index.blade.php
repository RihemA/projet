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

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

</head>

<body>
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
                               <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                               <li class="breadcrumb-item active" aria-current="page">Paramètres de profil</li>
                            </ol>
                         </nav>
                         <h2 class="breadcrumb-title">Paramètres de profil</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">

                    <!-- Sidebar -->
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
                    <!-- /Sidebar -->

                    <!-- Booking summary -->
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <h3 class="pb-3">Propositions</h3>
                        <a href="{{ route('ideas.create') }}" class="btn btn-primary">Ajouter</a>
                        <!-- Mentee List Tab -->
                        <div class="tab-pane show active" id="mentee-list">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>MENTEE LISTS</th>
                                                    <th>SCHEDULED DATE</th>
                                                    <th class="text-center">SCHEDULED TIMINGS</th>
                                                    <th class="text-center">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ideas as $idea)
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                    class="avatar-img rounded-circle"
                                                                    src="assets/img/user/user2.jpg"
                                                                    alt="User Image"></a>
                                                            <a href="profile.html">Tyrone
                                                                Roberts<span>tyroneroberts@adobe.com</span></a>
                                                        </h2>
                                                    </td>
                                                    <td>08 April 2020</td>
                                                    <td class="text-center"><span class="pending">9:00 AM - 10:00
                                                            AM</span></td>
                                                    <td class="text-center"><a href="profile.html"
                                                            class="btn btn-sm bg-info-light"><i
                                                                class="far fa-eye"></i> View</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Mentee List Tab -->
                    </div>
                    <!-- /Booking summary -->

                </div>

            </div>
        </div>
        <!-- /Page Content -->

        <!-- Footer -->
        <footer class="footer">


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
    <!-- jQuery -->
    <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('front/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
    <script src="{{ asset('front/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('front/js/script.js') }}"></script>

</body>

</html>
