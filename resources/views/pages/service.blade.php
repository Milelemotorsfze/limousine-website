@extends('layouts.main')
@section('content')
<style>
	.service-border
	{
	border:1px solid #c69955!important;
	padding-top:20px!important;
	background-color:#f9f4ec!important;
	}

</style>
<section id="content-section-1"  >
	<div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin"  id="limoking-parallax-wrapper-1" data-bgspeed="0"
		style="background-image: url('../wp-content/uploads/2015/11/title-big-bg-yellow.jpg'); padding-top: 230px; padding-bottom: 90px; " >
		<div class="container">
			<div class="limoking-title-item"  >
				<div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
					<div class="limoking-item-title-container container">
						<div class="limoking-item-title-head-inner">
							<h3 class="limoking-item-title limoking-skin-title limoking-skin-border">Our Services</h3>
						</div>
						<div class="limoking-nav-title">
							<div class="limoking-item-title-content-icon-divider-wrapper" >
								<div class="limoking-item-title-center-icon-divider"></div>
								<i class="fa fa-star" ></i>
								<div class="limoking-item-title-center-icon-divider"></div>
							</div>
						</div>
						<div class="limoking-item-title-caption limoking-skin-info">We are the most popular limousine service in United Arab Emirates.We provide limousine services for every occasion and moment in your life.</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</section>
<section id="content-section-2" >
	<div class="limoking-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 10px; " >
		<div class="container">
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border">
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon">
										<img src="{{asset ('service/airport.png')}}">
									</div>
									<h3>Airport Transport</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border"  style="margin-bottom: 45px;" >
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon"><img src="{{asset ('service/khalifa.png')}}"></div>
									<h3>City Tour</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border"  style="margin-bottom: 45px;" >
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon"><img src="{{asset ('service/clock.png')}}"></div>
									<h3>Hourly Hire</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border"  style="margin-bottom: 45px;" >
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon"><img src="{{asset ('service/corporate.png')}}"></div>
									<h3>Corporates</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border"  style="margin-bottom: 45px;" >
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon"><img src="{{asset ('service/event.png')}}"></div>
									<h3>Events</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns" >
				<div class="limoking-ux column-service-ux">
					<div class="limoking-item limoking-column-service-item limoking-medium service-border"  style="margin-bottom: 45px;" >
						<div class="col-lg-4 col-md-6" style="cursor: pointer;">
							<div class="single-features-box">
								<center>
									<div class="icon"><img src="{{asset ('service/enterprise.png')}}"></div>
									<h3>Enterprise</h3>
								</center>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</section>
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function() 
         {
            var element = document.getElementById("services");
            element.classList.add("active-menu-color");
         });
      </script>
@endsection
