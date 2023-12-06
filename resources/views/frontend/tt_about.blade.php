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
						<h4>About Us</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>About</li>
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
<!-- Start Royella About Area -->
<!--==================================================-->
<div class="about-area inner">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
         		<div class="about-thumb">
		           <img src="{{$tt_about->image}}" alt="">
            	</div>
			</div>
			<div class="col-lg-6  upper">
				<div class="section-title two">
					<h1>{{$tt_about->heading}}</h1>
					<h1>Californta, Usa</h1>
					<p class="section-desc-2">{!!$tt_about->description!!}
					</p>
					
				</div>		
				
				{{-- <div class="luxury-button">
					<a href="#">About More</a>
				</div>	 --}}
			</div>
			{!!$tt_about->content!!}

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella About Area -->
<!--==================================================-->







@endsection