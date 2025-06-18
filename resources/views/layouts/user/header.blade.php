    <div class="page">
    <nav id="colorlib-main-nav" role="navigation">
      <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
      <div class="js-fullheight colorlib-table">
        <div class="img" style="background-image: url(images/image_4.jpg);"></div>
        <div class="colorlib-table-cell js-fullheight">
          <div class="row no-gutters">
            <div class="col-md-12 text-center">
              <h1 class="mb-4"><a href="index.html" class="logo">Stylistic<br><span>Model Agency</span></a></h1>
              <ul>
                <li class="active"><a href="index.html"><span>Home</span></a></li>
                <li><a href="about.html"><span>About</span></a></li>
                <li><a href="model.html"><span>Models</span></a></li>
                <li><a href="{{route('upload.blogs')}}"><span>Blog</span></a></li>
                <li><a href="contact.html"><span>Contact</span></a></li>
                @if (Route::has('login'))
							@auth
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();"><span>Sign out</span></a>
							</li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

							@csrf

							</form>
							@else

									<li >
										<a href="{{ route('login') }}"><span>sign in</span></a>
									</li>
									@if (Route::has('register'))

									<li>
										<a href="{{ route('register') }}"><span>register</span></a>
									</li>
									@endif

							@endauth
		
							@endif


              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    <div id="colorlib-page">
      <header>
      	<div class="container">
	        <div class="colorlib-navbar-brand">
	          <a class="colorlib-logo" href="index.html">Stylistic<br><span>Model Agency</span></a>
	        </div>
	        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        </div>
      </header>