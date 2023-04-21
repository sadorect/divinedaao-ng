@php
   $title = "" ;

   if(request()->is('about'))
   {
    $title = "About";
   } elseif (request()->is('contact')) {
    $title = "Contact";  
   } elseif( request()->is('service'))
   {
    $title = "Service";
   } elseif (request()->is('car')) {
    $title = "Car Listing";  
   } elseif( request()->is('detail'))
   {
    $title = "Car Detail";
   } elseif( request()->is('booking'))
   {
    $title = "Booking";
   } else {
    $title = "";
   }

@endphp


<div class="container-fluid page-header">
  <h1 class="display-3 text-uppercase text-white mb-3">{{ $title }}</h1>
  <div class="d-inline-flex text-white">
      <h6 class="text-uppercase m-0"><a class="text-white" href="{{ route('home')}}">Home</a></h6>
      <h6 class="text-body m-0 px-3">/</h6>
      <h6 class="text-uppercase text-body m-0">{{$title}} </h6>
  </div>
</div>