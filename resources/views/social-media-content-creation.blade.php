@extends('layouts.base')
@section('title','Social Media Content Creation Services | Hawks Marketing')
@section('meta-title','Social Media Content Creation Services | Hawks Marketing')
@section('meta-description','Professional social media content creation by Hawks Marketing — posts, captions, visuals, and short-form videos produced consistently to keep your brand active and engaging.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'social-media-content-creation'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Social Media Content Creation at Scale') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Consistent, high-quality content is what separates brands that grow from brands that stagnate. Hawks Marketing produce a steady stream of engaging social media content.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', "We handle the full creation process: ideation, scripting, design, and scheduling. Every piece of content is crafted to align with your brand voice and perform well on each platform's algorithm.") }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Content Creation?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'End-to-End') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', "We handle everything from concept through creation and scheduling, so you don't have to.") }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Brand-Consistent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Every piece of content reflects your brand voice, visual identity, and messaging.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'High Volume, High Quality') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Consistent output without compromising on the standard of each individual piece.') }}</p>
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
            <h6>What We Create</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Content Creation Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-image"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Visual Post Graphics') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Branded graphic posts for your feed — single images, carousels, infographics, and quote cards designed to stand out and drive engagement.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-align-left"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Caption & Copy Writing') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Engaging, on-brand captions and post copy that complement your visuals, communicate your message clearly, and include relevant calls to action.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-film"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Short-Form Video Content') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Reels, shorts, and story videos produced and edited for social media — scripted, shot-listed, or edited from your existing footage.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-clock"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Content Scheduling & Publishing') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Strategic scheduling of content at optimal times for your audience — with consistent posting frequency to maintain algorithm favour and audience engagement.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Fuel</em> Your Social Media with <strong>Great Content?</strong></h4>
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

