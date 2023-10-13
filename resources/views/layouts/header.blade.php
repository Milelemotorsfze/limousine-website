<style>
    @media only screen and (max-device-width: 570px), only screen and (min-device-width: 320px) and (max-device-width: 1136px) and (-webkit-min-device-pixel-ratio: 2) {
        .logo-image {
            width: 160px !important;
        }
    }
    @media only screen and (max-device-width: 320px), only screen and (min-device-width: 240px) and (max-device-width: 1136px) and (-webkit-min-device-pixel-ratio: 2) {
        .logo-image {
            width: 130px !important;
        }
        #limoking-responsive-navigation .dl-trigger {
            top: 15px !important;
            /*left: 240px !important;*/
        }
        .dl-menuwrapper button{
            width: 35px !important;
            /*height: 35px !important;*/
        }
        /*.dl-trigger {*/
        /*    left: 280px !important;*/
        /*    !*left: 240px !important;*!*/
        /*}*/
    }
    @media only screen and (max-device-width: 280px) {
        .dl-trigger {
            left: 240px !important;
            /*left: 240px !important;*/
        }
        .font-xs{
            font-size: 15px !important;
        }
    }
    @media only screen and (min-device-width: 600px) {
        .font-xs{
            font-size: 15px !important;
        }
        .dl-trigger {
            left: 420px !important;
            /*left: 240px !important;*/
        }
    }
    @media only screen and (min-device-width: 360px),only screen and(max-device-width: 420px) {

        .dl-trigger {
            left: 280px !important;
            /*left: 240px !important;*/
        }
    }
    @media only screen and (min-device-width: 320px) {
        .dl-trigger {
            left: 250px !important;
            /*left: 240px !important;*/
        }
    }
    @media only screen and (min-device-width: 540px) {
        .dl-trigger {
            left: 400px !important;
            /*left: 240px !important;*/
        }
    }

    .limoking-navigation-wrapper .limoking-main-menu > li > a {
    padding-bottom: 9px!important;
    padding-top: 9px!important;
    padding-right: 20px!important;
    padding-left: 20px!important;
}
.active-menu-color
{
    background-color:#c69955;
    color:white!important;
}
/* #limoking-navigation-gimmick {
    border-bottom-color: #1eacc7;
} */
</style>
<header class="limoking-header-wrapper header-style-5-wrapper limoking-header-no-top-bar" >
    <!-- top navigation -->
    <div id="limoking-header-substitute" style="height: 0px;"></div>
    <div class="limoking-header-inner header-inner-header-style-5" >
        <div class="limoking-header-container container">
            <div class="limoking-header-inner-overlay"></div>
            <!-- logo -->
            <div class="limoking-logo" style="margin: 0px">
                <div class="limoking-logo-inner" >
                     <a href="{{route('home')}}">
                        <img src="{{asset('/uploads/Logo/Milele Limousine - Web 1.png')}}" class="logo-image" style="max-width: 250px !important;" alt="limousine-logo" ></a>
                </div>
                <div class="limoking-responsive-navigation dl-menuwrapper" id="limoking-responsive-navigation" >
                    <button class="dl-trigger" >Open Menu</button>
                    <ul id="menu-main-menu" class="dl-menu limoking-main-mobile-menu" style="margin-top: 5px">
                        <li id="menu-item-6241" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5702 current_page_item menu-item-6241"><a href="{{route('home')}}" aria-current="page">Home</a></li>
                        <li id="menu-item-6242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6242"><a href="{{route('aboutUs')}}">About Us</a></li>
                        <li id="menu-item-6243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243"><a href="{{route('fleets')}}">Fleet</a></li>
                        <li id="menu-item-6243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243"><a href="{{route('our-service')}}">Services</a></li>
                        <li id="menu-item-6248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6248">
                            <a href="">Be a Partner</a>
                            <ul class="dl-submenu">
                                <li id="menu-item-6249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6249"><a href="{{route('be-our-driver-or-investor')}}">Be Our Driver/Investor</a></li>
                                <li id="menu-item-6250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6250"><a href="{{route('be-our-corporate-partners')}}">Be Our Corporate Partner</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-6243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243"><a href="{{ route('contact-us') }}">Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <div class="limoking-logo-right-wrapper">
                <div class="limoking-logo-right-text" style="padding-top: 0px;padding-bottom: 5px;">
                    <i class="fa fa-phone" style="color: #FFFFFF"  ></i>
                    <span style="color: #ffffff;margin-right: 15px; font-size: 14px; line-height: 1.1;" class="font-xs">+971 502015770</span>
                    <i class="fa fa-envelope" style="color: #FFFFFF"  ></i>
                    <span style="color: #ffffff; font-size: 14px; line-height: 1.1;" class="font-xs">info@milelelimousine.com</span>
                </div>
                <div class="limoking-navigation-wrapper" style="margin-right: 0px;height: 40px;margin-top: 10px">
                    <nav class="limoking-navigation" id="limoking-main-navigation">
                        <ul id="menu-main-menu-1" class="sf-menu limoking-main-menu">
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5702 current_page_item menu-item-6241menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-5702 current_page_item menu-item-6241 limoking-normal-menu">
                                <a id="home" href="{{route('home')}}">Home</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6242menu-item menu-item-type-post_type menu-item-object-page menu-item-6242 limoking-normal-menu">
                                <a id="about-us" href="{{route('aboutUs')}}">About Us</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243menu-item menu-item-type-post_type menu-item-object-page menu-item-6243 limoking-normal-menu">
                                <a id="fleet" href="{{route('fleets')}}">Fleet</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243menu-item menu-item-type-post_type menu-item-object-page menu-item-6243 limoking-normal-menu">
                                <a id="services" href="{{route('our-service')}}">Services</a></li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6248 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6248 limoking-normal-menu">
                                <a id="partner" href="#" style="padding-bottom: 18px" >Be a Partner</a>
                                <ul class="sub-menu">
                                    <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6249"><a href="{{route('be-our-driver-or-investor')}}">Be Our Driver/Investor</a></li>
                                    <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6250"><a href="{{route('be-our-corporate-partners')}}">Be Our Corporate Partner</a></li>
                                </ul>
                            </li>
                            <li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6243menu-item menu-item-type-post_type menu-item-object-page menu-item-6243 limoking-normal-menu">
                                <a id="contact-us" href="{{route('contact-us')}}">Contact Us</a></li>

                        </ul>
                    </nav>
                    <!-- <div class="limoking-navigation-gimmick" id="limoking-navigation-gimmick"></div> -->
{{--                    <div class="clear"></div>--}}
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>

