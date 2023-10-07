@extends('layouts.main')
@section('content')
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
    </style>
    <div class=content-wrapper>
        <div class=limoking-content>
            <div class=above-sidebar-wrapper>
                <section id=content-section-1>
                    <div class="limoking-full-size-wrapper gdlr-show-all " style="padding-bottom: 0px;  background-color: #ffffff; ">
                        <div class="limoking-item limoking-content-item" style="margin-bottom: 0px;">
                            <div class="wpgmp_map_container wpgmp-map-1" rel=map1>
                                <iframe style="width:100%; height:480px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.852700403415!2d55.36611197620153!3d25.174451077725763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f675b5b792571%3A0x8dd25798a287aa87!2sMilele%20Showroom%2093!5e0!3m2!1sen!2sae!4v1695724496789!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
                                </div>
                            </div>
                            <div class=clear></div>
                            <div class=clear></div>
                        </div>
                        <div class=clear></div>
                </section>
            </div>
            <div class=with-sidebar-wrapper>
                <div class="with-sidebar-container container">
                    <div class="with-sidebar-left eight columns">
                        <div class="with-sidebar-content twelve columns">
                            <section id=content-section-2>
                                <div class="section-container container">
                                    <div class="limoking-item limoking-content-item" style="margin-bottom: 60px;"><span class=clear></span><span class=limoking-space style="margin-top: -22px; display: block;"></span>
                                        <h5 class="limoking-heading-shortcode " style="font-weight: bold;">Contact Us</h5>
                                        <p> <span class=clear></span><span class=limoking-space style="margin-top: 25px; display: block;"></span>
                                        <div role=form class=wpcf7 id=wpcf7-f5-o1 lang=en-US dir=ltr>
                                            <div class=screen-reader-response></div>
                                            <form class="quform" action="https://max-themes.net/demos/limoking/plugins/quform/process.php" method="post" enctype="multipart/form-data" onclick="">
                                                <div class="quform-elements">
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                             <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                        </span>
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-email">
                                                            <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                        </span>
                                                    </div>
                                                    <div class="quform-element">
                                                        <br>
                                                        <span class="wpcf7-form-control-wrap your-message">
                                                              <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                        </span>
                                                    </div>
                                                    <!-- Begin Submit button -->
                                                    <div class="quform-submit">
                                                        <div class="quform-submit-inner">
                                                            <button type="submit" class="submit-button background-color">Send</button>
                                                        </div>
                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        </p>
                                    </div>
                                    <div class=clear></div>
                                </div>
                            </section>
                        </div>
                        <div class=clear></div>
                    </div>
                    <div class="limoking-sidebar limoking-right-sidebar four columns">
                        <div class="limoking-item-start-content sidebar-right-item">
                            <div id=text-6 class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Before Contacting Us</h3>
                                <div class=clear></div>
                                <div class=textwidget>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>
                            </div>
                            <div id=text-7 class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Contact Information</h3>
                                <div class=clear></div>
                                <div class=textwidget>
                                    <p>184 Main Collins Street West Victoria 8007 Australia</p>
                                    <p><i class="limoking-icon fa fa-phone" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> 1800-222-222</p>
                                    <p><i class="limoking-icon fa fa-envelope" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> contact@versatilewptheme.com</p>
                                    <p><i class="limoking-icon fa fa-clock-o" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> Everyday 9:00-17:00</p>
                                </div>
                            </div>
                            <div id=text-8 class="widget widget_text limoking-item limoking-widget">
                                <h3 class="limoking-widget-title">Social Media</h3>
                                <div class=clear></div>
                                <div class=textwidget><a href=http://facebook.com/goodlayers><i class="limoking-icon fa fa-facebook" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=http://twitter.com/goodlayers><i class="limoking-icon fa fa-twitter" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-dribbble" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-pinterest" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-google-plus" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href=#><i class="limoking-icon fa fa-instagram" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class=clear></div>
                </div>
            </div>

        </div>
        <div class=clear></div>
    </div>

@endsection
