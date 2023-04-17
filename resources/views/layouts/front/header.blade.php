<header class="header header-five">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="container">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="index.html" class="navbar-brand logo">
                        <img src="assets/img/logo-7.png" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index.html" class="menu-logo">
                            <img src="assets/img/logo-7.png" class="img-fluid" alt="Logo">
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
                    @if (auth()->user())
                        <li class="nav-item">
                            <a href="/profile" class="nav-link">{{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}"  class="nav-link header-login"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <em class="icon ni ni-signout"></em><span>Sign out</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link header-login" href="register">Sign up</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
