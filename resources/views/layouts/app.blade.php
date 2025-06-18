<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stylistic - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('product_asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('product_asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('product_asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('product_asset/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('product_asset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('product_asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('product_asset/css/style.css')}}">
            <link rel="stylesheet" href="{{asset('assets/vendors/toastify/toastify.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <script src="{{asset('product_asset/js/jquery.min.js')}}"></script>
        <link rel="stylesheet" href="{{asset('user_assets/assets/css/select2.min.css')}}">
  </head>
  <body>

    @include('layouts.user.header')
    @yield('content')
    @include('layouts.user.footer')
          
    @include('layouts.user.scripts')
   
</body>

</html>