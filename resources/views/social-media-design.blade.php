@extends('layouts.base')
@section('title','Social Media Design | Hawks Marketing')
@section('meta-title','Social Media Design | Hawks Marketing')
@section('meta-description','Eye-catching, on-brand social media designs by Hawks Marketing — post graphics, story templates, banners, and ad creatives for every major platform.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'social-media-design'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Social Media Design That Stops the Scroll') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'In a crowded social media landscape, visuals are what make your brand stand out.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We produce post graphics, story templates, highlight covers, banners, and ad creatives for Instagram, Facebook, LinkedIn, Twitter, and more.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Social Design?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Platform-Native') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Designs built for the specific dimensions and formats of each social media platform.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Brand-Consistent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Your colors, fonts, and visual style applied consistently across every piece of content.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Engagement-Focused') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Design decisions driven by what actually performs well on social media.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Social Media Design Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-image"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Post & Feed Graphics') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Visually compelling post designs for your feed — single images, carousels, and quote graphics that maintain a consistent, professional aesthetic.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-mobile-screen"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Stories & Reels Covers') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Branded story templates and highlight cover icons that create a polished, cohesive look across your Instagram and Facebook profiles.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Social Ad Creatives') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'High-converting ad creative designs for paid social campaigns — built to perform on Facebook, Instagram, and LinkedIn.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-photo-film"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Profile & Cover Art') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Professional profile pictures, cover banners, and channel art designed to make a strong first impression across all your social media profiles.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Transform</em> Your <strong>Social Presence?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get a Design Package</a>
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

