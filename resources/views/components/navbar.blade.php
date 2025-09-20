<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Jeelaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="#doctors">Find Doctors</a></li>
        <li class="nav-item"><a class="nav-link" href="#labtests">Lab Tests</a></li>
      </ul>
      <form class="d-flex me-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search doctors, clinics, tests..." aria-label="Search" />
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      <a href="{{ route('login') }}" class="btn btn-primary">Login / Sign Up</a>
    </div>
  </div>
</nav>