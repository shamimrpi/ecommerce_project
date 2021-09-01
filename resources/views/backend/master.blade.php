<!DOCTYPE html>
<html lang="en">
  @include('backend.main.head')
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
    @include('backend.main.navbar') 
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.main.sidebar')
        <!-- partial -->
        <div class="main-panel">
       

         	@yield('main_content')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         @include('backend.main.footer') 
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('backend.main.footer_script') 
    <!-- End custom js for this page -->
  </body>
</html>