<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/') }}">Jeelaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="#doctors">Find Doctors</a></li>
        <li class="nav-item"><a class="nav-link" href="#labtests">Lab Tests</a></li>
      </ul>
      <form class="d-flex me-3 d-none d-md-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search doctors, clinics, tests..." aria-label="Search" />
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      @if (Auth::check())
      <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu">
          @if(auth()->user()->role_id == 0)
          <li><a class="dropdown-item" href="{{ route('dashboard') }}">My Appointments</a></li>
          @else
          <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
          @endif
          <li><hr class="dropdown-divider"></li>
          <li></li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
        </ul>
      </div>
      </div>
      @else
      <a href="{{ route('login') }}" class="btn btn-primary">Login / Sign Up</a>
      @endif
    </div>
  </div>
</nav>