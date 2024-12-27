@extends('frontend.layouts.main')

@section('content')
    <!-- PAGE HEADING AND BREADCRUMB -->
    <div class="heading-breadcrumb">
        <div class="container">
            <h1 class="heading-primary">About Us</h1>
            <h2 class="heading-secondary">We were helping our community</h2>
            <ul class="list-inline">
                <li class="list-inline-item have_link"><a href="/">Home</a></li>
                <li class="list-inline-item"><span> &raquo; </span></li>
                <li class="list-inline-item">About Us</li>
            </ul>
        </div>
    </div>

    <div class="section-primary section-about">
        <div class="container">
            <section id="about" class="about">
                <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-xl-center gy-5">
                        <div class="col-xl-5 content">
                            <h3>About Us</h3>
                            <h2>Ducimus rerum libero reprehenderit cumque</h2>
                            <p>Shrestha Samaj Bansawali is the best community to find your ancestor and descendent. Be a
                                port of the Shrestha Samaj Community and find yourself.</p>
                            <p>Ipsa sint sit. Quis ducimus tempore dolores impedit et dolor cumque alias maxime. Enim
                                reiciendis minus et rerum hic non. Dicta quas cum quia maiores iure. Quidem nulla qui
                                assumenda incidunt voluptatem tempora deleniti soluta.</p>
                            <a href="#" class="read-more"><span>Read More</span> &nbsp; <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>

                        <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">
                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon-box">
                                        <i class="bi bi-people-fill"></i>
                                        <h3>Strong Community</h3>
                                        <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor
                                            voluptatem</p>
                                    </div>
                                </div>

                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                    <div class="icon-box">
                                        <i class="bi bi-send-check-fill"></i>
                                        <h3>Inherited Culture</h3>
                                        <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates
                                            quia</p>
                                    </div>
                                </div>

                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                    <div class="icon-box">
                                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                        <h3>Program & Functions</h3>
                                        <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur
                                            corrupti</p>
                                    </div>
                                </div>

                                <div class="col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                                    <div class="icon-box">
                                        <i class="bi bi-newspaper"></i>
                                        <h3>News & Blog</h3>
                                        <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis
                                            quideme lorenda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!--CTA REGISTER START -->
    <section class="section-primary cta-register">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 cta-register__left bg-cover"
                    style="background-image: url('images/cta-register-bg.jpg')"></div>
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

    <!--CTA EVENT START -->
    <section class="section-primary events bg-cover" style="background-image: url('images/cta-events-bg.jpg')">
        <div class="container">
            <h2 class="heading-primary">Become Part of Our</h2>
            <h3 class="heading-secondary">Next Community Events</h3>
            <p class="section-info">
                Become part of our next community events and meet other people like you.
                <br />
                Share, discuss and enjoy new experiences.
            </p>
            <a href="#" class="btn btn-primary btn-lg btn-white">Discover next events</a>
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
        padding: 15px 0;
        overflow: clip;
    }

    .about {
        margin-top: 20px;
    }

    .about .content h3 {
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        padding: 10px 20px;
        background: rgba(255, 255, 255, 0.05);
        color: #e84545;
        border-radius: 7px;
        display: inline-block;
    }

    .about .content h2 {
        color: #32353a;
        font-weight: 700;
    }

    .about .content .read-more {
        background: #e84545;
        color: #ffffff;
        font-family: "Montserrat", sans-serif;
        ;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        padding: 12px 24px;
        border-radius: 5px;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .about .icon-box {
        padding: 50px 40px;
        box-shadow: 0px 10px 50px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: all 0.3s ease-out 0s;
        background-color: #ffffff;
    }

    .about .icon-box i {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        font-size: 32px;
        line-height: 0;
        transition: all 0.4s ease-out 0s;
        background-color: rgba(232, 69, 69, 0.05);
        color: #e84545;
    }

    .about .icon-box:hover i {
        transition: all 0.4s ease-out 0s;
        color: #FFFFFF;
        background: #e84545;
    }

    .about .icon-box h3 {
        color: #32353a;
        margin-bottom: 10px;
        font-size: 24px;
        font-weight: 700;
    }
</style>
