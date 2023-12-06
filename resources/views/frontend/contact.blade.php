@extends('layouts.frontend')
@section('body')
<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<!--==================================================-->
<div class="breadcumb-area d-flex align-items-center" style="background: url({{$banner->image}}">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="breacumb-content">
					<div class="breadcum-title">
						<h4>Contact</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Contact</li>
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
<!-- Start Royella Contact Style Two inner Area -->
<!--==================================================-->
<div class="contact-area style-two inner">
	<div class="container">
		<div class="row add-backgroun">
			<div class="col-lg-6">
				<div class="section-title two">
					<h4>Contact us</h4>
					<h1>Contact With Us</h1>
					<p class="section-desc-2">Rapidiously myocardinate cross-platform intellectual capital after the
                       model. Appropriately create interactive infrastructures after maintance
                       Holisticly facilitate stand-alone
					</p>
				</div>
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-telephone-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Call Us Now</h4>
						<p>{{$contact->number}}</p>
					</div>
				</div>				
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-envelope"></i>
					</div>
					<div class="contact-title">
						<h4>Sent Email</h4>
						<p>{{$contact->email}}</p>
					</div>
				</div>					
				<div class="single-contact-box">
					<div class="contact-icon">
						<i class="bi bi-geo-alt-fill"></i>
					</div>
					<div class="contact-title">
						<h4>Our Locations</h4>
						<p>{{$contact->location}}</p>
					</div>
				</div>	
			</div>
			<div class="col-lg-6">
				<form action="{{route('enquirey')}}" method="POST" id="dreamit-form">
					@csrf
					<div class="single-contact-form">
						<div class="contact-content">
							<h4>Get In Touch</h4>
						</div>
						<div class="single-input-box">
							<input type="text" name="name" placeholder="Your Name" required="">
						</div>
						<div class="single-input-box">
							<input type="text" name="email" placeholder="Enter Your Email" required="">
						</div>
						<div class="single-input-box">
							<input type="text" name="subject" placeholder="Enter Subject" required="">
						</div>
						<div class="single-input-box">
							<textarea name="message" id="message" placeholder="Write Message"></textarea>
						</div>
						<div class="single-input-box">
							<button type="submit">Sent Message</button>
						</div>
					</div>
				</form>
				<div id="status"></div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- Start Royella Contact Style two Inner Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Royella Google Map Area -->
<!--==================================================-->
<div class="google-map">
	<div class="row">
		<div class="col-md-12">
			<div class="google-map-content">
				{!!$contact->map!!}
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Google Map Area -->
<!--==================================================-->
@endsection