@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	  h1,
        h2,
        h3,
        h4,
        h5,
        h6 {}
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }
        
        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        img {
    max-width: 100%;
    height: auto;
}
span, a, a:hover {
    display: inline-block;
    text-decoration: none;
    color: inherit;
}
.section-head {
  margin-bottom: 60px;
}
.section-head h4 {
  position: relative;
  padding:0;
  color:#c69955;
  line-height: 1;
  letter-spacing:0.3px;
  font-size: 34px;
  font-weight: 700;  
  text-align:center;
  text-transform:none;
  margin-bottom:30px;
}
.section-head h4:before {
  content: '';
  width: 60px;
  height: 3px;
  background: #c69955;
  position: absolute;
  left: 0px;
  bottom: -10px;
  right:0;  
  margin:0 auto;
}
.section-head h4 span {
  font-weight: 700;
  padding-bottom: 5px;
  color:#2f2f2f
}
p.service_text{
  color:#cccccc !important;
  font-size:16px;
  line-height:28px;
  text-align:center;    
}
.section-head p, p.awesome_line{
  color:#818181;
  font-size:16px;
  line-height:28px;
  text-align:center;  
}

.extra-text {
    font-size:34px;
    font-weight: 700;
    color:#2f2f2f;
    margin-bottom: 25px;
    position:relative;
    text-transform: none;
}
.extra-text::before {
    content: '';
    width: 60px;
    height: 3px;
    background: #c69955;
    position: absolute;
    left: 0px;
    bottom: -10px;
    right: 0;
    margin: 0 auto;
}
.extra-text span {
    font-weight: 700;
    color:#c69955;
}
.item {
    background: #fff;
    text-align: center;
    padding: 30px 25px;
    -webkit-box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    box-shadow:0 0px 25px rgba(0, 0, 0, 0.07);
    border-radius: 20px;
    border:5px solid rgba(0, 0, 0, 0.07);
    margin-bottom: 30px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover{
    background:#c69955;
    box-shadow:0 8px 20px 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover .item, .item:hover span.icon{
    background:#fff;
    border-radius:10px;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item:hover h6, .item:hover p{
    color:#fff;
    -webkit-transition: all .5s ease 0;
    transition: all .5s ease 0;
    transition: all 0.5s ease 0s;
}
.item .icon {
    font-size: 40px;
    margin-bottom:25px;
    color: #c69955;   
    width: 90px;
    height: 90px;
    line-height: 96px;
    border-radius: 50px;
}
.item .feature_box_col_one{
    background:rgba(247, 198, 5, 0.20);
    color:#c69955
}
.item .feature_box_col_two{
    background:rgba(255, 77, 28, 0.15);
    color:#c69955
}
.item .feature_box_col_three{
    background:rgba(0, 147, 38, 0.15);
    color:#c69955
}
.item .feature_box_col_four{
    background:rgba(0, 108, 255, 0.15);
    color:#c69955
}
.item .feature_box_col_five{
    background:rgba(146, 39, 255, 0.15);
    color:#c69955
}
.item .feature_box_col_six{
    background:rgba(23, 39, 246, 0.15);
    color:#c69955
}
.item p{
    font-size:17px;
    line-height:26px;
}
.item h6 {
    margin-bottom:20px;
    color:#2f2f2f;
}
.mission p {
    margin-bottom: 10px;
    font-size: 15px;
    line-height: 28px;
    font-weight: 500;
}
.mission i {
    display: inline-block;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    background: #c69955;
    border-radius: 50%;
    color: #fff;
    font-size: 25px;
}
.mission .small-text {
    margin-left: 10px;
    font-size: 13px;
    color: #666;
}
.skills {
    padding-top:0px;
}
.skills .prog-item {
    margin-bottom: 25px;
}
.skills .prog-item:last-child {
    margin-bottom: 0;
}
.skills .prog-item p {
    font-weight: 500;
    font-size: 15px;
    margin-bottom: 10px;
}
.skills .prog-item .skills-progress {
    width: 100%;
    height: 10px;
    background: #e0e0e0;
    border-radius:20px;
    position: relative;
}
.skills .prog-item .skills-progress span {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background: #c69955;
    width: 10%;
    border-radius: 10px;
    -webkit-transition: all 1s;
    transition: all 1s;
}
.skills .prog-item .skills-progress span:after {
    content: attr(data-value);
    position: absolute;
    top: -5px;
    right: 0;
    font-size: 10px;
    font-weight:600;    
    color: #fff;
    background:rgba(0, 0, 0, 0.9);
    padding: 3px 7px;
    border-radius: 30px;
}
	.zoom:hover 
	{
	-ms-transform: scale(1.1); /* IE 9 */
	-webkit-transform: scale(1.1); /* Safari 3-8 */
	transform: scale(1.1); 
	background-color:#f9f4ec!important;
	border-color:#c69955!important;
	border-radius:5px!important;
	}
	.p-margin-bottom
	{
		margin-bottom: 0px!important;
	}
	.column-service-title
	{
		color:#c69955;
	}
	.image {
		width:100%;
		height:232px;
	}
	.limoking-item-title-center-icon-divider
	{
		width:66px!important;
	}
	.fleet-icon
	{
	margin-bottom:20px!important;
	}
	.car-container {
	border: 1px solid #ccc;
	border-radius: 10px; 
	padding: 20px;
	margin-top: 20px;
	}
	.car-details {
	text-align: center;
	padding: 20px;
	margin-top: 20px;
	}
	.car-title {
	font-size: 24px;
	margin-top: 10px;
	color:#c69955;
	}
	.passenger-info {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-top: 20px;
	}
	.left-info,
	.right-info {
	flex: 1;
	text-align: center;
	}
	.vertical-line {
	border-left: 1px solid #c69955;
	height: 40px;
	margin: 0 20px;
	}
	.buttons {
	margin-top: 5px;
	display: flex;
	justify-content: center; 
	}
	.book-button,
	.partner-button {
	display: inline-block;
	padding: 5px 10px;
	background-color: #007bff; 
	color: #fff;
	text-decoration: none;
	margin-right: 5px;
	border-radius: 5px; 
	}
	.book-button:hover,
	.partner-button:hover {
	background-color: #0056b3; 
	}
	.car-border
	{
	border:1px ridge #c69955; 
	border-radius:10px;
	padding-bottom:20px!important;
	padding-left:20px!important;
	}
	.portfolio-item-filter span, .car-item-filter span {
	color: #aeaeae;
	}
	.msp-cn-290-5 , .msp-cn-290-4
	{
	background-color:transparent;
	font-size: 95px!important;
	}
	.msp-cn-290-5
	{
	top:450px!important;
	color:#c69955!important;
	}
	.msp-cn-290-4
	{
	top:350px!important;
	left: 0px!important;  
	}
	.ms-slide .ms-slide-layers, .ms-overlay-layers .ms-slide-layers, .ms-fixed-layers
	{
	position:initial!important;
	}
	.Ipad,.Mobile
	{
	display:none;
	}
	@media(max-width: 768px)
	{
		.Desktop,.Mobile{
		display:none;
		}
		.Ipad{
		display:block;
		}
		.ms-slide .ms-layer, .ms-fixed-layers .ms-layer, .ms-overlay-layers .ms-layer
		{
		position:inherit!important;
		}
		.msp-cn-290-5, .msp-cn-290-4 {
		font-size: 25px!important;
		}
	}
	@media(max-width: 500px)
	{
		.Desktop,.Ipad {
			display:none;
		}
		.Mobile
		{
			display:block;
		}
		.ms-slide .ms-layer, .ms-fixed-layers .ms-layer, .ms-overlay-layers .ms-layer
		{
		position:inherit!important;
		}
		.msp-cn-290-5, .msp-cn-290-4 {
		font-size: 25px!important;
		}
	}
	@media (min-width:240px) and (max-width:241px) 
	{
		.ms-view 
		{
			height: 133px!important;
		}
	}
	@media (min-width:280px) and (max-width:281px) 
	{
		.ms-view 
		{
			height: 155px!important;
		}
	}
	@media (min-width:320px) and (max-width:321px) 
	{
		.ms-view 
		{
			height: 175px!important;
		}
	}
	@media (min-width:353px) and (max-width:354px) 
	{
		.ms-view 
		{
			height: 196px!important;
		}
	}
	@media (min-width:360px) and (max-width:361px) 
	{
		.ms-view 
		{
			height: 200px!important;
		}
	}
	@media (min-width:375px) and (max-width:376px) 
	{
		.ms-view 
		{
			height: 208px!important;
		}
	}
	@media (min-width:384px) and (max-width:385px) 
	{	
		.ms-view 
		{
			height: 213px!important;
		}
	}
	@media (min-width:390px) and (max-width:394px) 
	{	
		.ms-view 
		{
			height: 216px!important;
		}
	}
	@media (min-width:411px) and (max-width:414px) 
	{	
		.ms-view 
		{
			height: 228px!important;
		}
	}
	@media (min-width:480px) and (max-width:481px) 
	{	
		.ms-view 
		{
			height: 266px!important;
		}
	}
	@media (min-width:540px) and (max-width:541px) 
	{	
		.ms-view 
		{
			height: 300px!important;
		}
	}
	@media (min-width:600px) and (max-width:601px) 
	{
		.ms-view 
		{
			height: 333px!important;
		}
	}
	@media (min-width:640px) and (max-width:641px) 
	{
		.ms-view 
		{
			height: 355px!important;
		}
	}
	@media (min-width:712px) and (max-width:713px) 
	{
		.ms-view 
		{
			height: 395px!important;
		}
	}
	@media (min-width:768px) and (max-width:769px) 
	{
		.ms-view 
		{
			height: 425px!important;
		}
	}
	@media (min-width:1025px) 
	{
		.six{
			width: 49%!important;
		}
		.margin-class
	{
		margin-right:22px!important;
		/* margin-right:10px!important; */
	}
		/* .service-margin
	{
		margin-right: 20px!important;
		margin-left: 20px!important;
		margin-top: 20px!important;
		margin-bottom: 20px!important;
		padding-right:5px!important;
		padding-left:5px!important;
		padding-top:5px!important;
		padding-bottom:5px!important;
	} */
	}
	.service-margin
	{
		margin-right: 20px!important;
		margin-left: 20px!important;
		margin-top: 20px!important;
		margin-bottom: 20px!important;
		padding-right:5px!important;
		padding-left:5px!important;
		padding-top:5px!important;
		padding-bottom:5px!important;
	}
	.limoking-stunning-item .stunning-item-button {
		font-size: 26px!important;
	}
</style>
<section id="content-section-1" >
	<div class="limoking-full-size-wrapper gdlr-show-all no-skin"  style="padding-bottom: 0px;  background-color: #ffffff; "  >
		<div class="limoking-master-slider-item limoking-slider-item limoking-item"  style="margin-bottom: 0px;"  >
			<div id="P_MS651fe95640c1c" class="master-slider-parent ms-parent-id-1" style="" >
				<div id="MS651fe95640c1c" class="master-slider ms-skin-default " >
					<div class="ms-slide" data-delay="3" data-fill-mode="fill" >
						<img src="{{asset ('uploads/Sliders/GMC - Slider.jpg')}}" alt="" title="" 
							data-src="{{asset ('uploads/Sliders/GMC - Slider.jpg')}}" style="max-width:100%; object-fit: cover;" class="Desktop"/>
						<img   src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" class="Ipad" style="max-width:100%; object-fit: cover;">
						<img src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" class="Mobile" style="max-width:100%; object-fit: cover;">
						<div  class="ms-layer  msp-cn-290-4" style=""   data-effect="t(true,0,-60,n,n,65,n,0,n,n,n,-15,n,n,n)" data-duration="2000"  
							data-ease="easeOutExpo" data-offset-x="203" data-offset-y="254" data-origin="tl"   >
							EXPERIENCE
						</div>
						<div  class="ms-layer  msp-cn-290-5" style=""   data-effect="t(true,n,-60,n,n,65,n,n,n,n,n,-15,n,n,n)" data-duration="2000" data-delay="437" 
							data-ease="easeOutExpo" data-offset-x="0" data-offset-y="309" data-origin="tl">
							LUXURY
						</div>
					</div>
					<div  class="ms-slide " data-delay="3" data-fill-mode="fill"   >
						<img id="lexusimage" src="{{asset ('uploads/Sliders/LEXUS - Slider.jpg')}}" alt="" title="" 
							data-src="{{asset ('uploads/Sliders/LEXUS - Slider.jpg')}}" style="max-width:100%; object-fit: cover;" class="Desktop"/>
						<img   src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" class="Ipad" style="max-width:100%; object-fit: cover;">
						<img src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" class="Mobile" style="max-width:100%; object-fit: cover;">
						<div  class="ms-layer  msp-cn-290-4" style=""   data-effect="t(true,0,-60,n,n,65,n,0,n,n,n,-15,n,n,n)" data-duration="2000"  
							data-ease="easeOutExpo" data-offset-x="203" data-offset-y="254" data-origin="tl"   >
							RIDE LIKE
						</div>
						<div  class="ms-layer  msp-cn-290-5" style=""   data-effect="t(true,n,-60,n,n,65,n,n,n,n,n,-15,n,n,n)" data-duration="2000" data-delay="437" 
							data-ease="easeOutExpo" data-offset-x="0" data-offset-y="309" data-origin="tl">
							ROYALTY
						</div>
					</div>
					<div  class="ms-slide " data-delay="3" data-fill-mode="fill">
						<img src="{{asset ('uploads/Sliders/TESLA - Slider.jpg')}}" alt="" title="" 
							data-src="{{asset ('uploads/Sliders/TESLA - Slider.jpg')}}" style="max-width:100%; object-fit: cover;"  class="Desktop"/>
						<img   src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" class="Ipad" style="max-width:100%; object-fit: cover;">
						<img src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" 
							data-src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" class="Mobile" style="max-width:100%; object-fit: cover;">
						<div  class="ms-layer  msp-cn-290-4" style=""   data-effect="t(true,0,-60,n,n,65,n,0,n,n,n,-15,n,n,n)" data-duration="2000"  
							data-ease="easeOutExpo" data-offset-x="203" data-offset-y="254" data-origin="tl"   >
							ARRIVE IN 
						</div>
						<div  class="ms-layer  msp-cn-290-5" style=""   data-effect="t(true,n,-60,n,n,65,n,n,n,n,n,-15,n,n,n)" data-duration="2000" data-delay="437" 
							data-ease="easeOutExpo" data-offset-x="0" data-offset-y="309" data-origin="tl">
							STYLE
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</section>
<!-- <div class="zoom"></div> -->
<section id="content-section-2" style="width:100%;">
	<img src="{{asset ('uploads/Sliders/Website - Banner.jpg')}}" alt="" title="" 
		data-src="{{asset ('uploads/Sliders/Website - Banner.jpg')}}" style="max-width:100%; object-fit: cover;" class="Desktop"/>
	<img   src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" 
		data-src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" class="Ipad" style="max-width:100%; object-fit: cover;">
	<img src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" 
		data-src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" class="Mobile" style="max-width:100%; object-fit: cover;">
	<div class="clear"></div>
</section>

<section id="content-section-3" >
	<div class="limoking-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 0px; padding-bottom: 10px; " >
		<div class="container">
			<div class="limoking-item-title-wrapper limoking-item  limoking-nav-container limoking-center-icon-divider limoking-medium ">
				<div class="limoking-item-title-container container">
					<div class="limoking-item-title-head-inner">
						<h3 class="limoking-item-title limoking-skin-title limoking-skin-border">Our Fleet</h3>
					</div>
					<div class="limoking-nav-title">
						<i class="icon-angle-left limoking-flex-prev"></i>
						<div class="limoking-item-title-content-icon-divider-wrapper" >
							<div class="limoking-item-title-center-icon-divider"></div>
							<i class="fa fa-car" ></i>
							<div class="limoking-item-title-center-icon-divider"></div>
						</div>
						<i class="icon-angle-right limoking-flex-next"></i>
					</div>
				</div>
			</div>
			<div class="car-item-wrapper type-modern-car"  data-ajax="wp-admin/admin-ajax.html" >
				<div class="limoking-ajax-info" data-num-fetch="9" data-num-excerpt="0" data-orderby="date" data-order="desc" data-thumbnail-size-featured="thumbnail" data-thumbnail-size="full" data-car-style="modern-car" data-car-size="3" data-car-layout="carousel" data-price-display="none" data-ajax="wp-admin/admin-ajax.php" data-category="" data-pagination="disable" ></div>
				<div class="car-item-filter">
					<!-- <a class="active" href="#" data-category="" >All</a> -->
					<span class="limoking-separator" >/</span>
					<!-- <a class="" href="#"> -->
					SEDAN
					<!-- </a> -->
					<span class="limoking-separator" >/</span>
					<!-- <a class="" href="#"> -->
					SUV LIMO
					<!-- </a> -->
				</div>
				<div class="car-item-holder  limoking-car-column-3">
					<div class="limoking-car-carousel-item limoking-item" >
						<div class="flexslider" data-type="carousel" data-nav-container="car-item-wrapper" data-columns="3" >
							<ul class="slides" >
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail">
										<img class="image" src="{{asset('uploads/PNG Cars/Tesla-Model-Y.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" ></a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												TESLA MODEL Y
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<center><img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">4+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<center><img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'TESLA']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail"><img class="image" src="{{asset('uploads/PNG Cars/GMC-Yukon.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" ></a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												GMC YUKON
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<center><img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">6+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<center><img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'GMC']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail"><img class="image" src="{{asset('uploads/PNG Cars/LEXUS-ES300.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" ></a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												LEXUS ES300
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<center><img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">4+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<center><img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'LEXUS']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail"><img class="image" src="{{asset('uploads/PNG Cars/Tesla-Model-Y.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" ></a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												TESLA MODEL Y
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon">
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">4+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon">
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'TESLA']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail"><img class="image" src="{{asset('uploads/PNG Cars/GMC-Yukon.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" >
										</a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												GMC YUKON
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<center><img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">6+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<center><img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'GMC']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
								<li class="limoking-item limoking-car-item limoking-modern-car car-border">
									<div class="car-thumbnail"><img class="image" src="{{asset('uploads/PNG Cars/LEXUS-ES300.png')}}" alt="" width="600" height="343" />
										<span class="car-overlay" >&nbsp;</span><a class="" href="" ></a>
									</div>
									<div class=car-classic-content>
										<center>
											<h3 class="car-title">
												LEXUS ES300
											</h3>
										</center>
										<div class=limoking-car-info-inner>
											<div class="passenger-info">
												<div class="left-info">
													<center><img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Passengers</h6>
													<h5 class="card-pb">4+1</h5>
												</div>
												<div class="vertical-line"></div>
												<div class="right-info">
													<center><img src="{{asset ('fleet/baggage.png')}}" alt="Baggage Icon" class="fleet-icon"></center>
													<h6 class="card-pb">Baggage</h6>
													<h5 class="card-pb">3</h5>
												</div>
											</div>
											<div class="buttons">
												<a href="{{ route('be-our-driver-or-investor',['vehicle' => 'LEXUS']) }}" class="partner-button background-color">Become a Partner</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section id="content-section-5" >
                                    <div class="limoking-color-wrapper  gdlr-show-all limoking-skin-dark-skin" style="background-color: #c69955; padding-top: 0px; padding-bottom: 0px; " >
                                        <div class="container">
                                            <div class="limoking-stunning-item-ux limoking-ux">
                                                <div class="limoking-item limoking-stunning-item" >
												<h2 class="stunning-item-button limoking-info-font" href="http://demo.goodlayers.com/limoking/service-rates/" style="color: #fff;background: #d6a54c;" >What about pricing?</h2>

                                                    <div class="stunning-item-content"  style="padding-left:50px;">
                                                        <!-- <h2 class="stunning-item-title">What about pricing?</h2> -->
                                                        <div class="stunning-item-caption limoking-skin-content" style="font-size:15px;">Our charges are highly competitive aligning with market standards. We offer a variety of convenient payment options, including cash, credit cards, and online payments, to ensure a hassle-free payment experience for our valued customers.</div>
                                                    </div>
                                                    <!-- <a class="stunning-item-button limoking-info-font" href="http://demo.goodlayers.com/limoking/service-rates/" style="color: #fff;background: #d6a54c;" >Check Rates</a> -->
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </section>
								<section id="content-section-7" >
	<div class="limoking-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 70px; padding-bottom: 20px; " >
		<div class="container">
		<div class="row">
                        <div class="section-head col-sm-12">
                            <h4><span>Why Choose</span> Us?</h4>
                            <!-- <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p> -->
                        </div>
                        <div class="six column margin-class">
                            <div class="item">
                                <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                                <h5>Style and Comfort</h5>
                                <p>We offer impeccable pick and drop services tailored to your schedule, making sure you arrive in style and comfort.</p>
                            </div>
                        </div>
						<div class="six column">
                            <div class="item">
                                <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                                <h5>Luxury Experience</h5>
                                <p> From the moment you step into our vehicles to the minute you reach your destination, prepare to be pampered.</p>
                            </div>
                        </div>
                        <div class="six column margin-class">
                            <div class="item">
                                <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                                <h5>Professional Chauffeurs</h5>
                                <p>Our chauffeurs are more than drivers; they are your dedicated concierges. Knowledgeable, courteous, and dedicated to your needs, they ensure a seamless ride</p>
                            </div>
                        </div>
						
                        <div class="six column">
                            <div class="item">
                                <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                                <h5>Fleet</h5>
                                <p>Our exquisite fleet, featuring the GMC, Denali, Tesla, and Lexus ES300. Each vehicle is meticulously maintained for your ultimate satisfaction.</p>
                            </div>
                        </div>
                        
                    </div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<!-- <section>
    <div class="limoking-full-size-wrapper gdlr-show-all no-skin"  style="padding-bottom: 0px;  background-color: #ffffff; "  >
        <div class="limoking-master-slider-item limoking-slider-item limoking-item"  style="margin-bottom: 0px;"  >
            <div class="feat bg-gray pt-5 pb-5">
                <div class="container">
                  
                </div>
            </div>
        </div>
    </div>
</section> -->
								
<section id="content-section-8" >
	<div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-darkblue"  id="limoking-parallax-wrapper-3" data-bgspeed="0" style="background-image: url('{{asset ('')}}wp-content/uploads/2015/11/about-us-bg.jpg'); padding-top: 95px; padding-bottom: 50px; " >
		<div class="container">
			<div class="six columns" >
				<div class="limoking-item limoking-about-us-item limoking-with-divider" >
					<div class="about-us-title-wrapper">
						<h3 class="about-us-title">We promise, you will have  the best experience</h3>
						<div class="about-us-title-divider" style="border-color:#c69955;"></div>
					</div>
					<div class="about-us-content-wrapper">
						<div class="about-us-content limoking-skin-content">
							<p>We strive to exceed our clients' expectations, ensuring their travel is not just a destination but a seamless and memorable journey.</p>
						</div>
						<a class="about-us-read-more limoking-button large" href="{{route('be-our-corporate-partners')}}" style="background-color:#c69955;">Be Our Corporate Partner</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section id="content-section-7" >
	<div class="limoking-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 70px; padding-bottom: 20px; " >
		<div class="container">
			<div class="four columns sparkle u-hover--sparkle" >
				<div class="limoking-ux column-service-ux ">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image" ><img src="{{asset ('service/airport.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title ">Airport Transport</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan.  We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image " ><img src="{{asset ('service/khalifa.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title">City Tour</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan.  We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image " ><img src="{{asset ('service/clock.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title">Hourly Hire</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan. We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image " ><img src="{{asset ('service/corporate.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title">Corporates</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan.  We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image " ><img src="{{asset ('service/event.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title">Events</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan.  We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-margin zoom" >
						<div class="column-service-image " ><img src="{{asset ('service/enterprise.png')}}" alt="" width="41" height="46" /></div>
						<div class="column-service-content-wrapper">
							<h3 class="column-service-title">Enterprise</h3>
							<div class="column-service-content limoking-skin-content">
								<p class="p-margin-bottom">Limos King offers superb lim service in New York and Manhatatan.  We are the </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</section>

<script>
	( window.MSReady = window.MSReady || [] ).push( function( $ ) {
	
		"use strict";
		var masterslider_0c1c = new MasterSlider();
	
		masterslider_0c1c.control('arrows'     ,{ autohide:true, overVideo:true  });
		masterslider_0c1c.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:5 , margin:10  });
		masterslider_0c1c.setup("MS651fe95640c1c", {
			width           : 1000,
			height          : 700,
			minHeight       : 0,
			space           : 0,
			start           : 1,
			grabCursor      : true,
			swipe           : true,
			mouse           : true,
			keyboard        : false,
			layout          : "fullwidth",
			wheel           : false,
			autoplay        : true,
	              instantStartLayers:false,
			mobileBGVideo:false,
			loop            : true,
			shuffle         : false,
			preload         : 2,
			heightLimit     : true,
			autoHeight      : false,
			smoothHeight    : true,
			endPause        : false,
			overPause       : false,
			fillMode        : "fill",
			centerControls  : true,
			startOnAppear   : false,
			layersMode      : "center",
			autofillTarget  : "",
			hideLayers      : false,
			fullscreenMargin: 0,
			speed           : 24,
			dir             : "h",
			responsive      : true,
			tabletWidth     : 768,
			tabletHeight    : null,
			phoneWidth      : 480,
			phoneHeight    : null,
			sizingReference : window,
			parallaxMode    : 'swipe',
			view            : "scale"
		});
	
					MSScrollParallax.setup( masterslider_0c1c, 30, 50, true );
		window.masterslider_instances = window.masterslider_instances || [];
		window.masterslider_instances.push( masterslider_0c1c );
	});
</script>
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function() 
         {
            var element = document.getElementById("home");
            element.classList.add("active-menu-color");
         });
      </script>
@endsection
