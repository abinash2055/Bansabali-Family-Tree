<!-- resources/views/layouts/navbar.blade.php -->

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Shrestha Banshawali</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('findMembers') }}">Find Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('culture') }}">Our Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs') }}">News & Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome {{ Auth::user()->name ?? 'Guest' }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Update Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('banshwali') }}">My Banshwali</a></li>
                    </ul>
                </li>
            </ul>
            <form method="GET" action="{{ route('findMembers') }}" class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
