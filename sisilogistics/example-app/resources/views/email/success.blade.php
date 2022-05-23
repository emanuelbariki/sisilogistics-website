
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
                <h1 class="text-uppercase">News letter</h1>
              </div>
              <div class="banner-right position-relative">
                <p>
                  We do professional Customs Clearance, Freight Forwarding and Global Logistics. Smart service with international Standards.
                </p>
                <span class="main_btn mt-4 mt-md-0" href="#">
                  <a href="index.html" class="text-white">Contact Us</a> 
                  <i class="fa fa-arrow-right mx-2"></i>
                  <a href="about.html" class="text-white">News Letter</a> 
                </span>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->

  <!--================ About Area =================-->
  <section class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="single-feature">
                    {{-- <img src="img/feature/vision.png" alt=""> --}}
                    <span class="fa fa-mail"></span>
                    <h2>You have succesfully subscribed to our news letter</h2>
                    <p>
                      Is to allow you to focus on your core business while we manage your purchases and supply of goods and services in shorter time and at reasonable cost.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>

  </section>
  
@endsection