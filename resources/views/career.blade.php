@extends('layouts.base')
@section('title','Careers | Hawks Marketing')
@section('meta-title','Careers | Hawks Marketing')
@section('meta-description','Join the Hawks Marketing team. Explore open positions at a fast-growing digital marketing agency in Islamabad, Pakistan.')

@section('head')
<style>
.career-job-card { background:#fff; border-radius:14px; padding:28px; box-shadow:0 4px 20px rgba(33,39,65,.07); border-left:4px solid transparent; transition:all .3s; text-decoration:none !important; display:block; height:100%; }
.career-job-card:hover { box-shadow:0 12px 40px rgba(33,39,65,.14); transform:translateY(-4px); border-left-color:#f1a51e; }
.why-card { background:#fff; border-radius:14px; padding:32px 28px; box-shadow:0 4px 20px rgba(33,39,65,.07); transition:all .3s; text-align:center; }
.why-card:hover { box-shadow:0 10px 36px rgba(33,39,65,.12); transform:translateY(-4px); }
.why-icon { width:60px; height:60px; border-radius:14px; background:rgba(241,165,30,.1); display:flex; align-items:center; justify-content:center; margin:0 auto 18px; }
.why-icon i { color:#f1a51e; font-size:24px; }
.step-num { width:44px; height:44px; border-radius:50%; background:#f1a51e; color:#fff; font-size:18px; font-weight:800; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
</style>
@endsection

@section('content')

@if(session('applied'))
<div style="background:#d1fae5;border-left:4px solid #059669;padding:18px 24px;text-align:center;">
    <i class="fas fa-check-circle" style="color:#059669;margin-right:8px;"></i>
    <strong style="color:#065f46;">{{ session('applied') }}</strong>
</div>
@endif

{{-- ===== HERO ===== --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:90px 0 80px;position:relative;overflow:hidden;">
    <div style="position:absolute;top:-80px;right:-80px;width:400px;height:400px;background:rgba(241,165,30,.07);border-radius:50%;"></div>
    <div style="position:absolute;bottom:-100px;left:-60px;width:300px;height:300px;background:rgba(241,165,30,.05);border-radius:50%;"></div>
    <div class="container" style="position:relative;z-index:2;">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <p style="color:#f1a51e;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">
                    <i class="fas fa-briefcase me-2"></i>We're Hiring
                </p>
                <h1 style="color:#fff;font-size:44px;font-weight:800;line-height:1.2;margin-bottom:18px;">
                    Build Your Career at<br><span style="color:#f1a51e;">Hawks Marketing</span>
                </h1>
                <p style="color:rgba(255,255,255,.72);font-size:16px;line-height:1.8;max-width:540px;margin-bottom:32px;">
                    Join a fast-growing digital marketing agency where your work drives real results for real clients. We invest in people who are passionate, hungry to learn, and ready to make an impact.
                </p>
                <a href="#open-positions" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
                    See Open Positions <i class="fas fa-arrow-down"></i>
                </a>
            </div>
            <div class="col-lg-5">
                <div class="row g-3">
                    @foreach([['fas fa-users','Collaborative Team','We grow together — no silos, no politics'],['fas fa-rocket','Fast Career Growth','High performers move up quickly here'],['fas fa-lightbulb','Learn Every Day','Exposure to diverse clients and industries'],['fas fa-heart','People First Culture','Your wellbeing and growth matter to us']] as $s)
                    <div class="col-6">
                        <div style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:12px;padding:20px;text-align:center;">
                            <i class="{{ $s[0] }}" style="font-size:24px;color:#f1a51e;margin-bottom:10px;display:block;"></i>
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

{{-- ===== WHY HAWKS ===== --}}
<section style="background:#f8f9fc;padding:80px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:50px;">
            <h6>WHY HAWKS MARKETING</h6>
            <h4>A Place Where Talent Thrives</h4>
        </div>
        <div class="row g-4">
            @foreach([
                ['fas fa-chart-line','Measurable Impact','Every campaign you work on drives real results for real businesses. Your work matters here.'],
                ['fas fa-graduation-cap','Continuous Learning','We invest in courses, certifications, and mentorship to keep you sharp and growing.'],
                ['fas fa-laptop-house','Hybrid Flexibility','Enjoy the best of both worlds — productive office days and focused work-from-home days.'],
                ['fas fa-hand-holding-dollar','Competitive Pay','Performance-based bonuses on top of a competitive base salary and annual increments.'],
                ['fas fa-users-gear','Great Teammates','Work alongside driven, friendly professionals who push each other to do better work.'],
                ['fas fa-star','Recognition Culture','Your achievements are celebrated — not ignored. High performers are rewarded.'],
            ] as $b)
            <div class="col-lg-4 col-md-6">
                <div class="why-card">
                    <div class="why-icon"><i class="{{ $b[0] }}"></i></div>
                    <h5 style="font-size:16px;font-weight:700;color:#212741;margin-bottom:10px;">{{ $b[1] }}</h5>
                    <p style="font-size:14px;color:#6b7280;line-height:1.7;margin:0;">{{ $b[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== OPEN POSITIONS ===== --}}
<section id="open-positions" style="background:#fff;padding:80px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:50px;">
            <h6>OPEN POSITIONS</h6>
            <h4>Current Opportunities</h4>
        </div>

        @if($jobs->isEmpty())
        <div class="text-center py-5">
            <div style="width:70px;height:70px;background:rgba(241,165,30,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
                <i class="fas fa-briefcase" style="font-size:28px;color:#f1a51e;"></i>
            </div>
            <h5 style="color:#212741;font-weight:700;">No Open Positions Right Now</h5>
            <p style="color:#6b7280;max-width:420px;margin:0 auto 24px;">We're not hiring right now but we're always open to hearing from talented people.</p>
            <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:8px;background:#f1a51e;color:#fff;padding:12px 24px;border-radius:8px;font-size:14px;font-weight:700;text-decoration:none;">
                Send a General Application <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        @else
        <div class="row g-4">
            @foreach($jobs as $job)
            <div class="col-lg-6">
                <a href="{{ route('career.job', $job->id) }}" class="career-job-card">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <div>
                            <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:10px;">
                                <span style="background:rgba(241,165,30,.1);color:#f1a51e;font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;">
                                    {{ $job->department }}
                                </span>
                                @php [$tc, $bc] = explode(',', $job->type_color); @endphp
                                <span style="background:{{ $bc }};color:{{ $tc }};font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;">
                                    {{ $job->type_label }}
                                </span>
                            </div>
                            <h3 style="font-size:19px;font-weight:800;color:#212741;margin-bottom:6px;">{{ $job->title }}</h3>
                        </div>
                        <div style="width:44px;height:44px;background:rgba(241,165,30,.1);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                            <i class="fas fa-arrow-right" style="color:#f1a51e;"></i>
                        </div>
                    </div>
                    <p style="font-size:13px;color:#6b7280;line-height:1.65;margin-bottom:18px;">{{ Str::limit($job->description, 130) }}</p>
                    <div class="d-flex flex-wrap gap-3" style="font-size:12px;color:#9ca3af;padding-top:14px;border-top:1px solid #f3f4f6;">
                        <span><i class="fas fa-map-marker-alt me-1" style="color:#f1a51e;"></i>{{ $job->location }}</span>
                        <span><i class="fas fa-clock me-1" style="color:#f1a51e;"></i>{{ $job->experience }}</span>
                        @if($job->salary)
                        <span><i class="fas fa-money-bill-wave me-1" style="color:#f1a51e;"></i>{{ $job->salary }}</span>
                        @endif
                        @if($job->deadline)
                        <span><i class="fas fa-calendar-alt me-1" style="color:#f1a51e;"></i>Apply by {{ $job->deadline->format('d M Y') }}</span>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>

{{-- ===== APPLICATION PROCESS ===== --}}
<section style="background:#212741;padding:80px 0;">
    <div class="container">
        <div class="section-heading" style="margin-bottom:50px;">
            <h6 style="color:#f1a51e;">OUR PROCESS</h6>
            <h4 style="color:#fff;">How We Hire</h4>
        </div>
        <div class="row g-4">
            @foreach([
                ['Submit Application','Fill in our online form with your CV and cover letter. We review every application personally.'],
                ['Initial Screening','Our team reviews your profile and reaches out within 5–7 business days if you\'re shortlisted.'],
                ['Interview Round','A conversation with the hiring manager — we want to know your thinking, not test your memory.'],
                ['Offer & Onboarding','Successful candidates receive a formal offer and join a structured onboarding programme.'],
            ] as $i => $step)
            <div class="col-lg-3 col-md-6">
                <div style="text-align:center;padding:10px;">
                    <div style="width:52px;height:52px;border-radius:50%;background:#f1a51e;color:#fff;font-size:20px;font-weight:800;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">{{ $i+1 }}</div>
                    <h5 style="color:#fff;font-size:16px;font-weight:700;margin-bottom:10px;">{{ $step[0] }}</h5>
                    <p style="color:rgba(255,255,255,.6);font-size:13px;line-height:1.7;margin:0;">{{ $step[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ===== GENERAL APPLICATION CTA ===== --}}
<section style="background:#f8f9fc;padding:70px 0;">
    <div class="container text-center">
        <h4 style="color:#212741;font-size:28px;font-weight:800;margin-bottom:12px;">Don't See the Right Role?</h4>
        <p style="color:#6b7280;font-size:15px;max-width:480px;margin:0 auto 28px;line-height:1.7;">We're always open to hearing from talented people. Send us your CV and we'll reach out when the right opportunity arises.</p>
        <a href="{{ route('contact') }}" style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:14px 30px;border-radius:10px;font-size:15px;font-weight:700;text-decoration:none;">
            Get in Touch <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</section>

@endsection

@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js?v=3"></script>
@endsection

