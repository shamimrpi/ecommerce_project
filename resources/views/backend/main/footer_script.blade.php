    <!-- plugins:js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/backend/assets')}}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('public/backend/assets')}}/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('public/backend/assets')}}/js/off-canvas.js"></script>
    <script src="{{asset('public/backend/assets')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('public/backend/assets')}}/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('public/backend/assets')}}/js/dashboard.js"></script>
    <script src="{{asset('public/backend/assets')}}/js/todolist.js"></script>
    
    <script>
          @if(Session::has('message'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.success("{{ session('message') }}");
          @endif

          @if(Session::has('error'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.error("{{ session('error') }}");
          @endif

          @if(Session::has('info'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.info("{{ session('info') }}");
          @endif

          @if(Session::has('warning'))
          toastr.options =
          {
            "closeButton" : true,
            "progressBar" : true
          }
                toastr.warning("{{ session('warning') }}");
          @endif
</script>

    