  
  @include('components.header')
  
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded-4 w-100" style="max-width: 420px;">
      
      <h2 class="text-center mb-4 text-danger fw-bold">Jeelaan</h2>

      <!-- Tabs -->
      <ul class="nav nav-tabs mb-3" id="authTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Register</button>
        </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content">
        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Login Form -->
        <div class="tab-pane fade show active" id="login" role="tabpanel">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="login-email" class="form-label">Email or Phone</label>
              <input type="text" class="form-control" id="login-email" name="email" placeholder="Enter email or phone" autofocus required>
            </div>
            <div class="mb-3">
              <label for="login-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="login-password" placeholder="Enter password" name="password" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <a href="{{ route('password.request') }}" class="small text-decoration-none text-primary">Forgot password?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>
        </div>

        <!-- Register Form -->
        <div class="tab-pane fade" id="register" role="tabpanel">
          <form method="POST" action="{{ route('register') }}" id="registerForm">
            @csrf
            <div class="mb-3">
              <label for="reg-name" class="form-label">Full Name</label>
              <input type="text" class="form-control" id="reg-name" name="name" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
              <label for="reg-email" class="form-label">Email</label>
              <input type="email" class="form-control" id="reg-email" name="email" placeholder="Enter email"  onblur="validateEmail(this.value)"   required>
              <div class="invalid-feedback">
                </div>
            </div>
            <div class="mb-3">
              <label for="reg-phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" id="reg-phone" name="mobile" placeholder="Enter phone number" onblur="validatePhoneNumber(this.value)"  required>
              <div class="invalid-feedback">
                </div>
            </div>
            <div class="mb-3">
              <label for="reg-password" class="form-label">Password</label>
              <input type="password" class="form-control" id="reg-password" name="password" placeholder="Enter password" required>
              <input type="password" class="form-control d-none" id="reg-password-confirm" name="password_confirmation" placeholder="Confirm password">
            </div>
            <button class="btn btn-success w-100" onclick="submitForm('registerForm')">Register</button>
          </form>
        </div>

      </div>

    </div>
  </div>

  @include('components.footer')

  <script>
   
   // on submit registerForm add value of password to password_confirmation field
   function submitForm(formId) {
      const form = document.getElementById(formId);
      const password = document.getElementById('reg-password').value;
      const passwordConfirm = document.getElementById('reg-password-confirm');
      passwordConfirm.value = password;
      form.submit();
    }


   // create a function to validate 10 digit phone number field give error in  invalid-feedback
    function validatePhoneNumber(phone) {
      const phoneInput = document.getElementById('reg-phone');
      const feedback = phoneInput.nextElementSibling;
      const phonePattern = /^\d{10}$/; // Regex for 10 digit number
      if (!phonePattern.test(phone)) {
         phoneInput.classList.add('is-invalid');
         feedback.textContent = 'Please enter a valid 10-digit Mobile number.';
      } else {
         phoneInput.classList.remove('is-invalid');
         feedback.textContent = '';
      }
    }
  
       // create a function to validate email field give error in  invalid-feedback
        function validateEmail(email) {
        const emailInput = document.getElementById('reg-email');
        const feedback = emailInput.nextElementSibling;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple email regex
        if (!emailPattern.test(email)) {
            emailInput.classList.add('is-invalid');
            feedback.textContent = 'Please enter a valid email address.';
        } else {
            emailInput.classList.remove('is-invalid');
            feedback.textContent = '';
        }
        }

  </script>
