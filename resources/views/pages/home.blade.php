@extends('layouts.main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
      .ms-view
      {
         height: 200px!important;
      }
   }
   @media(max-width: 500px)
   {
      .Desktop,.Ipad{
      display:none;
      }
      .Mobile{
      display:block;
      }
      .ms-slide .ms-layer, .ms-fixed-layers .ms-layer, .ms-overlay-layers .ms-layer
      {
         position:inherit!important;
      }
      .msp-cn-290-5, .msp-cn-290-4 {
         font-size: 25px!important;
      }
      .ms-view
      {
         height: 200px!important;
      }
   }
   .column-service-title
   {
      color:#c69955;
   }
</style>
<section id="content-section-1" >
   <div class="limoking-full-size-wrapper gdlr-show-all no-skin"  style="padding-bottom: 0px;  background-color: #ffffff; "  >
      <div class="limoking-master-slider-item limoking-slider-item limoking-item"  style="margin-bottom: 0px;"  >
         <div id="P_MS651fe95640c1c" class="master-slider-parent ms-parent-id-1" style="" >
            <div id="MS651fe95640c1c" class="master-slider ms-skin-default " >
               <div class="ms-slide" data-delay="3" data-fill-mode="fill" >
                  <img src="{{asset ('uploads/Sliders/GMC - Slider.jpg')}}" alt="" title=""
                     data-src="{{asset ('uploads/Sliders/GMC - Slider.jpg')}}" style="max-width:100%; " class="Desktop"/>
                  <img   src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" class="Ipad" style="max-width:100%; ">
                  <img src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/GMC - Slider.jpg')}}" class="Mobile" style="max-width:100%; ">
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
                     data-src="{{asset ('uploads/Sliders/LEXUS - Slider.jpg')}}" style="max-width:100%; " class="Desktop"/>
                  <img   src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" class="Ipad" style="max-width:100%; ">
                  <img src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/LEXUS - Slider.jpg')}}" class="Mobile" style="max-width:100%; ">
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
                     data-src="{{asset ('uploads/Sliders/TESLA - Slider.jpg')}}" style="max-width:100%; "  class="Desktop"/>
                  <img   src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" class="Ipad" style="max-width:100%; ">
                  <img src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/TESLA - Slider.jpg')}}" class="Mobile" style="max-width:100%; ">
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
<section id="content-section-2" style="width:100%;">
                           <img src="{{asset ('uploads/Sliders/Website - Banner.jpg')}}" alt="" title=""
                     data-src="{{asset ('uploads/Sliders/Website - Banner.jpg')}}" style="max-width:100%; object-fit: cover;" class="Desktop"/>
                  <img   src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" class="Ipad" style="max-width:100%; object-fit: cover;">
                  <img src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}"
                     data-src="{{asset('uploads/mobile-slider/Website - Banner.jpg')}}" class="Mobile" style="max-width:100%; object-fit: cover;">
   <!-- <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin Desktop"  id="limoking-parallax-wrapper-1" data-bgspeed="0"
      style="background-image: url('{{asset ('uploads/Sliders/Website - Banner.jpg')}}'); padding-top: 72px; padding-bottom: 567px;" >
      <div class="container">
         <div class="limoking-title-item"  >
            <div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
               <div class="limoking-item-title-container container">
                  <div class="limoking-item-title-head-inner">
                     <h3 class="limoking-item-title limoking-skin-title limoking-skin-border">
                        We serve you like a king
                     </h3>
                  </div>
                  <div class="limoking-nav-title">
                     <div class="limoking-item-title-content-icon-divider-wrapper" >
                        <div class="limoking-item-title-center-icon-divider"></div>
                           <i class="fa fa-star" ></i>
                           <div class="limoking-item-title-center-icon-divider"></div>
                     </div>
                  </div>
                  <div class="limoking-item-title-caption limoking-skin-info">
                     We offer you a super VIP experience in middle of New York.
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="clear"></div>
      </div>
   </div> -->
   <!-- <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin Ipad"  id="limoking-parallax-wrapper-1" data-bgspeed="0"
      style="background-image: url('{{asset ('uploads/mobile-slider/Website - Banner.jpg')}}'); padding-top: 72px; padding-bottom: 567px; max-width:100%; object-fit: cover;" >
      <div class="container">
         <div class="limoking-title-item"  >
            <div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
               <div class="limoking-item-title-container container">
                  <div class="limoking-item-title-head-inner">
                     <h3 class="limoking-item-title limoking-skin-title limoking-skin-border">
                        We serve you like a king
                     </h3>
                  </div>
                  <div class="limoking-nav-title">
                     <div class="limoking-item-title-content-icon-divider-wrapper" >
                        <div class="limoking-item-title-center-icon-divider"></div>
                           <i class="fa fa-star" ></i>
                           <div class="limoking-item-title-center-icon-divider"></div>
                     </div>
                  </div>
                  <div class="limoking-item-title-caption limoking-skin-info">
                     We offer you a super VIP experience in middle of New York.
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="clear"></div>
      </div>
   </div> -->
   <!-- <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin Mobile"  id="limoking-parallax-wrapper-1" data-bgspeed="0"
      style="background-image: url('{{asset ('uploads/mobile-slider/Website - Banner.jpg')}}'); padding-top: 72px; padding-bottom: 567px; max-width:100%; object-fit: cover;  " >
      <div class="container">
         <div class="limoking-title-item"  >
            <div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
               <div class="limoking-item-title-container container">
                  <div class="limoking-item-title-head-inner">
                     <h3 class="limoking-item-title limoking-skin-title limoking-skin-border">
                        We serve you like a king
                     </h3>
                  </div>
                  <div class="limoking-nav-title">
                     <div class="limoking-item-title-content-icon-divider-wrapper" >
                        <div class="limoking-item-title-center-icon-divider"></div>
                           <i class="fa fa-star" ></i>
                           <div class="limoking-item-title-center-icon-divider"></div>
                     </div>
                  </div>
                  <div class="limoking-item-title-caption limoking-skin-info">
                     We offer you a super VIP experience in middle of New York.
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="clear"></div>
      </div>
   </div> -->
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
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-1.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/black-lincoln-mkt/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/black-lincoln-mkt/index.html" >Black Lincoln MKT</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-2.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/black-lincoln-sedan/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/black-lincoln-sedan/index.html" >Black Lincoln Sedan</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-3.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/mercedes-grand-sedan/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/mercedes-grand-sedan/index.html" >Mercedes Grand Sedan</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-4.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/black-cadillac-sedan/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/black-cadillac-sedan/index.html" >Black Cadillac Sedan</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-5.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/cadillac-escalade-limo/index.html" >
                              <span class="car-icon" ><i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/cadillac-escalade-limo/index.html" >Cadillac Escalade Limo</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-6.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/lincoln-stretch-limo/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/lincoln-stretch-limo/index.html" >Lincoln Stretch Limo</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-7.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/hummer-strecth-limo/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/hummer-strecth-limo/index.html" >Hummer Strecth Limo</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-8.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/ford-party-bus-limo/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/ford-party-bus-limo/index.html" >Ford Party Bus Limo</a></h3>
                        </li>
                        <li class="limoking-item limoking-car-item limoking-modern-car">
                           <div class="car-thumbnail"><img src="{{asset ('wp-content/uploads/2015/11/car-9.jpg')}}" alt="" width="600" height="343" />
                              <span class="car-overlay" >&nbsp;</span><a class="car-overlay-icon" href="car/mercedes-party-limo/index.html" ><span class="car-icon" >
                              <i class="fa fa-link" ></i></span></a>
                           </div>
                           <h3 class="car-title"><a href="car/mercedes-party-limo/index.html" >Mercedes Party Limo</a></h3>
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
@include('pages.fleetdetails')
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
                     <p>Sed posuere consectetur est at lobortis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum.</p>
                  </div>
                  <a class="about-us-read-more limoking-button large" href="{{ route('be-our-corporate-partners') }}" style="background-color:#c69955;">Be Corporate Partner</a>
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
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/airport.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">Airport Transport</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan.  We are the most</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/khalifa.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">City Tour</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan.  We are the most</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/clock.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">Hourly Hire</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan. We are the most</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clear"></div>
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/corporate.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">Corporates</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan.  We are the most</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/event.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">Events</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan.  We are the most</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="four columns" >
            <div class="limoking-ux column-service-ux">
               <div class="limoking-item limoking-column-service-item limoking-medium"  style="margin-bottom: 40px;" >
                  <div class="column-service-image" ><img src="{{asset ('service/enterprise.png')}}" alt="" width="41" height="46" /></div>
                  <div class="column-service-content-wrapper">
                     <h3 class="column-service-title">Enterprise</h3>
                     <div class="column-service-content limoking-skin-content">
                        <p>Limos King offers superb lim service in New York and Manhatatan.  We are the most</p>
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
@endsection
