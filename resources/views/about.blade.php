<x-layout>


    <!-- Page Header Start -->
   @include('../components/pageHeader')
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Divine Daao Cars</span></h1>
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img class="w-75 mb-4" src="img/cars-about.png" alt="">
                    <p>Divine Daao Nigeria Limited. RC 1310246 is a car rental provider positioned to serve the commercial and leisure segments of the travel industry and focused on value-conscious clients and customers.</p> 
                    <p>
                      With headquater at M/M Int'l Airport, Ikeja, Lagos, Nigeria, we connect various other airports within the country. The country maintains an interest in airport car rental, escort, tour guide and connects with various hotels, construction companies and, oil and gas, multinationals, governmental bodies, NGOs, etc.
                    </p>
                    <p>We are duly registered and operate a licensed car rental service in the airport and other service delivery points such as hotels, guest houses etc. We have a variety of vehicles, including luxury and specialty vehicles. Our fleet consists of vehicles  from the current and immediate past models.
                    </br> Our vehicles are all full options versions of the models available, leather interior, tracking devices and speed limits.</p>
                   
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

            <div class="row justify-content-center">
              <div class="col-lg-10 text-center">
                  <img class="w-75 mb-4" src="img/cars-about.png" alt="">
                   <p>  
                  <h3> Types of Vehicles</h3>
                    Our fleet includes vehicles like SUVs, Luxury Cars, Buses ( Hummer and Coaster), Hilux vans and a host of others.
                    <h3>Insurance</h3>
                    All vehicles in our fleet are on comprehensive insurance with reputable insurance companies.
                  </p>
              </div>
          </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Banner Start -->
    
    <!-- Banner End -->


    <!-- Vendor Start -->
    @include('../components/vendors')
    <!-- Vendor End -->

</x-layout>