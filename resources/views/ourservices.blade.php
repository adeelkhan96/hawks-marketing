@extends('layouts.base')
@section('title','Our Services | Hawks Marketing')
@section('meta-title','Our Services | Hawks Marketing')
@section('meta-description','Explore Hawks Marketing\'s full suite of services: SEO, social media, PPC, graphic design, UI/UX, web development, app development, branding, content creation, and more.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'our-services'; @endphp

  {{-- Digital Marketing Services --}}
  <section class="why-choose-section page-top-offset" id="digital-marketing">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>What We Do</h6>
            <h4>{{ PC::getValue($p, 'digital', 'heading', 'Digital Marketing Services') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'digital', 'seo_title', 'Search Engine Optimization (SEO)') }}</h5>
            <p>{{ PC::getValue($p, 'digital', 'seo_desc', 'Improving your website\'s visibility on search engines to attract high-quality organic traffic.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'digital', 'social_title', 'Social Media Marketing & Management') }}</h5>
            <p>{{ PC::getValue($p, 'digital', 'social_desc', 'Strategic creation and management of content to build brand presence and audience engagement.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'digital', 'ppc_title', 'Pay-Per-Click Advertising (PPC)') }}</h5>
            <p>{{ PC::getValue($p, 'digital', 'ppc_desc', 'A performance-driven advertising model where you pay only when users click on your ads.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'digital', 'google_title', 'Google & Meta Advertisement') }}</h5>
            <p>{{ PC::getValue($p, 'digital', 'google_desc', 'Advertising across platforms like Google & Meta Platforms to reach highly specific audiences.') }}</p>
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

  {{-- Designing --}}
  <section class="why-choose-section" id="designing" style="padding-top:80px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Creative Excellence</h6>
            <h4>{{ PC::getValue($p, 'designing', 'heading', 'Designing') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'designing', 'graphic_title', 'Graphic Designing') }}</h5>
            <p>{{ PC::getValue($p, 'designing', 'graphic_desc', 'Graphic designing is the process of creating visual content to communicate information and ideas effectively.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'designing', 'uiux_title', 'UI/UX Designing') }}</h5>
            <p>{{ PC::getValue($p, 'designing', 'uiux_desc', 'UI/UX designing focuses on creating intuitive, visually appealing, and user-friendly digital experiences.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'designing', 'video_title', 'Video Editing') }}</h5>
            <p>{{ PC::getValue($p, 'designing', 'video_desc', 'Professional video editing services that transform raw footage into compelling, polished content.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'designing', 'smdesign_title', 'Social Media Design') }}</h5>
            <p>{{ PC::getValue($p, 'designing', 'smdesign_desc', 'Eye-catching, on-brand designs created specifically for social media platforms.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'designing', 'logo_title', 'Logo Designing') }}</h5>
            <p>{{ PC::getValue($p, 'designing', 'logo_desc', 'Distinctive, memorable logo designs that capture the essence of your brand.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- IT Solution --}}
  <section class="why-choose-section" id="it-solution" style="padding-top:80px; background:#f9f9f9;">
    <div class="container" style="padding-bottom:80px;">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Technology</h6>
            <h4>{{ PC::getValue($p, 'it', 'heading', 'IT Solution') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'it', 'web_title', 'Web Development') }}</h5>
            <p>{{ PC::getValue($p, 'it', 'web_desc', 'Web development involves building and maintaining functional, responsive, and high-performance websites.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'it', 'app_title', 'App Development') }}</h5>
            <p>{{ PC::getValue($p, 'it', 'app_desc', 'App development involves creating functional and user-focused mobile applications for Android and iOS platforms.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'it', 'custom_title', 'Custom Website Development') }}</h5>
            <p>{{ PC::getValue($p, 'it', 'custom_desc', 'Bespoke website solutions built from the ground up to match your exact business requirements.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'it', 'ecommerce_title', 'Ecommerce Web Development') }}</h5>
            <p>{{ PC::getValue($p, 'it', 'ecommerce_desc', 'Fully featured online stores designed to convert visitors into customers.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Branding --}}
  <section class="why-choose-section" id="branding" style="padding-top:80px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Identity</h6>
            <h4>{{ PC::getValue($p, 'branding', 'heading', 'Branding') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'branding', 'overview_title', 'Branding') }}</h5>
            <p>{{ PC::getValue($p, 'branding', 'overview_desc', 'Branding is the process of creating a distinct identity for a business through visual, verbal, and strategic elements.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'branding', 'strategy_title', 'Branding Strategy Services') }}</h5>
            <p>{{ PC::getValue($p, 'branding', 'strategy_desc', 'Data-informed brand strategy development that aligns your positioning, messaging, and identity with your business goals.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'branding', 'manual_title', 'Brand Manual Document') }}</h5>
            <p>{{ PC::getValue($p, 'branding', 'manual_desc', 'Comprehensive brand guidelines documentation covering logo usage, color palette, typography, tone of voice, and visual standards.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Content Creation --}}
  <section class="why-choose-section" id="content-creation" style="padding-top:80px; background:#f9f9f9;">
    <div class="container" style="padding-bottom:80px;">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Storytelling</h6>
            <h4>{{ PC::getValue($p, 'content', 'heading', 'Content Creation') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'content', 'overview_title', 'Content Creation') }}</h5>
            <p>{{ PC::getValue($p, 'content', 'overview_desc', 'Content creation involves developing engaging and relevant material to communicate a brand\'s message effectively.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'content', 'smcontent_title', 'Social Media Content Marketing') }}</h5>
            <p>{{ PC::getValue($p, 'content', 'smcontent_desc', 'Strategic content designed to grow your social media presence, drive engagement, and build a loyal audience.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'content', 'writing_title', 'Website Content Writing') }}</h5>
            <p>{{ PC::getValue($p, 'content', 'writing_desc', 'SEO-optimized, professionally written website copy that communicates your value proposition clearly.') }}</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'content', 'blog_title', 'Blog Writing') }}</h5>
            <p>{{ PC::getValue($p, 'content', 'blog_desc', 'Well-researched, engaging blog articles that establish your brand as an industry authority.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Other Services --}}
  <section class="why-choose-section" id="other-services" style="padding-top:80px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Advisory</h6>
            <h4>{{ PC::getValue($p, 'other', 'heading', 'Other Services') }}</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'other', 'ba_title', 'Business Analysis') }}</h5>
            <p>{{ PC::getValue($p, 'other', 'ba_desc', 'Business analysis involves evaluating a company\'s operations, market position, and performance to identify growth opportunities.') }}</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="service-desc-card">
            <h5>{{ PC::getValue($p, 'other', 'consult_title', 'Consultation') }}</h5>
            <p>{{ PC::getValue($p, 'other', 'consult_desc', 'Business consultation involves providing expert guidance to improve business strategy, operations, and growth potential.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Grow</em> Your <strong>Business?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Contact Us Today</a>
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
