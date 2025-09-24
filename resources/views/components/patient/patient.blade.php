    <div class="container-fluid min-vh-100 d-flex p-0">
      <!-- Sidebar for md+ -->
        @include('components.patient.aside')

      <!-- Main content -->
      <main class="flex-grow-1">
      
        <!-- Offcanvas sidebar for mobile -->
        @include('components.patient.maside')
       
   
   
   
   <!-- Page header -->
        <section class="p-4 p-md-5">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col">
                <h1 class="h3 mb-0 text-dark fw-bold">My Appointments</h1>
              </div>
            </div>
          </div>
        </section>
 
 
 
 
      <!-- Tabs -->
        <section class="px-4 px-md-5 pb-3">
          <div class="container-fluid">
            <ul class="nav nav-tabs border-0">
              <li class="nav-item">
                <a class="nav-link active text-primary fw-semibold" aria-current="page" href="#">Appointments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-muted"  href="#">Personal Information</a>
              </li>
             
            </ul>
          </div>
        </section>

        <!-- Appointments List -->
        <section class="px-4 px-md-5 pb-5">
          <div class="container-fluid">
            <div class="table-responsive">
              <table class="table table-hover align-middle">
                <thead>
                  <tr>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2024-06-15 10:00 AM</td>
                    <td>Dr. John Smith</td>
                    <td>Cardiology</td>
                    <td><span class="badge bg-success">Confirmed</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">View</button>
                      <button class="btn btn-sm btn-outline-secondary">Reschedule</button>
                      <button class="btn btn-sm btn-outline-danger">Cancel</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-06-20 02:00 PM</td>
                    <td>Dr. Emily Johnson</td>
                    <td>Dermatology</td>
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">View</button>
                      <button class="btn btn-sm btn-outline-secondary">Reschedule</button>
                      <button class="btn btn-sm btn-outline-danger">Cancel</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2024-07-01 11:30 AM</td>
                    <td>Dr. Michael Brown</td>
                    <td>Neurology</td>
                    <td><span class="badge bg-danger">Cancelled</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">View</button>
                      <button class="btn btn-sm btn-outline-secondary" disabled>Reschedule</button>
                      <button class="btn btn-sm btn-outline-danger" disabled>Cancel</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <!-- Personal details form -->
        <section class="px-4 px-md-5 pb-5 d-none">
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