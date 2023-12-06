@extends('layouts.frontend')
@section('body')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center" style="background: url({{$banner->image}}">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Room Details</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Room Details</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Breadcumb Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Royella Room Details Area -->
<!--==================================================-->
<div class="room-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="room-details-list owl-carousel">
					    <div class="col-lg-12">
					    	<div class="room-detils-thumb">
					    		<img src="{{asset('frontend/assets/images/inner/room-details-1.jpg')}}" alt="">
					    	</div>
					    </div>							   
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="room-details-content">
							<h1>{{$event->heading}}</h1>
							<p class="room-detils-desc" data-cue="zoomIn">{{$event->description}}</p>
						</div>
					</div>
				</div>
			</div>
            
			<div class="col-lg-4">
				<div class="row">
					<div class="col-lg-12">
				    	<div class="widget-categories-box">
							<!-- categories title -->
							<div class="categories_title" data-cue="zoomIn">
								<h4>Popular Post </h4>
							</div>
							<div class="sidber-widget-recent-post" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-1.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">5 Discount Period every year for Valuable Clients</a>	
									<p> Jan, 26 2023</p>							
								</div>
							</div>
							<div class="sidber-widget-recent-post" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-2.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">Pre Booking Benifits for the Traveller on our Hotel</a>	
									<p>Jan, 18 2023</p>						
								</div>
							</div>
							<div class="sidber-widget-recent-post style1" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-3.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">How to Book a Room online Step by Step Guide</a>	
									<p> Jan, 15 2023</p>							
								</div>
							</div>
					    </div>				    	
					    
                        <div class="widget-categories-box">
							<!-- categories title -->
							<div class="categories_title" data-cue="zoomIn">
								<h4>Popular Post </h4>
							</div>
							<div class="sidber-widget-recent-post" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-1.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">5 Discount Period every year for Valuable Clients</a>	
									<p> Jan, 26 2023</p>							
								</div>
							</div>
							<div class="sidber-widget-recent-post" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-2.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">Pre Booking Benifits for the Traveller on our Hotel</a>	
									<p>Jan, 18 2023</p>						
								</div>
							</div>
							<div class="sidber-widget-recent-post style1" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="assets/images/inner/details-post-3.jpg" alt="">
								</div>
								<div class="recent-widget-content">
									<a href="#">How to Book a Room online Step by Step Guide</a>	
									<p> Jan, 15 2023</p>							
								</div>
							</div>
					    </div>	
					    
					</div>
				</div>
			</div>
            {!!$event->content!!}

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Room Details Area -->
<!--==================================================-->








@endsection