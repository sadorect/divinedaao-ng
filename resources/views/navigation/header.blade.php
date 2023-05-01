<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DDNL CARS - Car Rental Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
      <div class="row">
          <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
              <div class="d-inline-flex align-items-center">
                  <a class="text-body pr-3" href="tel:+23480330113329"><i class="fa fa-phone-alt mr-2"></i>+2348033011329</a>
                  <span class="text-body">|</span>
                  <a class="text-body px-3" href="mailto:info@divinedaao.ng"><i class="fa fa-envelope mr-2"></i>info@divinedaao.ng</a>
              </div>
          </div>
          <div class="col-md-6 text-center text-lg-right">
              <div class="d-inline-flex align-items-center">
                  <!--a class="text-body px-3" href="">
                      <i class="fab fa-facebook-f"></i>
                  </a-->
                  <a class="text-body px-3" href="https://twitter.com/cardaao">
                      <i class="fab fa-twitter"></i>
                  </a>
                  
                  <a class="text-body px-3" href="https://instagram.com/daaocarrental">
                      <i class="fab fa-instagram"></i>
                  </a>
                  
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div id="navbar" class="container-fluid position-relative nav-bar p-0">
    <div class="position-relative px-lg-5" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="" class="navbar-brand">
                <h1 class="text-uppercase text-primary mb-1">Divine Daao Cars</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : ''}}">Home</a>
                    <a href="{{ route('about')}}" class="nav-item nav-link {{ request()->is('about') ? 'active' : ''}}">About</a>
                    <a href="{{ route('service')}}" class="nav-item nav-link {{ request()->is('service') ? 'active' : ''}}">Service</a>
                    <!--div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('booking') || request()->is('detail') || request()->is('car') ? 'active' : ''}} " data-toggle="dropdown">Cars</a>
                        <div class="dropdown-menu rounded-0 m-0 ">
                            <a href="{{ route('car')}}" class="dropdown-item">Car Listing</a>
                            <a href="{{ route('detail')}}" class="dropdown-item">Car Detail</a>
                            <a href="{{ route('booking')}}" class="dropdown-item">Car Booking</a>
                        </div>
                    </div-->
                    <!--div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('team')}}" class="dropdown-item">The Team</a>
                            <a href="{{ route('testimonial')}}" class="dropdown-item">Testimonial</a>
                        </div>
                    </div-->
                    <a href="{{ route('contact')}}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : ''}}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
  <!-- Navbar End -->

