
@extends('layouts.base')
@section('title','About Us | Hawks Marketing')
@section('content')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>About Us</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="top-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/about-left-image.jpg" alt="Hawks Marketing Team">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                <span>About Hawks Marketing</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Our agile team of project coordinators, technology and analytics engineers, web and application designers/developers, digital planners, creative directors, media coordinators, and content specialists are dedicated to helping you achieve outstanding results for your business expansion.</p>
                  <br>
                  <p>Unlike other digital marketing organizations, we implement comprehensive and customized solutions distinctive to each customer's specific needs — through thorough research, a data-informed strategy-based methodology, and an unwavering commitment to delivering superior services.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Our Mission &amp; Vision</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p><strong>Our Mission</strong> — To advance data-informed solutions, moving beyond improvised approaches as we navigate the complexities of digital space while providing meaningful branding, marketing, and web solutions to businesses throughout the region.</p>
                  <br>
                  <p><strong>Our Vision</strong> — To become the premier marketing agency and distinguished provider of marketing and web solutions, with internal capabilities to implement the complete range of international marketing initiatives for any client.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Our Core Values</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p><strong>Collaboration</strong> — We advance consistent initiatives for client growth while building expertise within our team.</p>
                  <br>
                  <p><strong>Innovation</strong> — Our professionals develop unique solutions after comprehensive industry investigation.</p>
                  <br>
                  <p><strong>Integrity</strong> — Building trustworthy relationships with our stakeholders is our foremost priority.</p>
                  <br>
                  <p><strong>Excellence</strong> — We pursue brilliance by incorporating exceptional quality into every portfolio.</p>
                </div>
              </div>
            </article>
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

  <section class="what-we-do">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="left-content">
            <h4>How We Transform Ideas into Achievements</h4>
            <p>At Hawks Marketing, we keep you engaged from consultation through concept creation and execution. We comprehensively analyze everything regarding your business — incorporating innovation, creativity, and ongoing improvement to deliver premium digital marketing services.</p>
            <div class="green-button">
              <a href="{{ route('contact') }}">Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>Discovery &amp; Concept</h4>
                  <p>We gain deep understanding of your business and develop a clear concept statement essential to every subsequent stage.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>Strategic Brand Building</h4>
                  <p>Our media tactics build your brand credentials and establish a strong presence in your target marketplace.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>Data-Informed Strategy</h4>
                  <p>Analytics-driven insights form the foundation of a digital marketing strategy that converts traffic into revenue.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>Results &amp; Optimization</h4>
                  <p>We monitor KPIs, provide regular reports, and continuously optimize to ensure sustained growth and peak performance.</p>
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
