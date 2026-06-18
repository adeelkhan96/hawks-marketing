@extends('layouts.base')
@section('title','Branding Service | Hawks Marketing')
@section('meta-title','Branding Service | Hawks Marketing')
@section('meta-description','Complete branding solutions by Hawks Marketing â€” visual identity, brand assets, color systems, typography, and guidelines that build recognition and trust.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'branding-service'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Complete Branding That Builds Recognition and Trust') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Branding is the process of creating a distinct identity for a business through visual, verbal, and strategic elements.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We design cohesive brand assets including logos, color systems, typography, and guidelines. We ensure consistency across all platforms to build recognition and trust.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver complete branding solutions that strengthen perception, credibility, and long-term brand value.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Branding?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Holistic Approach') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p1_text', 'We cover every dimension of brand identity â€” visual, verbal, and strategic â€” in one integrated process.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Built to Last') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p2_text', 'Brand identities designed for longevity, not trends, ensuring relevance as your business grows.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Consistent Across All Touchpoints') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p3_text', 'We ensure your brand looks and feels the same everywhere it appears.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Branding Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-star"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Visual Identity Design') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Logo, color palette, typography, and graphic elements that form a cohesive visual system representing your brand consistently across every platform.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-swatchbook"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Brand Asset Creation') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'All the branded materials your business needs â€” business cards, letterheads, social media templates, email signatures, and more.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-rotate"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Brand Refresh & Rebrand') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Evolving or repositioning your existing brand identity to better reflect your current business direction, audience, and market positioning.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-shield-halved"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Brand Consistency Management') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Ensuring your brand is applied correctly and consistently across all digital and physical touchpoints â€” protecting and strengthening your brand equity.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Build</em> a Brand That <strong>Lasts?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Brand Journey</a>
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

