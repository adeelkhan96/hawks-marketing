@extends('layouts.base')
@section('title','Google & Meta Advertising | Hawks Marketing')
@section('meta-title','Google & Meta Advertising | Hawks Marketing')
@section('meta-description','Reach your ideal audience with precision through Hawks Marketing\'s Google and Meta advertising services — Facebook, Instagram, and Google Ads campaigns built to grow your business.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'google-meta-advertising'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Google & Meta Advertising That Reaches the Right Audience') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Advertising across Google and Meta platforms gives your business access to billions of users with highly specific targeting capabilities.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'Hawks Marketing create and optimize campaigns on Google Search, Display, Facebook, and Instagram to drive engagement, generate leads, and increase sales.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Precision Targeting') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'We leverage platform data to reach exactly the right demographics, interests, and behaviors.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Cross-Platform Strategy') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Cohesive campaigns across Google and Meta that reinforce each other for maximum impact.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Continuous Optimization') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Real-time monitoring and adjustments to keep your cost-per-result as low as possible.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Advertising Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fab fa-google"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Google Search Ads') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Appear at the top of Google search results when potential customers are actively looking for your products or services.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fab fa-facebook-f"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Facebook & Instagram Ads') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Engaging ad campaigns on Facebook and Instagram designed to build awareness, generate leads, and drive sales.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-bullseye"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Retargeting Campaigns') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Re-engage visitors who showed interest but didn\'t convert. We set up retargeting campaigns that bring warm audiences back.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-chart-line"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Campaign Analytics & Reporting') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Comprehensive reporting on reach, engagement, conversions, and ROAS so you always understand the full impact of your advertising investment.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Grow</em> with <strong>Targeted Ads?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Launch Your Campaign</a>
            </div>
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
@endsection
