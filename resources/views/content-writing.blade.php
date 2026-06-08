
@extends('layouts.base')
@section('title','Content Writing | Hawks Marketing')
@section('meta-title','Content Writing | Hawks Marketing')
@section('meta-description','Hawks Marketing delivers compelling, SEO-optimised content — blog posts, web copy, social media content, and more — to engage your audience and improve your search visibility.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'content-writing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Create Your Brand Story with Hawks Marketing') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Content is king, and our team has perfected the craft of delivering professional content writing services in alignment with your business goals.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'In crowded digital platforms, your business genuinely needs content that makes you stand apart from the rest.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'From developing memorable phrases and slogans to composing detailed articles; from engaging blog posts to SEO-based content, our content writers handle it all.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'What Makes Us Stand Out') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Creative') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Our experts develop resonant ideas and solutions to enhance your company\'s growth, just like an in-house team.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Coherent') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Our teams work in close coordination while involving our client at each step of the content marketing process.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Cost-efficient') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'We deliver affordable content writing services without compromising on quality and excellence.') }}</p>
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
            <h6>Our Services</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Content Writing Services We Offer') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-bullhorn"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Ad Copywriting') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Having a persuasive ad campaign is essential. From campaign design to timely implementation, we maximize ROI for your ad campaigns.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-globe"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Web Copywriting') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Our skilled team delivers the finest web content writing — engaging copy that captures attention and guides readers to take the intended action.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-hashtag"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Social Media Content') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'We deliver excellent social media content writing services for maximum market coverage.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-file-lines"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Website Content Writing') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Our SEO content writers embrace the challenge, composing content for landing pages, service pages, about pages, and more.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-pen-nib"></i>
            <h4>{{ PC::getValue($p, 'services', 's5_title', 'Blogs and Articles') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's5_desc', 'Selecting trending topics and creating convincing titles while delivering on the topic in the best possible way.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-chart-bar"></i>
            <h4>{{ PC::getValue($p, 'services', 's6_title', 'Presentations & Case Studies') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's6_desc', 'We compose content that presents ideas and data in the most suitable and understandable form.') }}</p>
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
            <h4>{{ PC::getValue($p, 'process', 'heading', 'Our Content Creation Process') }}</h4>
            <p>{{ PC::getValue($p, 'process', 'description', 'As the premier content writing company, we coordinate with our clients to understand business requirements and produce content aligned with business objectives.') }}</p>
            <div class="green-button">
              <a href="{{ route('contact') }}">Get a Content Quote</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>{{ PC::getValue($p, 'process', 'step1_title', 'Connect & Audit') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step1_desc', 'We connect with you to understand your business goals, then perform comprehensive industry research for each digital platform.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>{{ PC::getValue($p, 'process', 'step2_title', 'Strategy Development') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step2_desc', 'We create content strategies supported by extensive research and accurate data for your specific target niche and region.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>{{ PC::getValue($p, 'process', 'step3_title', 'Content Creation') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step3_desc', 'Once the strategy is set, our expert writers create best-suited content for each platform, tailored to your audience and brand voice.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>{{ PC::getValue($p, 'process', 'step4_title', 'Review & Publish') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step4_desc', 'Content passes through multiple checks of our optimization checklists before being published using the optimal tools for maximum reach.') }}</p>
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
          <h4>Ready to <em>Captivate</em> Your <strong>Target Audience?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Partner with Hawks Marketing</a>
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
