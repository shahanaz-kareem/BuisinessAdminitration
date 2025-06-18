	<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>clients reviews</h2>
				<p>What our client say about us</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
                    @foreach($users as $user)
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="{{asset('user_assets/assets/images/clients/c1.png')}}" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>{{$user->name}}</h2>
									
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				   @endforeach
				</div>
			</div>

		</section><!--/.reviews-->
		<!--reviews end -->