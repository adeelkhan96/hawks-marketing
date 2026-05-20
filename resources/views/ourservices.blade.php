
@extends('layouts.base')
@section('title','Our Services | Hawks Marketing')
@section('content')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>Our Services</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="main-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/service-image-01.jpg" alt="Brand Strategy">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-shop"></i>
                  <h4>Brand Strategy and Media Planning</h4>
                  <p>We leverage branding and media tactics as instruments to establish your business's distinct identity. Our content approaches build a digital footprint for exceptional market visibility, positioning your brand to connect with the right audience at the right time.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="service-item">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                  <i class="fas fa-camera"></i>
                  <h4>Digital Content Creation</h4>
                  <p>Strong content strategy drives success; exceptional content execution delivers results. We unite both to produce superior content implementing the perfect combination of creativity and data-driven insight — from compelling copy to engaging visuals that move audiences to action.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image">
                  <img src="assets/images/service-image-02.jpg" alt="Content Creation">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="service-item last-service">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/service-image-03.jpg" alt="Web Development">
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="right-text-content">
                  <i class="fas fa-code"></i>
                  <h4>Custom Website Solutions</h4>
                  <p>We address every dimension of website creation to provide you the optimal product. Our professionals work through well-planned inbound marketing approaches, building user-friendly, responsive, and fully tested websites that represent your brand at its best.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Complete <em>Digital Marketing</em> Solutions for Your <strong>Business</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>What We Offer</h6>
            <h4>Our Full Service Range</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="active gradient-border"><span>Brand &amp; Content</span></div>
                    <div class="gradient-border"><span>Digital Advertising</span></div>
                    <div class="gradient-border"><span>Web &amp; Social</span></div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/service-details-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Brand Strategy, Content &amp; Visual Design</h4>
                          <p>We build brand identities and create content that connects, engages, and drives action. From media planning to motion graphics, every asset is crafted to elevate your market presence.</p>
                          <span>- Brand Strategy and Media Planning</span>
                          <span>- Digital Content Creation</span>
                          <span class="last-span">- Visual Design and Motion Graphics</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/service-details-02.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Search, Paid &amp; Email Marketing</h4>
                          <p>From dominating search rankings to maximizing paid ad ROI and reconnecting with prospects via email, our performance-driven campaigns are built to grow your revenue.</p>
                          <span>- Search Engine Marketing (SEO/SEM)</span>
                          <span>- Pay-Per-Click Advertising</span>
                          <span class="last-span">- Email Campaign Optimization</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/service-details-03.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h4>Web Development, Social &amp; Conversion</h4>
                          <p>We build high-converting websites, manage your social media presence end-to-end, and turn visitors into loyal customers through strategic conversion enhancement.</p>
                          <span>- Custom Website Solutions</span>
                          <span>- Social Platform Management</span>
                          <span class="last-span">- Conversion Enhancement</span>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
