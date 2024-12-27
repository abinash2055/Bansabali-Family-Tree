@extends('frontend.layouts.main')


@section('content')
    <!-- HERO - START -->
    <section class="section-primary hero" style="background-image: url('assets/frontend/images/hero-bg.jpg')">
        <div class="container">
            <h1 class="hero__heading">Reinvented<br /><span>Community</span></h1>
            <p class="hero__text">
                We offer everyone the opportunity to communicate more easily, to live in the present moment and to discover
                the world while having fun.
            </p>
            <form method="GET" action="search-member.php">
                <div class="row hero-search">
                    <div class="col-8 col-md-4 col-lg-4"><input type="search" name="query" class="form-control"
                            placeholder="Search Community Membber" /></div>
                    <div class="col-4 col-md-2 col-lg-2"><button type="submit"
                            class="btn btn-warning btn-lg hero__btn">Search</button></div>
                </div>
            </form>
        </div>
    </section>

    <!-- CATEGORIES - START -->
    <section class="section-primary section-light categories">
        <div class="container">
            <div class="section-heading">
                <h2 class="heading-primary">Be Part of the</h2>
                <h2 class="heading-secondary">Shrestha Samaj Community</h2>
                <p class="section-info">
                    Shrestha Samaj Bansawali is the best community to find your ancestor and descendent.
                    <br />
                    Be a port of the Shrestha Samaj Community and find yourself.
                </p>
            </div>

            <section class="body">
                <div class="section-body">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="feature">
                                <div class="feature__icon feature__icon--blue">
                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                    </div>

                                    <div class="feature__icon-circle feature__icon-circle--main">
                                        <i class="bi bi-people-fill"></i>
                                    </div>

                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                    </div>
                                </div>

                                <div class="feature__body">
                                    <h6 class="feature__heading">Strong Community</h6>
                                    <p class="feature__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit
                                        optio eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-sm feature-btn">View &nbsp; <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="feature">
                                <div class="feature__icon feature__icon--blue">
                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                    </div>

                                    <div class="feature__icon-circle feature__icon-circle--main">
                                        <i class="bi bi-send-check-fill"></i>
                                    </div>

                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                    </div>
                                </div>

                                <div class="feature__body">
                                    <h6 class="feature__heading">Inherited Culture</h6>
                                    <p class="feature__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit
                                        optio eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-sm feature-btn">View &nbsp; <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="feature mb-0">
                                <div class="feature__icon feature__icon--blue">
                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                    </div>

                                    <div class="feature__icon-circle feature__icon-circle--main">
                                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                    </div>
                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                    </div>
                                </div>

                                <div class="feature__body">
                                    <h6 class="feature__heading">Program & Functions</h6>
                                    <p class="feature__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit
                                        optio eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-sm feature-btn">View &nbsp; <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 col-lg-3">
                            <div class="feature mb-0">
                                <div class="feature__icon feature__icon--blue">
                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                    </div>

                                    <div class="feature__icon-circle feature__icon-circle--main">
                                        <i class="bi bi-newspaper"></i>
                                    </div>

                                    <div
                                        class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                    </div>
                                </div>

                                <div class="feature__body">
                                    <h6 class="feature__heading">News & Blog</h6>
                                    <p class="feature__text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit
                                        optio eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                    </p>
                                    <a href="#" class="btn btn-secondary btn-sm feature-btn">View &nbsp; <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="link-underline-wrapper">
                        <a href="#" class="link-underline">More about us</a>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- MEMBERS - START -->
    <section class="section-primary members">
        <div class="container">
            <div class="section-heading">
                <h2 class="heading-primary">Meet our</h2>
                <h3 class="heading-secondary">Shrestha Samaj Members</h3>
            </div>

            <div class="section-body">
                <div class="members-wrapper row">
                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-01.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Cecelio Cichan</div>
                                <div class="member__category">Travel</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-02.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Montal Ellis</div>
                                <div class="member__category">Sport</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-03.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Andre Dubus</div>
                                <div class="member__category">Sport</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-04.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Antawnia Jamison</div>
                                <div class="member__category">Travel</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-05.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Wynonn Judd</div>
                                <div class="member__category">Cooking</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-06.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Vernon Dahmer</div>
                                <div class="member__category">Travel</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-07.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Taba Carew</div>
                                <div class="member__category">Cinema</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-08.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Stephania Milovic</div>
                                <div class="member__category">Music</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-09.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Siobhan Millavic</div>
                                <div class="member__category">Sport</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-10.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Shen Foster</div>
                                <div class="member__category">Sport</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-11.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Cassey Dullea</div>
                                <div class="member__category">Cinema</div>
                            </div>
                        </a>
                    </div>

                    <div class="member col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#memberPreviewModal">
                            <img src="assets/frontend/images/members/member-01.jpg" class="img-fluid member__img"
                                alt="">
                            <div class="member__info">
                                <div class="member__name">Ron Faucheux</div>
                                <div class="member__category">Sport</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="link-underline-wrapper">
                    <a href="#" class="link-underline">Discover all members</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA - REGISTER - START -->
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

    <!-- FEATURES - START -->
    <section class="section-primary section-light features">
        <div class="container">
            <div class="section-heading">
                <h2 class="heading-primary">Let's Create a</h2>
                <h3 class="heading-secondary">Strong Community</h3>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="feature">
                            <div class="feature__icon feature__icon--blue">
                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                </div>
                                <div class="feature__icon-circle feature__icon-circle--main">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                </div>
                            </div>
                            <div class="feature__body">
                                <h6 class="feature__heading">Talk to Real People</h6>
                                <p class="feature__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit optio
                                    eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="feature">
                            <div class="feature__icon feature__icon--green">
                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                </div>

                                <div class="feature__icon-circle feature__icon-circle--main">
                                    <i class="bi bi-emoji-smile-fill"></i>
                                </div>
                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                </div>
                            </div>

                            <div class="feature__body">
                                <h6 class="feature__heading">Smooth & Simple Features</h6>
                                <p class="feature__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit optio
                                    eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="feature mb-0">
                            <div class="feature__icon feature__icon--red">
                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--left">
                                </div>

                                <div class="feature__icon-circle feature__icon-circle--main">
                                    <i class="bi bi-lock-fill"></i>
                                </div>

                                <div class="feature__icon-circle feature__icon-circle--shadow feature__icon-circle--right">
                                </div>
                            </div>

                            <div class="feature__body">
                                <h6 class="feature__heading">Your Data Is Safe</h6>
                                <p class="feature__text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident vel, suscipit optio
                                    eligendi placeat temporibus, quasi, assumenda dolorem doloribus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="link-underline-wrapper">
                    <a href="#" class="link-underline">More about us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA - EVENTS - START -->
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

    <!-- BLOG - START -->
    <section class="section-primary blogs">
        <div class="container">
            <div class="section-heading">
                <h2 class="heading-primary">Blogs</h2>
                <h3 class="heading-secondary">Read Our News & Blogs</h3>
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
                </div>

                <div class="link-underline-wrapper">
                    <a href="#" class="link-underline">View more blogs</a>
                </div>
            </div>
        </div>
    </section>

    <!-- For Member Model -->
    <style>
        #memberPreviewModal {
            font-family: math;
        }

        #memberPreviewModal h5 {
            font-size: 17px;
            font-weight: 700;
            color: #116cb5;
        }

        .preview-item {
            padding: 3px;
            border-bottom: 1px #e9e9e9 solid;
        }

        .preview-item span {
            font-size: 18px;
        }
    </style>
    <!-- Member Preview Model Start -->
    <div class="modal fade" id="memberPreviewModal" tabindex="-1" aria-labelledby="memberPreviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="memberPreviewModalLabel">Mr. Tekendra Bahadur Shrestha</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <img src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-1.jpg"
                                class="img-fluid" width="" height="" alt="Tekendra" />
                        </div>
                        <div class="col-6 col-md-8">
                            <h5>Member Short Info</h5>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Full Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Mr. Tekendra Bahadur Shrestha</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Spouce Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Ms. Binita Shrestha</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Father Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Mr. Jog Bahadur Shrestha</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Mother Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Radika Maya</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Grand Father Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Mr. Bupendra Shrestha</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Grand Mother Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>---</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Address :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Devkota Chock, Kathmandu, Nepal</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Member Sincce :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Aashad 20, 2078 B.S.</span></div>
                                </div>
                            </div><!-- Preview Item Ends -->

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="treeview.php" type="button" class="btn btn-warning">Tree View</a>
                    <a href="profile.php" type="button" class="btn btn-primary">Full Detail</a>
                </div>
            </div>
        </div>
    </div>

    <!-- For Footer -->
    @include('frontend.layouts.footer')

    <!-- For Script -->
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
