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
						<h4>Serivce Details</h4>
					</div>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li>/</li>
						<li>Services Details</li>
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
<!-- Start Royella service Details Area -->
<!--==================================================-->
<div class="service-details">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			    <div class="service-details-thumb">
			    	<img src="{{$tt_history->image}}" alt="">
			    </div>
			</div>
			
			<div class="col-lg-4">
				@foreach ($event as $item)
							<div class="sidber-widget-recent-post" data-cue="zoomIn">
								<div class="recent-widget-thumb">
									<img src="{{$item->image}}" alt="" style="width:100px;"> 
								</div>
								<div class="recent-widget-content">
									<a href="#">{{$item->heading}}</a>	
								</div>
							</div>
						@endforeach
			</div>

		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="service-details-content">
					<div class="services-details-title-box">
						<h1>{{$tt_history->heading}}</h1>
						<p class="magnahu"  data-cue="zoomIn">
							{{$tt_history->description}}
						
                        </p>
					</div>					
					{!!$tt_history->content!!}

				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella service Details Area -->
<!--==================================================-->




@endsection