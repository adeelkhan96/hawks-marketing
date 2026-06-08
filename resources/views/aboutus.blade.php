@extends('layouts.base')
@section('title','About Us | Hawks Marketing')
@section('meta-title','About Us | Hawks Marketing')
@section('meta-description','Learn about Hawks Marketing — our story, mission, and the team behind your brand\'s digital growth. We combine strategy, creativity, and data to deliver real results.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'about'; @endphp

  {{-- Company About --}}
  <section class="about-company-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h6>Who We Are</h6>
            <h4>About Us</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <p>{{ PC::getValue($p, 'company', 'para1', 'Hawks Marketing is a full-service digital marketing agency established in 2024, with operational experience dating back to 2019.') }}</p>
          <p>{{ PC::getValue($p, 'company', 'para2', 'We deliver strategic, data-driven marketing solutions and IT solutions designed to enhance brand visibility, strengthen audience engagement, and generate measurable business growth.') }}</p>
          <p>{{ PC::getValue($p, 'company', 'para3', 'Our focus is to help businesses navigate the evolving digital landscape with structured strategies, consistent execution, and long-term impact.') }}</p>

          <h3 class="why-heading">{{ PC::getValue($p, 'why', 'heading', 'Why Hawks Marketing') }}</h3>
          <p class="approach-subtext">{{ PC::getValue($p, 'why', 'subtext', 'Selecting the right marketing partner is essential for sustainable growth.') }}</p>
          <p class="approach-intro">{{ PC::getValue($p, 'why', 'intro', 'At Hawks Marketing, we take a disciplined and results-oriented approach to every project. Our strategies are carefully developed based on business goals, audience behavior, and market conditions to ensure maximum effectiveness.') }}</p>
          <p><strong>What defines our approach?</strong></p>
          <ul class="approach-list">
            <li>{{ PC::getValue($p, 'why', 'point1', 'Strong emphasis on measurable performance and return on investment') }}</li>
            <li>{{ PC::getValue($p, 'why', 'point2', 'Tailored strategies designed for each client\'s unique requirements') }}</li>
            <li>{{ PC::getValue($p, 'why', 'point3', 'Integration of creative direction with data-driven decision-making') }}</li>
            <li>{{ PC::getValue($p, 'why', 'point4', 'Commitment to transparency, consistency, and accountability') }}</li>
          </ul>
          <p>{{ PC::getValue($p, 'why', 'closing', 'We focus on building long-term partnerships by delivering reliable, scalable, and performance-driven marketing solutions.') }}</p>
        </div>
      </div>
    </div>
  </section>

  {{-- Mission & Vision --}}
  <section class="mission-vision-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Our Direction</h6>
            <h4>Mission &amp; Vision</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="mv-box vision-box">
            <h4>Vision</h4>
            <p>{{ PC::getValue($p, 'vision', 'text', 'To establish Hawks Marketing as a globally recognized digital marketing agency, known for its strategic expertise, innovative thinking, and consistent delivery of high-performance results.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="mv-box mission-box">
            <h4>Mission</h4>
            <p>{{ PC::getValue($p, 'mission', 'text', 'To empower businesses by providing structured, data-driven marketing solutions that transform ideas into measurable growth, enabling brands to compete and succeed in a rapidly evolving digital environment.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Meet Our Founder --}}
  <section class="founder-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Leadership</h6>
            <h4>Meet Our Founder</h4>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="founder-card">
            <div class="team-avatar">
              <i class="fas fa-user-tie"></i>
            </div>
            <h5>{{ PC::getValue($p, 'founder', 'name', 'Aashir Khan Jadoon') }}</h5>
            <span>{{ PC::getValue($p, 'founder', 'role', 'Founder & CEO') }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- Meet Our Core Team --}}
  <section class="team-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Our People</h6>
            <h4>Meet Our Core Team</h4>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Usman Qureshi</h6>
            <span>Marketing Strategist</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Ali Hassan</h6>
            <span>Digital Marketing Expert</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Aarib Rehman</h6>
            <span>Social Media Manager</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Adeel Khan</h6>
            <span>IT Manager</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Kashif Khan</h6>
            <span>Sr. Developer</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Saud Khan</h6>
            <span>IT Expert</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Safiya Gul</h6>
            <span>UI/UX Designer</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Noor ul Ain Zafar</h6>
            <span>Graphic Designer</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Saad</h6>
            <span>Graphic Designer</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Samiya Afzal</h6>
            <span>Videographer</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Daniyal Akhtar</h6>
            <span>Video Editor</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="team-card">
            <div class="team-avatar"><i class="fas fa-user"></i></div>
            <h6>Ammar Khan</h6>
            <span>Content Creator</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Accelerate</em> Your <strong>Digital Success?</strong></h4>
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

@endsection
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
