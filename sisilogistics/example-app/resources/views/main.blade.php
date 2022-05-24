<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>SISI LIMITED LOGISTICS</title>    <!---title may change for each page---->
  <!-- Bootstrap CSS -->
  
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />
  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu d-lg-block d-none">
      <div class="container">
        <div class="float-left">
          <ul class="left_side">
            <li>
              <a title="facebook" target="_bank" href="https://facebook.com/sisilimited">
                <i class="fa fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a title="twitter" target="_blank" href="https://twitter.com/sisilimited">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a title="instagram" target="_blank" href="https://instagram.com/sisilimited">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
            <li>
              <a title="likedin" target="_blank" href="https://linkedin.com/sisilimited">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="float-right">
          <ul class="right_side">
            <li>
              <a href="tel:0738133775">
                <i class="lnr lnr-phone-handset"></i>
                0738 133 775
              </a>
            </li>
            <li>
              <a href="mailto:info@sisilimited.co.tz">
                <i class="lnr lnr-envelope"></i>
                info@sisilimited.co.tz
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg w-100">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="/">
            <img src="img/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <div class="row w-100">
              <div class="col-lg-12 pr-lg-0">
                <ul class="nav navbar-nav ml-auto justify-content-end">
                  <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  
                  <li class="nav-item ">
                    <a target="_blank" class="nav-link" href="https://oms.sisilimited.co.tz">COIP</a>
                  </li>
                  {{-- <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li> --}}
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                      </li>
                      {{-- <li class="nav-item">
                        <a class="nav-link" href="blog-details.html">Blog Details</a>
                      </li> --}}
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  @yield('content')

  
  <!--================ Start CTA Area ================-->
  <section class="cta_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="cta_inner d-flex flex-md-row flex-column justify-content-between align-items-center">
            <div class="mb-md-0 mb-4 text-sm-left text-center">
              <p>Get a quick response from our experts</p>
              <h1>Please feel free to reach us</h1>
            </div>
            <div class="">
              <a href="#" class="main_btn">Explore More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End CTA Area ================-->

  <!--================ start footer Area =================-->
  <footer class="footer-area section_gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Here at SISI Limited we provide unlimited solutions with creativity and most innovative approach to your daily challenges on variety of industries:Transport and Logistics Management, Clearing and Forwarding, Import and Export Facilitation, Insurance Services,   and Car Dealership. Karibu sana ☺️☺️Hakuna Matata!!!
            </p>
          </div>
        </div>
        <div class="col-lg-5  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="emailAddress">
              <form  action="{{ route('new_letter.store') }}" method="POST" class="form-inline">
                <input class="form-control"  name="user_email" id="emailAddress"placeholder="Enter email address" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter email address'" required="" type="email">
                <button class="click-btn btn btn-default" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                @csrf


{{-- 
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" class="form-control" name="email" id="emailAddress" placeholder="Enter email address"
                      onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" />
                  </div>
                </div> --}}



                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="https://facebook.com/sisilimited"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/sisilimited"><i class="fa fa-twitter"></i></a>
              <a href="https://instagram.com/sisilimited"><i class="fa fa-instagram"></i></a>
              <a href="https://linkedin.com/sisilimited"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://creative.sisilimited.co.tz" target="_blank">SISI Creative. </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </div>
  </footer>
  <!--================ End footer Area =================-->

  <!--================ Optional JavaScript =================-->
  <!--================ jQuery first, then Popper.js, then Bootstrap JS =================-->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('vendors/isotope/isotope-min.js') }}"></script>
  <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="{{ asset('js/mail-script.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>