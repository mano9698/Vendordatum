<!doctype html>
<html class="no-js" lang=""> 

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Vendordatum | Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/icomoon.css">
        <link rel="stylesheet" href="assets/css/transitions.css">
        <link rel="stylesheet" href="assets/css/flags.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/scrollbar.css">
        <link rel="stylesheet" href="assets/css/chartist.css">
        <link rel="stylesheet" href="assets/css/main.css">
        @yield('additional_css')
        <link rel="stylesheet" href="assets/css/color.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dbresponsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
        <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
    </head>
    <body class="tg-home tg-homeone">
        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
            <!--************************************
                            Header Start
            *************************************-->
            @include('frontend.common.header')
            <!--************************************
                            Header End
            *************************************-->
            @yield('content')
            <!--************************************
                            Footer Start
            *************************************-->
            @include('frontend.common.footer')
            <!--************************************
                            Footer End
            *************************************-->
        </div>
        <!--************************************
                        Wrapper End
        *************************************-->
        <!--************************************
                        Theme Modal Box Start
        *************************************-->
        <div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
            <div class="modal-dialog tg-thememodaldialog" role="document">
                <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-content tg-thememodalcontent">
                    <div class="tg-title">
                        <strong>Change Currency</strong>
                    </div>
                    <form class="tg-formtheme tg-formselectcurency">
                        <fieldset>
                            <div class="form-group">
                                <div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
                            </div>
                            <div class="form-group">
                                <button class="tg-btn" type="button">Change Now</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
            <div class="modal-dialog tg-thememodaldialog" role="document">
                <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="modal-content tg-thememodalcontent">
                    <div class="tg-title">
                        <strong>Currency Converter</strong>
                    </div>
                    <form class="tg-formtheme tg-formcurencyconverter">
                        <fieldset>
                            <div class="form-group">
                                <div id="tg-flagstraptwo" class="tg-flagstrap" data-input-name="country"></div>
                                <div class="tg-curencyrateetc">
                                    <span>120<sup>$</sup></span>
                                    <p>1 USD = 0.784769 GBP</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="tg-iconseprator"><i><img src="images/icons/img-36.png" alt="image description"></i></span>
                            </div>
                            <div class="form-group">
                                <div id="tg-flagstrapthree" class="tg-flagstrap" data-input-name="country"></div>
                                <div class="tg-curencyrateetc">
                                    <span>94.1723<sup>£</sup></span>
                                    <p>1 GBP = 1.27426 USD</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="tg-lastupdate">Last update on <time datetime="2017-08-08">2017-06-12 12:35 local time</time></span>
                            </div>
                            <div class="form-group">
                                <button class="tg-btn" type="button">Convert Now</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!--************************************
                        Theme Modal Box End
        *************************************-->
<!--        <script src="http://demo.expertphp.in/js/jquery.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<!--        <script src="assets/js/vendor/jquery-library.js"></script>-->
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQGXPTnUyBYyQQt3v0NTkihsR1WU-1Tr8"></script>
        <script src="assets/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
        <script src="assets/js/jquery.flagstrap.min.js"></script>
        <script src="assets/js/backgroundstretch.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.vide.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/scrollbar.min.js"></script>
<!--        <script src="assets/js/chartist.min.html"></script>-->
        <script src="assets/js/prettyPhoto.js"></script>
        <script src="assets/js/jquery-ui.js"></script>
        <script src="assets/js/countTo.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/gmap3.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
$(function() {
    
  $(".heart").on("click", function() {
    $(this).toggleClass("heart-blast");
  });
}); 
    
</script>   
        <!--        Notify Start-->
        <script src="http://bootstrap-notify.remabledesigns.com/js/bootstrap-notify.min.js"></script>
        <!--End-->
       
<!--<script src="https://richardcornish.github.io/jquery-geolocate/js/jquery.min.js"></script>
--><script src="https://richardcornish.github.io/jquery-geolocate/js/jquery-geolocate.min.js"></script>
    
        <!--        Custom JS Start-->
        <script src="assets/js/custom/forget_password.js"></script>
        <script src="assets/js/custom/register.js"></script>
        <script src="assets/js/custom/authendication.js"></script>
        <script src="assets/js/custom/ads.js"></script>
        <script src="assets/js/custom/profile.js"></script>
        <!--End-->
    </body>

</html>