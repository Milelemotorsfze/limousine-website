@extends('layouts.main')
@section('content')
    <link rel='stylesheet'  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  crossorigin="anonymous">
    <style>
        .submit-button{
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 0.8px;
            padding: 15px;
            width: 100%;
            display: block;
            -webkit-appearance: none;
            border: 0;
            color: #fff;
            font-style: normal !important;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: black;
        }
        input[type=text] {
            background-color: #FFFFFF !important;
            border: solid 1px #dee2e6 !important;

        }
        @media only screen and (min-device-width: 600px),only screen and(max-device-width: 1000px) {
            i.limoking-icon {
                margin-right: 6px;
            }
        }
    </style>
    <div class="content-wrapper slider-margin-width">
        <div class="limoking-content">
            <div class="above-sidebar-wrapper">
                <section id="content-section-1">
                    <div class="limoking-full-size-wrapper gdlr-show-all " style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="limoking-item limoking-content-item" style="margin-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel="map1">
                                <iframe style="width:100%; height:480px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.852700403415!2d55.36611197620153!3d25.174451077725763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f675b5b792571%3A0x8dd25798a287aa87!2sMilele%20Showroom%2093%2093!5e0!3m2!1sen!2sae!4v1695724496789!5m2!1sen!2sae"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
            </div>
            <div class="with-sidebar-wrapper">
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left eight columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id="content-section-2">
                                <div class="section-container container">
                                    <div class="limoking-item limoking-content-item" style="margin-bottom: 60px;"><span class=clear></span><span class=limoking-space style="margin-top: -22px; display: block;"></span>
                                        <h5 class="limoking-heading-shortcode " style="font-weight: bold;">Contact Us</h5>
                                        <p> <span class=clear></span><span class=limoking-space style="margin-top: 25px; display: block;"></span>
                                        <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <div class="alert alert-success mt-2 alert-dismissible show" id="form-success-div"  hidden role="alert">
                                                <span id="contact-form-output"> </span>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            <form id="form-contact" action="{{ route('contacts.store') }}" method="POST"  >
                                                @csrf
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class=" your-name">
                                                             <input id="name" type="text" name="name" size="40" class="form-control form-control-lg  @error('name') is-invalid @enderror"
                                                                    aria-required="true" aria-invalid="false" placeholder="Name *">
                                                        </span>
                                                        @error('name')
                                                        <div class="alert ">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class=" your-email">
                                                            <input id="email" type="text" name="email" size="40" class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                                                   aria-required="true" aria-invalid="false" placeholder="Email *">
                                                        </span>
                                                        @error('email')
                                                        <div class="alert ">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class=" your-message">
                                                              <textarea  id="message" name="message" cols="40" rows="10" class="form-control form-control-lg  @error('message') is-invalid @enderror"
                                                                         aria-invalid="false" style=" background-color: #FFFFFF !important;border: solid 1px #dee2e6 !important;" placeholder="Message*"></textarea>
                                                        </span>
                                                        @error('message')
                                                        <div class="alert ">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit mt-3" >
                                                        <div class="quform-submit-inner ">
                                                            <button type="submit" id="contact-us-submit" class="submit-button background-color">Send</button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </section>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="limoking-sidebar limoking-right-sidebar four columns">
                        <div class="limoking-item-start-content sidebar-right-item">
{{--                            <div id="text-6" class="widget widget_text limoking-item limoking-widget">--}}
{{--                                <h3 class="limoking-widget-title">Before Contacting Us</h3>--}}
{{--                                <div class="clear"></div>--}}
{{--                                <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>--}}
{{--                            </div>--}}
                            <div id="text-7" class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Contact Information</h3>
                                <div class="clear"></div>
                                <div class="textwidget">
                                    <p> Ras Al Khor, Al Aweer, Auto market showroom No.93-Dubai</p>
                                    <p><i class="limoking-icon fa fa-phone" style="vertical-align: middle; color: #c69955; font-size: 16px; " ></i> +971 502015770</p>
                                    <p><i class="limoking-icon fa fa-envelope-o" style="vertical-align: middle; color: #c69955; font-size: 16px; " ></i> info@milelelimousine.com</p>
                                    <p><i class="limoking-icon fa fa-clock-o" style="vertical-align: middle; color: #c69955; font-size: 16px; " ></i> Monday to Saturday, 9am – 10pm</p>
                                </div>
                            </div>
                            <div id="text-8" class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Social Media</h3>
                                <div class="clear"></div>
                                <div class="textwidget">
                <a href="https://www.facebook.com/profile.php?id=61551254275210"><i class="limoking-icon fa fa-facebook" style="vertical-align: middle;color: #c69955;font-size: 20px"></i></a>
				<a href="https://twitter.com/Milelelimousine"><img src="{{asset('social-icons/icons8-twitter-20.png')}}"></a>
				<a href="https://www.tiktok.com/@milelelimousine?lang=en"><img src="{{asset('social-icons/icons8-tiktok-20.png')}}"></a>
				<a href="https://pin.it/5JYiZkt"><i class="limoking-icon fa fa-pinterest" style="vertical-align: middle;color: #c69955;font-size: 20px"></i></a>
				<a href="https://www.youtube.com/@MileleLimousine"><i class="limoking-icon fa fa-youtube" style="vertical-align: middle;color: #c69955;font-size: 20px"></i></a>
				<a href="https://www.instagram.com/milelelimousine/"><i class="limoking-icon fa fa-instagram" style="vertical-align: middle;color: #c69955;font-size: 20px"></i></a>
                <a href="https://www.linkedin.com/company/milelelimousine/"><i class="limoking-icon fa fa-linkedin" style="vertical-align: middle;color: #c69955;font-size: 20px"></i></a>
                
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="clear"></div>
    </div>
    <script src="{{ asset('/admin/plugins/jquery/jquery.min.js') }}"></script>
<script type="text/javascript">
         $(document).ready( function()
         {
            var element = document.getElementById("contact-us");
            element.classList.add("active-menu-color");
         });
      </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
        jQuery.validator.setDefaults({
            errorClass: "text-danger",
            errorElement: "p",
            errorPlacement: function ( error, element ) {
                error.addClass( "text-danger" );
                error.insertAfter( element );
            }
        });
        jQuery("#form-contact").validate({
            rules: {
                name: {
                    required: true,
                    maxlength:255
                },
                email: {
                    required: true,
                    maxlength:255,
                    email:true
                },
                message: {
                    required: true,
                    maxlength:500
                },
            },
        })
        jQuery("#contact-us-submit").click(function(e) {
            e.preventDefault();
            if( jQuery("#form-contact").valid()) {
                var form = jQuery("#form-contact");
                var url = form.attr('action');
                jQuery.ajax({
                    type: "POST",
                    url: url,
                    data: form.serialize(),
                    success: function(data) {
                        jQuery('#form-success-div').attr('hidden', false);
                        jQuery('#contact-form-output').text("Contact request send successfully");
                        jQuery("#form-contact").load(" #form-contact");
                    },
                });
            }

        });

    </script>

@endsection


