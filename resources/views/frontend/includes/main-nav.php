<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Shrestha Banshabali</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="search-member.php">Find Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="culture.php">Our Culture</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="blogs.php">News & Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome User
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="profile.php">Dashboard</a></li>
            <li><a class="dropdown-item" href="profile.php">Update Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="profile.php">My Banshwali</a></li>
          </ul>
        </li>
      </ul>
      <form method="GET" action="search-member.php" class="d-flex ms-auto" role="search">
        <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>