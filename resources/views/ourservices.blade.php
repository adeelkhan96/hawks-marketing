@extends('layouts.base')
@section('title','Our Services | Hawks Marketing')
@section('meta-title','Our Services | Hawks Marketing')
@section('meta-description','Explore Hawks Marketing\'s full suite of services: SEO, social media, PPC, graphic design, UI/UX, web development, app development, branding, content creation, and more.')
@php use App\Models\PageContent as PC; $p = 'our-services'; @endphp

@section('head')
<style>
/* Light section cards */
.svc-card-light {
    display:block; background:#fff; border-radius:14px; padding:28px;
    box-shadow:0 4px 20px rgba(33,39,65,.07);
    border-bottom:3px solid transparent;
    text-decoration:none !important; transition:all .3s; height:100%;
}
.svc-card-light:hover {
    box-shadow:0 12px 36px rgba(33,39,65,.13);
    transform:translateY(-5px);
    border-bottom-color:#f1a51e;
}
.svc-card-light .svc-icon {
    width:56px; height:56px; border-radius:14px;
    background:rgba(241,165,30,.1); display:flex; align-items:center;
    justify-content:center; margin-bottom:18px; transition:all .3s;
}
.svc-card-light:hover .svc-icon { background:#f1a51e; }
.svc-card-light .svc-icon i { color:#f1a51e; font-size:22px; transition:color .3s; }
.svc-card-light:hover .svc-icon i { color:#fff; }
.svc-card-light h5 { font-size:16px; font-weight:700; color:#212741; margin-bottom:10px; }
.svc-card-light p { font-size:13px; color:#6b7280; line-height:1.75; margin-bottom:14px; flex:1; }
.svc-card-light .svc-more { font-size:13px; font-weight:600; color:#f1a51e; display:flex; align-items:center; gap:6px; }

/* Dark section cards */
.svc-card-dark {
    display:block; background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.1); border-radius:14px; padding:28px;
    text-decoration:none !important; transition:all .3s; height:100%;
}
.svc-card-dark:hover {
    background:rgba(255,255,255,.1);
    border-color:rgba(241,165,30,.5);
    transform:translateY(-5px);
}
.svc-card-dark .svc-icon {
    width:56px; height:56px; border-radius:14px;
    background:rgba(241,165,30,.15); display:flex; align-items:center;
    justify-content:center; margin-bottom:18px; transition:all .3s;
}
.svc-card-dark:hover .svc-icon { background:#f1a51e; }
.svc-card-dark .svc-icon i { color:#f1a51e; font-size:22px; transition:color .3s; }
.svc-card-dark:hover .svc-icon i { color:#fff; }
.svc-card-dark h5 { font-size:16px; font-weight:700; color:#fff; margin-bottom:10px; }
.svc-card-dark p { font-size:13px; color:rgba(255,255,255,.6); line-height:1.75; margin-bottom:14px; flex:1; }
.svc-card-dark .svc-more { font-size:13px; font-weight:600; color:#f8c96a; display:flex; align-items:center; gap:6px; }

/* Category nav pills */
.cat-pill {
    display:inline-flex; align-items:center; gap:8px;
    background:rgba(255,255,255,.07); border:1px solid rgba(255,255,255,.12);
    color:rgba(255,255,255,.8); padding:9px 18px; border-radius:30px;
    font-size:13px; font-weight:600; text-decoration:none; transition:all .25s;
    white-space:nowrap;
}
.cat-pill:hover, .cat-pill:focus {
    background:#f1a51e; border-color:#f1a51e; color:#fff;
}

/* Section heading left-aligned with accent */
.svc-section-label {
    font-size:12px; font-weight:700; text-transform:uppercase;
    letter-spacing:2px; color:#f1a51e; margin-bottom:10px;
}
.svc-section-label.dark { color:#f1a51e; }
</style>
@endsection

@section('content')

{{-- ===== HERO ===== --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:90px 0 70px;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-80px;right:-80px;width:400px;height:400px;background:rgba(241,165,30,.07);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-60px;left:-40px;width:260px;height:260px;background:rgba(241,165,30,.05);border-radius:50%;pointer-events:none;"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">
                    <i class="fas fa-cogs me-2"></i>What We Do
                </p>
                <h1 style="color:#fff;font-size:44px;font-weight:800;line-height:1.2;margin-bottom:18px;">
                    Full-Service<br><span style="color:#f1a51e;">Digital Marketing</span><br>Under One Roof
                </h1>
                <p style="color:rgba(255,255,255,.72);font-size:16px;line-height:1.8;max-width:480px;margin-bottom:36px;">
                    From search engine rankings to stunning designs and custom-built websites — we cover every pillar of your digital growth.
                </p>
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
                    Get a Free Consultation <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-6">
                <p style="color:rgba(255,255,255,.45);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:14px;">Jump to a Category</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#digital-marketing" class="cat-pill"><i class="fas fa-bullhorn"></i>Digital Marketing</a>
                    <a href="#designing" class="cat-pill"><i class="fas fa-paintbrush"></i>Design</a>
                    <a href="#it-solution" class="cat-pill"><i class="fas fa-code"></i>IT Solutions</a>
                    <a href="#branding" class="cat-pill"><i class="fas fa-star"></i>Branding</a>
                    <a href="#content-creation" class="cat-pill"><i class="fas fa-pen-nib"></i>Content</a>
                    <a href="#other-services" class="cat-pill"><i class="fas fa-handshake"></i>Advisory</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== DIGITAL MARKETING ===== --}}
<section id="digital-marketing" style="background:#fff;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Digital Marketing</p>
                <h2 style="font-size:36px;font-weight:800;color:#212741;margin-bottom:14px;">
                    {{ PC::getValue($p, 'digital', 'heading', 'Digital Marketing Services') }}
                </h2>
                <p style="font-size:15px;color:#6b7280;max-width:540px;line-height:1.8;margin:0;">
                    Data-driven campaigns that increase your visibility, bring qualified traffic, and convert browsers into buyers.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:rgba(241,165,30,.1);color:#f1a51e;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Start a Campaign <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row g-4">
            @foreach([
                ['fas fa-magnifying-glass-chart', PC::getValue($p,'digital','seo_title','Search Engine Optimization (SEO)'), PC::getValue($p,'digital','seo_desc','Improving your website\'s visibility on search engines to attract high-quality organic traffic. Hawks Marketing produces structure, content, and performance to help you rank higher and stay competitive.'), route('seo-services')],
                ['fas fa-share-nodes', PC::getValue($p,'digital','social_title','Social Media Marketing & Management'), PC::getValue($p,'digital','social_desc','Strategic creation and management of content to build brand presence and audience engagement across all major platforms.'), route('social-media')],
                ['fas fa-bullseye', PC::getValue($p,'digital','ppc_title','Pay-Per-Click Advertising (PPC)'), PC::getValue($p,'digital','ppc_desc','A performance-driven advertising model where you pay only when users click on your ads. We handle targeting, design, and optimisation.'), route('ppc-advertising')],
                ['fas fa-rectangle-ad', PC::getValue($p,'digital','google_title','Google & Meta Advertisement'), PC::getValue($p,'digital','google_desc','Advertising across platforms like Google & Meta to reach highly specific audiences. We optimise campaigns on Facebook and Instagram to drive engagement, leads, and sales.'), route('google-meta-advertising')],
            ] as $svc)
            <div class="col-lg-6">
                <a href="{{ $svc[3] }}" class="svc-card-light d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== MID CTA STRIP ===== --}}
<section style="background:#f1a51e;padding:32px 0;">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-8">
                <h4 style="color:#fff;font-size:22px;font-weight:800;margin:0;">Complete <em style="font-style:normal;opacity:.85;">Digital Marketing</em> Solutions for Your <strong>Business</strong></h4>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:#fff;color:#f1a51e;padding:12px 26px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Get Started <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ===== DESIGN ===== --}}
<section id="designing" style="background:#212741;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Creative Excellence</p>
                <h2 style="font-size:36px;font-weight:800;color:#fff;margin-bottom:14px;">
                    {{ PC::getValue($p, 'designing', 'heading', 'Designing') }}
                </h2>
                <p style="font-size:15px;color:rgba(255,255,255,.65);max-width:540px;line-height:1.8;margin:0;">
                    Visuals that stop the scroll. From logos to full UI systems — we create design that communicates your brand with impact.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:rgba(241,165,30,.15);border:1px solid rgba(241,165,30,.4);color:#f8c96a;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Discuss Your Design <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row g-4">
            @foreach([
                ['fas fa-paintbrush', PC::getValue($p,'designing','graphic_title','Graphic Designing'), PC::getValue($p,'designing','graphic_desc','The process of creating visual content to communicate information and ideas effectively. We maintain consistent brand identities across digital and print platforms.'), route('graphic-designing')],
                ['fas fa-pencil-ruler', PC::getValue($p,'designing','uiux_title','UI/UX Designing'), PC::getValue($p,'designing','uiux_desc','Designing intuitive, visually appealing, and user-friendly digital experiences by analysing behaviour and optimising interaction flow and usability.'), route('ui-ux-designing')],
                ['fas fa-film', PC::getValue($p,'designing','video_title','Video Editing'), PC::getValue($p,'designing','video_desc','Professional video editing services that transform raw footage into compelling, polished content for social media, corporate presentations, and brand storytelling.'), route('video-editing')],
                ['fas fa-image', PC::getValue($p,'designing','smdesign_title','Social Media Design'), PC::getValue($p,'designing','smdesign_desc','Eye-catching, on-brand designs created specifically for social media platforms. Story templates, banners, and visuals that drive engagement and reinforce brand identity.'), route('social-media-design')],
                ['fas fa-trademark', PC::getValue($p,'designing','logo_title','Logo Designing'), PC::getValue($p,'designing','logo_desc','Distinctive, memorable logo designs that capture the essence of your brand. We craft logos that are versatile, scalable, and built to represent your business across every platform and medium.'), route('logo-designing')],
            ] as $svc)
            <div class="col-lg-4 col-md-6">
                <a href="{{ $svc[3] }}" class="svc-card-dark d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== IT SOLUTIONS ===== --}}
<section id="it-solution" style="background:#f8f9fc;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Technology</p>
                <h2 style="font-size:36px;font-weight:800;color:#212741;margin-bottom:14px;">
                    {{ PC::getValue($p, 'it', 'heading', 'IT Solutions') }}
                </h2>
                <p style="font-size:15px;color:#6b7280;max-width:540px;line-height:1.8;margin:0;">
                    Robust, scalable web and mobile solutions built to perform — from simple landing pages to complex ecommerce platforms.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:rgba(241,165,30,.1);color:#f1a51e;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Start Your Project <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row g-4">
            @foreach([
                ['fas fa-code', PC::getValue($p,'it','web_title','Web Development'), PC::getValue($p,'it','web_desc','Building and maintaining functional, responsive, and high-performance websites. We build both front and back-end systems to ensure structured, conversion-focused websites.'), route('web-development')],
                ['fas fa-mobile-alt', PC::getValue($p,'it','app_title','App Development'), PC::getValue($p,'it','app_desc','Creating functional and user-focused mobile applications for Android and iOS platforms. We design intuitive interfaces that provide smooth navigation and a seamless user experience.'), route('app-development')],
                ['fas fa-laptop-code', PC::getValue($p,'it','custom_title','Custom Website Development'), PC::getValue($p,'it','custom_desc','Bespoke website solutions built from the ground up to match your exact business requirements. We focus on clean code, scalable architecture, and seamless integrations.'), route('custom-website-development')],
                ['fas fa-store', PC::getValue($p,'it','ecommerce_title','Ecommerce Web Development'), PC::getValue($p,'it','ecommerce_desc','Fully featured online stores designed to convert visitors into customers. We build secure, fast, and user-friendly ecommerce platforms with complete product management, payment integrations, and order tracking.'), route('ecommerce-development')],
            ] as $svc)
            <div class="col-lg-6">
                <a href="{{ $svc[3] }}" class="svc-card-light d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== BRANDING ===== --}}
<section id="branding" style="background:#212741;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Identity</p>
                <h2 style="font-size:36px;font-weight:800;color:#fff;margin-bottom:14px;">
                    {{ PC::getValue($p, 'branding', 'heading', 'Branding') }}
                </h2>
                <p style="font-size:15px;color:rgba(255,255,255,.65);max-width:540px;line-height:1.8;margin:0;">
                    Your brand is more than a logo. We build identities that are recognisable, consistent, and built to last.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:rgba(241,165,30,.15);border:1px solid rgba(241,165,30,.4);color:#f8c96a;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Build Your Brand <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach([
                ['fas fa-star', PC::getValue($p,'branding','overview_title','Branding'), PC::getValue($p,'branding','overview_desc','Creating a distinct identity for a business through visual, verbal, and strategic elements. We build cohesive brand assets including logos, colour systems, typography, and messaging that ensure recognition across all platforms.'), route('branding-service')],
                ['fas fa-chess', PC::getValue($p,'branding','strategy_title','Branding Strategy Services'), PC::getValue($p,'branding','strategy_desc','Data-informed brand strategy development that aligns your positioning, messaging, and identity with your business goals and target audience expectations.'), route('branding-strategy')],
                ['fas fa-book-open', PC::getValue($p,'branding','manual_title','Brand Manual Document'), PC::getValue($p,'branding','manual_desc','Comprehensive brand guidelines documentation covering logo usage, colour palette, typography, tone of voice, and visual standards — ensuring consistent brand representation across all touchpoints.'), route('brand-manual')],
            ] as $svc)
            <div class="col-lg-4 col-md-6">
                <a href="{{ $svc[3] }}" class="svc-card-dark d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CONTENT CREATION ===== --}}
<section id="content-creation" style="background:#f8f9fc;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Storytelling</p>
                <h2 style="font-size:36px;font-weight:800;color:#212741;margin-bottom:14px;">
                    {{ PC::getValue($p, 'content', 'heading', 'Content Creation') }}
                </h2>
                <p style="font-size:15px;color:#6b7280;max-width:540px;line-height:1.8;margin:0;">
                    Content that educates, engages, and converts. We craft every word and asset to serve your brand goals.
                </p>
            </div>
            <div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:rgba(241,165,30,.1);color:#f1a51e;padding:11px 22px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                    Discuss Content <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="row g-4">
            @foreach([
                ['fas fa-pen-nib', PC::getValue($p,'content','overview_title','Content Creation'), PC::getValue($p,'content','overview_desc','Developing engaging and relevant material to communicate a brand\'s message effectively — posts, captions, articles, and marketing materials across tone, style, and messaging.'), route('content-writing')],
                ['fas fa-calendar-days', PC::getValue($p,'content','smcontent_title','Social Media Content Marketing'), PC::getValue($p,'content','smcontent_desc','Strategic content designed to grow your social media presence, drive engagement, and build a loyal audience across all major platforms.'), route('social-media-content-marketing')],
                ['fas fa-align-left', PC::getValue($p,'content','writing_title','Website Content Writing'), PC::getValue($p,'content','writing_desc','SEO-optimised, professionally written website copy that communicates your value proposition clearly and compels visitors to take action.'), route('content-writing')],
                ['fas fa-newspaper', PC::getValue($p,'content','blog_title','Blog Writing'), PC::getValue($p,'content','blog_desc','Well-researched, engaging blog articles that establish your brand as an industry authority, improve SEO rankings, and drive organic traffic to your website.'), route('blog-writing')],
            ] as $svc)
            <div class="col-lg-3 col-md-6">
                <a href="{{ $svc[3] }}" class="svc-card-light d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== OTHER SERVICES ===== --}}
<section id="other-services" style="background:#212741;padding:90px 0;">
    <div class="container">
        <div class="row align-items-end mb-5">
            <div class="col-lg-7">
                <p class="svc-section-label">Advisory</p>
                <h2 style="font-size:36px;font-weight:800;color:#fff;margin-bottom:14px;">
                    {{ PC::getValue($p, 'other', 'heading', 'Other Services') }}
                </h2>
                <p style="font-size:15px;color:rgba(255,255,255,.65);max-width:540px;line-height:1.8;margin:0;">
                    Strategic thinking and expert guidance to help your business make smarter decisions and move faster.
                </p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach([
                ['fas fa-chart-line', PC::getValue($p,'other','ba_title','Business Analysis'), PC::getValue($p,'other','ba_desc','Evaluating a company\'s operations, market position, and performance to identify growth opportunities. We analyse data, audience behaviour, and market trends to align with long-term commercial objectives.'), route('business-analysis')],
                ['fas fa-handshake', PC::getValue($p,'other','consult_title','Consultation'), PC::getValue($p,'other','consult_desc','Expert guidance to improve business strategy, operations, and growth potential. We offer strategic recommendations based on market research, data analytics, and business insights.'), route('consultation')],
            ] as $svc)
            <div class="col-lg-5 col-md-6">
                <a href="{{ $svc[3] }}" class="svc-card-dark d-flex flex-column">
                    <div class="svc-icon"><i class="{{ $svc[0] }}"></i></div>
                    <h5>{{ $svc[1] }}</h5>
                    <p>{{ $svc[2] }}</p>
                    <div class="svc-more">Learn More <i class="fas fa-arrow-right"></i></div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== FINAL CTA ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Let's Get Started</p>
                <h3 style="color:#212741;font-size:36px;font-weight:800;line-height:1.3;margin-bottom:16px;">Ready to <em style="font-style:normal;color:#f1a51e;">Grow</em> Your<br>Business?</h3>
                <p style="color:#6b7280;font-size:15px;line-height:1.8;max-width:480px;">Tell us your goals and we\'ll build a strategy that delivers. No fluff, no guesswork — just results.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:16px 36px;border-radius:12px;font-size:16px;font-weight:700;text-decoration:none;box-shadow:0 8px 28px rgba(241,165,30,.35);">
                    Contact Us Today <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
  // Smooth scroll for category nav pills
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
      a.addEventListener('click', function(e) {
          var target = document.querySelector(this.getAttribute('href'));
          if (target) {
              e.preventDefault();
              target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
      });
  });
  </script>
@endsection
