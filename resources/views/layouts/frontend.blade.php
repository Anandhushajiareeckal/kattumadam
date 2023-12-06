@php
namespace App\Models;
use App\Models\logo;
$logo = logo::find($id=1);
@endphp
<!DOCTYPE HTML>
<html lang="en-US">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>KATTUMADAM </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{$logo->fav}}">

	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animated-text.css')}}" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/theme-default.css')}}" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.transitions.css')}}" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{asset('frontend/venobox/venobox.css')}}" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-icons.css')}}" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" type="text/css" media="all">	
	<!-- ScrollCue CSS -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/scrollCue.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{asset('frontend/assets/css/dark.css')}}" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="{{asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>

<body>
	<!-- loder -->
	<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>



<div class="dark">
	<div class="dark-button">
		<input type="checkbox" class="toggle-switch">
	</div>
</div>



<!--==================================================-->
<!-- Start Royella Header Area -->
<!--==================================================-->
<div class="header-area home-two" id="sticky-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="header-logo">
					<a href="/"><img src="{{$logo->logo}}" alt="" style="width:106px"></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="header-menu home-two">
					<ul>
						<li class="menu-item-has-children"><a href="/">Home</a>
                            
						</li>
						<li><a href="/about">About</a></li>
						<li class="menu-item-has-children"><a href="/history">History</a>
                          
						</li>
						<li class="menu-item-has-children"><a href="/poojas">Poojas</a>
                           
						</li>
						<li class="menu-item-has-children"><a href="#">Temples<i class="fas fa-chevron-down"></i></a>
						   <ul class="sub-menu">
							<li class="sub-menu-style-two "><a href="#">Kattumadam </a>
								<ul class="sub-menu-two">
								  <li><a href="/pooja_time">Poojas</a></li>
									<li><a href="/offerings">Offerings</a></li>
									<li><a href="/gallery">Photos</a></li>
									<li><a href="/events">Events</a></li>
									<li><a href="/festivals">Festivals</a></li>
							   </ul>
						    </li>
						    <li class="sub-menu-style-two"><a href="#">Thirumangalam</a>
                            	<ul class="sub-menu-two">
									<li><a href="/tt_about">About</a></li>
									<li><a href="/tt_history">History</a></li>
                            	</ul>
					   		</li>
						   </ul>
						</li>   
						<li><a href="/contact">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="header-button">
					<a href="find-room.html">Booking Online</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Header Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Main Menu Area -->
<!--==================================================-->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
	<div class="mobile-menu">
		<nav class="header-menu">
			<ul>
				<li class="menu-item-has-children"><a href="/">Home</a>
					
				</li>
				<li><a href="/about">About</a></li>
				<li class="menu-item-has-children"><a href="/history">History</a>
				  
				</li>
				<li class="menu-item-has-children"><a href="/poojas">Poojas</a>
				   
				</li>
				<li class="menu-item-has-children"><a href="#">Temples<i class="fas fa-chevron-down"></i></a>
				   <ul class="sub-menu">
					<li class="sub-menu-style-two "><a href="#">Kattumadam </a>
						<ul class="sub-menu-two">
						  <li><a href="/poojas">Poojas</a></li>
							<li><a href="/offerings">Offerings</a></li>
							<li><a href="/gallery">Photos</a></li>
							<li><a href="/events">Events</a></li>
							<li><a href="/festivals">Festivals</a></li>
					   </ul>
					</li>
					<li class="sub-menu-style-two"><a href="#">Thirumangalam</a>
						<ul class="sub-menu-two">
							<li><a href="/tt_about">About</a></li>
							<li><a href="/tt_history">History</a></li>
						</ul>
					   </li>
				   </ul>
				</li>   
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</div>
</div>
<!--==================================================-->
<!-- End Main Menu Area -->
<!--==================================================-->














@yield('body')































{{-- <!--==================================================-->
<!-- Start Royella Subscribe Area Home two-->
<!--==================================================-->
<div class="subscribe-area">
	<div class="container">
		<div class="row subscribe align-items-center" data-cue="zoomIn">
			<div class="col-lg-6 col-md-12">
				<div class="single-subscribe-box">
					<div class="subscribe-content">
						<h4>Subscribe</h4>
						<h1>For More Deals</h1>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<form action="#">
					<div class="single-subscribe-input-box" data-cue="zoomIn">
						<input type="text" name="Email" placeholder="Email Addresss" required>
						<button type="submit">Subscribe</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!-- End Royella Subscribe Area Home two--> --}}
<!--==================================================-->


{{-- <!--==================================================-->
<!-- Start Royella Footer Area Home two-->
<!--==================================================-->
<div class="footer-area-two home-two" data-cue="zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="footer-widget-logo">
					<a href="index.html"><img src="{{asset('frontend/assets/images/home2/footer-logo.png')}}" alt=""></a>
				</div>
				<div class="footer-desc-2">
					<p>Show beauty your location, showse design
                    your rooms, present the facities an todays
                    features of your hotel and offer tos recove
                    method to book a room.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget-content-two">
					<div class="footer-widget-titel-two">
						<h4>Contact Us</h4>
					</div>
					<div class="footer-widget-menu-two">
						<ul>
							<li>support@example.com</li>
							<li>Brangladesh Mahanagari </br>Dhaka</li>
							<li class="style">1-800-123-4567</li>
						</ul>
					</div>
				</div>
			</div>			
			<div class="col-lg-2 col-md-6">
				<div class="footer-widget-content-two">
					<div class="footer-widget-titel-two">
						<h4>Information</h4>
					</div>
					<div class="footer-widget-menu-two">
						<ul>
							<li><a href="#">Our Location</a></li>
							<li><a href="#">Career</a></li>
							<li><a href="#">Customer support</a></li>
							<li><a href="about.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
                <div class="footer-widget-content-two">
                	<div class="footer-widget-titel-two">
                		<h4>Instagam</h4>
                	</div>
                	<div class="footer-widget-gallery-two">
                        <img src="{{asset('frontend/assets/images/home2/gallery-1.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/home2/gallery-2.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/home2/gallery-3.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/home2/gallery-4.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/home2/gallery-5.jpg')}}" alt="">
                        <img src="{{asset('frontend/assets/images/home2/gallery-6.jpg')}}" alt="">
				   </div>
                </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-area-two">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-content">
						<p>© 2023 Royella. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="footer-bottom-content-two">
						<p>Developed by: Dream-IT Team</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!--==================================================-->
<!-- End Royella Footer Area Home two-->
<!--==================================================--> --}}
<div class="footer-area" data-cue="zoomIn">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="footer-widget-contact">
					<div class="footer-widget-logo">
						<a href="index.html"><img src="{{asset('assets/images/home2/logo-1.png')}}" alt=""></a>
					</div>
					<div class="footer-widget-content">
						<div class="footer-widget-title">
							<h4>Contact Info</h4>
						</div>
						<div class="footer-widget-contact-info">
							<ul>
								<li><i class="bi bi-telephone-fill"></i>+980 (1234) 567 220</li>
								<li><i class="bi bi-envelope"></i>example@yahoo.com</li>
								<li><i class="bi bi-geo-alt-fill"></i>102/B New Elephant Rd<br>Dhaka - 1212</li>
							</ul>
						</div>
					</div>
					<div class="footer-widget-social-icon">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="footer-widget-content upper">
					<div class="footer-widget-title">
						<h4>Useful Links</h4>
					</div>
					<div class="footer-widget-menu">
                        <ul>
                         	<li><a href="about.html">About Hotel</a></li>
                         	<li><a href="room.html">Rooms & Suites</a></li>
                         	<li><a href="room-details.html">Reservations</a></li>
                         	<li><a href="blog.html">News & Blogs</a></li>
                         	<li><a href="contact.html">Contact</a></li>
                        </ul>
					</div>
				</div>
			</div>			
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Gallery</h4>
					</div>
					<div class="footer-widget-gallery">
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-1.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-1.jpg')}}" alt=""></a>                       
                         <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-2.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-2.jpg')}}" alt=""></a>                      
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-3.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-3.jpg')}}" alt=""></a> 
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-4.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-4.jpg')}}" alt=""></a> 
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-5.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-5.jpg')}}" alt=""></a>
                        <a class="place venobox vbox-item" data-gall="lace-imgs" href="{{asset('frontend/assets/images/home2/gallery-6.jpg')}}"><img src="{{asset('frontend/assets/images/home2/gallery-6.jpg')}}" alt=""></a>
					</div>
				</div>
			</div>			
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer-widget-content">
					<div class="footer-widget-title">
						<h4>Newsletter</h4>
					</div>
					<p>Subscribe our Newsletter</p>
					<form action="#">
						<div class="single-newsletter-box">
							<input type="text" name="Email" placeholder="Enter E-Mail" required>
							<button type="submit">Subscribe Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



<!--==================================================-->
	<!-- Start Curser Section Here -->
	<!--==================================================-->
	<div class="curser"></div>
	<div class="curser2"></div>
	<!--==================================================-->
	<!-- Ends Curser Section Here -->
	<!--==================================================-->



<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->
   <div class="prgoress_indicator active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
        </svg>
    </div>
<!--==================================================-->
<!-- Start scrollup section Section -->
<!--==================================================-->


	<!-- jquery js -->
	<script src="{{asset('frontend/assets/js/vendor/jquery-3.6.2.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
	<!-- carousel js -->
	<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
	<!-- counterup js -->
	<script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
	<!-- waypoints js -->
	<script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
	<!-- imagesloaded js -->
	<script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- venobox js -->
	<script src="{{asset('frontend/venobox/venobox.js')}}"></script>

	<!--  animated-text js -->
	<script src="{{asset('frontend/assets/js/animated-text.js')}}"></script>
	<!-- venobox min js -->
	<script src="{{asset('frontend/venobox/venobox.min.js')}}"></script>
	<!-- isotope js -->
	<script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
	<!-- jquery meanmenu js -->
	<script src="{{asset('frontend/assets/js/jquery.meanmenu.js')}}"></script>

	<!-- jquery scrollup js -->
	<script src="{{asset('frontend/assets/js/jquery.scrollUp.js')}}"></script>
	<!-- theme js -->
	<script src="{{asset('frontend/assets/js/theme.js')}}"></script>
	<!-- coustom js -->
	<script src="{{asset('frontend/assets/js/coustom.js')}}"></script>
	<!-- barfiller -->
	<script src="{{asset('frontend/assets/js/jquery.barfiller.js')}}"></script>
	<!-- barfiller -->
	<script src="{{asset('frontend/assets/js/scrollCue.min.js')}}"></script>



</body>


</html>