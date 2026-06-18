@extends('layouts.base')
@section('title', $job->title . ' | Careers | Hawks Marketing')
@section('meta-title', $job->title . ' | Hawks Marketing')
@section('meta-description', Str::limit(strip_tags($job->description), 160))

@section('content')

{{-- Breadcrumb --}}
<div style="background:#f8f9fc;padding:14px 0;">
    <div class="container">
        <nav style="font-size:13px;color:#9ca3af;">
            <a href="{{ route('home') }}" style="color:#6b7280;text-decoration:none;">Home</a>
            <span class="mx-2">›</span>
            <a href="{{ route('career') }}" style="color:#6b7280;text-decoration:none;">Careers</a>
            <span class="mx-2">›</span>
            <span style="color:#212741;">{{ $job->title }}</span>
        </nav>
    </div>
</div>

{{-- Job header --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:60px 0 50px;">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:14px;">
                    <span style="background:rgba(241,165,30,.2);color:#f8c96a;font-size:11px;font-weight:700;padding:4px 12px;border-radius:20px;">{{ $job->department }}</span>
                    @php [$tc, $bc] = explode(',', $job->type_color); @endphp
                    <span style="background:rgba(255,255,255,.1);color:rgba(255,255,255,.85);font-size:11px;font-weight:700;padding:4px 12px;border-radius:20px;">{{ $job->type_label }}</span>
                </div>
                <h1 style="color:#fff;font-size:36px;font-weight:800;line-height:1.25;margin-bottom:20px;">{{ $job->title }}</h1>
                <div class="d-flex flex-wrap gap-4" style="font-size:13px;color:rgba(255,255,255,.7);">
                    <span><i class="fas fa-map-marker-alt me-2" style="color:#f1a51e;"></i>{{ $job->location }}</span>
                    <span><i class="fas fa-clock me-2" style="color:#f1a51e;"></i>{{ $job->experience }} experience</span>
                    @if($job->salary)
                    <span><i class="fas fa-money-bill-wave me-2" style="color:#f1a51e;"></i>{{ $job->salary }}</span>
                    @endif
                    @if($job->deadline)
                    <span><i class="fas fa-calendar-alt me-2" style="color:#f1a51e;"></i>Apply by {{ $job->deadline->format('d M Y') }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('career.apply.form', $job->id) }}"
                   style="display:inline-flex;align-items:center;gap:10px;background:#f1a51e;color:#fff;padding:15px 32px;border-radius:10px;font-size:16px;font-weight:700;text-decoration:none;">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Job content --}}
<section style="background:#f8f9fc;padding:60px 0 80px;">
    <div class="container">
        <div class="row g-5">

            {{-- Main --}}
            <div class="col-lg-8">

                {{-- Description --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;">
                    <div class="card-body p-4 p-lg-5">
                        <h3 style="font-size:18px;font-weight:800;color:#212741;margin-bottom:16px;padding-bottom:12px;border-bottom:2px solid rgba(241,165,30,.15);">
                            <i class="fas fa-info-circle me-2" style="color:#f1a51e;"></i>About the Role
                        </h3>
                        @foreach(explode("\n", $job->description) as $para)
                            @if(trim($para))<p style="font-size:15px;color:#4b5563;line-height:1.85;margin-bottom:14px;">{{ trim($para) }}</p>@endif
                        @endforeach
                    </div>
                </div>

                {{-- Responsibilities --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;">
                    <div class="card-body p-4 p-lg-5">
                        <h3 style="font-size:18px;font-weight:800;color:#212741;margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid rgba(241,165,30,.15);">
                            <i class="fas fa-tasks me-2" style="color:#f1a51e;"></i>Key Responsibilities
                        </h3>
                        <ul style="list-style:none;padding:0;margin:0;">
                            @foreach(array_filter(array_map('trim', explode("\n", $job->responsibilities))) as $item)
                            <li style="display:flex;gap:12px;align-items:flex-start;padding:8px 0;border-bottom:1px solid #f3f4f6;font-size:14px;color:#374151;line-height:1.65;">
                                <i class="fas fa-check-circle" style="color:#f1a51e;flex-shrink:0;margin-top:3px;"></i>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- Requirements --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;">
                    <div class="card-body p-4 p-lg-5">
                        <h3 style="font-size:18px;font-weight:800;color:#212741;margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid rgba(241,165,30,.15);">
                            <i class="fas fa-user-check me-2" style="color:#f1a51e;"></i>Requirements
                        </h3>
                        <ul style="list-style:none;padding:0;margin:0;">
                            @foreach(array_filter(array_map('trim', explode("\n", $job->requirements))) as $item)
                            <li style="display:flex;gap:12px;align-items:flex-start;padding:8px 0;border-bottom:1px solid #f3f4f6;font-size:14px;color:#374151;line-height:1.65;">
                                <i class="fas fa-angle-right" style="color:#f1a51e;flex-shrink:0;margin-top:4px;font-size:16px;font-weight:900;"></i>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @if($job->nice_to_have)
                {{-- Nice to have --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;">
                    <div class="card-body p-4 p-lg-5">
                        <h3 style="font-size:18px;font-weight:800;color:#212741;margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid rgba(241,165,30,.15);">
                            <i class="fas fa-star me-2" style="color:#f1a51e;"></i>Nice to Have
                        </h3>
                        <ul style="list-style:none;padding:0;margin:0;">
                            @foreach(array_filter(array_map('trim', explode("\n", $job->nice_to_have))) as $item)
                            <li style="display:flex;gap:12px;align-items:flex-start;padding:8px 0;border-bottom:1px solid #f3f4f6;font-size:14px;color:#374151;line-height:1.65;">
                                <i class="fas fa-plus-circle" style="color:#10b981;flex-shrink:0;margin-top:3px;"></i>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if($job->benefits)
                {{-- Benefits --}}
                <div class="card border-0 shadow-sm" style="border-radius:14px;">
                    <div class="card-body p-4 p-lg-5">
                        <h3 style="font-size:18px;font-weight:800;color:#212741;margin-bottom:20px;padding-bottom:12px;border-bottom:2px solid rgba(241,165,30,.15);">
                            <i class="fas fa-gift me-2" style="color:#f1a51e;"></i>What We Offer
                        </h3>
                        <div class="row g-3">
                            @foreach(array_filter(array_map('trim', explode("\n", $job->benefits))) as $item)
                            <div class="col-sm-6">
                                <div style="display:flex;align-items:center;gap:10px;background:#f8f9fc;border-radius:10px;padding:12px 14px;">
                                    <i class="fas fa-check" style="color:#f1a51e;flex-shrink:0;"></i>
                                    <span style="font-size:13px;color:#374151;">{{ $item }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

            </div>

            {{-- Sidebar --}}
            <div class="col-lg-4">

                {{-- Apply CTA --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;overflow:hidden;">
                    <div style="background:linear-gradient(135deg,#212741,#f1a51e20);padding:28px;text-align:center;">
                        <i class="fas fa-paper-plane" style="font-size:36px;color:#f1a51e;margin-bottom:14px;display:block;"></i>
                        <h5 style="color:#212741;font-weight:800;margin-bottom:8px;">Interested?</h5>
                        <p style="font-size:13px;color:#6b7280;line-height:1.65;margin-bottom:20px;">Submit your application and we'll be in touch within 5–7 business days.</p>
                        <a href="{{ route('career.apply.form', $job->id) }}"
                           style="display:block;background:#f1a51e;color:#fff;padding:13px;border-radius:9px;font-size:14px;font-weight:700;text-decoration:none;">
                            Apply for This Position <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>

                {{-- Job summary --}}
                <div class="card border-0 shadow-sm mb-4" style="border-radius:14px;">
                    <div class="card-body p-4">
                        <h5 style="font-size:13px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:16px;padding-bottom:10px;border-bottom:2px solid #f1a51e;">Job Summary</h5>
                        @foreach([
                            ['fa-building', 'Department', $job->department],
                            ['fa-map-marker-alt', 'Location', $job->location],
                            ['fa-briefcase', 'Job Type', $job->type_label],
                            ['fa-clock', 'Experience', $job->experience],
                            ['fa-money-bill-wave', 'Salary', $job->salary ?: 'Competitive'],
                            ['fa-calendar-alt', 'Deadline', $job->deadline ? $job->deadline->format('d M Y') : 'Open'],
                        ] as $row)
                        <div style="display:flex;justify-content:space-between;align-items:center;padding:10px 0;border-bottom:1px solid #f3f4f6;font-size:13px;">
                            <span style="color:#9ca3af;"><i class="fas {{ $row[0] }} me-2" style="color:#f1a51e;width:14px;text-align:center;"></i>{{ $row[1] }}</span>
                            <span style="color:#212741;font-weight:600;">{{ $row[2] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Share --}}
                <div class="card border-0 shadow-sm" style="border-radius:14px;">
                    <div class="card-body p-4">
                        <h5 style="font-size:13px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:14px;">Share This Job</h5>
                        <div class="d-flex gap-2">
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($job->title) }}" target="_blank"
                               style="flex:1;text-align:center;background:#0a66c2;color:#fff;padding:9px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($job->title . ' at Hawks Marketing — ' . url()->current()) }}" target="_blank"
                               style="flex:1;text-align:center;background:#25d366;color:#fff;padding:9px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank"
                               style="flex:1;text-align:center;background:#1877f2;color:#fff;padding:9px;border-radius:8px;font-size:13px;font-weight:600;text-decoration:none;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
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

