    <!--Homes start -->
		<section id="explore" class="explore">
			<div class="container">
				<div class="section-header">
					<h2>Homes</h2>
					<p>Explore New place, food, culture around the world and many more</p>
				</div><!--/.section-header-->
				<div class="explore-content">
					<div class="row">
                        @foreach($products as $list)
						<div class="col-md-4 col-sm-6">
                        <div class="single-explore-item">
                            <div class="single-explore-img">
                                @php
                                    $firstImage = $list->images->first();
                                    $imageSrc = $firstImage ? asset('uploads/products/' . $firstImage->image_name) : asset('uploads/products/default.jpg');
                                @endphp
                                <img src="{{ $imageSrc }}" class="d-block w-100" alt="Product Image">
                            </div>

                            <div class="single-explore-txt bg-theme-1">
                                <h2><a href="#">{{ $list->name }}</a></h2>
                                <p class="explore-rating-price">
                                    <span class="explore-rating">5.0</span>
                                    <a href="#">10 ratings</a>
                                    <span class="explore-price-box">
                                        from
                                        <span class="explore-price">5$-300$</span>
                                    </span>
                                    <a href="#">restaurant</a>
                                </p>
                                <div class="explore-person">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="explore-person-img">
                                                <a href="#">
                                                    <img src="{{asset('assets/images/explore/person.png')}}" alt="explore person">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ut labore et dolore magna aliqua....</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-open-close-part">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <button class="close-btn" onclick="window.location.href='{{ route('product.detail',$list->id) }}'">close now</button>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="explore-map-icon">
                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                <a href="#"><i data-feather="upload"></i></a>
                                                <a href="#"><i data-feather="heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        @endforeach
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.Homes-->
		<!--Homes end -->