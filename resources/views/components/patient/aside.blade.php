   <aside class="sidebar bg-white border-end d-none d-md-flex flex-column p-4">
        <div class="d-flex flex-column h-100 justify-content-between">
          <div>
            <div class="d-flex align-items-center gap-3 mb-4">
              <div class="avatar rounded-circle" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_ti7WVpS901P8-_LudtICRRxoc1gtlfTgtjICQkG1-BAVNqbJfxQ23BYwFfvLeB7JeWTex9VD-wLQk3bdKVYBA5_BEYFRGjuiL3AIGVvTB8iViZUXurvvaS1hoGtPvBVK9k-9D-m8TapnmVrRpXphk5oi2B9UzGyc0-4788EUtj2so2LsqXy_rHtVXykIvmXxBtDKSdasbZpkdQgg2S9qEfWDbqyORf-fZQTGn0bgH24E_VA7rdjkadDCYkwYIMuWHymp1CsyOsU');"></div>
              <div>
                <h1 class="h6 mb-0 text-dark fw-semibold">{{ auth()->user()->name }}</h1>
                <a class="small text-muted" href="#">View profile</a>
              </div>
            </div>

            <nav class="nav flex-column">
              <a class="nav-link active d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">home</span>
                <span class="fw-semibold">Dashboard</span>
              </a>
              <a class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">search</span>
                <span>Find Doctors</span>
              </a>
              <a class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">videocam</span>
                <span>Video Consult</span>
              </a>
              <a class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">pill</span>
                <span>Medicines</span>
              </a>
              <a class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">science</span>
                <span>Lab Tests</span>
              </a>
              <a class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" href="#">
                <span class="material-symbols-outlined">stethoscope</span>
                <span>Surgeries</span>
              </a>
              <form method="POST" action="{{ route('logout') }}">
                            @csrf
              <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                <span class="material-symbols-outlined">logout</span>
                <span>Logout</span>
              </a>
            </form>
            </nav>
          </div>

          <div class="mt-4 d-grid gap-2">
            <button class="btn btn-primary btn-lg">Book Appointment</button>
            <a class="nav-link text-muted small d-flex align-items-center gap-2" href="#"><span class="material-symbols-outlined">help</span>Help</a>
          </div>
        </div>
      </aside>