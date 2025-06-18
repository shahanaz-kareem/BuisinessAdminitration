
	
	
@extends('layouts.app')

@section('content')  	


		<!--works start -->
		<section id="works" class="works">
			<div class="container">
				<div class="section-header">
					<h2>how it works</h2>
					<p>Learn More about how our website works</p>
				</div><!--/.section-header-->
				<div class="works-content">
					<div class="row">
                       <div class="row details-snippet1">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-2 mini-preview">
                                        @if($product->images->isNotEmpty())
                                            @foreach($product->images as $image)
                                                <img class="img-fluid mb-2 thumb-image" src="{{ asset('uploads/products/' . $image->image_name) }}" alt="Product Image" style="cursor: pointer;">
                                            @endforeach
                                        @else
                                            <img class="img-fluid" src="{{ asset('uploads/products/default.jpg') }}" alt="Default Image">
                                        @endif
                                    </div>

                                <div class="col-md-10">
                                        <div class="product-image">
                                            @if($product->images->isNotEmpty())
                                                <img id="main-product-image" class="img-fluid" src="{{ asset('uploads/products/' . $product->images->first()->image_name) }}" alt="Main Image">
                                            @else
                                                <img id="main-product-image" class="img-fluid" src="{{ asset('uploads/products/default.jpg') }}" alt="Default Image">
                                            @endif
                                        </div>
                                    </div>

                                </div>

                            </div>
                                <div class="col-md-5">
                                    <div class="category"><span class="theme-text">Category:</span> Women</div>
                                    <div class="title">Black Dress For Women</div>
                                    <div class="ratings my-2">
                                        <div class="stars d-flex">
                                            <div class="theme-text mr-2">Product Ratings: </div>
                                            <div class="d-flex">
                                                <div>&#9733;</div>
                                                <div>&#9733;</div>
                                                <div>&#9733;</div>
                                                <div>&#9733;</div>
                                                <div>&#9733;</div>
                                            </div>
                                            <div class="ml-2">(4.5) 50 Reviews</div>
                                        </div>
                                    </div>
                                    <div class="price my-2">$100.00 <strike class="original-price">$120.00</strike></div>
                                    <div class="theme-text subtitle">Brief Description:</div>
                                    <div class="brief-description">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.
                                    </div>

                                <!-- TO REMOVE COLORS -->
                                    <div>
                                        <div class="subtitle my-3 theme-text">Colors:</div>
                                        <div class="select-colors d-flex">
                                            <div class="color red"></div>
                                            <div class="color silver"></div>
                                            <div class="color black"></div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" value="1">
                                        </div>
                                        <div class="col-md-9"><button class="btn addBtn btn-block">Add to basket</button></div>
                                    </div>

                                </div>
                            </div>

                            <div class="additional-details my-5 text-center">
                                <!-- Nav pills -->
                                <ul class="nav nav-tabs justify-content-center">
                                    <li class="nav-tabs">
                                        <a class="nav-link active" data-toggle="tab" data-bs-toggle="tab" href="#home">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu1">Reviews</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" data-bs-toggle="tab" href="#menu2">Specifications</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content mt-4 mb-3">
                                    <div class="tab-pane container active" id="home">
                                        <div class="description">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident magni assumenda consectetur facere eius. Minus reprehenderit placeat ullam vel ab eaque sequi impedit, ipsum soluta temporibus fugit ipsa. Dolor libero modi molestiae dicta, vitae minus laborum error cum consequatur autem minima eveniet porro obcaecati quibusdam possimus eos, debitis sint magnam, explicabo accusantium aspernatur ipsa repellat tempore nihil. Cum placeat voluptate dignissimos dicta harum consectetur, nemo debitis tempore. Quod culpa perspiciatis unde natus. Modi expedita, ab repellendus reiciendis sed voluptate, culpa laborum ad, consectetur quas tempora quo? Quibusdam doloribus magnam maxime, accusamus officiis odit reiciendis labore laudantium. Molestiae corporis temporibus ad?
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="menu1">
                                        <div class="review">
                                            <p>PUT REVIEWS DESIGN HERE</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane container fade" id="menu2">
                                        <div class="specification">
                                            <p>PUT SPECIFICATIONS HERE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="related-products details-snippet1">

                                <div class="related-heading theme-text">Related Products</div>

                                <div class="row">

                                                    <div class="col-md-3">
                                            <div class="related-product">
                                                <img class="img-fluid" src="https://source.unsplash.com/gsKdPcIyeGg" alt="Related Product">
                                            </div>
                                            <div class="related-title">Lovely Black Dress</div>
                                            <div class="d-flex">
                                                <div class="related-price mr-auto">$100.00</div>
                                                <div class="stars d-flex">
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                </div>
                                            </div>
                                        </div>
                                                    <div class="col-md-3">
                                            <div class="related-product">
                                                <img class="img-fluid" src="https://source.unsplash.com/sg_gRhbYXhc" alt="">
                                            </div>
                                            <div class="related-title">Lovely Dress With Patterns</div>
                                            <div class="d-flex">
                                                <div class="related-price mr-auto">$1199.00</div>
                                                <div class="stars d-flex">
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                </div>
                                            </div>
                                        </div>
                                                    <div class="col-md-3">
                                            <div class="related-product">
                                                <img class="img-fluid" src="https://source.unsplash.com/gJZQcirK8aw" alt="">
                                            </div>
                                            <div class="related-title">Lovely Fashion Dress</div>
                                            <div class="d-flex">
                                                <div class="related-price mr-auto">$200.00</div>
                                                <div class="stars d-flex">
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                </div>
                                            </div>
                                        </div>
                                                    <div class="col-md-3">
                                            <div class="related-product">
                                                <img class="img-fluid" src="https://source.unsplash.com/qbB_Z2pXLEU" alt="">
                                            </div>
                                            <div class="related-title">Lovely Red Dress</div>
                                            <div class="d-flex">
                                                <div class="related-price mr-auto">$120.00</div>
                                                <div class="stars d-flex">
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                    <div>&#9733;</div>
                                                </div>
                                            </div>
                                        </div>
                                    

                                </div>
                            </div>
                        </div>
			        </div>
				</div>
			</div><!--/.container-->
		
		</section><!--/.works-->
		<!--works end -->
        
		<!--reviews start -->
		<section id="reviews" class="reviews">
			<div class="section-header">
				<h2>clients reviews</h2>
				<p>What our client say about us</p>
			</div><!--/.section-header-->
			<div class="reviews-content">
				<div class="testimonial-carousel">
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>monirul islam</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Shohrab Hossain</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c1.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c2.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>monirul islam</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c3.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Shohrab Hossain</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				    <div class="single-testimonial-box">
						<div class="testimonial-description">
							<div class="testimonial-info">
								<div class="testimonial-img">
									<img src="assets/images/clients/c4.png" alt="clients">
								</div><!--/.testimonial-img-->
								<div class="testimonial-person">
									<h2>Tom Leakar</h2>
									<h4>london, UK</h4>
									<div class="testimonial-person-star">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-info-->
							<div class="testimonial-comment">
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis eaque.
								</p>
							</div><!--/.testimonial-comment-->
						</div><!--/.testimonial-description-->
					</div><!--/.single-testimonial-box-->
				</div>
			</div>

		</section><!--/.reviews-->
		<!--reviews end -->
@endsection		
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const thumbs = document.querySelectorAll('.thumb-image');
        const mainImage = document.getElementById('main-product-image');

        thumbs.forEach(thumb => {
            thumb.addEventListener('click', function () {
                mainImage.src = this.src;
            });
        });
    });
</script>

