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
   border-left: 1px solid #ccc;
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
</style>
<section id="content-section-1" >
                           <div class="limoking-parallax-wrapper limoking-background-image gdlr-show-all limoking-skin-dark-skin"  id="limoking-parallax-wrapper-1" data-bgspeed="0" style="background-image: url('../wp-content/uploads/2015/11/fleet-bg-yellow.jpg'); padding-top: 205px; padding-bottom: 410px; " >
                              <div class="container">
                                 <div class="limoking-title-item"  >
                                    <div class="limoking-item-title-wrapper limoking-item  limoking-center-icon-divider limoking-large ">
                                       <div class="limoking-item-title-container container">
                                          <div class="limoking-item-title-head-inner">
                                             <h3 class="limoking-item-title limoking-skin-title limoking-skin-border">Our Fleet / Modern 3 Columns</h3>
                                          </div>
                                          <div class="limoking-nav-title">
                                             <div class="limoking-item-title-content-icon-divider-wrapper" >
                                                <div class="limoking-item-title-center-icon-divider"></div>
                                                <i class="fa fa-car" ></i>
                                                <div class="limoking-item-title-center-icon-divider"></div>
                                             </div>
                                          </div>
                                          <div class="limoking-item-title-caption limoking-skin-info">We offer you a super VIP experience in middle of New York.</div>
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
                           <div class="limoking-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 0px; " >
                              <div class="container">
                              <div class="car-item-holder  limoking-car-column-2">
                                    <div class="limoking-isotope  filter-container" data-type=car data-layout=masonry>
                                        <div class=clear></div>
                                        <div class="six columns class3">
                                            <div class="limoking-item limoking-car-item limoking-classic-car" style="border:1px solid #c69955!important; border-radius:10px; ">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-31.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/mercedes-grand-sedan/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <center>
                                                            <h3 class="car-title">
                                                                <a href=https://max-themes.net/demos/car/mercedes-grand-sedan/index.html >
                                                            Mercedes Grand Sedan
                                                        </a>
                                                    </h3>
</center>

                                                        <div class=limoking-car-info-inner>
                                                        <div class="passenger-info">
                                    <div class="left-info">
                                       <img src="{{asset ('fleet/seat.png')}}" alt="Passenger Icon" class="fleet-icon">
                                       <h6 class="card-pb">Passengers</h6>
                                       <h5 class="card-pb">5+1</h5>
                                    </div>
                                    <div class="vertical-line"></div>
                                    <div class="right-info">
                                       <img src="{{asset ('fleet/bag.png')}}" alt="Baggage Icon" class="fleet-icon">
                                       <h6 class="card-pb">Baggage</h6>
                                       <h5 class="card-pb">3</h5>
                                    </div>
                                 </div>
                                 <div class="buttons">
                                    <a href="#" class="book-button background-color">Book a Car</a>
                                    <a href="#" class="partner-button background-color">Become a Partner</a>
                                 </div>
                                                            </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns class4">
                                            <div class="limoking-item limoking-car-item limoking-classic-car">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-41.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/black-cadillac-sedan/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <h3 class="car-title"><a href=https://max-themes.net/demos/car/black-cadillac-sedan/index.html >Black Cadillac Sedan</a></h3>
                                                        <div class=limoking-car-info-inner>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>4 Passengers</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Black Leather Interior </span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Heated Seats</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>$3.00 Per Hour Fuel Surcharge</span></div>
                                                        </div>
                                                    </div>
                                                    <div class=car-classic-button-wrapper><span class=car-rate-info-amount><span class=car-rate-info-price ><i class="fa fa-tag" ></i>$59</span>/ Hour</span><a class=limoking-car-button href=https://max-themes.net/demos/car/black-cadillac-sedan/index.html>View Details</a>
                                                        <div class=clear></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns class1">
                                            <div class="limoking-item limoking-car-item limoking-classic-car">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-51.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/cadillac-escalade-limo/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <h3 class="car-title"><a href=https://max-themes.net/demos/car/cadillac-escalade-limo/index.html >Cadillac Escalade Limo</a></h3>
                                                        <div class=limoking-car-info-inner>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>4 Passengers</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Black Leather Interior </span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Heated Seats</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>$3.00 Per Hour Fuel Surcharge</span></div>
                                                        </div>
                                                    </div>
                                                    <div class=car-classic-button-wrapper><span class=car-rate-info-amount><span class=car-rate-info-price ><i class="fa fa-tag" ></i>$89</span>/ Hour</span><a class=limoking-car-button href=https://max-themes.net/demos/car/cadillac-escalade-limo/index.html>View Details</a>
                                                        <div class=clear></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns class2">
                                            <div class="limoking-item limoking-car-item limoking-classic-car">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-61.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/lincoln-stretch-limo/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <h3 class="car-title"><a href=https://max-themes.net/demos/car/lincoln-stretch-limo/index.html >Lincoln Stretch Limo</a></h3>
                                                        <div class=limoking-car-info-inner>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>10 Passengers</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Black Leather Interior </span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Heated Seats</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>$3.00 Per Hour Fuel Surcharge</span></div>
                                                        </div>
                                                    </div>
                                                    <div class=car-classic-button-wrapper><span class=car-rate-info-amount><span class=car-rate-info-price ><i class="fa fa-tag" ></i>$109</span>/ Hour</span><a class=limoking-car-button href=https://max-themes.net/demos/car/lincoln-stretch-limo/index.html>View Details</a>
                                                        <div class=clear></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns class3">
                                            <div class="limoking-item limoking-car-item limoking-classic-car">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-71.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/hummer-strecth-limo/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <h3 class="car-title"><a href=https://max-themes.net/demos/car/hummer-strecth-limo/index.html >Hummer Strecth Limo</a></h3>
                                                        <div class=limoking-car-info-inner>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>16 Passengers</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Black Leather Interior </span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Heated Seats</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>$3.00 Per Hour Fuel Surcharge</span></div>
                                                        </div>
                                                    </div>
                                                    <div class=car-classic-button-wrapper><span class=car-rate-info-amount><span class=car-rate-info-price ><i class="fa fa-tag" ></i>$129</span>/ Hour</span><a class=limoking-car-button href=https://max-themes.net/demos/car/hummer-strecth-limo/index.html>View Details</a>
                                                        <div class=clear></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="six columns class4">
                                            <div class="limoking-item limoking-car-item limoking-classic-car">
                                                <div class="limoking-ux limoking-classic-car-ux">
                                                    <div class=car-thumbnail><img src=upload/car-81.jpg alt width=600 height=343><span class=car-overlay>&nbsp;</span><a class=car-overlay-icon href=https://max-themes.net/demos/car/ford-party-bus-limo/index.html><span class=car-icon ><i class="fa fa-link" ></i></span></a></div>
                                                    <div class=car-classic-content>
                                                        <h3 class="car-title"><a href=https://max-themes.net/demos/car/ford-party-bus-limo/index.html >Ford Party Bus Limo</a></h3>
                                                        <div class=limoking-car-info-inner>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>20 Passengers</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Black Leather Interior </span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>Heated Seats</span></div>
                                                            <div class=limoking-car-info><i class="limoking-car-info-icon fa fa-car"></i><span class=limoking-car-info-value>$3.00 Per Hour Fuel Surcharge</span></div>
                                                        </div>
                                                    </div>
                                                    <div class=car-classic-button-wrapper><span class=car-rate-info-amount><span class=car-rate-info-price ><i class="fa fa-tag" ></i>$119</span>/ Hour</span><a class=limoking-car-button href=https://max-themes.net/demos/car/ford-party-bus-limo/index.html>View Details</a>
                                                        <div class=clear></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=clear></div>
                                </div>
                              </div>
                           </div>
                           <div class="clear"></div>
                        </section>
@endsection