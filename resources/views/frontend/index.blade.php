@extends('layouts.frontend')
@section('body')
<!--==================================================-->
<!-- Start Royella Hero Area -->
<!--==================================================-->
<!-- <div class="hero-area home-two align-items-center d-flex" style="background: url(assets/images/home2/hero-bg.jpg);">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="hero-content">
					<h4>Royella Hotel Resort</h4>
					<h1>Book Your Vacation</h1>
				</div>
			</div>
		</div>
	</div>
</div>	 -->


<div class="hero-slider-3 owl-carousel" >

@foreach ($home_banner as $item)
	

	<div class="hero-area home-six align-items-center d-flex" style="background: url({{$item->image}});">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8">
					<div class="hero-content">
						{{-- <h4>Unipur Place And 1</h4> --}}
						<h1>{{$item->heading}}</h1>
						{{-- <h1>Experiences</h1> --}}
						<p>{{$item->description}}</p>
					</div>
					<div class="luxury-button">
						<a href="#">Discover More</a>
					</div>
				</div>
			</div>
			{{-- <div class="hero-shape">
				<div class="hero-shpe-content">
					<h1>R</h1>
				</div>
			</div> --}}
		</div>
    </div>

	
@endforeach	

</div>
<!--==================================================-->
<!-- End Royella Hero Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Royella Offer Home two Area -->
<!--==================================================-->
<div class="offer-area home-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title home-two" data-cue="zoomIn">
					{{-- <h4>About Kattumadam</h4> --}}
					<h1>{{$home_about->heading}}</h1>
					<p class="section-desc home-two">{{$home_about->description_1}}</p>
				</div>
				<div class="offer-thumb home-two" data-cue="zoomIn">
					<img src="{{$home_about->image_1}}" alt="">
				</div>
			</div>
			<div class="col-lg-6">
			   <div class="offer-thumb home-two upper" data-cue="zoomIn">
					<img src="{{$home_about->image_2}}" alt="">
				</div>
				<div class="section-title home-two" data-cue="zoomIn">
					<p class="section-desc home-two">{{$home_about->description_2}}</p>
				</div>
				<div class="luxury-button home-two" data-cue="zoomIn">
					<a href="/about">See More Tour</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Offer Home-two Area -->
<!--==================================================-->







<!--==================================================-->
<!-- Start Royella Place Area Home two-->
<!--==================================================-->
<div class="place-area home-two">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center" data-cue="zoomIn">
				<div class="section-title center home-two">
					<h1>Gallery</h1>
					<p class="section-desc-2 home-two">A wonderful serenity has taken possession of my entire soul, like these royella dolor consectetur
						adipiscing elit dos eiusmod tempor incididunt resort sweet spring</p>
                    <div class="luxury-button">
					  <a href="/gallery">View More</a>
			      	</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fulid">
		<div class="row" data-cue="zoomIn">
			<div class="place-list owl-carousel">
								
				
								
				@foreach ($gallery as $item)
				<div class="col-lg-12">
					<div class="single-place-box">
						<div class="place-thumb">
							<img src="{{$item->image}}" alt="" style="height:200px; ">
							<div class="place-thumb-icon">
								<a class="place venobox vbox-item" data-gall="lace-imgs" href="{{$item->image}}"><i class="bi bi-link-45deg"></i></a>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			    
				
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Place Area Home two-->
<!--==================================================-->





<!--==================================================-->
<!-- Start Royella Room Area Home two-->
<!--==================================================-->
<div class="room-area home-two">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center home-two" data-cue="zoomIn">
					<h4>Our Rooms</h4>
					<h1>A Gander at Our Rooms</h1>
					<p class="section-desc-2 home-two">A wonderful serenity has taken possession of my entire soul, like these royella dolor consectetur
                     adipiscing elit dos eiusmod tempor incididunt resort sweet spring</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" data-cue="zoomIn">
			<div class="room-list-2 owl-carousel">
				@foreach ($event as $item)
					<div class="col-lg-12">
						<div class="single-room-box">
							<div class="room-thumb">
								<img src="{{$item->image}}" alt="">
							</div>
							<div class="room-content">
								<a href="/event/detail/{{$item->id}}"><h4> {{$item->heading}}</h4></a>
								<p>{{ substr($item->description, 0, 100) }}</p>
							</div>
						</div>
					</div>				
				@endforeach				
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Room Area Home two-->
<!--==================================================-->


{{-- 
<!--==================================================-->
<!-- Start Royella Testimonial Area Home two-->
<!--==================================================-->
<div class="testimonial-area home-two">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center home-two" data-cue="zoomIn">
					<h4>Our Testimonials</h4>
					<h1>Feedback from our Guests</h1>
					<p class="section-desc-2 home-two">A wonderful serenity has taken possession of my entire soul, like these royella dolor consectetur
                     adipiscing elit dos eiusmod tempor incididunt resort sweet spring</p>
				</div>
			</div>
		</div>
		<div class="row" data-cue="zoomIn">
			<div class="testi-list owl-carousel">
			    <div class="col-lg-12">
				<div class="single-testimonial-box-two">
					<div class="testi-content-two">
						<div class="testi-thumb-two">
							<img src="{{asset('frontend/assets/images/home2/testi-author1.jpg')}}" alt="">
						</div>
						<div class="testi-title">
							<h4>Al-Amin Hossain</h4>
							<p>Trip Advisor</p>
						</div>
					</div>
					<div class="testi-decs-two">
						<p>A wonderful serenity has taken possession my entire soul these in
                        royella consectetur royella dos eiusmod tempor incisdunt resorts
                        sweet wonderful serenity has taken possession my entire soul
                        royella consectetur royella dos eiusmod.</p>
					</div>
					<div class="testi-author-rating">
						<ul>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
						</ul>
					</div>
				</div>
			    </div>			   
			    <div class="col-lg-12">
				    <div class="single-testimonial-box-two">
					<div class="testi-content-two">
						<div class="testi-thumb-two">
							<img src="{{asset('frontend/assets/images/home2/testi-author2.jpg')}}" alt="">
						</div>
						<div class="testi-title">
							<h4>Viktoria Freeman</h4>
							<p>Trip Advisor</p>
						</div>
					</div>
					<div class="testi-decs-two">
						<p>A wonderful serenity has taken possession my entire soul these in
                        royella consectetur royella dos eiusmod tempor incisdunt resorts
                        sweet wonderful serenity has taken possession my entire soul
                        royella consectetur royella dos eiusmod.</p>
					</div>
					<div class="testi-author-rating">
						<ul>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
						</ul>
					</div>
				    </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Testimonial Area Home two-->
<!--==================================================--> --}}

@endsection