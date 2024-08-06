<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Nimo</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('home-page/assets/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="{{ asset('home-page/assets/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{ asset('home-page/assets/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{ asset('home-page/assets/images/fevicon.png')}}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="{{ asset('home-page/assets/css/owl.carousel.min.css')}}">
   <link rel="stylesoeet" href="{{ asset('home-page/assets/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>
<body>
    <!--header section start -->
    <div class="header_section">
       <div class="container-fluid ">
          <div class="row">
             <div class="col-sm-2 col-6 ">
                <a class="logo w-50" href="/"><img src="{{ asset('home-page/assets/images/logofr.png') }}" ></a>
             </div>
             <div class="col-sm-8 col-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                         <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="goleadores">Goleadores</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="asistencia">Asistencia</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="equipos">Equipos</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="calendario">Calendario</a>
                         </li>
                         
                         <li class="nav-item">
                            <a class="nav-link" href="#"><img src="{{ asset('home-page/assets/images/search-icon.png')}}"></a>
                         </li>
                      </ul>
                   </div>
                </nav>
             </div>
             <div class="col-sm-2">
                <div class="header_social_icon">
                   <ul>
                      <li><a href="#"><img src="{{asset('home-page/assets/images/gitl.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('home-page/assets/images/twitter-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('home-page/assets/images/linkedin-icon.png')}}"></a></li>
                      <li><a href="#"><img src="{{asset('home-page/assets/images/gith.png')}}"></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>

       {{ $slot }}







        <!-- footer section start -->
   <div class="footer_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-3 col-sm-6">
             <h2 class="useful_text">Invest Money</h2>
             <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedconsectetur </p>
             <div class="social_icon">
                <ul>
                   <li><a href="#"><img src="{{ asset('home/images/fb-icon.png') }}"></a></li>
                   <li><a href="#"><img src="{{ asset('home/images/twitter-icon.png') }}"></a></li>
                   <li><a href="#"><img src="{{ asset('home/images/instagram-icon.png') }}"></a></li>
                   <li><a href="#"><img src="{{ asset('home/images/linkedin-icon.png') }}"></a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-sm-6">
             <h2 class="useful_text">Useful link </h2>
             <div class="footer_menu">
                <ul>
                   <li><a href="/">Home</a></li>
                   <li><a href="goleadores">Goleadores</a></li>
                   <li><a href="asistencia">Asistencia</a></li>
                   <li><a href="equipos">Equipos</a></li>
                   <li><a href="calendario">Calendario</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-sm-6">
             <h2 class="useful_text">Contact Us</h2>
             <div class="location_text"><a href="#">Healing Center, oo W Street name, Loram ipusum</a></div>
             <div class="location_text"><a href="#">( +01 1234567890 )</a></div>
             <div class="location_text"><a href="#">(+71) 8522369417</a></div>
             <div class="location_text"><a href="#">demo@gmail.com</a></div>
          </div>
          <div class="col-sm-6 col-lg-3">
             <h1 class="useful_text">Newsletter</h1>
             <input type="text" class="Enter_text" placeholder="Your Name" name="Your Name">
             <input type="text" class="Enter_text" placeholder="Emil" name="Emil">
             <div class="subscribe_bt"><a href="#">Subscribe</a></div>
          </div>
       </div>
    </div>
 </div>
 <!-- footer section end -->
 <!-- copyright section start -->
 <div class="copyright_section">
    <div class="container">
       <p class="copyright_text">Copyright 2019 All Rights Reserved.<a href="https://html.design"> Free html
             Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
    </div>
 </div>
 <!-- copyright section end -->
 <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/jquery-3.0.0.min.js"></script>
 <script src="js/plugin.js"></script>
 <!-- sidebar -->
 <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script src="js/custom.js"></script>
 <!-- javascript -->
 <script src="js/owl.carousel.js"></script>
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>