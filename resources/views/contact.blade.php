@extends('layouts.base')
@section('title','Contact Us | Hawks Marketing')
@section('meta-title','Contact Us | Hawks Marketing')
@section('meta-description','Get in touch with Hawks Marketing. Whether you need SEO, social media management, content writing, or web development, our team is ready to help your brand grow.')

@section('head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')

  {{-- Contact Form (first) --}}
  <section class="contact-us-form page-top-offset">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Get In Touch</h6>
            <h4>Feel free to message us</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required value="{{ old('name') }}">
                  @error('name')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="tel" name="phone" id="phone" placeholder="Your Phone..." autocomplete="on" value="{{ old('phone') }}">
                  @error('phone')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required value="{{ old('email') }}">
                  @error('email')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on" value="{{ old('subject') }}">
                  @error('subject')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message..." required>{{ old('message') }}</textarea>
                  @error('message')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  {{-- Map & Contact Info (below form) --}}
  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 mb-5">
          <div class="row text-center">
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-envelope"></i>
                <h4>Email Address</h4>
                <a href="mailto:info@thehawksmarketing.com">info@thehawksmarketing.com</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-phone"></i>
                <h4>Phone Number</h4>
                <a href="tel:+923369864931">+92 336 986 4931</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-map-marked-alt"></i>
                <h4>Address</h4>
                <a href="#">Islamabad, Pakistan</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212644.89172859892!2d72.92129590323809!3d33.61629290045467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Pakistan!5e0!3m2!1sen!2sde!4v1753904067987!5m2!1sen!2sde" width="100%" height="420px" frameborder="0" style="border:0; border-radius:10px; position:relative; z-index:2;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        @for($i = 0; $i < 6; $i++)
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item"><img src="assets/images/client-01.png" alt=""></div>
        </div>
        @endfor
      </div>
    </div>
  </section>

@endsection

@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  @if(session('success'))
  <script>
    toastr.options = {
      closeButton: true,
      progressBar: true,
      positionClass: 'toast-bottom-right',
      timeOut: 6000,
      extendedTimeOut: 2000,
      showEasing: 'swing',
      hideEasing: 'linear',
      showMethod: 'fadeIn',
      hideMethod: 'fadeOut'
    };
    toastr.success('{{ session('success') }}', 'Message Sent!');
  </script>
  @endif
@endsection
