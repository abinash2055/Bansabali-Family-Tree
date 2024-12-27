@extends('frontend.layouts.main')


@section('content')
    <!-- PAGE HEADING AND BREADCRUMB -->
    <div class="heading-breadcrumb">
        <div class="container">
            <h1 class="heading-primary">Blogs</h1>
            <ul class="list-inline">
                <li class="list-inline-item have_link"><a href="/">Home</a></li>
                <li class="list-inline-item"><span> &raquo; </span></li>
                <li class="list-inline-item">Blogs</li>
            </ul>
        </div>
    </div>

    <div class="section-primary">
        <div class="container">
            <div class="section-heading">
                <h1 class="heading-primary">Blogs</h1>
                <h1 class="heading-secondary">For the people, By the people</h1>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-01.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-02.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-03.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog mb-0">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-04.jpg" class="img-fluid"
                                        alt="">
                                </div>

                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-05.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="blog mb-0">
                            <a href="#">
                                <div class="blog__img">
                                    <img src="assets/frontend/images/blogs/blog-img-06.jpg" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="blog__footer">
                                    <div class="blog__heading">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="blog__subheading">19 June, 2022</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-underline-wrapper">
                    <a href="#" class="link-underline">View more blogs</a>
                </div>
            </div>
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
