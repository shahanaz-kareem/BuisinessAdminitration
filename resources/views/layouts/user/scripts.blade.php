    <script src="{{asset('product_asset/js/jquery.min.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('product_asset/js/popper.min.js')}}"></script>
    <script src="{{asset('product_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('product_asset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('product_asset/js/aos.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('product_asset/js/scrollax.min.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('product_asset/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('product_asset/js/jquery.timepicker.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('product_asset/js/google-map.js')}}"></script>
    <script src="{{asset('product_asset/js/main.js')}}"></script>
  <!-- Select2 JS (after jQuery!) -->
          <script src="{{asset('user_assets/assets/js/select2.min.js')}}"></script>
        <script src="{{ asset('assets/vendors/toastify/toastify.js') }}"></script>

        <script>
            $(document).ready(function() {
                // Open sidebar when "My Account" link is clicked
                $('#open-sidebar').click(function(e) {
                    e.preventDefault(); // Prevent default link behavior
                    $('#sidebar').addClass('open'); // Add class to show the sidebar
                });

                // Close sidebar when the close button is clicked
                $('#close-btn').click(function() {
                    $('#sidebar').removeClass('open'); // Remove the class to hide the sidebar
                });

                  $('.select2').select2({
                    allowClear: true,
                     width: '100%'
                });
            });

        </script>
        
