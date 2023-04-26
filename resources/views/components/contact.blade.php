@if (session()->has('success'))
<div id="ContactNotification" class="container container--narrow">
  <div class="alert alert-success text-center">
    {{ session('success')}}
  </div>
</div>
    
@endif

<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
      <!--h1 class="display-1 text-primary text-center">06</h1-->
      <h1 class="display-4 text-uppercase text-center mb-5">Contact Us</h1>
      <div class="row">
          <div class="col-lg-7 mb-2">
              <div class="contact-form bg-light mb-4" style="padding: 30px;">
                  <form method="POST" action="/contact-form">
                    @csrf
                      <div class="row">
                          <div class="col-6 form-group">
                              <input type="text" class="form-control p-4" name="name" placeholder="Your Name" value="{{old('name')}}">
                              @error('name')
                               <p class="m-0 small alert alert-danger shadow-sm">{{ $message}}</p>   
                              @enderror
                          </div>
                          <div class="col-6 form-group">
                              <input type="email" class="form-control p-4" name="email" placeholder="Your Email" value="{{old('email')}}" >
                              @error('email')
                              <p class="m-0 small alert alert-danger shadow-sm">{{ $message}}</p>   
                             @enderror
                            </div>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control p-4" name="subject" placeholder="Subject" value="{{old('subject')}}">
                          @error('subject')
                          <p class="m-0 small alert alert-danger shadow-sm">{{ $message}}</p>   
                         @enderror
                        </div>
                      <div class="form-group">
                          <textarea class="form-control py-3 px-4" name="message" rows="5" placeholder="Message" >{{ old('message')}}</textarea>
                          @error('message')
                          <p class="m-0 small alert alert-danger shadow-sm">{{ $message}}</p>   
                         @enderror
                        </div>
                      <div>
                          <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-lg-5 mb-2">
              <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height: 435px;">
                  <div class="d-flex mb-3">
                      <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                      <div class="mt-n1">
                          <h5 class="text-light">Head Office</h5>
                          <p>Suite 77 NAF Complex, Local/Int'l Airport road, Ikeja, Lagos, Nigeria</p>
                      </div>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                      <div class="mt-n1">
                          <h5 class="text-light">Branch Office</h5>
                          <p>ACHAN Stand, M.M. Int'l Airport, Ikeja, Lagos</p>
                      </div>
                  </div>
                  <div class="d-flex mb-3">
                      <i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                      <div class="mt-n1">
                          <h5 class="text-light">Customer Service</h5>
                          <p>daonigltd@gmail.com </p><p class="m-0">daonigltd@yahoo.com</p>
                      </div>
                  </div>
                  <div class="d-flex mb-3">
                    <i class="fa fa-2x fa-phone text-primary flex-shrink-0 mr-3"></i>
                    <div class="mt-n1">
                        <h5 class="text-light">Phone</h5>
                        <p class="m-0"><a class="text-body pr-3" href="tel:+23480330113329">+2348033011329</a></p>
                    </div>
                </div>

            </div>
          </div>
      </div>
  </div>
</div>

