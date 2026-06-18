@extends('layouts.base')
@section('title','Video Editing | Hawks Marketing')
@section('meta-title','Video Editing | Hawks Marketing')
@section('meta-description','Professional video editing services by Hawks Marketing — social media reels, brand videos, corporate presentations, and ad creatives that tell your story compellingly.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'video-editing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Professional Video Editing That Tells Your Story') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Video is the most powerful content format for engagement and conversion. Hawks Marketing transform raw footage into polished, compelling videos.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We edit for every platform and purpose — from short-form social media reels to long-form brand videos and corporate presentations.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Video?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Platform-Optimised') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Edits tailored for Instagram, YouTube, TikTok, LinkedIn, and more with the right formats and aspect ratios.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Brand-Consistent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Colour grading, fonts, and lower thirds aligned with your brand identity throughout every video.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Fast Delivery') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Efficient editing workflows with clear revision rounds to meet your deadlines.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Video Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-film"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Social Media Reels & Shorts') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Attention-grabbing short-form videos optimised for Instagram Reels, TikTok, and YouTube Shorts.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-video"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Brand & Corporate Videos') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Professional brand films and corporate videos that communicate your story, values, and services with impact.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Video Ad Creatives') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'High-converting video ads for Facebook, Instagram, and YouTube designed to capture attention in the first few seconds.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-wand-magic-sparkles"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Motion Graphics & Effects') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Animated text, lower thirds, transitions, and motion graphic elements that add a polished, professional feel to any video.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Bring Your</em> Brand <strong>to Life?</strong></h4>
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

@endsection
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js?v=3"></script>
@endsection

