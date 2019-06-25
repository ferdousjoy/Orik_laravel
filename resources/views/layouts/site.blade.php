<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Orika Corporation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('site/css/slick.css')}}">
     <link rel="stylesheet" href="{{asset('site/css/slick-theme.css')}}">
     <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet"  href="{{asset('site/css/default-css.css')}}">
    <link rel="stylesheet"  href="{{asset('site/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('site/js/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>

    <!-- header area start -->
    <header>
        <div class="header-area blue_gradiant">
            <div class="container container_holder">
              <div class="row icon_row">
                                    <div>
                                      <h5><i class="fa fa-phone"></i> +0128333432</h5>
                                    </div>
                                    <div class="lol">
                                      <h5><i class="fa fa-envelope"></i> sohhrt@gmail.com</h5>
                                    </div>
                                    <div class="icon_div">
                                      <ul class="social_icon">
                                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('site/images/62.png')}}" alt="logo"> <span class="company-name">Orika Corporation</span></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">

                        <div class="main-menu">
                            <nav id="nav_mobile_menu">
                                <ul id="navigation">
                                    <li class="active"><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#service">Services</a></li>
                                    <li><a href="{{url('/login')}}">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('site')
    <footer>
    <div class="footer-top blue_dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>2924 Byrd Lane, NM 87108, USA</p>
                </div>
                <div class="col-md-4">
                    <p>+1 888-234-5678</p>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom blue_dark">
        <div class="container">
            <p>Copyright © Theme Made By Ferdous Joy</p>
        </div>
    </div>
</footer>
<!-- footer area end -->
<!-- jquery latest version -->


 <script src="{{asset('site/js/jquery-3.3.1.min.js')}}"></script>
 <script src="{{asset('site/js/popper.min.js')}}"></script>
 <script src="{{asset('site/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('site/js/slick.min.js')}}"></script>
 <script src="{{asset('site/js/owl.carousel.js')}}"></script>
 <script src="{{asset('site/js/controls.js')}}"></script>
 <script src="{{asset('site/js/slick.min.js')}}"></script>
 <script src="{{asset('site/js/waypoints.min.js')}}"></script>
 <script src="{{asset('site/js/jquery.barfiller.js')}}"></script>
 <script src="{{asset('site/js/jquery.easypiechart.js')}}"></script>
 <script src="{{asset('site/js/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('site/js/jquery.smoothscroll.min.js')}}"></script>
 <script src="{{asset('site/js/isotope.pkgd.min.js')}}"></script>
 <script src="{{asset('site/js/imagesloaded.pkgd.min.js')}}"></script>
 <script src="{{asset('site/js/script.js')}}"></script>
 @yield('footer_scripts')

</body>

</html>
