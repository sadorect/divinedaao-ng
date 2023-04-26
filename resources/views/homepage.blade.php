<x-layout>



    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Best Rental Cars In Your Location</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Rent A Car</h4>
                            <h1 class="display-1 text-white mb-md-4">Quality Cars with Unlimited Miles</h1>
                            <a href="/contact" class="btn btn-primary py-md-3 px-md-5 mt-2">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Divine Daao Cars</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-0" src="img/cars-final.png" alt="">
                    <p></p>
                </div>
            </div>

            <div class="row mt-3">
              <div class="col-lg-4 mb-2">
                  <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                      
                      <h4 class="text-uppercase mr-2">Our Vision</h4>
                      <p class="text-weight-bold text-gray-500">To be a leader in car hire business by building an excellent customer base through first class service delivery.</p>
                  </div>
              </div>
              <div class="col-lg-4 mb-2">
                  <div class="d-flex align-items-center bg-white p-4 mb-4" style="height: 150px;">
                      
                  </div>
              </div>
              <div class="col-lg-4 mb-2">
                <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                    <h4 class="text-light text-uppercase mr-2">Our Mission</h4>
                    <p class="text-white">To make sure every customer is treated specially and experience a second to none car hire service delivery.</p>
                </div>
            </div>
              
          </div>



                              <div class="row mt-3">
                                  <div class="col-lg-4 mb-2">
                                      <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                              <i class="fa fa-2x fa-headset text-secondary"></i>
                                          </div>
                                          <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 mb-2">
                                      <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                              <i class="fa fa-2x fa-car text-secondary"></i>
                                          </div>
                                          <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 mb-2">
                                      <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                          <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                              <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                                          </div>
                                          <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                                      </div>
                                  </div>
                              </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    @include('components.offerings')
    <!-- Services End -->


   

    <!-- Rent A Car Start -->
    
    <!-- Rent A Car End -->


    <!-- Team Start -->
    @include('components.team')
    <!-- Team End -->


    <!-- Banner Start >
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking to hire a car?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Testimonial Start -->
   
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div id="ContactNotification" class="text-center bg-dark p-15" style="height: 50px;">
        <h3 class="text-uppercase text-light mb-0">Looking to hire a car?</h3>
    </div>   
    @if (session()->has('success'))
<div id="ContactNotification" class="container container--narrow">
  <div class="alert alert-success text-center">
    {{ session('success')}}
  </div>
</div>
    
@endif
    @include('components.contact')
    <!-- Contact End -->


    <!-- Vendor Start -->
    @include('components.vendors')
    <!-- Vendor End -->

</x-layout>