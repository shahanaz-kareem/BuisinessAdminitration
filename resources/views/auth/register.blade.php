
<html>
<head>

<meta charset="utf-8">
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

</head>
<body>

<style>
body{
  
  justify-content: center;
  align-items: center;

  background: #23252a;
  background: url('{{asset('assets/images/bg/backgroundImage.jpg')}}') no-repeat center center fixed;
    background-size: cover; 
    /* display: flex; */
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
}

.box {
   
    height: 528px !important;

}
.login-form{
    display: flex
;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.home-link{
    color: white!important;
    float: right;
    padding: 1%;
}
</style>
<div class="home-link">
<a href="{{ route('/') }}" style="    color: white;">Home</a>
</div>
<div class="login-form">

<div class="box">

        <span class="borderLine"></span>
        <form method="POST" action="{{ route('register') }}">
            <input type="hidden" name="user_type" value="3">
        @csrf
            <h2>Register</h2>
            <div class="inputBox">
            <label for="">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
             
            </div>
            <div class="inputBox">
            <label for="">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">             
            </div>
           
            <div class="inputBox">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
             
            </div>
            <div class="inputBox">
            <label for="">Confirm password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
             
            </div>
            <button type="submit" id="submit" class="btn btn-primary">
                                    {{ __('Register') }}
            </button> 
            <div class="links">
        
                
                <a href="{{ route('login') }}">Sign in</a>
            </div>
            
                                  
            </form>
    </div>
    </div>
</body>
</html>





