@include('components.header')
   <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
   <div class="container-fluid min-vh-100 d-flex p-0">
      <!-- Sidebar for md+ -->
        @include('components.patient.aside')

      <!-- Main content -->
      <main class="flex-grow-1">
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

        <!-- Page header -->
        <section class="p-4 p-md-5">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col">
                <h1 class="h3 mb-0 text-dark fw-bold">My Profile</h1>
              </div>
            </div>
          </div>
        </section>

        <!-- Tabs -->
        <section class="px-4 px-md-5 pb-3">
          <div class="container-fluid">
            <ul class="nav nav-tabs border-0">
              <li class="nav-item">
                <a class="nav-link active text-primary fw-semibold" aria-current="page" href="#">Personal Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-muted" href="#">Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-muted" href="#">Medical Records</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-muted" href="#">Consultation History</a>
              </li>
            </ul>
          </div>
        </section>

        <!-- Personal details form -->
        <section class="px-4 px-md-5 pb-5">
          <div class="container-fluid">
            <h2 class="h5 text-dark fw-bold mb-4">Personal Details</h2>

            <form class="row g-3 max-w-900">
              <div class="col-12 col-md-6">
                <label for="fullName" class="form-label fw-medium">Full Name</label>
                <input id="fullName" type="text" class="form-control" value="{{ auth()->user()->name }}" />
              </div>

              <div class="col-12 col-md-6">
                <label for="email" class="form-label fw-medium">Email</label>
                <input id="email" type="email" class="form-control" value="{{ auth()->user()->email }}" />
              </div>

              <div class="col-12 col-md-6">
                <label for="phoneNumber" class="form-label fw-medium">Phone Number</label>
                <input id="phoneNumber" type="tel" class="form-control" value="{{ auth()->user()->mobile }}" />
              </div>

              <div class="col-12 col-md-6">
                <label for="dob" class="form-label fw-medium">Date of Birth</label>
                <input id="dob" type="date" class="form-control" value="1990-05-15" />
              </div>

              <div class="col-12 col-md-6">
                <label for="gender" class="form-label fw-medium">Gender</label>
                <select id="gender" class="form-select">
                  <option>Female</option>
                  <option>Male</option>
                  <option>Other</option>
                  <option>Prefer not to say</option>
                </select>
              </div>

              <div class="col-12">
                <label for="address" class="form-label fw-medium">Address</label>
                <textarea id="address" rows="4" class="form-control">123 Wellness Avenue, Health City, Mediville, 12345</textarea>
              </div>

              <div class="col-12 d-flex justify-content-end mt-3">
                <button type="submit" class="btn btn-primary px-4">Update Profile</button>
              </div>
            </form>
          </div>
        </section>
      </main>
    </div>

    @include('components.footer')

<script>
  // Sidebar active state toggle
  const sidebarLinks = document.querySelectorAll(".sidebar .nav-link");

  sidebarLinks.forEach(link => {
    link.addEventListener("click", function() {
      // Remove active from all
      sidebarLinks.forEach(item => item.classList.remove("active"));
      // Add active to clicked
      this.classList.add("active");
    });
  });
</script>