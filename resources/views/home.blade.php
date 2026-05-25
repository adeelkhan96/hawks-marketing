@extends('layouts.base')
@section('title','Hawks Marketing | Digital Marketing Agency')
@section('meta-title','Hawks Marketing | Digital Marketing Agency')
@section('meta-description','Hawks Marketing is a results-driven digital marketing agency specialising in SEO, social media management, content writing, PPC advertising, and custom web development. Grow your brand with us.')
@section('body-class','has-hero')
@php use App\Models\PageContent; @endphp


@section('content')


  <!-- ***** Main Banner Area Start ***** -->
  @php
    $bannerSlides = \App\Models\BannerSlide::where('active', true)->orderBy('sort_order')->orderBy('id')->get();
    $bannerCount  = $bannerSlides->count();
    $defaultHeading = 'Transform Your <em>Vision</em> into Digital Success with <em>Hawks Marketing</em>';
    $defaultSubtext = 'At Hawks Marketing, we combine years of experience with modern, data-driven strategies to deliver real, measurable results. Our full-service, customized approach ensures your brand stands out, grows sustainably, and achieves lasting success in the digital space.';
    $defaultImage   = PageContent::getValue('home', 'banner', 'image', 'assets/images/slide-01.jpg');
  @endphp
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      @if($bannerCount > 0)
        @foreach($bannerSlides as $slide)
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url({{ asset($slide->image) }})">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="header-text">
                    <h2>{!! $slide->heading ?: $defaultHeading !!}</h2>
                    <div class="div-dec"></div>
                    <p>{{ $slide->subtext ?: $defaultSubtext }}</p>
                    <div class="buttons">
                      <div class="orange-button">
                        <a href="{{ route('contact') }}">Contact Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      @else
        <div class="swiper-slide">
          <div class="slide-inner" style="background-image:url({{ asset($defaultImage) }})">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="header-text">
                    <h2>{!! $defaultHeading !!}</h2>
                    <div class="div-dec"></div>
                    <p>{{ $defaultSubtext }}</p>
                    <div class="buttons">
                      <div class="orange-button">
                        <a href="{{ route('contact') }}">Contact Us</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    </div>
    @if($bannerCount !== 1)
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
    @endif
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
                <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>SERVICES</h6>
            <h4>{{ PageContent::getValue('home', 'services', 'heading', 'Our Core Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-shop"></i>
            <h4>Brand Strategy and Media Planning</h4>
            <p>Building brands with data-driven strategic direction</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-camera"></i>
            <h4>Digital Content Creation</h4>
            <p>Creating engaging content that drives action</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-compass-drafting"></i>
            <h4>Visual Design </h4>
            <p>Designing visuals that communicate your identity</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-magnifying-glass"></i>
            <h4>Search Engine Marketing</h4>
            <p>Improving visibility through smart search strategies</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>Pay-Per-Click Advertising</h4>
            <p>Driving targeted traffic with paid campaigns</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-code"></i>
            <h4>Custom Website Solutions</h4>
            <p>Websites tailored to your business goals</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-hashtag"></i>
            <h4>Social Platform Management</h4>
            <p>Managing social presence for consistent growth</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-at"></i>
            <h4>Email Campaign Optimization</h4>
            <p>Optimizing emails for higher engagement</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-user-check"></i>
            <h4>Conversion Enhancement</h4>
            <p>Turning visitors into loyal customers</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Accelerate</em> Your <strong>Digital Success?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get Started Today</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>About Us</h6>
            <h4>{{ PageContent::getValue('home', 'about', 'heading', 'Know Us Better') }}</h4>
          </div>
        </div>
        <div class="col-lg-8">
          {{-- <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active gradient-border"><span>Web Design</span></div>
                    <div class="gradient-border"><span>Graphics</span></div>
                    <div class="gradient-border"><span>Web Coding</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="main-list">
                          <span class="title">Project Title</span>
                          <span class="title">Budget</span>
                          <span class="title">Deadline</span>
                          <span class="title">Client</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Website Redesign</span>
                          <span class="item">$1,500 to $2,200</span>
                          <span class="item">2022 Dec 12</span>
                          <span class="item">Web Biz</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Website Renovation</span>
                          <span class="item">$2,500 to $3,600</span>
                          <span class="item">2022 Dec 10</span>
                          <span class="item">Online Ads</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Marketing Plan</span>
                          <span class="item">$2,500 to $4,200</span>
                          <span class="item">2022 Dec 8</span>
                          <span class="item">Web Biz</span>
                        </div>
                        <div class="list-item last-item">
                          <span class="item item-title">All-new Website</span>
                          <span class="item">$3,000 to $6,600</span>
                          <span class="item">2022 Dec 2</span>
                          <span class="item">Web Presence</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="main-list">
                          <span class="title">Project Title</span>
                          <span class="title">Budget</span>
                          <span class="title">Deadline</span>
                          <span class="title">Client</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Graphics Redesign</span>
                          <span class="item">$500 to $800</span>
                          <span class="item">2022 Nov 24</span>
                          <span class="item">Media One</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Digital Graphics</span>
                          <span class="item">$1,500 to $3,000</span>
                          <span class="item">2022 Nov 18</span>
                          <span class="item">Second Media</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">New Artworks</span>
                          <span class="item">$2,200 to $4,400</span>
                          <span class="item">2022 Nov 10</span>
                          <span class="item">Artwork Push</span>
                        </div>
                        <div class="list-item last-item">
                          <span class="item item-title">Complex Arts</span>
                          <span class="item">$1,100 to $2,400</span>
                          <span class="item">2022 Nov 3</span>
                          <span class="item">Media One</span>
                        </div>
                    </li>
                    <li>
                      <div>
                        <div class="main-list">
                          <span class="title">Project Title</span>
                          <span class="title">Budget</span>
                          <span class="title">Estimated</span>
                          <span class="title">Technology</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Backend Coding</span>
                          <span class="item">$2,000 to $5,000</span>
                          <span class="item">2022 Nov 28</span>
                          <span class="item">PHP MySQL</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">New Web App</span>
                          <span class="item">$1,500 to $3,000</span>
                          <span class="item">2022 Nov 18</span>
                          <span class="item">Python Programming</span>
                        </div>
                        <div class="list-item">
                          <span class="item item-title">Frontend Interactions</span>
                          <span class="item">$3,000 to $6,000</span>
                          <span class="item">2022 Nov 10</span>
                          <span class="item">JavaScripts</span>
                        </div>
                        <div class="list-item last-item">
                          <span class="item item-title">Video Creations</span>
                          <span class="item">$1,800 to $4,400</span>
                          <span class="item">2022 Nov 3</span>
                          <span class="item">Multimedia</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> --}}
          <h2>{{ PageContent::getValue('home', 'about', 'subheading', 'Hawks Marketing - Results-Driven Digital Marketing Agency') }}</h2>
          <p style="margin-top: 2rem">{{ PageContent::getValue('home', 'about', 'body', 'With proven track record and industry expertise, Hawks Marketing ranks among the premier digital marketing agencies, empowering organizations with goal-oriented digital strategies. Our talented professionals understand your unique vision and develop customized marketing initiatives that deliver quantifiable growth. We blend innovation, insights, and execution to enhance your brand\'s visibility and performance. At Hawks Marketing, your growth is our mission—we succeed when you thrive.') }}</p>
        </div>
        <div class="col-lg-4">
          <div class="right-content">
            <h4>{{ PageContent::getValue('home', 'about', 'right_heading', 'Our Approach') }}</h4>
            <p><strong>Data-Powered</strong> — {{ PageContent::getValue('home', 'about', 'data_powered', 'Decisions backed by analytics and validated metrics, guaranteeing genuine ROI and continuous expansion.') }}</p>
            <p><strong>Client-Centered</strong> — {{ PageContent::getValue('home', 'about', 'client_centered', 'Your audience, objectives, and marketplace at the heart of every strategy we craft.') }}</p>
            <p><strong>Results-Focused</strong> — {{ PageContent::getValue('home', 'about', 'results_focused', 'Every interaction, view, and transaction contributes to tangible business results for your organization.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section class="calculator">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="left-image">
            <img src="assets/images/calculator-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>Your Freedom</h6>
            <h4>Get a Financial Plan</h4>
          </div>
          <form id="calculate" action="" method="get">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <label for="name">Your Name</label>
                  <input type="name" name="name" id="name" placeholder="" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Your Email</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="chooseOption" class="form-label">Your Reason</label>
                  <select name="Category" class="form-select" aria-label="Default select example" id="chooseOption" onchange="this.form.click()">
                      <option selected>Choose an Option</option>
                      <option type="checkbox" name="option1" value="Online Banking">Online Banking</option>
                      <option value="Financial Control">Financial Control</option>
                      <option value="Yearly Profit">Yearly Profit</option>
                      <option value="Crypto Investment">Crypto Investment</option>
                  </select>
              </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> --}}

  <section class="stats-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>50+</h2>
            <p>Happy Clients</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>100+</h2>
            <p>Projects Completed</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>9+</h2>
            <p>Core Services</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>5+</h2>
            <p>Years Experience</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @php $testimonials = \App\Models\Testimonial::where('active', true)->orderBy('sort_order')->orderBy('id')->get(); @endphp
  @if($testimonials->isNotEmpty())
  <section class=”testimonials” id=”testimonials”>
    <div class=”container”>
      <div class=”row”>
        <div class=”col-lg-6 offset-lg-3”>
          <div class=”section-heading”>
            <h6>Testimonials</h6>
            <h4>What Our Clients Say</h4>
          </div>
        </div>
        <div class=”col-lg-10 offset-lg-1”>
          <div class=”owl-testimonials owl-carousel” style=”position:relative; z-index:5;”>
            @foreach($testimonials as $t)
            <div class=”item”>
              <i class=”fa fa-quote-left”></i>
              <p>”{{ $t->message }}”</p>
              <h4>{{ $t->name }}</h4>
              <span>{{ $t->position }}</span>
              @if($t->image)
              <div class=”right-image”>
                <img src=”{{ asset($t->image) }}” alt=”{{ $t->name }}”>
              </div>
              @endif
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif

  @php $companies = \App\Models\Company::where('active', true)->orderBy('sort_order')->orderBy('id')->get(); @endphp
  <section class="partners">
    <div class="container">
      <div class="row">
        @if($companies->isNotEmpty())
          @foreach($companies as $company)
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
            </div>
          </div>
          @endforeach
        @else
          @for($i = 0; $i < 6; $i++)
          <div class="col-lg-2 col-sm-4 col-6">
            <div class="item">
              <img src="{{ asset('assets/images/client-01.png') }}" alt="">
            </div>
          </div>
          @endfor
        @endif
      </div>
    </div>
  </section>

@endsection
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @section('js')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        var interleaveOffset = 0.5;
        var bannerCount = {{ $bannerCount > 0 ? $bannerCount : 1 }};
        var multiSlide  = bannerCount > 1;

      var swiperOptions = {
        loop: multiSlide,
        speed: 1000,
        grabCursor: multiSlide,
        watchSlidesProgress: true,
        mousewheelControl: false,
        keyboardControl: multiSlide,
        autoplay: multiSlide ? { delay: 5000, disableOnInteraction: false } : false,
        navigation: multiSlide ? {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        } : false,
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);

      // Testimonials carousel
      if ($('.owl-testimonials').length) {
        $('.owl-testimonials').owlCarousel({
          items: 1,
          loop: true,
          autoplay: true,
          autoplayTimeout: 6000,
          smartSpeed: 700,
          nav: false,
          dots: true,
          animateOut: 'fadeOut',
        });
      }
    </script>
@endsection