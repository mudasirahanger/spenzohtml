
<div class="d-flex min-vh-100">
    @include('components.doctor.aside')


<!-- Main -->
  <main class="flex-grow-1 p-4">
    <div class="container-fluid">
      <header class="mb-4">
        <h1 class="fw-bold text-dark">Dashboard</h1>
        <p class="text-muted">Welcome back, {{ auth()->user()->name }}. Here's an overview of your day.</p>
      </header>

      <div class="row g-4">
        <!-- Left Content -->
        <div class="col-lg-8">
          <!-- Appointments -->
          <section class="mb-4">
            <h4 class="fw-bold mb-3">Upcoming Appointments</h4>
            <div class="card p-3 mb-3 d-flex flex-row align-items-center">
              <div class="flex-grow-1">
                <p class="fw-semibold mb-0">10:00 AM - 10:30 AM</p>
                <small class="text-muted">Ms. Olivia Bennett - Follow-up</small>
              </div>
              <div class="patient-img me-2"></div>
              <a href="#" class="text-primary"><span class="material-symbols-outlined">chevron_right</span></a>
            </div>
            <div class="card p-3 d-flex flex-row align-items-center">
              <div class="flex-grow-1">
                <p class="fw-semibold mb-0">11:00 AM - 11:30 AM</p>
                <small class="text-muted">Mr. Lucas Harper - New Patient</small>
              </div>
              <div class="patient-img me-2"></div>
              <a href="#" class="text-primary"><span class="material-symbols-outlined">chevron_right</span></a>
            </div>
          </section>

          <!-- Patient Queries -->
          <section>
            <h4 class="fw-bold mb-3">Patient Queries</h4>
            <div class="card p-3 mb-3 d-flex flex-row align-items-center">
              <div class="query-img me-3"></div>
              <div class="flex-grow-1">
                <p class="fw-semibold mb-0">Ms. Chloe Foster</p>
                <small class="text-muted">Query: Regarding post-operative care</small>
              </div>
              <button class="btn btn-sm btn-light">Reply</button>
            </div>
            <div class="card p-3 d-flex flex-row align-items-center">
              <div class="query-img me-3"></div>
              <div class="flex-grow-1">
                <p class="fw-semibold mb-0">Mr. Owen Hayes</p>
                <small class="text-muted">Query: About medication side effects</small>
              </div>
              <button class="btn btn-sm btn-light">Reply</button>
            </div>
          </section>
        </div>

        <!-- Right Sidebar -->
        <div class="col-lg-4">
          <aside class="card p-4">
            <h5 class="fw-bold mb-3">Quick Actions</h5>
            <button class="btn btn-outline-primary w-100 mb-2 d-flex align-items-center justify-content-center">
              <span class="material-symbols-outlined me-2">calendar_view_day</span> View Full Schedule
            </button>
            <button class="btn btn-light w-100 d-flex align-items-center justify-content-center">
              <span class="material-symbols-outlined me-2">edit</span> Edit Profile
            </button>
          </aside>
        </div>
      </div>
    </div>
  </main>

</div>