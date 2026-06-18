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
                    @if($slide->heading)
                    <h2>{!! $slide->heading !!}</h2>
                    <div class="div-dec"></div>
                    @endif
                    @if($slide->subtext)
                    <p>{{ $slide->subtext }}</p>
                    @endif
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

  <section class="services-grid-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>SERVICES</h6>
            <h4>Our Services</h4>
          </div>
        </div>
      </div>
      <div class="row">

        {{-- Digital Marketing Services --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-bullhorn"></i></span>
              <a href="{{ route('our-services') }}#digital-marketing">Digital Marketing Services</a>
            </h5>
            <ul>
              <li><a href="{{ route('seo-services') }}">Search Engine Optimization (SEO)</a></li>
              <li><a href="{{ route('social-media') }}">Social Media Marketing &amp; Management</a></li>
              <li><a href="{{ route('ppc-advertising') }}">Pay-Per-Click Advertising (PPC)</a></li>
              <li><a href="{{ route('google-meta-advertising') }}">Google &amp; Meta Advertisement</a></li>
            </ul>
          </div>
        </div>

        {{-- Designing --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-paintbrush"></i></span>
              <a href="{{ route('our-services') }}#designing">Designing</a>
            </h5>
            <ul>
              <li><a href="{{ route('graphic-designing') }}">Graphic Designing</a></li>
              <li><a href="{{ route('ui-ux-designing') }}">UI/UX Designing</a></li>
              <li><a href="{{ route('video-editing') }}">Video Editing</a></li>
              <li><a href="{{ route('social-media-design') }}">Social Media Design</a></li>
              <li><a href="{{ route('logo-designing') }}">Logo Designing</a></li>
            </ul>
          </div>
        </div>

        {{-- Branding --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-certificate"></i></span>
              <a href="{{ route('our-services') }}#branding">Branding</a>
            </h5>
            <ul>
              <li><a href="{{ route('branding-strategy') }}">Branding Strategy Services</a></li>
              <li><a href="{{ route('branding-service') }}">Branding Service</a></li>
              <li><a href="{{ route('brand-manual') }}">Brand Manual Document</a></li>
            </ul>
          </div>
        </div>

        {{-- IT Solution --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-laptop-code"></i></span>
              <a href="{{ route('our-services') }}#it-solution">IT Solution</a>
            </h5>
            <ul>
              <li><a href="{{ route('web-development') }}">Website Design and Development</a></li>
              <li><a href="{{ route('custom-website-development') }}">Custom Website Development</a></li>
              <li><a href="{{ route('ecommerce-development') }}">Ecommerce Web Development</a></li>
              <li><a href="{{ route('app-development') }}">App Development</a></li>
            </ul>
          </div>
        </div>

        {{-- Content Creation --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-pen-nib"></i></span>
              <a href="{{ route('our-services') }}#content-creation">Content Creation</a>
            </h5>
            <ul>
              <li><a href="{{ route('social-media-content-marketing') }}">Social Media Content Marketing</a></li>
              <li><a href="{{ route('social-media-content-creation') }}">Social Media Content Creation</a></li>
              <li><a href="{{ route('content-writing') }}">Website Content Writing</a></li>
              <li><a href="{{ route('blog-writing') }}">Blog Writing</a></li>
            </ul>
          </div>
        </div>

        {{-- Other Services --}}
        <div class="col-lg-6 col-md-6 mb-4">
          <div class="service-category-card">
            <h5>
              <span class="scc-icon"><i class="fas fa-handshake"></i></span>
              <a href="{{ route('our-services') }}#other-services">Other Services</a>
            </h5>
            <ul>
              <li><a href="{{ route('business-analysis') }}">Business Analysis</a></li>
              <li><a href="{{ route('consultation') }}">Consultation</a></li>
            </ul>
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
          <p style="margin-top: 2rem">{{ PageContent::getValue('home', 'about', 'body', 'With proven track record and industry expertise, Hawks Marketing ranks among the premier digital marketing agencies, empowering organizations with goal-oriented digital strategies. Our talented professionals understand your unique vision and develop customized marketing initiatives that deliver quantifiable growth. We blend innovation, insights, and execution to enhance your brand\'s visibility and performance. At Hawks Marketing, your growth is our missionâ€”we succeed when you thrive.') }}</p>
        </div>
        <div class="col-lg-4">
          <div class="right-content">
            <h4>{{ PageContent::getValue('home', 'about', 'right_heading', 'Our Approach') }}</h4>
            <p><strong>Data-Powered</strong> â€” {{ PageContent::getValue('home', 'about', 'data_powered', 'Decisions backed by analytics and validated metrics, guaranteeing genuine ROI and continuous expansion.') }}</p>
            <p><strong>Client-Centered</strong> â€” {{ PageContent::getValue('home', 'about', 'client_centered', 'Your audience, objectives, and marketplace at the heart of every strategy we craft.') }}</p>
            <p><strong>Results-Focused</strong> â€” {{ PageContent::getValue('home', 'about', 'results_focused', 'Every interaction, view, and transaction contributes to tangible business results for your organization.') }}</p>
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
            <h2>{{ PageContent::getValue('home', 'stats', 'clients_num', '50+') }}</h2>
            <p>{{ PageContent::getValue('home', 'stats', 'clients_label', 'Happy Clients') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>{{ PageContent::getValue('home', 'stats', 'projects_num', '100+') }}</h2>
            <p>{{ PageContent::getValue('home', 'stats', 'projects_label', 'Projects Completed') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>{{ PageContent::getValue('home', 'stats', 'services_num', '9+') }}</h2>
            <p>{{ PageContent::getValue('home', 'stats', 'services_label', 'Core Services') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="stat-item">
            <h2>{{ PageContent::getValue('home', 'stats', 'experience_num', '5+') }}</h2>
            <p>{{ PageContent::getValue('home', 'stats', 'experience_label', 'Years Experience') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @php $testimonials = \App\Models\Testimonial::where('active', true)->orderBy('sort_order')->orderBy('id')->get(); @endphp
  @if($testimonials->isNotEmpty())
  <section class=â€testimonialsâ€ id=â€testimonialsâ€>
    <div class=â€containerâ€>
      <div class=â€rowâ€>
        <div class=â€col-lg-6 offset-lg-3â€>
          <div class=â€section-headingâ€>
            <h6>Testimonials</h6>
            <h4>What Our Clients Say</h4>
          </div>
        </div>
        <div class=â€col-lg-10 offset-lg-1â€>
          <div class=â€owl-testimonials owl-carouselâ€ style=â€position:relative; z-index:5;â€>
            @foreach($testimonials as $t)
            <div class=â€itemâ€>
              <i class=â€fa fa-quote-leftâ€></i>
              <p>â€{{ $t->message }}â€</p>
              <h4>{{ $t->name }}</h4>
              <span>{{ $t->position }}</span>
              @if($t->image)
              <div class=â€right-imageâ€>
                <img src=â€{{ asset($t->image) }}â€ alt=â€{{ $t->name }}â€>
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
    <script src="{{ asset('assets/js/custom.js?v=2') }}"></script>
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
