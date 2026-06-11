@extends('layouts.base')
@section('title','Client Success Stories | Hawks Marketing')
@section('meta-title','Client Success Stories | Hawks Marketing')
@section('meta-description','Real results, real businesses. Explore how Hawks Marketing has helped clients grow through digital marketing, SEO, social media, and more.')

@section('head')
<style>
.story-card { background:#fff; border-radius:16px; overflow:hidden; box-shadow:0 4px 24px rgba(33,39,65,.08); transition:all .35s; display:flex; flex-direction:column; height:100%; }
.story-card:hover { box-shadow:0 16px 48px rgba(33,39,65,.15); transform:translateY(-6px); }
.story-card-header { background:linear-gradient(135deg,#212741 0%,#1a2155 100%); padding:32px 32px 28px; position:relative; overflow:hidden; }
.story-card-header::after { content:''; position:absolute; top:-40px; right:-40px; width:160px; height:160px; background:rgba(241,165,30,.1); border-radius:50%; }
.story-tagline { background:rgba(241,165,30,.15); border:1px solid rgba(241,165,30,.3); border-radius:8px; padding:10px 16px; margin-top:16px; }
.story-body { padding:28px 32px; flex:1; display:flex; flex-direction:column; }
.story-section-label { font-size:10px; font-weight:800; text-transform:uppercase; letter-spacing:1.5px; color:#f1a51e; margin-bottom:6px; }
.story-result-item { display:flex; align-items:flex-start; gap:10px; padding:7px 0; border-bottom:1px solid #f3f4f6; font-size:13px; color:#374151; line-height:1.5; }
.story-result-item:last-child { border-bottom:none; }
.stat-card { background:#fff; border-radius:12px; padding:24px; text-align:center; box-shadow:0 4px 16px rgba(33,39,65,.06); }
</style>
@endsection

@section('content')

{{-- ===== HERO ===== --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:90px 0 80px;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-60px;right:-60px;width:380px;height:380px;background:rgba(241,165,30,.07);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-40px;width:260px;height:260px;background:rgba(241,165,30,.05);border-radius:50%;pointer-events:none;"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">
                    <i class="fas fa-trophy me-2"></i>Client Success Stories
                </p>
                <h1 style="color:#fff;font-size:44px;font-weight:800;line-height:1.2;margin-bottom:18px;">
                    Real Results for<br><span style="color:#f1a51e;">Real Businesses</span>
                </h1>
                <p style="color:rgba(255,255,255,.72);font-size:16px;line-height:1.8;max-width:520px;margin-bottom:32px;">
                    We don't just run campaigns — we build growth engines. Explore how Hawks Marketing has helped businesses across Pakistan and beyond achieve measurable, lasting results.
                </p>
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
                    Start Your Success Story <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    @foreach([
                        ['fas fa-chart-line','Proven Growth','Strategies backed by data and delivered with precision'],
                        ['fas fa-handshake','Long-term Partners','We succeed when our clients succeed — no shortcuts'],
                        ['fas fa-globe','Diverse Industries','From tech startups to established enterprises'],
                        ['fas fa-medal','Measurable ROI','Every rupee tracked, every result documented'],
                    ] as $s)
                    <div class="col-6">
                        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:20px;text-align:center;">
                            <i class="{{ $s[0] }}" style="font-size:22px;color:#f1a51e;margin-bottom:10px;display:block;"></i>
                            <div style="color:#fff;font-size:13px;font-weight:700;margin-bottom:4px;">{{ $s[1] }}</div>
                            <div style="color:rgba(255,255,255,.5);font-size:11px;line-height:1.5;">{{ $s[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if($stories->isNotEmpty())

{{-- ===== STATS BAR ===== --}}
<section style="background:#f1a51e;padding:28px 0;">
    <div class="container">
        <div class="row g-3 text-center text-white">
            @foreach([['50+','Clients Served'],['4+','Years of Growth'],['95%','Client Retention'],['3M+','Leads Generated']] as $stat)
            <div class="col-6 col-md-3">
                <div style="font-size:28px;font-weight:800;letter-spacing:-0.5px;">{{ $stat[0] }}</div>
                <div style="font-size:12px;opacity:.85;font-weight:600;letter-spacing:.5px;">{{ $stat[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== STORIES GRID ===== --}}
<section style="background:#f8f9fc;padding:80px 0 100px;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:56px;">
            <h6>CASE STUDIES</h6>
            <h4>Stories of Growth & Impact</h4>
        </div>

        <div class="row g-4">
            @foreach($stories as $story)
            <div class="col-lg-6">
                <div class="story-card">

                    {{-- Card header --}}
                    <div class="story-card-header">
                        <div class="d-flex align-items-start justify-content-between gap-3" style="position:relative;z-index:2;">
                            <div>
                                <div style="display:flex;align-items:center;gap:10px;margin-bottom:10px;flex-wrap:wrap;">
                                    @if($story->client_logo)
                                    <div style="width:44px;height:44px;background:#fff;border-radius:8px;overflow:hidden;flex-shrink:0;display:flex;align-items:center;justify-content:center;padding:4px;">
                                        <img src="{{ asset($story->client_logo) }}" alt="{{ $story->client_name }}" style="max-width:100%;max-height:100%;object-fit:contain;">
                                    </div>
                                    @else
                                    <div style="width:44px;height:44px;background:rgba(241,165,30,.2);border-radius:8px;flex-shrink:0;display:flex;align-items:center;justify-content:center;">
                                        <i class="fas fa-building" style="color:#f8c96a;font-size:18px;"></i>
                                    </div>
                                    @endif
                                    <div>
                                        <div style="color:#fff;font-size:17px;font-weight:800;line-height:1.2;">{{ $story->client_name }}</div>
                                        <div style="color:rgba(255,255,255,.55);font-size:12px;margin-top:2px;"><i class="fas fa-tag me-1"></i>{{ $story->industry }}</div>
                                    </div>
                                </div>
                            </div>
                            @if($story->website_url)
                            <a href="{{ $story->website_url }}" target="_blank" rel="noopener" style="color:rgba(255,255,255,.5);font-size:13px;text-decoration:none;flex-shrink:0;margin-top:4px;" title="Visit website">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            @endif
                        </div>

                        {{-- Featured image if available --}}
                        @if($story->featured_image)
                        <div style="border-radius:10px;overflow:hidden;margin-bottom:14px;height:160px;">
                            <img src="{{ asset($story->featured_image) }}" alt="{{ $story->client_name }}" style="width:100%;height:100%;object-fit:cover;">
                        </div>
                        @endif

                        {{-- Tagline --}}
                        <div class="story-tagline" style="position:relative;z-index:2;">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <i class="fas fa-trophy" style="color:#f1a51e;font-size:14px;flex-shrink:0;"></i>
                                <span style="color:#fff;font-size:13px;font-weight:700;line-height:1.4;">{{ $story->tagline }}</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card body --}}
                    <div class="story-body">

                        {{-- Challenge --}}
                        <div style="margin-bottom:22px;">
                            <div class="story-section-label"><i class="fas fa-exclamation-circle me-1"></i>The Challenge</div>
                            <p style="font-size:13px;color:#6b7280;line-height:1.75;margin:0;">{{ Str::limit($story->challenge, 200) }}</p>
                        </div>

                        {{-- Solution --}}
                        <div style="margin-bottom:22px;">
                            <div class="story-section-label"><i class="fas fa-lightbulb me-1"></i>Our Solution</div>
                            <p style="font-size:13px;color:#6b7280;line-height:1.75;margin:0;">{{ Str::limit($story->solution, 200) }}</p>
                        </div>

                        {{-- Results --}}
                        <div style="margin-top:auto;">
                            <div class="story-section-label"><i class="fas fa-chart-bar me-1"></i>Key Results</div>
                            <div>
                                @foreach($story->results_list as $result)
                                <div class="story-result-item">
                                    <i class="fas fa-check-circle" style="color:#f1a51e;flex-shrink:0;margin-top:1px;font-size:13px;"></i>
                                    <span>{{ $result }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== INDUSTRIES SERVED ===== --}}
<section style="background:#212741;padding:70px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:40px;">
            <h6 style="color:#f1a51e;">OUR EXPERTISE</h6>
            <h4 style="color:#fff;">Industries We Serve</h4>
        </div>
        <div class="row g-3 justify-content-center">
            @foreach(['IT & Software','E-commerce','Healthcare','Real Estate','Education','Finance','Retail','Food & Restaurant','Fashion','Logistics'] as $ind)
            <div class="col-auto">
                <div style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);border-radius:8px;padding:10px 20px;color:rgba(255,255,255,.8);font-size:13px;font-weight:600;">
                    {{ $ind }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@else

{{-- ===== EMPTY STATE — GENERAL PAGE ===== --}}
<section style="background:#f8f9fc;padding:80px 0 100px;">
    <div class="container">

        {{-- Why clients choose us --}}
        <div class="section-heading" style="margin-bottom:56px;">
            <h6>WHY HAWKS</h6>
            <h4>Why Businesses Choose Hawks Marketing</h4>
        </div>

        <div class="row g-4 mb-5">
            @foreach([
                ['fas fa-chart-line','Data-Driven Strategy','Every decision we make is backed by analytics and research — not guesswork. We track what works and double down on it.'],
                ['fas fa-users','Dedicated Team','You get a full team of specialists: SEO experts, content writers, designers, and ad managers — all working on your brand.'],
                ['fas fa-clock','Fast & Transparent','We move quickly and communicate openly. You always know what we\'re working on and what results it\'s driving.'],
                ['fas fa-shield-alt','Long-Term Partnership','We\'re not a vendor — we\'re a growth partner. We invest in your success because our reputation depends on your results.'],
                ['fas fa-trophy','Proven Playbooks','Strategies refined across dozens of industries, adapted for your specific market and goals.'],
                ['fas fa-handshake','No Lock-In Contracts','We earn your loyalty every month. Flexible engagements with no surprises.'],
            ] as $card)
            <div class="col-lg-4 col-md-6">
                <div style="background:#fff;border-radius:14px;padding:32px;height:100%;box-shadow:0 4px 20px rgba(33,39,65,.06);transition:all .3s;" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 36px rgba(33,39,65,.12)'" onmouseout="this.style.transform='';this.style.boxShadow='0 4px 20px rgba(33,39,65,.06)'">
                    <div style="width:56px;height:56px;background:rgba(241,165,30,.1);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                        <i class="{{ $card[0] }}" style="color:#f1a51e;font-size:22px;"></i>
                    </div>
                    <h5 style="font-size:16px;font-weight:700;color:#212741;margin-bottom:10px;">{{ $card[1] }}</h5>
                    <p style="font-size:14px;color:#6b7280;line-height:1.75;margin:0;">{{ $card[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Placeholder message --}}
        <div class="text-center py-5" style="background:#fff;border-radius:16px;box-shadow:0 4px 20px rgba(33,39,65,.06);">
            <div style="width:80px;height:80px;background:rgba(241,165,30,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
                <i class="fas fa-star" style="font-size:32px;color:#f1a51e;"></i>
            </div>
            <h4 style="color:#212741;font-weight:800;margin-bottom:10px;">Client Stories Coming Soon</h4>
            <p style="color:#6b7280;font-size:15px;max-width:460px;margin:0 auto 28px;line-height:1.7;">
                We're putting together detailed case studies for our clients. In the meantime, get in touch and we'd love to share our results directly.
            </p>
            <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
                Talk to Our Team <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

{{-- Industries served (even in empty state) --}}
<section style="background:#212741;padding:70px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:40px;">
            <h6 style="color:#f1a51e;">OUR EXPERTISE</h6>
            <h4 style="color:#fff;">Industries We Serve</h4>
        </div>
        <div class="row g-3 justify-content-center">
            @foreach(['IT & Software','E-commerce','Healthcare','Real Estate','Education','Finance','Retail','Food & Restaurant','Fashion','Logistics'] as $ind)
            <div class="col-auto">
                <div style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);border-radius:8px;padding:10px 20px;color:rgba(255,255,255,.8);font-size:13px;font-weight:600;">
                    {{ $ind }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endif

{{-- ===== CTA ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Ready to Grow?</p>
                <h3 style="color:#212741;font-size:34px;font-weight:800;line-height:1.3;margin-bottom:16px;">Let's Write Your<br>Success Story Together</h3>
                <p style="color:#6b7280;font-size:15px;line-height:1.8;max-width:500px;">From SEO to social media, paid ads to content — we build digital marketing strategies that generate real, measurable growth for your business.</p>
            </div>
            <div class="col-lg-5">
                <div style="background:#fff;border-radius:16px;padding:36px;box-shadow:0 8px 32px rgba(33,39,65,.09);">
                    <h5 style="color:#212741;font-weight:800;margin-bottom:6px;">Get a Free Strategy Call</h5>
                    <p style="color:#9ca3af;font-size:13px;margin-bottom:24px;">No commitment. No sales pitch. Just honest advice about what would work for your business.</p>
                    <a href="{{ route('contact') }}" style="display:block;background:#f1a51e;color:#fff;padding:14px;border-radius:10px;font-size:15px;font-weight:700;text-align:center;text-decoration:none;margin-bottom:12px;">
                        <i class="fas fa-phone-alt me-2"></i>Book a Free Call
                    </a>
                    <a href="mailto:info@thehawksmarketing.com" style="display:block;background:#f8f9fc;color:#212741;padding:13px;border-radius:10px;font-size:14px;font-weight:600;text-align:center;text-decoration:none;border:1px solid #e5e7eb;">
                        <i class="fas fa-envelope me-2" style="color:#f1a51e;"></i>Email Us Directly
                    </a>
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
