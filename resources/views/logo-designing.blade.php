@extends('layouts.base')
@section('title','Logo Designing | Hawks Marketing')
@section('meta-title','Logo Designing | Hawks Marketing')
@section('meta-description','Distinctive, memorable logo designs by Hawks Marketing — built to represent your brand across every platform and medium with clarity and impact.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'logo-designing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Logo Design That Defines Your Brand') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Your logo is the most visible representation of your brand. Hawks Marketing craft distinctive, memorable logos that capture the essence of your business.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We design logos that are versatile, scalable, and built to represent your business across every platform and medium.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Logos?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Unique & Original') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Every logo is custom-designed from scratch for your specific brand — never templated.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Versatile') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Delivered in multiple formats (SVG, PNG, PDF) ready for both digital and print use.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Brand-Rooted') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Designed after understanding your brand values, target audience, and industry.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Logo Design Process') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-lightbulb"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Brand Discovery') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'We begin by understanding your business, target audience, values, and competitive landscape to ensure your logo is strategically positioned.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-pencil-ruler"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Concept Development') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'We develop multiple logo concepts with varying styles and approaches, giving you real options to choose from and refine based on your vision.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-palette"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Color & Typography') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Careful selection of colors, fonts, and visual elements that align with your brand personality and resonate with your target audience.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-file-export"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Final Delivery') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Complete logo package delivered in all required formats — vector files, transparent backgrounds, light and dark variants — ready for any application.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready for a <em>Logo</em> That <strong>Stands Out?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Logo Project</a>
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
