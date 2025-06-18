	<!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="{{asset('user_assets/assets/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{asset('user_assets/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{asset('user_assets/assets/js/bootsnav.js')}}"></script>

        <!--feather.min.js-->
        <script  src="{{asset('user_assets/assets/js/feather.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{asset('user_assets/assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('user_assets/assets/js/waypoints.min.js')}}"></script>

        <!--slick.min.js-->
        <script src="{{asset('user_assets/assets/js/slick.min.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="{{asset('user_assets/assets/js/custom.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
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
                    placeholder: "-- Select --",
                    allowClear: true
                });
            });

        </script>
        
