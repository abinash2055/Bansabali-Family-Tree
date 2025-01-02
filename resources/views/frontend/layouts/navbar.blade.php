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
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/member">Find Members</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/culture">Our Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blogs">News & Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('profiles.edit') }}">Update Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">My Banshwali</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Sign Up</a>
                    </li>
                @endguest
            </ul>

            <!-- Search Form -->
            <form method="GET" action="#" class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
