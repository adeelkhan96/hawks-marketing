@extends('layouts.base')
@section('title','Business Analysis | Hawks Marketing')
@section('meta-title','Business Analysis | Hawks Marketing')
@section('meta-description','Strategic business analysis by Hawks Marketing — evaluating operations, market position, and performance to identify growth opportunities and support better decision-making.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'business-analysis'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Business Analysis That Turns Data into Growth') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', "Business analysis involves evaluating a company's operations, market position, and performance to identify growth opportunities. Hawks Marketing analyze data, audience behavior, and market trends.") }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We identify strengths, weaknesses, and gaps affecting business performance. We assess competitors to understand positioning and improve market advantage.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver structured analysis that supports sustainable business growth and better planning.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Analysis?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Data-Driven') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Analysis grounded in real data — not assumptions — for reliable, actionable conclusions.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Comprehensive') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'We evaluate every dimension: digital performance, audience behavior, market position, and competitive landscape.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Actionable Outputs') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'We deliver clear, prioritised recommendations you can implement immediately.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Business Analysis Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-chart-line"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Digital Performance Audit') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', "Comprehensive review of your current digital presence — website, social media, SEO, and advertising — identifying what's working and where the biggest opportunities are.") }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-magnifying-glass-chart"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Competitor Analysis') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', "In-depth assessment of your key competitors' strategies, positioning, content, and digital performance to identify gaps and areas where you can gain a competitive edge.") }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-users"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Audience & Market Research') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', "Research into your target audience's behavior, preferences, pain points, and buying patterns — providing the foundation for more effective marketing and business decisions.") }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-file-lines"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Growth Opportunity Report') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'A structured analysis report with clear identification of your top growth opportunities, prioritised by impact and feasibility — a strategic roadmap for what to do next.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Understand</em> Your Business <strong>Better?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Request an Analysis</a>
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
  <script src="assets/js/custom.js?v=3"></script>
@endsection

