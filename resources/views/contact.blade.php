@extends('layouts.base')
@section('title','Contact Us | Hawks Marketing')
@section('meta-title','Contact Us | Hawks Marketing')
@section('meta-description','Get in touch with Hawks Marketing. Whether you need SEO, social media management, content writing, or web development, our team is ready to help your brand grow.')

@section('head')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('content')
@php use App\Models\PageContent as PC; $p = 'contact'; @endphp

  {{-- Page Intro --}}
  <section class="contact-us-form page-top-offset">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Get In Touch</h6>
            <h4>{{ PC::getValue($p, 'intro', 'heading', 'Get in touch if you need help with your business') }}</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <p class="text-center mb-4" style="color:#666;">{{ PC::getValue($p, 'intro', 'description', 'For inquiries, collaborations, or project discussions, reach out to Hawks Marketing. Our team is available to understand your requirements and provide tailored marketing solutions for your business needs.') }}</p>
        </div>
      </div>

      {{-- Contact Form --}}
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="{{ route('contact.submit') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Name..." autocomplete="on" required value="{{ old('name') }}">
                  @error('name')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Email..." required value="{{ old('email') }}">
                  @error('email')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="tel" name="phone" id="phone" placeholder="Phone Number..." autocomplete="on" value="{{ old('phone') }}">
                  @error('phone')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Message (Optional)...">{{ old('message') }}</textarea>
                  @error('message')<span style="color:#ff511a; font-size:12px; margin-top:4px; display:block;">{{ $message }}</span>@enderror
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  {{-- Contact Details --}}
  <section class="map">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 mb-5">
          <div class="row text-center">
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-map-marked-alt"></i>
                <h4>Address</h4>
                <p style="color:#666; font-size:14px; line-height:1.7; margin:0;">{{ PC::getValue($p, 'info', 'address', 'Plot no, 3A Korang Road, I-10/3, Islamabad, Pakistan, 44000') }}</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-envelope"></i>
                <h4>Email</h4>
                @php $email1 = PC::getValue($p, 'info', 'email1', 'info@thehawksmarketing.com'); $email2 = PC::getValue($p, 'info', 'email2', 'Hawksmarketing2025@gmail.com'); @endphp
                <a href="mailto:{{ $email1 }}">{{ $email1 }}</a><br>
                <a href="mailto:{{ $email2 }}" style="font-size:13px;">{{ $email2 }}</a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="info-item">
                <i class="fa fa-phone"></i>
                <h4>Contact</h4>
                @php $phone1 = PC::getValue($p, 'info', 'phone1', '+92 336 986 4931'); $phone2 = PC::getValue($p, 'info', 'phone2', '+92 313 593 4637'); @endphp
                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone1) }}">{{ $phone1 }}</a><br>
                <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone2) }}">{{ $phone2 }}</a>
              </div>
            </div>
          </div>
        </div>

        {{-- Social Links --}}
        <div class="col-lg-10 offset-lg-1 text-center mb-5">
          <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
            <a href="https://www.instagram.com/hawksmarketing.pk" target="_blank" rel="noopener" style="width:44px;height:44px;border-radius:50%;background:#212741;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;text-decoration:none;transition:background .2s;" onmouseover="this.style.background='#ff511a'" onmouseout="this.style.background='#212741'"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61577364703717" target="_blank" rel="noopener" style="width:44px;height:44px;border-radius:50%;background:#212741;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;text-decoration:none;transition:background .2s;" onmouseover="this.style.background='#ff511a'" onmouseout="this.style.background='#212741'"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/the-hawks-marketing" target="_blank" rel="noopener" style="width:44px;height:44px;border-radius:50%;background:#212741;display:flex;align-items:center;justify-content:center;color:#fff;font-size:18px;text-decoration:none;transition:background .2s;" onmouseover="this.style.background='#ff511a'" onmouseout="this.style.background='#212741'"><i class="fab fa-linkedin-in"></i></a>
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
