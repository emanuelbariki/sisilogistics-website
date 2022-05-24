
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
                  Email us with any questions or inquiries. We would be happy to Answer.
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
      <h2>OUR LOCATION</h2>
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.399474679385!2d39.2870485!3d-6.8184233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x582297659654c956!2sSMART%20INTEGRATED%20SOLUTIONS%20INTERNATIONAL%20(SISI)%20LIMITED!5e0!3m2!1sen!2stz!4v1652801917355!5m2!1sen!2stz" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
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
              <h3>Posta, Samora Avenue, </h3>
              <p>NHC House 9th Floor Suite no. 907, 80151, <br>Dar es Salaam</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
            <div class="media-body">
              <h3><a href="tel:738133775">(255) 738 133 775 </a></h3>
              <p>Mon - Sat 9:00 am  to 05:30 pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="fa fa-envelope-o"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">info@sisilimited.co.tz</a></h3>
              <p>Send us your queries</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

  

@endsection