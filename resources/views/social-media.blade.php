
@extends('layouts.base')
@section('title','Social Media Management | Hawks Marketing')
@section('meta-title','Social Media Management | Hawks Marketing')
@section('meta-description','Grow your brand on social media with Hawks Marketing. We manage content creation, scheduling, community engagement, and paid social campaigns across all major platforms.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'social-media'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Leveraging Social Media For Remarkable Growth') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Social media is the most critical marketing tool today and understanding how to utilize it effectively is essential to achieving excellent results.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'Hawks Marketing\'s social media management services help you reach the proper target audience and boost awareness of your company.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'Regardless of how many social networks a company uses, social media management is a vital element of any marketing plan.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>Platforms We Master</h5>
            <div class="platform-tags">
              <span class="platform-tag">Facebook</span>
              <span class="platform-tag">Instagram</span>
              <span class="platform-tag">Twitter / X</span>
              <span class="platform-tag">LinkedIn</span>
              <span class="platform-tag">YouTube</span>
              <span class="platform-tag">TikTok</span>
              <span class="platform-tag">Snapchat</span>
              <span class="platform-tag">Pinterest</span>
            </div>
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
            <h6>Our Offerings</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Social Media Services That Drive Revenue') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-sliders"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Social Media Optimization') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'We optimize your posts and profiles for maximum returns, helping business owners, content creators, and social media marketers extract the most from their social media presence.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-rectangle-ad"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Ad Campaigns') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Our advertisement strategies are crafted to enhance brand promotion and recognition.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-pen-fancy"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Social Media Content') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Quality content that connects with your audience\'s aspirations and interests.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-chart-pie"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Social Media Audit') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'We assess how effectively your social media activities are accomplishing your management strategy goals.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="what-we-do">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="left-content">
            <h4>{{ PC::getValue($p, 'process', 'heading', 'Our Social Media Process') }}</h4>
            <p>{{ PC::getValue($p, 'process', 'description', 'We work methodically to ensure every campaign is backed by research, strategy, and data.') }}</p>
            <div class="green-button">
              <a href="{{ route('contact') }}">Start Growing Today</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>{{ PC::getValue($p, 'process', 'step1_title', 'Industry Research') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step1_desc', 'We collect historical and current data from social networks to better understand the target market for your brand.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>{{ PC::getValue($p, 'process', 'step2_title', 'Audience & Platform') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step2_desc', 'We build strategic audience profiles and identify the optimal platforms to achieve the best return on your time and investment.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>{{ PC::getValue($p, 'process', 'step3_title', 'Content Creation') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step3_desc', 'We develop content calendars and create clear, shareable content that connects your brand to your audience at the right moment.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>{{ PC::getValue($p, 'process', 'step4_title', 'Schedule & Analyse') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step4_desc', 'We schedule posts at optimal times, collect data from social channels, and continuously refine strategy to improve results.') }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Grow</em> Your <strong>Social Presence?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Get Started Today</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
        <div class="col-lg-2 col-sm-4 col-6"><div class="item"><img src="assets/images/client-01.png" alt=""></div></div>
      </div>
    </div>
  </section>

@endsection
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
