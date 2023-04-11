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
                        <h2>contact us</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">contact</a></li>
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
        CONTACT PAGE START
    ==================================-->
    <section class="tf__contact_page mt_190 xs_mt_95">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-7 col-lg-6 wow fadeInLeft" data-wow-duration="1.5s">
                    <div class="tf__contact_form">
                        <div class="tf__heading_area tf__heading_area_left mb_25">
                            <h5>OUR contact Us</h5>
                            <h2>Get Our Contact Now.</h2>
                        </div>
                        <p>Promote your blog posts, case udie, and product ouncems
                            with the the branded videoscustomers coming back for
                            services Makes best effort.</p>
                        <form>
                            <div class="row">
                                <div class="col-xl-6">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-xl-12">
                                    <textarea rows="8" placeholder="Message"></textarea>
                                    <button type="submit" class="common_btn_2">SEND REQUEST</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-6 wow fadeInRight" data-wow-duration="1.5s">
                    <div class="tf__contact_text">
                        <div class="tf__contact_single">
                            <div class="icon blue">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>Call</h3>
                                <a href="callto:+880254615566">+880254615566</a>
                                <a href="callto:+826542556455">+826542556455</a>
                            </div>
                        </div>
                        <div class="tf__contact_single">
                            <div class="icon orange">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>mail</h3>
                                <a href="mailto:neta@eobi.com">neta@eobi.com</a>
                                <a href="mailto:coraty@bara.com">coraty@bara.com</a>
                            </div>
                        </div>
                        <div class="tf__contact_single">
                            <div class="icon green">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text">
                                <h3>address</h3>
                                <p>52, 25 rangpur,0123 Ratrba baraj,20</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="tf__contact_map mt_100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29199.78758207035!2d90.43684581929195!3d23.819543211524437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c62fce7d991f%3A0xacfaf1ac8e944c05!2sBasundhara%20Residential%20Area%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1667021568123!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        CONTACT PAGE END
    ==================================-->

    @endsection    