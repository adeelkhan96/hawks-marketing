@extends('layouts.base')
@section('title','Brand Manual Document | Hawks Marketing')
@section('meta-title','Brand Manual Document | Hawks Marketing')
@section('meta-description','Professional brand manual and guidelines documentation by Hawks Marketing — logo usage, colors, typography, tone of voice, and visual standards for consistent brand representation.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'brand-manual'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Brand Manual That Keeps Your Brand Consistent Everywhere') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'A brand manual is the definitive reference document for how your brand should look, sound, and feel across every touchpoint.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We document logo usage rules, color specifications, typography systems, tone of voice guidelines, and visual standards — ensuring your brand is applied consistently.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why a Brand Manual Matters') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Consistency') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Ensures every piece of branded content looks and feels cohesive, no matter who creates it.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Protection') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Clear rules prevent misuse of your brand assets that could dilute brand equity.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Efficiency') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Faster onboarding for new team members and agencies with clear reference material.') }}</p>
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
            <h6>What's Included</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Brand Manual Contents') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-trademark"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Logo Usage Guidelines') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Correct and incorrect logo usage rules — minimum sizes, clear space requirements, approved color variations, and forbidden alterations.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-fill-drip"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Color System') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Primary and secondary color palettes with exact HEX, RGB, CMYK, and Pantone values for consistent reproduction across digital and print media.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-font"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Typography Standards') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Font families, weights, sizes, and hierarchy rules for all brand communications — headings, body copy, captions, and UI text.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-comment"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Tone of Voice & Messaging') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Brand voice personality, communication tone, key messages, and language guidelines ensuring consistent, on-brand written communication.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Document</em> Your <strong>Brand Identity?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get Your Brand Manual</a>
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

