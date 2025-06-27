<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 mb-5 heading-section text-center ftco-animate">
				<span class="subheading">Blog</span>
				<h2 class="mb-4">Recent Blog</h2>
				<p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia </p>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">

				@foreach($users as $user)
					@php
						$firstImage = $user->userdetail->first();
						$imageSrc = $firstImage ? asset('uploads/profiles/' . $firstImage->image) : asset('uploads/profile.webp');
					@endphp
					<div class="blog-entry bg-dark align-self-stretch">
						<a href="blog-single.html" class="block-20" style="background-image: url('{{ $imageSrc }}');">
						</a>
						<div class="text p-4 d-block">
							<div class="meta mb-3">
								<div><a href="#">May 17, 2019</a></div>
								<div><a href="#">{{ $user->usercategory->name ?? '' }}</a></div>
								<div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
							</div>
							<h3 class="heading mt-3"><a href="#">{{ $user->name }}</a></h3>
						</div>
					</div>
				@endforeach
			</div>

		</div>
	</div>
</section>