<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Directory Landing Page</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{asset('user_assets/assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{asset('user_assets/assets/css/linearicons.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/animate.css')}}">

		<!--flaticon.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/flaticon.css')}}">

		<!--slick.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('user_assets/assets/css/slick-theme.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{asset('user_assets/assets/css/bootstrap.min.css')}}">

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{asset('user_assets/assets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('assets/vendors/toastify/toastify.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('user_assets/assets/css/select2.min.css')}}">
    </head>
	
<body>

    @include('layouts.user.header')
    @yield('content')
    @include('layouts.user.footer')
          
    @include('layouts.user.scripts')
    @auth
			<div id="sidebar" class="sidebar-overlay ">
				<div class="sidebar-content">
					<span class="close-btn" id="close-btn">&times;</span>
					
						<img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">{{Auth::user()->name}}</h5>
                            <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                            </ul>
						</div>
						


				</div>
			</div>
			@endauth
</body>

</html>