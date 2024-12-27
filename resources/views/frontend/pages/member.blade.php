@extends('frontend.layouts.main')

@section('content')
    <div class="heading-breadcrumb">
        <div class="container">
            <h1 class="heading-primary">Search Member</h1>
            <!-- <h2 class="heading-secondary">We were helping our community</h2> -->
            <ul class="list-inline">
                <li class="list-inline-item have_link"><a href="#">Home</a></li>
                <li class="list-inline-item"><span> &raquo; </span></li>
                <li class="list-inline-item">Search Member</li>
            </ul>
        </div>
    </div>

    <div class="section-primary section-about">
        <div class="container">
            <div class="section-heading">
                <h1 class="heading-primary">Search Member</h1>
                <h1 class="heading-secondary">Search & Find our community member</h1>
            </div>

            <section class="filter-section">
                <form action="search-member.php" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="query" placeholder="Search Query" value="<?php echo isset($_GET['query']) ? $_GET['query'] : ''; ?>"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option value="all">All</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary form-control">Search & Filter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>

            <section id="team" class="team section-bg">
                <div class="container aos-init aos-animate" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Search</h2>
                        <p>Find Our Members</p>
                    </div>

                    <div class="row">

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4">
                            <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-1.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-2.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="member">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-3.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-2.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="member">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-2.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="member">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-3.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-1 col-sm-2 col-lg-3 col-md-4">
                            <div class="member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="pic"><img
                                        src="https://bootstrapmade.com/demo/templates/Dewi/assets/img/team/team-1.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>
                                        <a href="#" class="read-more" data-bs-toggle="modal"
                                            data-bs-target="#memberPreviewModal">Show Detail &nbsp; <i
                                                class="bi bi-arrow-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section class="pagination-section">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </section>

        </div>
    </div>

    <!-- MEMBER MODEL -->
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
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Spouce Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Ms. Binita Shrestha</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Father Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Mr. Jog Bahadur Shrestha</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Mother Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Radika Maya</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Grand Father Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Mr. Bupendra Shrestha</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Grand Mother Name :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>---</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Address :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Devkota Chock, Kathmandu, Nepal</span></div>
                                </div>
                            </div>

                            <div class="preview-item">
                                <div class="row">
                                    <div class="col-6 col-sm-5 col-md-4"><strong>Member Sincce :</strong></div>
                                    <div class="col-6 col-sm-7 col-md-8"><span>Aashad 20, 2078 B.S.</span></div>
                                </div>
                            </div>

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
    /* FOR MEMBER MODEL INCLUDE FILE */
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

<style>
    /* FOR MEMBER PAGE  */
    .section-title {
        padding-bottom: 40px;
    }

    .section-title h2 {
        font-size: 14px;
        font-weight: 500;
        padding: 0;
        line-height: 1px;
        margin: 0 0 5px 0;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #5c8eb0;
        font-family: "Poppins", sans-serif;
    }

    .section-title p {
        margin: 0;
        font-size: 36px;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        color: #263d4d;
    }

    .team .member {
        margin-bottom: 60px;
    }

    .team .member .pic {
        overflow: hidden;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .team .member .member-info {
        position: absolute;
        bottom: -50px;
        left: 20px;
        right: 20px;
        background: #fff;
        padding: 20px 15px;
        color: #15222b;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: 0.5s;
    }

    .team .member h4 {
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 16px;
        color: #15222b;
        position: relative;
        padding-bottom: 10px;
    }

    .team .member h4::after {
        content: "";
        position: absolute;
        display: block;
        width: 50px;
        height: 1px;
        background: #7fa5c0;
        bottom: 0;
        left: 0;
    }

    .team .member span {
        font-style: italic;
        display: block;
        font-size: 13px;
    }

    .team .member .social {
        position: absolute;
        right: 15px;
        bottom: 15px;
    }

    .team .member .social a {
        transition: color 0.3s;
        color: #477392;
    }

    .team .member .social i {
        font-size: 16px;
        margin: 0 2px;
    }

    .read-more {
        background: #e84545;
        color: #ffffff;
        font-family: "Montserrat", sans-serif;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 0px;
        padding: 6px 14px;
        border-radius: 5px;
        transition: 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-style: normal;
    }

    .read-more:hover {
        color: #ffffff;
    }

    .filter-section {
        margin-top: 30px;
        margin-bottom: 20px;
        background: #e9e9e9;
        padding: 20px;
        border: 1px #cbcbcb solid;
    }

    .filter-section .form-control {
        padding: 8px;
        border-radius: 0;
    }

    .pagination-section {
        margin-top: 50px;
    }
</style>
