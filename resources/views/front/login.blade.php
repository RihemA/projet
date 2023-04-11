@extends('../layouts/front/frontlayout')

@section('content')
    <!--=================================
            BREADCRUMB START
        ==================================-->
    <section class="tf__breadcrumb" style="background: url(images/breadcrumb_bg_1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tf__breadcrumb_text">
                        <h2>sign in</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">sign in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            BREADCRUMB END
        ==================================-->


    <!--=========================
            LOGIN START
        ==========================-->
    <section class="tf__login mt_195 xs_mt_95">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="tf__login_area">
                        <h2>Welcome to Eduor!</h2>
                        <p>sign in to continue</p>
                        <form method="POST" action="{{ route('login.submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label for="InputEmail">email</label>
                                        <input type="email" name="email" id="InputEmail" placeholder="Email">
                                        @error('email')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label for="InputPassword">password</label>
                                        <input type="password" name="password" id="InputPassword" placeholder="Password">
                                        @error('password')
                                            <p class="text text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <button type="submit" class="common_btn">Connexion</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <p class="create_account">Dont’t have an aceount ? <a href="register">Create Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========================
            LOGIN END
        ==========================-->
@endsection
