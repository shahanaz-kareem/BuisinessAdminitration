	
@extends('layouts.app')

@section('content') 


			
			<section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;">
				<div class="overlay"></div>
				<a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=ITUid-bDsl8',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
				<div class="container">
					<div class="row js-fullheight justify-content-center d-flex align-items-center">
						<div class="col-md-8">
							<div class="text text-center">
								<span class="subheading">Welcome to</span>
								<h2>Stylistic</h2>
								<h3 class="mb-4">A Professional Model Agency</h3>
								<p><a href="#" class="btn btn-primary py-3 px-4">Become A Model</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ftco-section ftco-no-pt ftco-featured-model">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="model-entry">
								<div class="model-img" style="background-image: url('{{ asset('product_asset/images/image_1.jpg') }}');">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Andrea</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Andrea<br><span>Smith</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
						</div>
						
						<div class="col-md-6 col-lg-3">
							<div class="model-entry">
								<div class="model-img" style="background-image: url(images/image_2.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Nicole</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Nicole<br><span>Wall</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
						</div>

						<div class="col-md-6 col-lg-3">
							<div class="model-entry">
								<div class="model-img" style="background-image: url(images/image_3.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Cindy</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Cindy<br><span>Smith</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
						</div>

						<div class="col-md-6 col-lg-3">
							<div class="model-entry">
								<div class="model-img" style="background-image: url(images/image_4.jpg);">
			    				<div class="name text-center">
			    					<h3><a href="model-single.html">Jannah</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="model-single.html">Jannah<br><span>Doe</span></a></h3>
			    					<div class="d-flex models-info">
			    						<div class="box">
		                		<p>Height</p>
		                		<span>185</span>
		                	</div>
		                	<div class="box">
		                		<p>Bust</p>
		                		<span>79</span>
		                	</div>
		                	<div class="box">
		                		<p>Waist</p>
		                		<span>40</span>
		                	</div>
		                	<div class="box">
		                		<p>Hips</p>
		                		<span>87</span>
		                	</div>
		                	<div class="box">
		                		<p>Shoe</p>
		                		<span>40</span>
		                	</div>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
						</div>
					</div>
				</div>
			</section>

      
      <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section">
      	<div class="container-fluid px-0">
      		<div class="row d-md-flex text-wrapper">
						<div class="one-half img" style="background-image: url('images/bg_5.jpg');"></div>
						<div class="one-half half-text d-flex justify-content-end align-items-center">
							<div class="text-inner pl-md-5">
								<span class="subheading">Hello!</span>
	              <h3 class="heading">Stylistic A Professional Model Agency</h3>
	              <p>Far far away,<strong>creative</strong> behind the word mountains, far from the countries Vokalia and Consonantia, there live the <strong>success</strong> blind texts. Separated they live in Bookmarksgrove</p>
	              <ul class="my-4">
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
	              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
	              </ul>
	            </div>
						</div>
      		</div>
      	</div>
      </section>

      <section class="ftco-section bg-dark">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-3">
              <div class="services ftco-animate text-center">
              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quality"></span></div>
              	<div class="info mt-4">
              		<h3 class="mb-4">Fashion Shows</h3>
              		<p>Even the all-powerful Pointing has no control about the blind texts</p>
              	</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="services ftco-animate text-center">
              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-megaphone"></span></div>
              	<div class="info mt-4">
              		<h3 class="mb-4">Corporate Events</h3>
              		<p>Even the all-powerful Pointing has no control about the blind texts</p>
              	</div>
              </div>
            </div>
            <div class="col-md-3">  
              <div class="services ftco-animate text-center">
              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-photo-camera"></span></div>
              	<div class="info mt-4">
              		<h3 class="mb-4">Commercial Photo Shots</h3>
              		<p>Even the all-powerful Pointing has no control about the blind texts</p>
              	</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="services ftco-animate text-center">
              	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-shopping-bag"></span></div>
              	<div class="info mt-4">
              		<h3 class="mb-4">Exhibitions/Trade Shows Shows</h3>
              		<p>Even the all-powerful Pointing has no control about the blind texts</p>
              	</div>
              </div>
	          </div>
	        </div>
	      </div>
	    </section>


	@include('user.product.products')
	@include('user.users.userslist')
	

	    <section class="ftco-section testimony-section img" style="background-image: url(images/bg_2.jpg);">
	    	<div class="overlay"></div>
	      <div class="container">
	        <div class="row d-md-flex justify-content-center">
	        	<div class="col-md-8 ftco-animate">
	            <div class="carousel-testimony owl-carousel">
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Mike Lewis</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Architect</span>
	                  </div>
	                </div>
	              </div>
	              <div class="item">
	                <div class="testimony-wrap text-center">
	                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
	                    <span class="quote d-flex align-items-center justify-content-center">
	                      <i class="icon-quote-left"></i>
	                    </span>
	                  </div>
	                  <div class="text">
	                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	                    <p class="name">Dennis Green</p>
	                    <span class="position">Customer</span>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>

	    <section class="ftco-appointment ftco-section">
				<div class="overlay"></div>
				<div class="container">
					<div class="row justify-content-center">
	      		<div class="col-md-8 mb-5 heading-section text-center ftco-animate">
	      			<span class="subheading">Stylistic</span>
	            <h2 class="mb-4">Contact Us</h2>
	            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia </p>
	          </div>
	      	</div>
					<div class="row">
						<div class="col-md-4">
							<div class="row">
		            <div class="col-md-12 mb-3">
		              <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		            </div>
		            <div class="col-md-12 mb-3">
		              <p><span>Website:</span> <a href="#">yoursite.com</a></p>
		            </div>
							</div>
						</div>
						<div class="col-md-8 appointment ftco-animate">
		    			<form action="#" class="appointment-form">
		    				<div class="row">
		    					<div class="col-md-6">
		    						<div class="d-md-flex">
					    				<div class="form-group">
					    					<input type="text" class="form-control" placeholder="First Name">
					    				</div>
				    				</div>
		    					</div>
		    					<div class="col-md-6">
		    						<div class="d-me-flex">
				    					<div class="form-group">
					    					<input type="text" class="form-control" placeholder="Last Name">
					    				</div>
				    				</div>
		    					</div>
		    					<div class="col-md-6">
		    						<div class="d-me-flex">
				    					<div class="form-group">
					    					<input type="text" class="form-control" placeholder="Email Address">
					    				</div>
				    				</div>
		    					</div>
		    					<div class="col-md-6">
		    						<div class="d-me-flex">
				    					<div class="form-group">
					    					<input type="text" class="form-control" placeholder="Your City">
					    				</div>
				    				</div>
		    					</div>
		    					<div class="col-md-12">
		    						<div class="form-group">
				              <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
				            </div>
		    					</div>
		    					<div class="col-md-12">
		    						<div class="form-group">
				              <input type="submit" value="Send A Message" class="btn btn-primary py-3 px-4">
				            </div>
		    					</div>
		    				</div>
		    			</form>
		    		</div>
					</div>
				</div>
	    </section>
	    <section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container-fluid px-0">
	    		<div class="row no-gutters d-md-flex align-items-center">
	    			<div class="col-md-12 d-flex align-self-stretch">
	    				<div id="map"></div>
	    			</div>
	    		</div>
	    	</div>
	    </section>

	    <section class="ftco-quote ftco-section ftco-animate">
	    	<div class="container">
	    		<div class="row d-flex">
	    			<div class="col-md-6 req-quote py-5 text-center align-items-center img" style="background-image: url(images/bg_2.jpg);">
		    			<h3 class="ml-md-3">Become A Model?</h3>
		    			<span class="ml-md-3"><a href="#">Call us now to know how!</a></span>
	    			</div>
	    			<div class="col-md-6 req-quote py-5 text-center align-items-center img" style="background-image: url(images/bg_1.jpg);">
		    			<h3 class="ml-md-3">Model Courses</h3>
		    			<span class="ml-md-3"><a href="#">Know more</a></span>
	    			</div>
	    		</div>
	    	</div>
	    </section>
      
      <footer class="ftco-footer ftco-section img">
	    	<div class="overlay"></div>
	      <div class="container">
	        <div class="row mb-5">
	          <div class="col-md-3">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2 logo"><a href="index.html">Stylistic</a></h2>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-4">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Recent Blog</h2>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	              <div class="block-21 mb-4 d-flex">
	                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
	                <div class="text">
	                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
	                  <div class="meta">
	                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
	                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
	                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-2">
	             <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Site Links</h2>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">Home</a></li>
	                <li><a href="#" class="py-2 d-block">About</a></li>
	                <li><a href="#" class="py-2 d-block">Model</a></li>
	                <li><a href="#" class="py-2 d-block">Services</a></li>
	                <li><a href="#" class="py-2 d-block">Blog</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-md-3">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
		                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-12 text-center">

	            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
	      </div>
	    </footer>

      <!-- loader -->
      <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

      </div>

	    <!-- Modal -->
	    <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	            <form action="#">
	              <div class="form-group">
	                <label for="appointment_name" class="text-black">Full Name</label>
	                <input type="text" class="form-control" id="appointment_name">
	              </div>
	              <div class="form-group">
	                <label for="appointment_email" class="text-black">Email</label>
	                <input type="text" class="form-control" id="appointment_email">
	              </div>
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_date" class="text-black">Date</label>
	                    <input type="text" class="form-control" id="appointment_date">
	                  </div>    
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="appointment_time" class="text-black">Time</label>
	                    <input type="text" class="form-control" id="appointment_time">
	                  </div>
	                </div>
	              </div>
	              

	              <div class="form-group">
	                <label for="appointment_message" class="text-black">Message</label>
	                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary">
	              </div>
	            </form>
	          </div>
	          
	        </div>
	      </div>
	    </div>
    </div>


    
    
@endsection