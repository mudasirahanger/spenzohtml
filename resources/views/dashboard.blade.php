@include('components.header')

   @if(auth()->user()->role_id == 0)
      
        @include('components.patient.patient')

    @elseif(auth()->user()->role_id == 1)
       
          @include('components.doctor.doctor')
    
        @elseif(auth()->user()->role_id == 2)
       
    @include('components.admin.admin')

  @endif

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


@include('components.footer')