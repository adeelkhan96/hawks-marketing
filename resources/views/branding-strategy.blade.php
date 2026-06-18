@extends('layouts.base')
@section('title','Branding Strategy Services | Hawks Marketing')
@section('meta-title','Branding Strategy Services | Hawks Marketing')
@section('meta-description','Data-informed branding strategy by Hawks Marketing â€” brand positioning, messaging frameworks, and market differentiation that align your identity with your business goals.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'branding-strategy'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Branding Strategy That Positions You to Win') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'A strong brand strategy is the foundation of every successful marketing effort. Hawks Marketing develop data-informed brand strategies that align your positioning, messaging, and identity with your business goals.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We analyse your market, competitors, and audience to develop a clear strategic direction that differentiates your brand and creates a lasting impression.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Strategy?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Research-Led') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p1_text', 'Strategy built on real market data, competitor analysis, and audience insights.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Differentiating') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p2_text', 'We identify what makes your brand unique and build your positioning around it.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Actionable') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p3_text', 'Strategies that translate directly into marketing execution, not just documents.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Branding Strategy Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-crosshairs"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Brand Positioning') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'We define a clear, compelling position for your brand in the market â€” identifying your unique value proposition and ensuring it resonates with your target audience.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-comment-dots"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Messaging Framework') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Consistent messaging guidelines covering your brand voice, key messages, and communication tone.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-magnifying-glass-chart"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Competitor & Market Analysis') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'In-depth analysis of your competitive landscape to identify positioning gaps, differentiation opportunities, and strategic advantages.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-users"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Audience Profiling') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Detailed audience persona development based on demographics, behavior, and psychographics â€” so your brand strategy is built around the people who matter most.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to Build a <em>Stronger</em> <strong>Brand?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get a Strategy Session</a>
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

