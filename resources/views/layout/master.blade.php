<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Basic Page Needs -->
     <meta charset="utf-8">
     <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
     <title>@yield('title')</title>
 
     <meta name="author" content="themesflat.com">
 
     <!-- Mobile Specific Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
     <!-- Bootstrap  -->
     <link rel="stylesheet" type="text/css" href="/stylesheets/bootstrap.css" >
 
     <!-- Theme Style -->
     <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
     <link rel="stylesheet" type="text/css" href="/stylesheets/responsive.css">
 
     <!-- Colors -->
     <link rel="stylesheet" type="text/css" href="/stylesheets/colors/color1.css" id="colors">
 
     <!-- Animation Style -->
     <link rel="stylesheet" type="text/css" href="/stylesheets/animate.css">
 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     <!-- Favicon and touch icons  -->
     <link href="icon/favicon.png" rel="shortcut icon">
 
     <!--[if lt IE 9]>
         <script src="javascript/html5shiv.js"></script>
         <script src="javascript/respond.min.js"></script>
     <![endif]-->
    
    
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

    @yield('head')

</head>
<body class="header_sticky header-style-1 has-menu-extra">
    @include('layout.navigation')
    <div class="py-4">
        @include('alert')
        @yield('content')
    </div>
    @include('layout.footer')

    @yield('javascript')

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/javascript/jquery.min.js"></script>
<script src="/javascript/tether.min.js"></script>
<script src="/javascript/bootstrap.min.js"></script> 
<script src="/javascript/jquery.easing.js"></script>    
<script src="/javascript/parallax.js"></script>
<script src="/javascript/jquery-waypoints.js"></script>
<script src="/javascript/jquery-countTo.js"></script>
<script src="/javascript/jquery.countdown.js"></script>
<script src="/javascript/jquery.flexslider-min.js"></script>
<script src="/javascript/images-loaded.js"></script>
<script src="/javascript/jquery.isotope.min.js"></script>
<script src="/javascript/magnific.popup.min.js"></script>
<script src="/javascript/jquery.hoverdir.js"></script>
<script src="/javascript/owl.carousel.min.js"></script>
<script src="/javascript/equalize.min.js"></script>
<script src="/javascript/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&region=GB"></script>
<script src="/javascript/jquery-ui.js"></script>

<script src="/javascript/jquery.cookie.js"></script>
<script src="/javascript/main.js"></script>

<!-- Revolution Slider -->
<script src="/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="/javascript/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script src="/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>