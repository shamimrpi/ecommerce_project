@include('frontend.layout.header');
@yield('css')
@include('frontend.layout.navbar');
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">

           @yield('main_content')
        </div>
        <!--====== End - App Content ======-->


    
    <!--====== End - Main App ======-->
@include('frontend.layout.main_footer');
@include('frontend.layout.footer_script');
@yield('scripts')
@include('frontend.layout.footer');
