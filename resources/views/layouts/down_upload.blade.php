<!DOCTYPE html>
<html lang="en">

<head>
<title>UmphakoStreams</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="{{ asset('public/fonts2/icomoon/style.css') }}">

<link rel="stylesheet" href="{{ asset('public/css2/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/css2/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('public/css2/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/css2/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/css2/owl.theme.default.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/css2/jquery.fancybox.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/css2/bootstrap-datepicker.css') }}">

<link rel="stylesheet" href="{{ asset('public/fonts2/flaticon/font/flaticon.css') }}">

<link rel="stylesheet" href="{{ asset('public/css2/aos.css') }}">
<link href="{{ asset('public/css2/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="{{ asset('public/css2/style.css') }}">



</head>

<body>
<div class="site-wrap">
@include('inc.navbar')
</div>

<div class="site-section mt-5">
    <div class="container">
        @yield('content')
    </div>
</div>

<div class="footer">
<div class="container">

<div class="row">
    <div class="col-12 text-center">
    <div class="social-icons">
        <a href="#"><span class="icon-facebook"></span></a>
        <a href="#"><span class="icon-twitter"></span></a>
        <a href="#"><span class="icon-youtube"></span></a>
        <a href="#"><span class="icon-instagram"></span></a>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
    <div class="copyright">
        <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
    </div>
    </div>
</div>
</div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="{{ asset('public/js2/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery-ui.js') }}"></script>
<script src="{{ asset('public/js2/popper.min.js') }}"></script>
<script src="{{ asset('public/js2/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('public/js2/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('public/js2/aos.js') }}"></script>
<script src="{{ asset('public/js2/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('public/js2/jquery.sticky.js') }}"></script>
<script src="{{ asset('public/js2/jquery.mb.YTPlayer.min.js') }}"></script>




<script src="{{ asset('public/js2/main.js') }}"></script>

</body>

</html>