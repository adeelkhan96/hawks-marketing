@extends('layouts.base')
@section('title','Pay-Per-Click Advertising (PPC) | Hawks Marketing')
@section('meta-title','Pay-Per-Click Advertising (PPC) | Hawks Marketing')
@section('meta-description','Drive targeted traffic and maximise conversions with Hawks Marketing\'s expert PPC advertising services. We design and manage campaigns that deliver real ROI.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'ppc-advertising'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Pay-Per-Click Advertising That Delivers Real ROI') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Pay-Per-Click advertising is a performance-driven model where you pay only when users click on your ads.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'Hawks Marketing design and manage targeted PPC campaigns that maximize conversions while continuously optimizing ad spend.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'Whether you\'re launching a new campaign or improving an existing one, our team builds strategies around your business goals and audience behavior.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for PPC?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Data-Driven') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p1_text', 'Every campaign is built on audience insights and performance data, not guesswork.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Budget-Efficient') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p2_text', 'We continuously optimize bids and targeting to get maximum results from your spend.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Transparent Reporting') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p3_text', 'Clear performance reports so you always know exactly what your investment is delivering.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our PPC Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Campaign Strategy & Setup') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'We build campaigns from the ground up â€” defining audience segments, keyword strategy, ad formats, and budget allocation.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-pen-nib"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Ad Copywriting') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Compelling, conversion-focused ad copy that captures attention and drives clicks. We test multiple variants to continuously improve performance.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-sliders"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Bid Management & Optimization') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Active bid management to reduce cost-per-click while increasing quality scores and ad positions.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-chart-bar"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Performance Reporting') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Detailed, easy-to-understand reports covering impressions, clicks, conversions, and cost metrics.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Drive</em> More <strong>Conversions?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Campaign</a>
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
  <script src="assets/js/custom.js?v=2"></script>
@endsection

