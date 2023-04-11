<!--=================================
        TOPBAR 2 START
    ==================================-->
    <section class="tf__topbar tf__topbar_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 d-none d-md-block">
                    <div class="tf__topbar_left d-flex flex-wrap align-items-center">
                        <p>Visitez nos pages sociales:</p>
                        <ul class="d-flex flex-wrap">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="tf__topbar_right">
                        <ul class="d-flex flex-wrap">
                            @if (auth()->user())
                            <li><a href="/profile">{{ auth()->user()->name }}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <em class="icon ni ni-signout"></em><span>Sign out</span>
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                            @else
                            <li><a href="/login">Connexion </a></li>
                            <li><a href="/register">Inscription</a></li>
                            @endif
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        TOPBAR 2 END
    ==================================-->


    <!--=================================
        MAIN MENU 3 START
    ==================================-->
    <nav class="navbar navbar-expand-lg main_menu main_menu_3">
        <div class="container">
            <a class="navbar-brand" href="index_3.html">
                <img src="images/logo3.png" alt="Eduor" class="img-fluid w-100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="far fa-bars menu_icon"></i>
                <i class="far fa-times close_icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Accueil </a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Événements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contactez-nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--=================================
        MAIN MENU 3 END
    ==================================-->