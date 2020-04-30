<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UmphakoStreams</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700"> 
    <link rel="stylesheet" href="public/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('public/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/fl-bigmug-line.css') }}">
    
  
    <link rel="stylesheet" href="{{ asset('public/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('public/css1/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style2.css') }}">

 

    
  </head>
  <body>
  <div class="site-wrap">
  @include('inc.navbar')
  </div>

<div class="site-blocks-cover overlay" style="background-image: url('public/images/hero_bg_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade">
  <div class="container">

    @yield('p1')

  </div>
</div> 

<div class="site-section">
    <div class="container">
      @include('inc.messages')
      @yield('content')
    </div>
</div>


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="bg-primary" data-aos="fade">
      <div class="container">
        <div class="row">
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-facebook text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-twitter text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-instagram text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-linkedin text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-whatsapp text-white"></span></a>
          <a href="#" class="col-2 text-center py-4 social-icon d-block"><span class="icon-youtube text-white"></span></a>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">

        
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="{{ asset('/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
 


<script src="{{ asset('public/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('public/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/js/mediaelement-and-player.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('public/js/aos.js') }}"></script>
  <script src="{{ asset('public/js/circleaudioplayer.js') }}"></script>

  <script src="{{ asset('public/js/main.js') }}"></script>


    <script src="{{ asset('public/js1/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery-ui.js') }}"></script>
  <script src="{{ asset('public/js1/popper.min.js') }}"></script>
  <script src="{{ asset('public/js1/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/js1/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('public/js1/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('public/js1/aos.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.sticky.js') }}"></script>
  <script src="{{ asset('public/js1/jquery.mb.YTPlayer.min.js') }}"></script>

  <script src="{{ asset('public/js1/main.js') }}"></script>

  <!--===============================================================================================-->	


    

    
  </body>
</html>