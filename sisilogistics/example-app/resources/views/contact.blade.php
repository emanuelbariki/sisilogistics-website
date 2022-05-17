
@extends('main')

@section('content')


  <!--================ Home Banner Area =================-->
  <section class="home_banner_area banner-area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content d-flex flex-md-row flex-column">
              <div class="banner-left text-md-right">
                <h1 class="text-uppercase">Contact Us</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                  If you are looking at blank cassettes on the web, you may be very confused.
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="index.html" class="text-white">Home</a>
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="contact.html" class="text-white">Contact</a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->


  <!-- ================ contact section start ================= -->
  <section class="section_gap">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = { lat: -6.818135665197172, lng: 39.28705922654266  };
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              { elementType: 'labels.text.fill', stylers: [{ color: '#A3A3A3' }] }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: { lat: -6.818135665197172, lng: 39.28705922654266 },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
        
          }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
     
        {{-- AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I      //ORIGINAL APIKEY FROM GOOGLE TEMPLATE
        AIzaSyBDfqYxg6t0slt-NPCMBEdYvryf57xDrbg           //API KEYS FROM MY GOOGLE MAP PLATFORM  --}}   

      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                </div>
              </div>
            </div>
            <div class="form-group mt-2 mb-5 mb-lg-0">
              <button type="submit" class="button button-contactForm main_btn">Send Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-home"></i></span>
            <div class="media-body">
              <h3>Posta, Samora Avenue,</h3>
              <p>NHC House, 9th Floor, Office no 907</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><a href="tel:738133775">(255) 738 133 775 </a></h3>
              <p>Mon to sun 8am  to 17pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">info@sisilimited.co.tz</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  

@endsection