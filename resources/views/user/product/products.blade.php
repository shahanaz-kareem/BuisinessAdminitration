
	    <section class="ftco-section ftco-no-pt ftco-no-pb">
	    	<div class="container-fluid px-4">
	    		<div class="row d-flex">
	    			<div class="col-md-6 col-lg-3 d-flex align-items-center ftco-animate">
	    				<div class="heading-section text-center">
		    				<h2 class="">Our Tops Projects</h2>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia </p>
              </div>
	    			</div>
					 @foreach($products as $list)
					   			@php
                                   $firstImage = $list->images->first();
        						   $imageSrc = $firstImage ? asset('uploads/products/' . $firstImage->image_name) : asset('uploads/default.jpg');
                                @endphp
	    			<div class="col-md-6 col-lg-3 ftco-animate">
						
	    				<div class="model-entry">
			    			<div class="model-img" style="background-image: url('{{ $imageSrc }}');">
			    				<div class="name text-center">
			    					<h3><a href="{{ route('product.detail',$list->id) }}">{{ $list->name }}</a></h3>
			    				</div>
			    				<div class="text text-center">
			    					<h3><a href="{{ route('product.detail',$list->id) }}">{{ $list->name }}<br><span>{{ $list->user->name }} </span></a></h3>
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
		    		 @endforeach
	    			<div class="col-md-6 col-lg-3 d-flex justify-content-center align-items-center ftco-animate">
		    			<div class="btn-view">
		    				<p><a href="model.html" class="btn btn-white py-3 px-5">View more</a></p>
		    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </section>