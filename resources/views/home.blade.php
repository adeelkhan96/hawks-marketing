@extends('layouts.base')
@section('title','Hawks Marketing')
@section('content')


  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/slide-01.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
                  <h2>Transform Your <em>Vision </em> into Digital Success with<br> <em>Hawks Marketing</em></h2>
                  <div class="div-dec"></div>
                  <p> At Hawks Marketing, we combine years of experience with
                      modern, data-driven strategies to deliver real, measurable
                      results. Our full-service, customized approach ensures your
                      brand stands out, grows sustainably, and achieves lasting
                      success in the digital space.</p>
                  <div class="buttons">
                    {{-- <div class="green-button">
                      <a href="#">Discover More</a>
                    </div> --}}
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

    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
                <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>SERVICES</h6>
            <h4>Our Core Services</h4>
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
            <h4>Know Us Better</h4>
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
          <h2>Hawks Marketing - Results-Driven Digital Marketing Agency</h2>
          <p style="margin-top: 2rem">With proven track record and industry expertise, Hawks Marketing ranks among the premier digital marketing agencies, empowering organizations with goal-oriented digital strategies. Our talented professionals understand your unique vision and develop customized marketing initiatives that deliver quantifiable growth.
            We blend innovation, insights, and execution to enhance your brand's visibility and performance.
            At Hawks Marketing, your growth is our mission—we succeed when you thrive.
          </p>
        </div>
        <div class="col-lg-4">
          <div class="right-content">
            <h4>Our Approach</h4>
            <p><strong>Data-Powered</strong> — Decisions backed by analytics and validated metrics, guaranteeing genuine ROI and continuous expansion.</p>
            <p><strong>Client-Centered</strong> — Your audience, objectives, and marketplace at the heart of every strategy we craft.</p>
            <p><strong>Results-Focused</strong> — Every interaction, view, and transaction contributes to tangible business results for your organization.</p>
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

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Testimonials</h6>
            <h4>Coming Soon ...</h4>
          </div>
        </div>
        {{-- <div class="col-lg-10 offset-lg-1">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>“Donec et nunc massa. Nullam non felis dignissim, dapibus turpis semper, vulputate lorem. Nam volutpat posuere tellus, in porttitor justo interdum nec. Aenean in dapibus risus, in euismod ligula. Aliquam vel scelerisque elit.”</p>
              <h4>David Eigenberg</h4>
              <span>CEO of Mexant</span>
              <div class="right-image">
                <img src="assets/images/testimonials-01.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>“Etiam id ligula risus. Fusce fringilla nisl nunc, nec rutrum lectus cursus nec. In blandit nibh dolor, at rutrum leo accumsan porta. Nullam pulvinar eros porttitor risus condimentum tempus.”</p>
              <h4>Andrew Garfield</h4>
              <span>CTO of Mexant</span>
              <div class="right-image">
                <img src="assets/images/testimonials-01.jpg" alt="">
              </div>
            </div>
            <div class="item">
              <i class="fa fa-quote-left"></i>
              <p>“Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo. Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo.”</p>
              <h4>George Lopez</h4>
              <span>Crypto Manager</span>
              <div class="right-image">
                <img src="assets/images/testimonials-01.jpg" alt="">
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
        <div class="col-lg-2 col-sm-4 col-6">
          <div class="item">
            <img src="assets/images/client-01.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  @section('js')
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>

    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
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
    </script>
@endsection