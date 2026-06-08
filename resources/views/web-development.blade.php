
@extends('layouts.base')
@section('title','Website Development | Hawks Marketing')
@section('meta-title','Website Development | Hawks Marketing')
@section('meta-description','Hawks Marketing builds fast, responsive, and conversion-focused websites. From landing pages to full web applications, we design and develop digital experiences that grow your business.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'web-development'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Website Development Services that Leave a Lasting Impression') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'All businesses want effective websites that work well with all devices; the importance of having an optimal website can never be overlooked.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'With our creative team, we set out to create elegant and functional websites that engage your potential customers.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Key Features of Our Websites') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'User-Friendly') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'We build websites that are user-friendly while maintaining aesthetic excellence for an impactful online presence.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Responsive') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Our team creates responsive web designs for smooth flow of prospects down the marketing funnel on any device.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Tested') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'All website designs are thoroughly tested for each functionality before delivery to our clients.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p4_label', 'SEO Optimized') }}</strong> — {{ PC::getValue($p, 'highlight', 'p4_text', 'All our web designs address the impacting metrics of search algorithms from day one.') }}</p>
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
            <h6>What We Build</h6>
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Web Development Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-blog"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Blogging Websites') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Blog websites designed to engage readers and keep them connected for more.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-briefcase"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Business Websites') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Business websites launched to promote your products and services. Our professionals deliver web designs that maximize conversion.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-cart-shopping"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'E-commerce Websites') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Planning to launch an online store? Hawks Marketing is the optimal e-commerce website development service provider for your business.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-comments"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Online Forums & Portals') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Web-based platforms for public discussions, queries, responses, and reviews.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-laptop-code"></i>
            <h4>{{ PC::getValue($p, 'services', 's5_title', 'Web Applications') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's5_desc', 'From API integrations to launching your web apps on the proper platforms, our team can completely address your requirements.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="service-item">
            <i class="fas fa-wrench"></i>
            <h4>{{ PC::getValue($p, 'services', 's6_title', 'Website Maintenance') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's6_desc', 'Our professionals incorporate the latest features in your website design and keep it maintained and secure.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Technology Stack</h6>
            <h4>{{ PC::getValue($p, 'tech', 'heading', 'Powered by Industry-Leading Technologies') }}</h4>
          </div>
        </div>
        <div class="col-lg-12 text-center" style="margin-bottom: 40px;">
          <p style="max-width: 680px; margin: 0 auto 25px;">{{ PC::getValue($p, 'tech', 'description', 'Our technology stack is carefully selected to deliver high-performing, user-friendly websites with fast load times and seamless functionality, ensuring an exceptional experience on any device.') }}</p>
          <div>
            <span class="tech-tag">AWS</span>
            <span class="tech-tag">Azure</span>
            <span class="tech-tag">GCP</span>
            <span class="tech-tag">Docker</span>
            <span class="tech-tag">Node.js</span>
            <span class="tech-tag">WordPress</span>
            <span class="tech-tag">React</span>
            <span class="tech-tag">Angular</span>
            <span class="tech-tag">JavaScript</span>
            <span class="tech-tag">MongoDB</span>
            <span class="tech-tag">MySQL</span>
            <span class="tech-tag">PHP</span>
            <span class="tech-tag">Laravel</span>
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
            <h4>{{ PC::getValue($p, 'process', 'heading', 'Our Web Development Process') }}</h4>
            <p>{{ PC::getValue($p, 'process', 'description', 'From obtaining clear requirements to post-launch maintenance, our end-to-end development process ensures you receive a website that performs, converts, and grows with your business.') }}</p>
            <div class="green-button">
              <a href="{{ route('contact') }}">Start Your Project</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>{{ PC::getValue($p, 'process', 'step1_title', 'Requirements & Research') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step1_desc', 'We gather clear requirements and perform extensive market research to add exceptional quality to your digital presence.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>{{ PC::getValue($p, 'process', 'step2_title', 'Design & Customization') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step2_desc', 'We select elegant themes and customize your website to speak for your company\'s excellence while considering your audience\'s aesthetic sensibilities.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>{{ PC::getValue($p, 'process', 'step3_title', 'Development & APIs') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step3_desc', 'Our team handles full back-end development and integrates APIs for efficient synchronization of data among third-party services.') }}</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>{{ PC::getValue($p, 'process', 'step4_title', 'Testing & Deployment') }}</h4>
                  <p>{{ PC::getValue($p, 'process', 'step4_desc', 'We test each functionality with meticulous attention to detail prior to final deployment, then provide ongoing maintenance post-launch.') }}</p>
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
          <h4>Ready to <em>Build</em> Your <strong>Dream Website?</strong></h4>
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
