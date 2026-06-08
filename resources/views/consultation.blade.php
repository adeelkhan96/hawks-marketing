@extends('layouts.base')
@section('title','Business Consultation | Hawks Marketing')
@section('meta-title','Business Consultation | Hawks Marketing')
@section('meta-description','Expert business and marketing consultation by Hawks Marketing — strategic guidance, market insights, and actionable recommendations to help your business achieve measurable growth.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'consultation'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Expert Consultation to Accelerate Your Growth') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Business consultation involves providing expert guidance to improve business strategy, operations, and growth potential. Hawks Marketing offer strategic recommendations based on market research, data analysis, and industry insights.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'We help businesses identify challenges and implement effective solutions for improvement. We guide decision-making to align with long-term business objectives.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para3', 'We deliver clear, actionable consultation to help businesses achieve measurable and sustainable success.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Consultation?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'Expert Guidance') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Strategic advice from experienced professionals with deep knowledge of digital marketing and business growth.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Tailored to You') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Recommendations built around your specific situation, goals, and challenges — not generic advice.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Actionable') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Every session ends with clear next steps you can implement immediately to see results.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Consultation Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-lightbulb"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Marketing Strategy Consultation') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'Expert guidance on your overall digital marketing direction — channel selection, budget allocation, campaign priorities, and go-to-market approaches.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-star"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'Brand Development Consultation') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Strategic advice on brand identity, positioning, and messaging — helping you build a brand that connects with your audience and differentiates you in the market.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-arrows-to-dot"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'Digital Growth Planning') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Structured planning sessions to map out your digital growth roadmap — identifying quick wins and long-term strategies to scale your online presence and revenue.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-handshake"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Ongoing Advisory Support') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Regular consultation sessions to keep your strategy aligned with changing market conditions, platform updates, and evolving business objectives.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready for <em>Expert</em> <strong>Guidance?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Book a Consultation</a>
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
