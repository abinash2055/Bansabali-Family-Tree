@extends('frontend.layouts.main')


@section('content')
    <!-- COVER - START -->
    <div class="cover bg-cover" style="background-image: url('assets/frontend/images/profile-cover.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="cover__display">
                        <img src="assets/frontend/images/profile-display.jpg" class="img-fluid" alt="Display">
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="cover__profile">
                        <small class="cover__username">@montal</small>
                        <h1 class="cover__name">Montal Ellis</h1>
                        <ul class="clean cover__list">
                            <li>29</li>
                            <li>Sport</li>
                        </ul>
                        <div class="cover__tag">2 years ago</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COVER - END -->
    <!-- PROFILE - LINKS - START -->
    <div class="profile-links">
        <div class="container">
            <div class="row">
                <div class="col-4 col-lg-3"></div>
                <div class="col-12 col-lg-9">
                    <ul class="clean profile-links__list">
                        <li><a href="#" class="<?php if ($pageName === 'profile') {
                            echo 'active';
                        } ?>">Profile</a></li>
                        <li><a href="#">Activity</a></li>
                        <li><a href="#">Family</a></li>
                        <li><a href="#">Groups</a></li>
                        <li><a href="#">Forums</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- PROFILE - LINKS - END -->
    <!-- PROFILE - BODY - START -->
    <div class="profile-body section-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-xxl-9">
                    <div class="block-primary mb-4">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="true">Profile</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-appearance-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-appearance" type="button" role="tab"
                                    aria-controls="pills-appearance" aria-selected="false">Appearance</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-background-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-background" type="button" role="tab"
                                    aria-controls="pills-background" aria-selected="false">Background</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane ade show active" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="300" class="uppercase">Name</th>
                                            <td>Montal Ellis</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Birthdate</th>
                                            <td>20 July, 1992</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Gender</th>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Country</th>
                                            <td>United States</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">City</th>
                                            <td>New York</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Passion</th>
                                            <td>Sport</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-appearance" role="tabpanel"
                                aria-labelledby="pills-appearance-tab" tabindex="0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="300" class="uppercase">Height</th>
                                            <td>5 feet 10 inch</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Weight</th>
                                            <td>70 Kg</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Complexion</th>
                                            <td>Fair</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="pills-background" role="tabpanel"
                                aria-labelledby="pills-background-tab" tabindex="0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="300" class="uppercase">Primary Language</th>
                                            <td>Newari</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Ethnicity</th>
                                            <td>Newar</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Drinks</th>
                                            <td>Never</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Smokes</th>
                                            <td>Sometimes</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Education</th>
                                            <td>University</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Pets</th>
                                            <td>Dog</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-xxl-3">
                    <div class="block-primary block-primary--collapsed mb-4">
                        <div class="block-primary__heading">Recent members</div>
                        <div class="block-primary__body">
                            <ul class="clean user-list">
                                <li>
                                    <a href="#" class="user-list__each">
                                        <img src="assets/frontend/images/members/member-01.jpg" alt="Member"
                                            class="user-list__img">
                                        <div class="user-list__info">
                                            <div class="user-list__name">Wynonn Judd</div>
                                            <div class="user-list__helper">2 days ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list__each">
                                        <img src="assets/frontend/images/members/member-02.jpg" alt="Member"
                                            class="user-list__img">
                                        <div class="user-list__info">
                                            <div class="user-list__name">Dana Cortese</div>
                                            <div class="user-list__helper">5 days ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list__each">
                                        <img src="assets/frontend/images/members/member-03.jpg" alt="Member"
                                            class="user-list__img">
                                        <div class="user-list__info">
                                            <div class="user-list__name">Chynna Phillips</div>
                                            <div class="user-list__helper">A week ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list__each">
                                        <img src="assets/frontend/images/members/member-05.jpg" alt="Member"
                                            class="user-list__img">
                                        <div class="user-list__info">
                                            <div class="user-list__name">Tommy Hilfiger</div>
                                            <div class="user-list__helper">A week ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="user-list__each">
                                        <img src="assets/frontend/images/members/member-06.jpg" alt="Member"
                                            class="user-list__img">
                                        <div class="user-list__info">
                                            <div class="user-list__name">Russel Peters</div>
                                            <div class="user-list__helper">A week ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xl-12">
                            <div class="block-primary block-primary--collapsed mb-4">
                                <a href="#">
                                    <div class="block-primary__heading">Lorem ipsum dolor sit amet consectetur adipisicing
                                    </div>
                                    <div class="block-primary__body">
                                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, minus!
                                            Alias cumque consectetur molestias sequi illum inventore iure natus at voluptas,
                                            est ad suscipit molestiae adipisci pariatur obcaecati ipsam dicta...</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xl-12">
                            <div class="block-primary block-primary--collapsed mb-4">
                                <a href="#">
                                    <div class="block-primary__heading">Lorem ipsum dolor sit amet consectetur adipisicing
                                    </div>
                                    <div class="block-primary__body">
                                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, minus!
                                            Alias cumque consectetur molestias sequi illum inventore iure natus at voluptas,
                                            est ad suscipit molestiae adipisci pariatur obcaecati ipsam dicta...</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @include('frontend.layouts.script')
@endsection
