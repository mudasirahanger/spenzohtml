<!-- Hero Section -->
<section class="hero-section">
  <div class="container">
    <h1>Find the right doctor for you</h1>
    <p class="lead mb-4">Book appointments with experienced doctors across all specialties</p>
    <form class="row g-2 justify-content-center mt-1" id="searchForm">
      <div class="col-12 col-md-5">
        <input type="text" class="form-control" placeholder="Search by doctor, specialty, or symptom" name="q" required>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-success">Search</button>
      </div>
    </form>
  </div>
</section>

<!-- Popular Specialties (with images) -->
<section class="py-5" id="specialties">
  <div class="container">
    <h2 class="mb-4 text-center">Popular Specialties in Srinagar</h2>
    <div class="row g-4">
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="{{ asset('public/images/gynea.jpg') }}" alt="Gynecologist">
          <div class="p-3 text-center fw-semibold">Gynecologist</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="{{ asset('public/images/derma.png') }}" alt="Dermatologist">
          <div class="p-3 text-center fw-semibold">Dermatologist</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="{{ asset('public/images/pediatric.jpg') }}" alt="Pediatrician">
          <div class="p-3 text-center fw-semibold">Pediatrician</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="{{ asset('public/images/physician.png') }}" alt="General Physician">
          <div class="p-3 text-center fw-semibold">General Physician</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="https://placehold.co/600x400?text=Orthopedics" alt="Orthopedist">
          <div class="p-3 text-center fw-semibold">Orthopedist</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="https://placehold.co/600x400?text=Ophthalmology" alt="Ophthalmologist">
          <div class="p-3 text-center fw-semibold">Ophthalmologist</div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-3">
        <div class="specialty-card h-100">
          <img class="card-img-top fit" src="https://placehold.co/600x400?text=ENT" alt="ENT Specialist">
          <div class="p-3 text-center fw-semibold">ENT Specialist</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Consult with Top Doctors (with profile images) -->
<section class="py-5 bg-light" id="consult">
  <div class="container">
    <h2 class="mb-4 text-center">Video Consult with Top Doctors</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=12" alt="Dr. Sheema Jan" class="avatar mb-2">
          <h6 class="mb-1">Dr. Sheema Jan</h6>
          <small class="text-muted d-block mb-2">Gynecologist</small>
          <a href="#bookModal" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal">Consult Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=32" alt="Dr. Riyaz Nikoo" class="avatar mb-2">
          <h6 class="mb-1">Dr. Riyaz Nikoo</h6>
          <small class="text-muted d-block mb-2">Dermatologist</small>
          <a href="#bookModal" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal">Consult Now</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=5" alt="Dr. Waseem Ahmad" class="avatar mb-2">
          <h6 class="mb-1">Dr. Waseem Ahmad</h6>
          <small class="text-muted d-block mb-2">Dentist</small>
          <a href="#bookModal" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal">Consult Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Top Doctors Near You (with profile images) -->
<section class="py-5" id="doctors">
  <div class="container">
    <h2 class="mb-4 text-center">Top Doctors Near You</h2>
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=47" alt="Dr. Bilquess Shah" class="avatar mb-2">
          <h6 class="mb-1">Dr. Bilquess Shah</h6>
          <small class="text-muted">Gynecologist</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=20" alt="Dr. Bashir Nikoo" class="avatar mb-2">
          <h6 class="mb-1">Dr. Bashir Nikoo</h6>
          <small class="text-muted">Dermatologist</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=15" alt="Dr. Rayees Bhat" class="avatar mb-2">
          <h6 class="mb-1">Dr. Rayees Bhat</h6>
          <small class="text-muted">Dentist</small>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="doctor-card">
          <img src="https://i.pravatar.cc/160?img=8" alt="Dr. Nisar Shah" class="avatar mb-2">
          <h6 class="mb-1">Dr. Nisar Shah</h6>
          <small class="text-muted">Pediatrician</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Booking Sections with images -->
<section class="py-5 bg-light" id="online">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="{{ asset('public/images/booking.jpg') }}" class="img-fluid rounded" alt="Doctor Online">
      </div>
      <div class="col-md-6">
        <h3>Doctor Online</h3>
        <p>Get doctor checkups online from the comfort of your home.</p>
        <a href="#bookModal" class="btn btn-success" data-bs-toggle="modal">Book Now</a>
      </div>
    </div>
    <hr class="my-5">
    <div class="row align-items-center g-4" id="labtests">
      <div class="col-md-6 order-md-2">
        <img src="{{ asset('public/images/booking.jpg') }}" class="img-fluid rounded" alt="Lab Tests at Home">
      </div>
      <div class="col-md-6 order-md-1">
        <h3>Book Lab Tests Online</h3>
        <p>Get your lab tests done at home with reliable results.</p>
        <a href="#bookModal" class="btn btn-success" data-bs-toggle="modal">Book Now</a>
      </div>
    </div>
  </div>
</section>

<!-- Simple Booking Modal (optional, demonstrates inputs) -->
 <!--################ removed not need wrong flow ####################-->
<!-- <div class="modal fade" id="bookModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Book an Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Phone</label>
            <input type="tel" class="form-control" placeholder="98765 43210" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Select Specialty / Test</label>
            <select class="form-select" required>
              <option value="" selected disabled>Choose...</option>
              <option>Gynecology</option>
              <option>Dermatology</option>
              <option>Pediatrics</option>
              <option>General Medicine</option>
              <option>Orthopedics</option>
              <option>Ophthalmology</option>
              <option>ENT</option>
              <option>Lab Test</option>
            </select>
          </div>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Preferred Date</label>
              <input type="date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Preferred Time</label>
              <input type="time" class="form-control" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </div>
      </form>
    </div>
  </div>
</div> -->