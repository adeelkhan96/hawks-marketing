@extends('layouts.base')
@section('title','App Development | Hawks Marketing')
@section('meta-title','App Development | Hawks Marketing')
@section('meta-description','Custom mobile app development for Android and iOS by Hawks Marketing — performance-focused, user-centered applications built to support your business growth.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'app-development'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Mobile Apps That Engage Users and Drive Growth') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'App development involves creating functional and user-focused mobile applications for Android and iOS platforms. Hawks Marketing develop custom applications tailored to business needs, ensuring performance, scalability, and security.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We design intuitive interfaces that provide smooth navigation and a seamless user experience. We build both front-end and back-end systems to ensure complete functionality and reliability.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver high-quality mobile applications that enhance user engagement and support business growth.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Apps?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Cross-Platform') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Native and cross-platform development for both Android and iOS from a single project.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'User-Centered Design') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Intuitive interfaces designed around how your users actually think and navigate.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'End-to-End') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'From concept and design through development, testing, and app store deployment.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our App Development Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-mobile-alt"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Android & iOS Development') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Custom mobile application development for both Android and iOS platforms — native performance with a consistent, high-quality user experience on every device.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-pencil-ruler"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'App UI/UX Design') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', "Clean, intuitive mobile interface design that makes your app easy to navigate and enjoyable to use — reducing drop-off and increasing user retention.") }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-server"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Backend & API Development') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', "Robust backend systems and APIs that power your app's functionality — user authentication, data management, push notifications, and third-party integrations.") }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-upload"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'App Store Deployment') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Complete handling of app store submission processes for Google Play and Apple App Store — including store listings, screenshots, and compliance requirements.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Build</em> Your <strong>Mobile App?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your App Project</a>
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

