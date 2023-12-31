@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   /* Style the car container with a rounded border */
   .car-container {
   border: 1px solid #ccc;
   border-radius: 10px; /* Add round border */
   padding: 20px;
   margin-top: 20px;
   }
   /* Style the car details container */
   .car-details {
   text-align: center;
   padding: 20px;
   margin-top: 20px;
   }
   /* Style the car name */
   .car-title {
   font-size: 24px;
   margin-top: 10px;
   color:#c69955;
   }
   /* Style the passenger info */
   .passenger-info {
   display: flex;
   justify-content: space-between;
   align-items: center;
   margin-top: 20px;
   }
   /* Style the left and right info sections */
   .left-info,
   .right-info {
   flex: 1;
   text-align: center;
   }
   /* Style the vertical line separator */
   .vertical-line {
   border-left: 1px solid #c69955;
   height: 40px;
   margin: 0 20px;
   }
   /* Style the buttons container */
   .buttons {
   margin-top: 5px;
   display: flex; /* Use flexbox to make buttons appear in one row */
   justify-content: center; /* Center align buttons horizontally */
   }
   .book-button,
   .partner-button {
   display: inline-block;
   padding: 5px 10px;
   background-color: #007bff; /* Blue color, you can change this */
   color: #fff;
   text-decoration: none;
   margin-right: 5px;
   border-radius: 5px; /* Add round button border */
   }
   /* Hover effect for buttons */
   .book-button:hover,
   .partner-button:hover {
   background-color: #0056b3; /* Darker blue on hover */
   }
   .car-border
   {
    border:1px ridge #c69955;
    border-radius:10px;
   }
	@media (min-width:240px) and (max-width:712px) {
		.banner-image-padding-bottom {
         padding-top: 83px!important; 
      }
	}
</style>
<section id="content-section-1" >
   <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin banner-image-padding-bottom"  id="limoking-parallax-wrapper-1" data-bgspeed="0" 
   style="background-image: url('{{asset('Website - Banner 2.jpg')}}'); padding-top: 113px; padding-bottom: 417px;" >
      <div class="container">
         <div class="limoking-title-item"  >
            <div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
               <div class="limoking-item-title-container container">
                  <div class="limoking-item-title-head-inner">
                     <h3 class="limoking-item-title limoking-skin-title limoking-skin-border">Our Fleet</h3>
                     <div class="limoking-item-title-caption limoking-skin-info">We offer you a super VIP experience in middle of United Arab Emirates.</div>

                  </div>
                  <div class="limoking-nav-title">
                     <div class="limoking-item-title-content-icon-divider-wrapper" >
                        <div class="limoking-item-title-center-icon-divider"></div>
                        <i class="fa fa-car" ></i>
                        <div class="limoking-item-title-center-icon-divider"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="clear"></div>
      </div>
   </div>
   <div class="clear"></div>
</section>
@include('pages.fleetdetails')
<script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function() 
         {
            var element = document.getElementById("fleet");
            element.classList.add("active-menu-color");
         });
      </script>
@endsection
