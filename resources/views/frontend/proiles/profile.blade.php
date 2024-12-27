@extends('frontend.layouts.main')


@extends('layouts.app')

@section('content')
    <!-- COVER - START -->
    <div class="cover bg-cover" style="background-image: url('{{ asset('images/profile-cover.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="cover__display">
                        <img src="{{ asset('images/profile-display.jpg') }}" class="img-fluid" alt="Display">
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <div class="cover__profile">
                        <small class="cover__username">@montal</small>
                        <h1 class="cover__name">Name</h1>
                        <ul class="clean cover__list">
                            <li>Age</li>
                            <li>Passion</li>
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
                        <li><a href="#" class="{{ $pageName === 'profile' ? 'active' : '' }}">Profile</a></li>
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
                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row" width="300" class="uppercase">Name</th>
                                            <td>Name1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Birthdate</th>
                                            <td>DOB 1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Gender</th>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Country</th>
                                            <td>Nepal</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">City</th>
                                            <td>Kathmandu</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Passion</th>
                                            <td>Actor</td>
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
                                            <td>5 Feet 6 inches</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Weight</th>
                                            <td>45</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Complexion</th>
                                            <td>Light Skin</td>
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
                                            <td>Nepali</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Ethnicity</th>
                                            <td>Asian</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Drinks</th>
                                            <td>Soft Drinks</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Smokes</th>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="uppercase">Education</th>
                                            <td>Bachelors</td>
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
                                @foreach ($recentMembers as $member)
                                    <li>
                                        <a href="#" class="user-list__each">
                                            <img src="{{ asset('images/members/' . $member->image) }}" alt="Member"
                                                class="user-list__img">
                                            <div class="user-list__info">
                                                <div class="user-list__name">Phuyal</div>
                                                <div class="user-list__helper">Created At
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
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
    <!-- PROFILE - BODY - END -->

    @include('frontend.layouts.footer')

    @include('frontend.layouts.script')
@endsection
