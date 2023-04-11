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
                        <h2>sign up</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        BREADCRUMB END
    ==================================-->


    <!--=================================
        SIGN UP START
    ==================================-->
    <section class="tf__registration mt_195 xs_mt_95" style="background: url(images/login_bg.jpg);">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="1.5s">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="tf__login_area">
                        <h2>Welcome to Eduor!</h2>
                        <p>sign up to continue</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>name</label>
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>email</label>
                                        <input type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>password</label>
                                        <input type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <label>confirm password</label>
                                        <input type="password" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tf__login_imput">
                                        <button type="submit" class="common_btn">login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <ul class="d-flex">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <p class="create_account">Dont’t have an aceount ? <a href="sign_in.html">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        SIGN UP END
    ==================================-->

@endsection    