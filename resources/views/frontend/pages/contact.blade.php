@extends('frontend.layouts.main')

@section('content')
    <!-- PAGE HEADING AND BREADCRUMB -->
    <div class="heading-breadcrumb">
        <div class="container">
            <h1 class="heading-primary">Contact Us</h1>
            <ul class="list-inline">
                <li class="list-inline-item have_link"><a href="/">Home</a></li>
                <li class="list-inline-item"><span> &raquo; </span></li>
                <li class="list-inline-item">Contact Us</li>
            </ul>
        </div>
    </div>

    <div class="section-primary section-about">
        <div class="container">
            <section id="contact" class="contact">

                <!-- Contact Section Title -->
                <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                </div>

                <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A108 Adam Street</p>
                                        <p>New York, NY 535022</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                        <p>+1 6678 254445 41</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                        <p>contact@example.com</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item aos-init aos-animate" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <form action="#" method="post" class="php-email-form aos-init aos-animate"
                                data-aos="fade-up" data-aos-delay="200">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email"
                                            required>
                                    </div>

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject"
                                            required>
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--CTA REGISTER-->
    <section class="section-primary cta-register">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 cta-register__left bg-cover"
                    style="background-image: url('assets/frontend/images/cta-register-bg.jpg')"></div>
                <div class="col-12 col-md-6 cta-register__right">
                    <div class="cta-register__block-wrapper">
                        <div class="cta-register__block">
                            <h2 class="heading-large"><span class="underline-primary">Come on</span><br />Let's give it a
                                try!</h2>
                            <p class="cta-register__info">
                                <span class="underline-primary color-primary fw-bold">150.000 members</span> have already
                                created their profile and enjoy a network of friends from hell! So… What are you waiting
                                for? 🙂
                            </p>
                            <a href="#" class="btn btn-primary btn-lg">Register to Shrestha Banshawali now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER START -->
    {{-- @include('frontend.layouts.footer') --}}

    <!-- SCRIPT START -->
    <!-- j.Q.u.e.ry -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- B.o.o.t.s.t.r.a.p - J.a.v.a.s.c.r.i.p.t -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- F.o.n.t - a.w.e.s.o.m.e -->
    <script src="" type="text/javascript" charset="utf-8"></script>
    <!-- C.u.s.t.o.m - J.a.v.a.s.c.r.i.p.t -->
    <script src="js/custom.js" type="text/javascript" charset="utf-8"></script>
@endsection


<style>
    .section-about {
        color: #212529;
        background-color: #f4f4f4;
        padding: 60px 0;
        overflow: clip;
    }

    .contact {
        margin-top: 20px;
    }

    .section-title h2 {
        color: #32353a;
        font-size: 32px;
        font-weight: 700;
        position: relative;
    }

    .section-title h2:before {
        margin: 0 15px 10px 0;
    }

    .section-title h2:before,
    .section-title h2:after {
        content: "";
        width: 50px;
        height: 2px;
        background: #e84545;
        display: inline-block;
    }

    .section-title h2:after {
        margin: 0 0 10px 15px;
    }

    .section-title h2:before,
    .section-title h2:after {
        content: "";
        width: 50px;
        height: 2px;
        background: #e84545;
        display: inline-block;
    }

    .contact .info-item i {
        font-size: 38px;
        line-height: 0;
        color: #e84545;
    }

    .contact .info-item h3 {
        color: #32353a;
        font-size: 20px;
        font-weight: 700;
        margin: 20px 0 10px 0;
    }

    .contact .info-item p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .contact .php-email-form input[type=text],
    .contact .php-email-form input[type=email],
    .contact .php-email-form textarea {
        font-size: 14px;
        padding: 10px 15px;
        box-shadow: none;
        border-radius: 0;
        color: #212529;
        background-color: rgba(255, 255, 255, 0.5);
        border-color: rgba(33, 37, 41, 0.2);
    }

    .contact .php-email-form .loading {
        display: none;
        background: #ffffff;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
    }

    .contact .php-email-form .error-message {
        display: none;
        background: #df1529;
        color: #ffffff;
        text-align: left;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #ffffff;
        background: #059652;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

    .contact .php-email-form button[type=submit] {
        background: #e84545;
        color: #ffffff;
        border: 0;
        padding: 10px 30px;
        transition: 0.4s;
        border-radius: 4px;
    }
</style>
