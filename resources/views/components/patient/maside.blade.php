<!-- topbar for small screens -->
        <header class="d-md-none bg-white border-bottom p-2">
          <div class="d-flex align-items-center justify-content-between">
            <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
              <span class="material-symbols-outlined">menu</span>
            </button>
            <h2 class="h6 mb-0">My Profile</h2>
            <div></div>
          </div>
        </header>   
   
   <!-- Offcanvas mobile sidebar -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar" aria-labelledby="mobileSidebarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileSidebarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div class="d-flex align-items-center gap-3 mb-4">
              <div class="avatar rounded-circle" style="background-image:url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_ti7WVpS901P8-_LudtICRRxoc1gtlfTgtjICQkG1-BAVNqbJfxQ23BYwFfvLeB7JeWTex9VD-wLQk3bdKVYBA5_BEYFRGjuiL3AIGVvTB8iViZUXurvvaS1hoGtPvBVK9k-9D-m8TapnmVrRpXphk5oi2B9UzGyc0-4788EUtj2so2LsqXy_rHtVXykIvmXxBtDKSdasbZpkdQgg2S9qEfWDbqyORf-fZQTGn0bgH24E_VA7rdjkadDCYkwYIMuWHymp1CsyOsU');"></div>
              <div>
                <div class="fw-semibold">Sophia Bennett</div>
                <a class="small text-muted" href="#">View profile</a>
                <a href="{{ route('logout') }}" class="nav-link d-flex align-items-center gap-2 rounded py-2 px-2" onclick="event.preventDefault();this.closest('form').submit();"><span class="material-symbols-outlined">logout</span>Logout</a>
              </div>
            </div>

           <div class="sidebar d-flex flex-column">
                    <a href="#dashboard" class="nav-link active">
                        <i class="bi bi-house-door"></i> Dashboard
                    </a>
                    <a href="#appointments" class="nav-link">
                        <i class="bi bi-calendar-check"></i> Appointments
                    </a>
                    <a href="#patients" class="nav-link">
                        <i class="bi bi-people"></i> Patients
                    </a>
                    <a href="#settings" class="nav-link">
                        <i class="bi bi-gear"></i> Settings
                    </a>
            </div>


            <div class="mt-4">
              <button class="btn btn-primary w-100 mb-2">Book Appointment</button>
              <a class="d-block small text-muted" href="#"><span class="material-symbols-outlined me-1">help</span>Help</a>
            </div>
          </div>
        </div>