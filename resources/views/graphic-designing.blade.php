@extends('layouts.base')
@section('title','Graphic Designing | Hawks Marketing')
@section('meta-title','Graphic Designing | Hawks Marketing')
@section('meta-description','Professional graphic design services by Hawks Marketing — social media graphics, advertisements, branding materials, and corporate design that communicate your identity clearly.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'graphic-designing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Graphic Design That Communicates and Converts') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Graphic designing is the process of creating visual content to communicate information and ideas effectively.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We develop and maintain consistent brand identities across all digital and print platforms.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver professional and cohesive designs that strengthen brand recognition and trust.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Design?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Brand-Consistent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Every design aligns with your brand identity to build cohesive visual recognition across all platforms.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Purpose-Driven') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Designs created with clear communication objectives, not just aesthetics.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Fast Turnaround') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Efficient workflows that deliver quality designs within agreed timelines.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Design Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-hashtag"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Social Media Graphics') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Scroll-stopping visuals designed for all major social platforms — posts, stories, banners, and ads that drive engagement.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Advertisement Design') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'High-impact ad creatives for digital and print advertising — designed to capture attention and communicate your message effectively.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-palette"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Corporate Branding Materials') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Business cards, letterheads, presentation decks, brochures, and other corporate materials designed to represent your brand professionally.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-images"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Digital & Print Design') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Versatile designs optimised for both digital screens and print production, ensuring consistent quality and visual impact.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Elevate</em> Your <strong>Visual Identity?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get a Design Quote</a>
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

