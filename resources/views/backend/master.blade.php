@include('backend.main.head')
@include('backend.main.header')
@include('backend.main.sidebar')
        <!-- partial -->
        <div class="main-panel">
         
         @yield('main_content')
          <!-- content-wrapper ends -->
@include('backend.main.footer')   
    <!-- container-scroller -->
@include('backend.main.footer_script')