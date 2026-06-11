@extends('layouts.base')
@section('title','About Us | Hawks Marketing')
@section('meta-title','About Us | Hawks Marketing')
@section('meta-description','Learn about Hawks Marketing — our story, mission, and the team behind your brand\'s digital growth. We combine strategy, creativity, and data to deliver real results.')
@php use App\Models\PageContent as PC; $p = 'about'; @endphp

@section('head')
<style>
/* ---- Org chart tree ---- */
.org-ceo-row { text-align:center; position:relative; }
.org-ceo-row::after {
    content:''; display:block; width:2px; height:40px;
    background:#f1a51e; margin:0 auto;
}
.org-do-row { text-align:center; position:relative; }
.org-do-row::after {
    content:''; display:block; width:2px; height:48px;
    background:#f1a51e; margin:0 auto;
}
.org-depts-outer { position:relative; }
.org-depts-outer::before {
    content:''; position:absolute; top:0;
    left:calc(100% / 8); right:calc(100% / 8);
    height:2px; background:#f1a51e; z-index:0;
}
.org-dept-col { flex:1; text-align:center; position:relative; padding:0 8px; }
.org-dept-col::before {
    content:''; display:block; width:2px; height:32px;
    background:#f1a51e; margin:0 auto;
}
.org-dept-col::after {
    content:''; display:block; width:2px; height:24px;
    background:rgba(241,165,30,.35); margin:0 auto;
}
.org-dept-node {
    background:linear-gradient(135deg,#212741,#1a2155);
    border:2px solid rgba(241,165,30,.5);
    border-radius:12px; padding:14px 10px;
    display:inline-block; min-width:130px;
    position:relative; z-index:1;
}
.org-dept-node .dept-icon { font-size:22px; color:#f1a51e; margin-bottom:6px; display:block; }
.org-dept-node .dept-name { color:#fff; font-size:13px; font-weight:700; line-height:1.3; }
.org-member-list { display:flex; flex-direction:column; gap:8px; margin-top:0; padding:0 4px; }
.org-member-card {
    background:#fff; border-radius:10px; padding:10px 12px;
    box-shadow:0 3px 12px rgba(33,39,65,.08);
    border-left:3px solid rgba(241,165,30,.3);
    text-align:left; transition:all .25s;
}
.org-member-card:hover { border-left-color:#f1a51e; box-shadow:0 6px 20px rgba(33,39,65,.13); transform:translateX(2px); }
.org-member-card .m-name { font-size:13px; font-weight:700; color:#212741; margin-bottom:2px; }
.org-member-card .m-role { font-size:11px; color:#9ca3af; }
.org-member-card .m-avatar {
    width:32px; height:32px; border-radius:50%;
    background:rgba(241,165,30,.1);
    display:flex; align-items:center; justify-content:center;
    flex-shrink:0;
}
.org-member-card .m-avatar i { color:#f1a51e; font-size:13px; }

/* Mobile: collapse tree to stacked layout */
@media (max-width: 768px) {
    .org-depts-outer::before { display:none; }
    .org-dept-col { flex:none; width:100%; margin-bottom:24px; }
    .org-dept-col::before { height:16px; }
    .org-ceo-row::after { height:16px; }
}

/* --- About sections --- */
.about-pillar-card { background:#fff; border-radius:14px; padding:28px; box-shadow:0 4px 18px rgba(33,39,65,.07); height:100%; transition:all .3s; border-top:3px solid transparent; }
.about-pillar-card:hover { transform:translateY(-4px); box-shadow:0 12px 36px rgba(33,39,65,.12); border-top-color:#f1a51e; }
.about-pillar-icon { width:52px; height:52px; background:rgba(241,165,30,.1); border-radius:12px; display:flex; align-items:center; justify-content:center; margin-bottom:16px; }
.about-pillar-icon i { color:#f1a51e; font-size:22px; }
</style>
@endsection

@section('content')

{{-- ===== HERO ===== --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:90px 0 80px;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-80px;right:-80px;width:400px;height:400px;background:rgba(241,165,30,.07);border-radius:50%;pointer-events:none;"></div>
    <div style="position:absolute;bottom:-80px;left:-60px;width:280px;height:280px;background:rgba(241,165,30,.05);border-radius:50%;pointer-events:none;"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">
                    <i class="fas fa-info-circle me-2"></i>Who We Are
                </p>
                <h1 style="color:#fff;font-size:46px;font-weight:800;line-height:1.2;margin-bottom:18px;">
                    Building Brands.<br>Driving <span style="color:#f1a51e;">Real Growth.</span>
                </h1>
                <p style="color:rgba(255,255,255,.72);font-size:16px;line-height:1.8;max-width:520px;margin-bottom:32px;">
                    {{ PC::getValue($p, 'company', 'para1', 'Hawks Marketing is a full-service digital marketing agency established in 2024, with operational experience dating back to 2019.') }}
                </p>
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
                    Work With Us <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    @foreach([
                        ['fas fa-calendar-alt','Est. 2019','Operational experience spanning 6+ years'],
                        ['fas fa-users','12+ Team','Dedicated specialists across every discipline'],
                        ['fas fa-handshake','50+ Clients','Brands served across Pakistan and beyond'],
                        ['fas fa-chart-line','Proven ROI','Data-driven results, every engagement'],
                    ] as $s)
                    <div class="col-6">
                        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:22px;text-align:center;">
                            <i class="{{ $s[0] }}" style="font-size:24px;color:#f1a51e;margin-bottom:10px;display:block;"></i>
                            <div style="color:#fff;font-size:14px;font-weight:700;margin-bottom:4px;">{{ $s[1] }}</div>
                            <div style="color:rgba(255,255,255,.5);font-size:11px;line-height:1.5;">{{ $s[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== WHO WE ARE ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <p style="color:#f1a51e;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:10px;">Our Story</p>
                <h2 style="color:#212741;font-size:34px;font-weight:800;margin-bottom:20px;line-height:1.3;">A Marketing Agency Built on <span style="color:#f1a51e;">Results</span></h2>
                <p style="font-size:15px;color:#4b5563;line-height:1.85;margin-bottom:16px;">
                    {{ PC::getValue($p, 'company', 'para2', 'We deliver strategic, data-driven marketing solutions and IT solutions designed to enhance brand visibility, strengthen audience engagement, and generate measurable business growth.') }}
                </p>
                <p style="font-size:15px;color:#4b5563;line-height:1.85;margin-bottom:24px;">
                    {{ PC::getValue($p, 'company', 'para3', 'Our focus is to help businesses navigate the evolving digital landscape with structured strategies, consistent execution, and long-term impact.') }}
                </p>
                <div style="border-left:4px solid #f1a51e;padding:16px 20px;background:#fff;border-radius:0 10px 10px 0;box-shadow:0 3px 14px rgba(33,39,65,.07);">
                    <p style="font-size:14px;color:#374151;line-height:1.75;margin:0;font-style:italic;">
                        "{{ PC::getValue($p, 'why', 'closing', 'We focus on building long-term partnerships by delivering reliable, scalable, and performance-driven marketing solutions.') }}"
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach([
                        ['fas fa-chart-bar','Measurable Performance','Strong emphasis on ROI and performance metrics that actually move the needle.'],
                        ['fas fa-sliders-h','Tailored Strategies','{{ PC::getValue($p, "why", "point2", "Tailored strategies designed for each client\'s unique requirements") }}'],
                        ['fas fa-brain','Creative + Data','Integration of creative direction with data-driven decision-making.'],
                        ['fas fa-shield-alt','Transparency','Commitment to transparency, consistency, and full accountability.'],
                    ] as $card)
                    <div class="col-sm-6">
                        <div class="about-pillar-card">
                            <div class="about-pillar-icon"><i class="{{ $card[0] }}"></i></div>
                            <h5 style="font-size:15px;font-weight:700;color:#212741;margin-bottom:8px;">{{ $card[1] }}</h5>
                            <p style="font-size:13px;color:#6b7280;line-height:1.7;margin:0;">{{ $card[2] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== MISSION & VISION ===== --}}
<section style="background:#212741;padding:80px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:50px;">
            <h6 style="color:#f1a51e;">OUR DIRECTION</h6>
            <h4 style="color:#fff;">Mission &amp; Vision</h4>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div style="background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:16px;padding:40px;height:100%;">
                    <div style="width:60px;height:60px;background:rgba(241,165,30,.15);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
                        <i class="fas fa-eye" style="color:#f1a51e;font-size:26px;"></i>
                    </div>
                    <span style="color:#f1a51e;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:2px;display:block;margin-bottom:10px;">Our Vision</span>
                    <h4 style="color:#fff;font-size:22px;font-weight:800;margin-bottom:16px;">Where We Are Headed</h4>
                    <p style="color:rgba(255,255,255,.7);font-size:15px;line-height:1.85;margin:0;">
                        {{ PC::getValue($p, 'vision', 'text', 'To establish Hawks Marketing as a globally recognized digital marketing agency, known for its strategic expertise, innovative thinking, and consistent delivery of high-performance results.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div style="background:rgba(241,165,30,.08);border:1px solid rgba(241,165,30,.25);border-radius:16px;padding:40px;height:100%;">
                    <div style="width:60px;height:60px;background:rgba(241,165,30,.2);border-radius:14px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
                        <i class="fas fa-rocket" style="color:#f1a51e;font-size:26px;"></i>
                    </div>
                    <span style="color:#f1a51e;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:2px;display:block;margin-bottom:10px;">Our Mission</span>
                    <h4 style="color:#fff;font-size:22px;font-weight:800;margin-bottom:16px;">What Drives Us Daily</h4>
                    <p style="color:rgba(255,255,255,.7);font-size:15px;line-height:1.85;margin:0;">
                        {{ PC::getValue($p, 'mission', 'text', 'To empower businesses by providing structured, data-driven marketing solutions that transform ideas into measurable growth, enabling brands to compete and succeed in a rapidly evolving digital environment.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FOUNDER ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:50px;">
            <h6>LEADERSHIP</h6>
            <h4>Meet Our Founder</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);border-radius:20px;padding:48px;display:flex;align-items:center;gap:40px;flex-wrap:wrap;box-shadow:0 12px 48px rgba(33,39,65,.2);">
                    <div style="flex-shrink:0;">
                        <div style="width:110px;height:110px;border-radius:50%;background:rgba(241,165,30,.15);border:3px solid rgba(241,165,30,.4);display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-user-tie" style="font-size:46px;color:#f1a51e;"></i>
                        </div>
                    </div>
                    <div style="flex:1;min-width:200px;">
                        <span style="color:#f1a51e;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:2px;display:block;margin-bottom:8px;">Founder &amp; CEO</span>
                        <h3 style="color:#fff;font-size:28px;font-weight:800;margin-bottom:12px;">
                            {{ PC::getValue($p, 'founder', 'name', 'Aashir Khan Jadoon') }}
                        </h3>
                        <p style="color:rgba(255,255,255,.65);font-size:14px;line-height:1.8;margin-bottom:20px;max-width:440px;">
                            {{ PC::getValue($p, 'founder', 'bio', 'Visionary entrepreneur with 6+ years of experience in digital marketing and IT solutions. Aashir leads Hawks Marketing with a mission to help businesses compete and win in the digital age.') }}
                        </p>
                        <div class="d-flex gap-2 flex-wrap">
                            @foreach([['fas fa-chart-line','Digital Strategy'],['fas fa-bullhorn','Brand Growth'],['fas fa-cogs','IT Solutions']] as $tag)
                            <span style="background:rgba(241,165,30,.15);border:1px solid rgba(241,165,30,.3);color:rgba(255,255,255,.85);font-size:12px;font-weight:600;padding:5px 12px;border-radius:20px;">
                                <i class="{{ $tag[0] }} me-1" style="color:#f1a51e;"></i>{{ $tag[1] }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== TEAM ORG CHART ===== --}}
<section style="background:#fff;padding:80px 0 100px;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:60px;">
            <h6>OUR PEOPLE</h6>
            <h4>Meet Our Core Team</h4>
        </div>

        {{-- CEO node --}}
        <div class="org-ceo-row">
            <div style="display:inline-block;background:linear-gradient(135deg,#212741,#1a2155);border:2px solid rgba(241,165,30,.6);border-radius:16px;padding:20px 48px;box-shadow:0 8px 32px rgba(33,39,65,.2);">
                <div style="display:flex;align-items:center;gap:16px;">
                    <div style="width:52px;height:52px;border-radius:50%;background:rgba(241,165,30,.15);border:2px solid rgba(241,165,30,.4);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-user-tie" style="color:#f1a51e;font-size:22px;"></i>
                    </div>
                    <div style="text-align:left;">
                        <div style="color:#fff;font-size:16px;font-weight:800;">{{ PC::getValue($p, 'founder', 'name', 'Aashir Khan Jadoon') }}</div>
                        <div style="color:#f1a51e;font-size:12px;font-weight:600;">Founder &amp; CEO</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Director Operations node --}}
        <div class="org-do-row">
            <div style="display:inline-block;background:linear-gradient(135deg,#1e2a4a,#162040);border:2px solid rgba(241,165,30,.45);border-radius:14px;padding:14px 40px;box-shadow:0 6px 24px rgba(33,39,65,.15);">
                <div style="display:flex;align-items:center;gap:14px;">
                    <div style="width:44px;height:44px;border-radius:50%;background:rgba(241,165,30,.12);border:2px solid rgba(241,165,30,.35);display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                        <i class="fas fa-user-shield" style="color:#f1a51e;font-size:18px;"></i>
                    </div>
                    <div style="text-align:left;">
                        <div style="color:#fff;font-size:14px;font-weight:700;">Talha Zafar</div>
                        <div style="color:#f1a51e;font-size:11px;font-weight:600;letter-spacing:.5px;">Director Operations (DO)</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Department branches --}}
        <div class="org-depts-outer">
            <div class="d-flex flex-wrap flex-md-nowrap justify-content-center gap-0">

                {{-- Marketing --}}
                <div class="org-dept-col">
                    <div class="org-dept-node">
                        <i class="fas fa-bullhorn dept-icon"></i>
                        <div class="dept-name">Marketing<br>Team</div>
                    </div>
                    <div class="org-member-list">
                        @foreach([
                            ['Usman Qureshi','Marketing Strategist'],
                            ['Ali Hassan','Digital Marketing Expert'],
                            ['Aarib Rehman','Social Media Manager'],
                        ] as $m)
                        <div class="org-member-card d-flex align-items-center gap-2">
                            <div class="m-avatar"><i class="fas fa-user"></i></div>
                            <div>
                                <div class="m-name">{{ $m[0] }}</div>
                                <div class="m-role">{{ $m[1] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- IT & Dev --}}
                <div class="org-dept-col">
                    <div class="org-dept-node">
                        <i class="fas fa-code dept-icon"></i>
                        <div class="dept-name">IT &amp;<br>Development</div>
                    </div>
                    <div class="org-member-list">
                        @foreach([
                            ['Adeel Khan','IT Manager'],
                            ['Kashif Khan','Sr. Developer'],
                            ['Saud Khan','IT Expert'],
                        ] as $m)
                        <div class="org-member-card d-flex align-items-center gap-2">
                            <div class="m-avatar"><i class="fas fa-user"></i></div>
                            <div>
                                <div class="m-name">{{ $m[0] }}</div>
                                <div class="m-role">{{ $m[1] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Creative & Design --}}
                <div class="org-dept-col">
                    <div class="org-dept-node">
                        <i class="fas fa-paint-brush dept-icon"></i>
                        <div class="dept-name">Creative<br>&amp; Design</div>
                    </div>
                    <div class="org-member-list">
                        @foreach([
                            ['Safiya Gul','UI/UX Designer'],
                            ['Noor ul Ain Zafar','Graphic Designer'],
                            ['Saad','Graphic Designer'],
                        ] as $m)
                        <div class="org-member-card d-flex align-items-center gap-2">
                            <div class="m-avatar"><i class="fas fa-user"></i></div>
                            <div>
                                <div class="m-name">{{ $m[0] }}</div>
                                <div class="m-role">{{ $m[1] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Content & Video --}}
                <div class="org-dept-col">
                    <div class="org-dept-node">
                        <i class="fas fa-video dept-icon"></i>
                        <div class="dept-name">Content<br>&amp; Media</div>
                    </div>
                    <div class="org-member-list">
                        @foreach([
                            ['Samiya Afzal','Videographer'],
                            ['Daniyal Akhtar','Video Editor'],
                            ['Ammar Khan','Content Creator'],
                        ] as $m)
                        <div class="org-member-card d-flex align-items-center gap-2">
                            <div class="m-avatar"><i class="fas fa-user"></i></div>
                            <div>
                                <div class="m-name">{{ $m[0] }}</div>
                                <div class="m-role">{{ $m[1] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- ===== VALUES STRIP ===== --}}
<section style="background:#f1a51e;padding:28px 0;">
    <div class="container">
        <div class="row g-3 text-center text-white">
            @foreach([
                ['fas fa-handshake','Integrity'],
                ['fas fa-chart-line','Performance'],
                ['fas fa-lightbulb','Innovation'],
                ['fas fa-users','Collaboration'],
            ] as $v)
            <div class="col-6 col-md-3">
                <i class="{{ $v[0] }}" style="font-size:22px;margin-bottom:6px;display:block;opacity:.9;"></i>
                <div style="font-size:13px;font-weight:700;letter-spacing:.5px;">{{ $v[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">Let\'s Grow Together</p>
                <h3 style="color:#212741;font-size:36px;font-weight:800;line-height:1.3;margin-bottom:16px;">Ready to <em style="font-style:normal;color:#f1a51e;">Accelerate</em> Your<br>Digital Success?</h3>
                <p style="color:#6b7280;font-size:15px;line-height:1.8;max-width:480px;">Our team is ready to build a strategy around your goals and drive measurable growth for your business.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:16px 36px;border-radius:12px;font-size:16px;font-weight:700;text-decoration:none;box-shadow:0 8px 28px rgba(241,165,30,.35);">
                    Get Started Today <i class="fas fa-arrow-right"></i>
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
@endsection
