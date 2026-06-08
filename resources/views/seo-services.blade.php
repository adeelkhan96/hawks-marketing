
@extends('layouts.base')
@section('title','SEO Services | Hawks Marketing')
@section('meta-title','SEO Services | Hawks Marketing')
@section('meta-description','Boost your search rankings with Hawks Marketing\'s expert SEO services — keyword research, on-page optimisation, link building, and technical SEO to drive organic traffic and grow your business.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'seo-services'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Expert SEO Services to Dominate Search Rankings') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Search engine optimization is a tactical marketing instrument that enables content and websites to achieve superior rankings on search engines.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'The potential for expanding your business online is minimal if your website doesn\'t achieve top search engine positions.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'You don\'t need to worry about the complications; we\'re here for you. Connect with us to optimize your website and reach your target market!') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for SEO?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Affordable') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Cost-effective SEO services that won\'t strain your budget, designed for businesses of all sizes.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Results-driven') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'We design optimal solutions for enhancing your business development with results-oriented services.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Transparent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Our professionals keep clients informed through regular performance analysis reports.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>What We Offer</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Comprehensive SEO Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-chart-line"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'E-commerce SEO') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Get your products featured in top search results with exceptional e-commerce SEO services.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-magnifying-glass"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'SEO Audit') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'We conduct thorough website audits to discover technical, on-page, and off-page deficiencies.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-location-dot"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Local SEO') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'The vast majority of people use search engines to locate local businesses. Don\'t miss them.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-link"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Off-page Link Building') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Quality links boost domain authority and ultimately enhance rankings.') }}</p>
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
            <h4>{{ PC::getValue($p, 'process', 'heading', 'How We Optimize Your Web Presence') }}</h4>
            <p>{{ PC::getValue($p, 'process', 'description', 'Our SEO professionals never compromise on any detail during the creation and implementation of our marketing plans.') }}</p>
            <div class="green-button">
              <a href="{{ route('contact') }}">Get a Free Audit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>{{ PC::getValue($p, 'process', 'step1_title', 'Connect & Research') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step1_desc', 'We connect with you, gather requirements, and perform thorough keyword research while reviewing your existing online presence.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>{{ PC::getValue($p, 'process', 'step2_title', 'Strategy Development') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step2_desc', 'We build SEO strategy frameworks around your requirements, deriving insights from target market analysis.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>{{ PC::getValue($p, 'process', 'step3_title', 'Implementation') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step3_desc', 'Our SEO professionals execute the optimal strategy in tight coordination, designed to generate your intended business outcomes.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>{{ PC::getValue($p, 'process', 'step4_title', 'Analysis & Optimization') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step4_desc', 'We monitor KPIs closely and provide monthly, quarterly, and annual reports, continuously refining our approach.') }}</p>
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
          <h4>Ready to <em>Dominate</em> Search <strong>Rankings?</strong></h4>
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

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
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
