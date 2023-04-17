<div class="header">
			
    <!-- Logo -->
    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="img/logo.png" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->
    
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    
    
    
    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->
    
    <!-- Header Right Menu -->
    <ul class="nav user-menu">

       
        
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu">
                <div class="user-header">                    
                    <div class="user-text">
                        <h6>{{ auth()->user()->name }}</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a href="{{ route('logout') }}"  class="nav-link header-login"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                <em class="icon ni ni-signout"></em><span>Deconnexion</span>
                            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <!-- /User Menu -->
        
    </ul>
    <!-- /Header Right Menu -->
    
</div>