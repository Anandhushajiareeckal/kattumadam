@extends('layouts.frontend')
@section('body')

<!--==================================================-->
<!-- Start Royella Breadcumb Area -->
<div class="breadcumb-area d-flex align-items-center"style="background: url({{$banner->image}}">
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
<!-- Start Royella Food Menu Area -->
<!--==================================================-->
<div class="food-menu-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title center inner" data-cue="zoomIn">
					<div class="section-thumb">
						<img src="assets/images/home-1/section-shape1.png" alt="">
					</div>
					<h1>Restaurent Food Menu</h1>
				</div>
			</div>
		</div>
        <div class="row">
			<div class="col-md-12">
				<div class="food-tab-item">
                   

                    
					<div class="tab-content" id="pills-tabContent">
					    <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="breakfast" tabindex="0">
					  		<div class="row">
                              
                                @foreach ($offering as $item)
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <div class="single-food-item-boxr" >
                                            <h2 >{{$item->heading}}</h2>	
                                        </div>
                                    </div>
                                    @foreach ($offering_details as $items)
                                        @if ($item->id == $items->offering_id)
                                            <div class="col-lg-6 col-md-12">
                                                <div class="single-food-item-box" data-cue="zoomIn">
                                                    <div class="food-item-content">
                                                        <h4>{{$items->details}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif					
                                    @endforeach
                                @endforeach
							</div>
					    </div>
					  
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- Start Royella Food Menu Area -->
<!--==================================================-->
@endsection