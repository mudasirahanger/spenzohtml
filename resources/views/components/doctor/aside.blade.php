 <!-- Sidebar -->
  <aside class="sidebar d-flex flex-column shadow-sm">
    <div class="p-4 border-bottom d-flex align-items-center gap-3">
      <div class="profile-img rounded-circle"></div>
      <div>
        <h6 class="mb-0 fw-bold text-dark">Dr. {{ auth()->user()->name }}</h6>
        <small class="text-muted">ID: {{ auth()->user()->id }}</small>
      </div>
    </div>

    <nav class="flex-grow-1 p-3">
      <ul class="nav flex-column gap-2">
        <li><a href="#" class="nav-link active"><span class="material-symbols-outlined me-2">dashboard</span>Dashboard</a></li>
        <li><a href="#" class="nav-link"><span class="material-symbols-outlined me-2">calendar_month</span>Appointments</a></li>
        <li><a href="#" class="nav-link"><span class="material-symbols-outlined me-2">group</span>Patients</a></li>
        <li><a href="#" class="nav-link"><span class="material-symbols-outlined me-2">star</span>Reviews</a></li>
        <li><a href="#" class="nav-link"><span class="material-symbols-outlined me-2">person</span>Profile</a></li>
        <!-- logout -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <li><a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                this.closest('form').submit();"><span class="material-symbols-outlined me-2">logout</span>Logout</a></li>
        </form>

      </ul>
    </nav>

    <div class="p-3 mt-auto">
      <button class="btn btn-primary w-100">Update Availability</button>
    </div>
  </aside>