@extends('layouts.base')
@section('title','Custom Website Development | Hawks Marketing')
@section('meta-title','Custom Website Development | Hawks Marketing')
@section('meta-description','Bespoke website development by Hawks Marketing — custom-built solutions tailored to your exact business requirements, with clean code and scalable architecture.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'custom-website-development'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Custom Websites Built to Fit Your Business Exactly') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', "Off-the-shelf templates can't capture what makes your business unique. Hawks Marketing build custom websites from the ground up — tailored to your exact requirements, brand identity, and business objectives.") }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We focus on clean code, scalable architecture, and seamless integrations that grow with your business.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Choose Custom Development?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Built for You') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', "Every feature, layout, and functionality is designed around your specific needs, not a template's limitations.") }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Scalable') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', "Clean, maintainable code that's easy to extend as your business and requirements evolve.") }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Performance-Optimised') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Lightweight, fast-loading code that performs better than bloated template-based builds.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Custom Development Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-code"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Fully Custom Web Development') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'End-to-end website development built from scratch using modern technologies — no templates, no shortcuts, just a solution crafted precisely for your business.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-plug"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Third-Party Integrations') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Seamless integration with CRMs, payment gateways, APIs, email platforms, and any other tools your business relies on.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-lock"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Secure & Tested Builds') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Security-first development with thorough testing across devices and browsers — ensuring your website is reliable, protected, and ready for real-world use.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-wrench"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Maintenance & Support') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Ongoing maintenance, updates, and technical support to keep your custom website running smoothly and securely after launch.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready for a Website <em>Built</em> <strong>Just for You?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Discuss Your Project</a>
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
