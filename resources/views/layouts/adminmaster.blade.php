<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Select2 JS (after jQuery!) -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
  
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/toastify/toastify.css')}}">


</head>

<body>
    <div id="app">
       
        <div id="main">
           
        @include('layouts.admin.header')
        @include('layouts.admin.sidebar')
        @yield('content')
       
           
        </div>
    </div>
    
    @include('layouts.admin.footer')
   <!-- SweetAlert2 CDN -->

</body>

</html>