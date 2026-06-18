@extends('layouts.base')
@section('title','Blog Writing | Hawks Marketing')
@section('meta-title','Blog Writing | Hawks Marketing')
@section('meta-description','SEO-optimised, professionally researched blog writing by Hawks Marketing — articles that establish your brand as an industry authority and drive organic traffic.')
@section('content')
@php use App\Models\PageContent as PC; $p = 'blog-writing'; @endphp

  <section class="intro-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <h3>{{ PC::getValue($p, 'intro', 'heading', 'Blog Writing That Builds Authority and Drives Traffic') }}</h3>
          <p>{{ PC::getValue($p, 'intro', 'para1', 'Well-written, well-researched blog content establishes your brand as an industry authority, improves your SEO rankings, and drives consistent organic traffic to your website.') }}</p>
          <p>{{ PC::getValue($p, 'intro', 'para2', 'Hawks Marketing produce professional blog articles tailored to your industry, audience, and keyword strategy. Every article is thoroughly researched, clearly structured, and written in your brand voice.') }}</p>
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0">
          <div class="intro-highlight">
            <h5>{{ PC::getValue($p, 'highlight', 'heading', 'Why Hawks Marketing for Blogs?') }}</h5>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p1_label', 'SEO-Optimised') }}</strong> — {{ PC::getValue($p, 'highlight', 'p1_text', 'Articles built around targeted keywords with proper structure, meta descriptions, and internal linking.') }}</p>
            <p style="margin-bottom:14px;"><strong>{{ PC::getValue($p, 'highlight', 'p2_label', 'Research-Backed') }}</strong> — {{ PC::getValue($p, 'highlight', 'p2_text', 'Well-researched, accurate content that builds genuine trust and authority with your audience.') }}</p>
            <p style="margin-bottom:0;"><strong>{{ PC::getValue($p, 'highlight', 'p3_label', 'Brand Voice') }}</strong> — {{ PC::getValue($p, 'highlight', 'p3_text', 'Every article written in your tone — whether professional, conversational, technical, or industry-specific.') }}</p>
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
            <h4>{{ PC::getValue($p, 'services', 'heading', 'Our Blog Writing Services') }}</h4>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-newspaper"></i>
            <h4>{{ PC::getValue($p, 'services', 's1_title', 'Industry Blog Articles') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's1_desc', 'In-depth articles covering topics relevant to your industry — establishing your brand as a knowledgeable, trustworthy voice in your field.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-magnifying-glass"></i>
            <h4>{{ PC::getValue($p, 'services', 's2_title', 'SEO Blog Content') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's2_desc', 'Keyword-targeted articles structured to rank on search engines and drive qualified organic traffic to your website month after month.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-list-check"></i>
            <h4>{{ PC::getValue($p, 'services', 's3_title', 'How-To & Guide Articles') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's3_desc', 'Practical, value-driven how-to guides and educational content that helps your audience solve problems — building loyalty and encouraging return visits.') }}</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6">
          <div class="service-item">
            <i class="fas fa-calendar-check"></i>
            <h4>{{ PC::getValue($p, 'services', 's4_title', 'Blog Content Calendar') }}</h4>
            <p>{{ PC::getValue($p, 'services', 's4_desc', 'Strategic blog publishing schedules with topics planned in advance — ensuring consistent output, topical relevance, and maximum SEO impact over time.') }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Ready to <em>Build Authority</em> Through <strong>Content?</strong></h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="orange-button">
              <a href="{{ route('contact') }}">Start Your Blog Strategy</a>
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

