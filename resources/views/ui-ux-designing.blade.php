@extends('layouts.base')
@section('title','UI/UX Designing | Hawks Marketing')
@section('meta-title','UI/UX Designing | Hawks Marketing')
@section('meta-description','Hawks Marketing creates intuitive, user-friendly digital experiences â€” wireframes, prototypes, and final UI designs that improve user engagement and reduce friction.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'ui-ux-designing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'UI/UX Design That Puts the User First') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'UI/UX designing focuses on creating intuitive, visually appealing, and user-friendly digital experiences.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We improve user experience by analyzing behavior and optimizing interaction flow and usability.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver functional and aesthetically refined digital experiences that improve satisfaction and performance.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for UI/UX?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'User-Centered') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p1_text', 'Every design decision is informed by how real users think, behave, and interact with digital interfaces.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Business-Aligned') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p2_text', 'We balance aesthetics with functionality to create experiences that look great and convert well.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Prototype-First') }}</strong> â€” {{ PC::getValue($p, 'highlight', 'p3_text', 'We validate designs through wireframes and prototypes before final delivery, saving time and cost.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our UI/UX Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-sitemap"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Wireframing & Prototyping') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Structured wireframes and interactive prototypes that map out user journeys and interface layouts before any development begins.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-mobile-alt"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Mobile & Web UI Design') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Clean, modern interface designs for mobile applications and web platforms that are responsive, accessible, and optimised.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-users"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'User Experience Analysis') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'We analyse user behavior patterns to identify friction points and redesign interaction flows that improve usability and conversion rates.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-layer-group"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Design System Creation') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Consistent design systems with reusable components, style guides, and interaction patterns that keep your product visually cohesive.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Improve</em> Your <strong>User Experience?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Project</a>
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

