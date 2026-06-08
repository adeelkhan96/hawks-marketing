@extends('layouts.base')
@section('title','Blog | Hawks Marketing')
@section('meta-title','Blog | Hawks Marketing')
@section('meta-description','Insights, strategies, and tips from the Hawks Marketing team on SEO, social media, branding, content marketing, and business growth.')

@section('content')

{{-- Page Hero --}}
<section style="background:linear-gradient(135deg,#212741 0%,#2d3561 100%);padding:90px 0 70px;position:relative;overflow:hidden;">
  <div style="position:absolute;top:-60px;right:-60px;width:320px;height:320px;background:rgba(255,81,26,.08);border-radius:50%;"></div>
  <div style="position:absolute;bottom:-80px;left:-40px;width:240px;height:240px;background:rgba(255,81,26,.06);border-radius:50%;"></div>
  <div class="container" style="position:relative;z-index:2;">
    <div class="row">
      <div class="col-lg-8">
        <p style="color:#ff511a;font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:12px;">
          <i class="fas fa-newspaper me-2"></i>Hawks Marketing Blog
        </p>
        <h1 style="color:#fff;font-size:42px;font-weight:800;line-height:1.2;margin-bottom:16px;">
          Insights &amp; Strategies for <span style="color:#ff511a;">Digital Growth</span>
        </h1>
        <p style="color:rgba(255,255,255,.7);font-size:16px;line-height:1.7;max-width:520px;">
          Expert tips on SEO, social media marketing, branding, and business growth — straight from the Hawks Marketing team.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Blog Grid --}}
<section style="background:#f8f9fc;padding:70px 0;">
  <div class="container">

    @if($blogs->isEmpty())
    <div class="text-center py-5">
      <div style="width:80px;height:80px;background:rgba(255,81,26,.1);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;">
        <i class="fas fa-pen-nib" style="font-size:32px;color:#ff511a;"></i>
      </div>
      <h4 style="color:#212741;font-weight:700;">Coming Soon</h4>
      <p style="color:#6b7280;max-width:400px;margin:0 auto;">We're working on insightful articles for you. Check back soon!</p>
    </div>

    @else

    {{-- Featured first post (large card) --}}
    @php $featured = $blogs->first(); $rest = $blogs->skip(1); @endphp

    <div class="row mb-5">
      <div class="col-12">
        <a href="{{ route('blog.show', $featured->slug) }}" class="blog-featured-card">
          <div class="row g-0" style="background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 8px 40px rgba(33,39,65,.1);transition:all .3s;">
            <div class="col-lg-6">
              @if($featured->featured_image)
                <img src="{{ asset($featured->featured_image) }}" alt="{{ $featured->title }}"
                     style="width:100%;height:100%;min-height:320px;object-fit:cover;">
              @else
                <div style="width:100%;height:100%;min-height:320px;background:linear-gradient(135deg,#212741,#2d3561);display:flex;align-items:center;justify-content:center;">
                  <i class="fas fa-newspaper" style="font-size:64px;color:rgba(255,255,255,.15);"></i>
                </div>
              @endif
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div style="padding:48px;">
                <span style="background:rgba(255,81,26,.1);color:#ff511a;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:4px 12px;border-radius:20px;">Featured Post</span>
                <h2 style="color:#212741;font-size:24px;font-weight:800;line-height:1.3;margin:16px 0 12px;">{{ $featured->title }}</h2>
                @if($featured->excerpt)
                  <p style="color:#6b7280;font-size:14px;line-height:1.7;margin-bottom:20px;">{{ Str::limit($featured->excerpt, 160) }}</p>
                @endif
                <div class="d-flex align-items-center gap-3" style="font-size:13px;color:#9ca3af;margin-bottom:24px;">
                  <span><i class="fas fa-user-circle me-1"></i>{{ $featured->author }}</span>
                  <span><i class="fas fa-calendar-alt me-1"></i>{{ $featured->published_at?->format('d M Y') }}</span>
                  <span><i class="fas fa-clock me-1"></i>{{ $featured->read_time }}</span>
                </div>
                <span style="display:inline-flex;align-items:center;gap:8px;background:#ff511a;color:#fff;padding:10px 22px;border-radius:8px;font-size:13px;font-weight:700;">
                  Read Article <i class="fas fa-arrow-right"></i>
                </span>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    {{-- Remaining posts grid --}}
    @if($rest->isNotEmpty())
    <div class="row g-4">
      @foreach($rest as $blog)
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('blog.show', $blog->slug) }}" class="blog-card-link">
          <div class="blog-card" style="background:#fff;border-radius:14px;overflow:hidden;box-shadow:0 4px 20px rgba(33,39,65,.07);transition:all .3s;height:100%;">
            {{-- Image --}}
            <div style="height:200px;overflow:hidden;position:relative;">
              @if($blog->featured_image)
                <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
                     style="width:100%;height:100%;object-fit:cover;transition:transform .4s;">
              @else
                <div style="width:100%;height:100%;background:linear-gradient(135deg,#212741 0%,#2d3561 60%,rgba(255,81,26,.3) 100%);display:flex;align-items:center;justify-content:center;">
                  <i class="fas fa-newspaper" style="font-size:40px;color:rgba(255,255,255,.2);"></i>
                </div>
              @endif
            </div>
            {{-- Content --}}
            <div style="padding:24px;">
              <div class="d-flex align-items-center gap-2 mb-2" style="font-size:12px;color:#9ca3af;">
                <span><i class="fas fa-calendar-alt me-1"></i>{{ $blog->published_at?->format('d M Y') }}</span>
                <span>&middot;</span>
                <span><i class="fas fa-clock me-1"></i>{{ $blog->read_time }}</span>
              </div>
              <h3 style="color:#212741;font-size:17px;font-weight:700;line-height:1.4;margin-bottom:10px;">
                {{ $blog->title }}
              </h3>
              @if($blog->excerpt)
                <p style="color:#6b7280;font-size:13px;line-height:1.65;margin-bottom:16px;">{{ Str::limit($blog->excerpt, 120) }}</p>
              @endif
              <div style="display:flex;align-items:center;justify-content:space-between;">
                <span style="font-size:12px;color:#9ca3af;"><i class="fas fa-user-circle me-1"></i>{{ $blog->author }}</span>
                <span style="color:#ff511a;font-size:13px;font-weight:700;">Read More <i class="fas fa-arrow-right"></i></span>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    @endif

    @endif
  </div>
</section>

@endsection

@section('head')
<style>
.blog-featured-card:hover > div { box-shadow: 0 20px 60px rgba(33,39,65,.18) !important; transform: translateY(-4px); }
.blog-featured-card { text-decoration: none !important; display: block; }
.blog-card-link { text-decoration: none !important; display: block; height: 100%; }
.blog-card:hover { box-shadow: 0 12px 40px rgba(33,39,65,.14) !important; transform: translateY(-5px); }
.blog-card:hover img { transform: scale(1.04); }
</style>
@endsection

@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js"></script>
@endsection
