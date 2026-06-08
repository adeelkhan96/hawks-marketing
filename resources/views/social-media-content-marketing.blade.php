@extends('layouts.base')
@section('title','Social Media Content Marketing | Hawks Marketing')
@section('meta-title','Social Media Content Marketing | Hawks Marketing')
@section('meta-description','Strategic social media content marketing by Hawks Marketing — content strategies that grow your audience, drive engagement, and build brand authority across all major platforms.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'social-media-content-marketing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Social Media Content Marketing That Builds Real Audiences') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', "Social media content marketing goes beyond posting regularly — it's about creating the right content for the right audience at the right time.") }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We tailor content strategies to align with your brand goals and target audience behavior across all major platforms.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Social Content?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Strategy-Led') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Content backed by platform data, audience insights, and clear objectives — not just random posting.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Platform-Native') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', "Content tailored to how each platform's algorithm and audience prefers to consume information.") }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Consistent Voice') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Every piece of content reflects your brand tone and messaging across all channels.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Social Media Content Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-calendar-days"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Content Strategy & Planning') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Full content calendar development — topics, formats, posting frequency, and platform distribution — all aligned to your marketing goals and audience behavior.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-pen-to-square"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Content Creation') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'High-quality posts, captions, graphics, and short-form videos crafted to perform well organically and engage your target audience authentically.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-chart-pie"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Performance Analytics') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Regular reporting on reach, engagement, follower growth, and content performance — with insights used to continuously refine and improve your strategy.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-hashtag"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Hashtag & Trend Strategy') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Research-based hashtag strategies and trend monitoring that expand your organic reach and keep your content visible and discoverable to new audiences.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Grow</em> on <strong>Social Media?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get a Content Plan</a>
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
