@extends('layouts.base')
@section('title', ($blog->meta_title ?: $blog->title) . ' | Hawks Marketing')
@section('meta-title', $blog->meta_title ?: $blog->title)
@section('meta-description', $blog->meta_description ?: $blog->excerpt ?: '')
@section('meta-image', $blog->featured_image ? asset($blog->featured_image) : '')

@section('head')
<style>
/* ---- Blog content typography ---- */
.blog-content h2 { font-size: 22px; font-weight: 800; color: #212741; margin: 36px 0 14px; padding-bottom: 8px; border-bottom: 2px solid rgba(241,165,30,.15); }
.blog-content h3 { font-size: 18px; font-weight: 700; color: #212741; margin: 28px 0 10px; }
.blog-content h4 { font-size: 16px; font-weight: 700; color: #212741; margin: 22px 0 8px; }
.blog-content p  { font-size: 15px; color: #4b5563; line-height: 1.85; margin-bottom: 18px; }
.blog-content ul, .blog-content ol { margin: 12px 0 20px 20px; padding: 0; }
.blog-content li { font-size: 15px; color: #4b5563; line-height: 1.8; margin-bottom: 6px; }
.blog-content blockquote { border-left: 4px solid #f1a51e; padding: 14px 20px; background: rgba(241,165,30,.05); border-radius: 0 8px 8px 0; margin: 24px 0; color: #374151; font-style: italic; font-size: 16px; }
.blog-content a { color: #f1a51e; text-decoration: underline; }
.blog-content a:hover { color: #e04010; }
.blog-content img { max-width: 100%; border-radius: 12px; margin: 20px 0; box-shadow: 0 6px 24px rgba(33,39,65,.12); }
.blog-content strong { color: #212741; font-weight: 700; }
.blog-content code { background: #f1f5f9; color: #e04010; padding: 2px 6px; border-radius: 4px; font-size: 13px; }
.blog-content pre { background: #1e293b; color: #e2e8f0; padding: 20px; border-radius: 10px; overflow-x: auto; margin: 20px 0; font-size: 13px; }

/* ---- Sidebar ---- */
.blog-sidebar-card { background:#fff; border-radius:12px; box-shadow:0 4px 20px rgba(33,39,65,.07); padding:24px; margin-bottom:24px; }
.blog-sidebar-card h5 { font-size:13px; font-weight:800; text-transform:uppercase; letter-spacing:1.5px; color:#212741; margin-bottom:16px; padding-bottom:10px; border-bottom:2px solid #f1a51e; }

/* ---- Recent post card ---- */
.recent-post-item { display:flex; gap:12px; align-items:flex-start; padding:10px 0; border-bottom:1px solid #f3f4f6; text-decoration:none; }
.recent-post-item:last-child { border-bottom:none; }
.recent-post-item:hover .rpi-title { color:#f1a51e; }
.rpi-thumb { width:60px; height:46px; border-radius:6px; object-fit:cover; flex-shrink:0; }
.rpi-thumb-placeholder { width:60px; height:46px; border-radius:6px; background:linear-gradient(135deg,#212741,#2d3561); flex-shrink:0; display:flex; align-items:center; justify-content:center; }
.rpi-title { font-size:13px; font-weight:600; color:#212741; line-height:1.4; transition:color .2s; }
.rpi-date { font-size:11px; color:#9ca3af; margin-top:2px; }
</style>
@endsection

@section('content')

@if($blog->layout === 'standard')
{{-- ===================== STANDARD LAYOUT ===================== --}}

  {{-- Breadcrumb --}}
  <div style="background:#f8f9fc;padding:14px 0;">
    <div class="container">
      <nav style="font-size:13px;color:#9ca3af;">
        <a href="{{ route('home') }}" style="color:#6b7280;text-decoration:none;">Home</a>
        <span class="mx-2">›</span>
        <a href="{{ route('blogs') }}" style="color:#6b7280;text-decoration:none;">Blog</a>
        <span class="mx-2">›</span>
        <span style="color:#212741;">{{ Str::limit($blog->title, 50) }}</span>
      </nav>
    </div>
  </div>

  {{-- Hero image --}}
  @if($blog->featured_image)
  <div style="height:460px;overflow:hidden;">
    <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
         style="width:100%;height:100%;object-fit:cover;">
  </div>
  @else
  <div style="height:220px;background:linear-gradient(135deg,#212741 0%,#2d3561 100%);"></div>
  @endif

  {{-- Article --}}
  <section style="background:#fff;padding:60px 0 80px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">

          {{-- Meta --}}
          <div class="d-flex flex-wrap align-items-center gap-3 mb-4" style="font-size:13px;color:#9ca3af;">
            <span style="background:rgba(241,165,30,.1);color:#f1a51e;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:1px;padding:4px 12px;border-radius:20px;">Blog</span>
            <span><i class="fas fa-user-circle me-1"></i>{{ $blog->author }}</span>
            <span><i class="fas fa-calendar-alt me-1"></i>{{ $blog->published_at?->format('d M Y') }}</span>
            <span><i class="fas fa-clock me-1"></i>{{ $blog->read_time }}</span>
          </div>

          <h1 style="color:#212741;font-size:32px;font-weight:800;line-height:1.3;margin-bottom:24px;">{{ $blog->title }}</h1>

          @if($blog->excerpt)
          <p style="font-size:17px;color:#374151;line-height:1.8;border-left:4px solid #f1a51e;padding-left:20px;margin-bottom:32px;font-weight:500;">
            {{ $blog->excerpt }}
          </p>
          @endif

          <div class="blog-content">{!! $blog->content !!}</div>

          {{-- Share --}}
          @include('partials.blog-share', ['blog' => $blog])

        </div>
      </div>
    </div>
  </section>

@elseif($blog->layout === 'full-width')
{{-- ===================== FULL WIDTH LAYOUT ===================== --}}

  {{-- Full-bleed billboard --}}
  <div style="position:relative;min-height:500px;display:flex;align-items:flex-end;overflow:hidden;">
    @if($blog->featured_image)
      <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
           style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;">
    @endif
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(33,39,65,.95) 0%,rgba(33,39,65,.5) 50%,transparent 100%);"></div>
    <div class="container" style="position:relative;z-index:2;padding:60px 15px;">
      <div class="row">
        <div class="col-lg-10">
          <nav style="font-size:13px;color:rgba(255,255,255,.6);margin-bottom:20px;">
            <a href="{{ route('home') }}" style="color:rgba(255,255,255,.6);text-decoration:none;">Home</a>
            <span class="mx-2">›</span>
            <a href="{{ route('blogs') }}" style="color:rgba(255,255,255,.6);text-decoration:none;">Blog</a>
          </nav>
          <h1 style="color:#fff;font-size:38px;font-weight:800;line-height:1.25;margin-bottom:16px;">{{ $blog->title }}</h1>
          <div class="d-flex flex-wrap gap-3" style="font-size:13px;color:rgba(255,255,255,.7);">
            <span><i class="fas fa-user-circle me-1"></i>{{ $blog->author }}</span>
            <span><i class="fas fa-calendar-alt me-1"></i>{{ $blog->published_at?->format('d M Y') }}</span>
            <span><i class="fas fa-clock me-1"></i>{{ $blog->read_time }}</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Full-width content --}}
  <section style="background:#fff;padding:60px 0 80px;">
    <div class="container-fluid" style="max-width:900px;">
      @if($blog->excerpt)
      <p style="font-size:18px;color:#374151;line-height:1.8;border-left:4px solid #f1a51e;padding-left:20px;margin-bottom:40px;font-weight:500;">
        {{ $blog->excerpt }}
      </p>
      @endif
      <div class="blog-content">{!! $blog->content !!}</div>
      @include('partials.blog-share', ['blog' => $blog])
    </div>
  </section>

@elseif($blog->layout === 'magazine')
{{-- ===================== MAGAZINE LAYOUT ===================== --}}

  {{-- Compact hero --}}
  <div style="background:linear-gradient(135deg,#212741,#2d3561);padding:50px 0 40px;">
    <div class="container">
      <nav style="font-size:13px;color:rgba(255,255,255,.5);margin-bottom:16px;">
        <a href="{{ route('home') }}" style="color:rgba(255,255,255,.5);text-decoration:none;">Home</a>
        <span class="mx-2">›</span>
        <a href="{{ route('blogs') }}" style="color:rgba(255,255,255,.5);text-decoration:none;">Blog</a>
      </nav>
      <h1 style="color:#fff;font-size:32px;font-weight:800;line-height:1.3;max-width:700px;margin-bottom:16px;">{{ $blog->title }}</h1>
      <div class="d-flex flex-wrap gap-3" style="font-size:13px;color:rgba(255,255,255,.6);">
        <span><i class="fas fa-user-circle me-1"></i>{{ $blog->author }}</span>
        <span><i class="fas fa-calendar-alt me-1"></i>{{ $blog->published_at?->format('d M Y') }}</span>
        <span><i class="fas fa-clock me-1"></i>{{ $blog->read_time }}</span>
      </div>
    </div>
  </div>

  {{-- Two-column: content + sidebar --}}
  <section style="background:#f8f9fc;padding:50px 0 80px;">
    <div class="container">
      <div class="row g-5">

        {{-- Main content --}}
        <div class="col-lg-8">
          @if($blog->featured_image)
          <img src="{{ asset($blog->featured_image) }}" alt="{{ $blog->title }}"
               style="width:100%;height:320px;object-fit:cover;border-radius:14px;margin-bottom:32px;box-shadow:0 8px 32px rgba(33,39,65,.12);">
          @endif

          @if($blog->excerpt)
          <p style="font-size:17px;color:#374151;line-height:1.8;border-left:4px solid #f1a51e;padding-left:20px;margin-bottom:32px;font-weight:500;background:#fff;padding:16px 20px;border-radius:0 10px 10px 0;box-shadow:0 2px 8px rgba(33,39,65,.05);">
            {{ $blog->excerpt }}
          </p>
          @endif

          <div style="background:#fff;border-radius:14px;padding:36px;box-shadow:0 4px 24px rgba(33,39,65,.07);">
            <div class="blog-content">{!! $blog->content !!}</div>
          </div>

          @include('partials.blog-share', ['blog' => $blog])
        </div>

        {{-- Sidebar --}}
        <div class="col-lg-4">

          {{-- Author box --}}
          <div class="blog-sidebar-card">
            <h5>About the Author</h5>
            <div style="display:flex;align-items:center;gap:14px;">
              <div style="width:52px;height:52px;background:linear-gradient(135deg,#212741,#f1a51e);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                <i class="fas fa-user" style="color:#fff;font-size:20px;"></i>
              </div>
              <div>
                <div style="font-weight:700;color:#212741;font-size:14px;">{{ $blog->author }}</div>
                <div style="font-size:12px;color:#9ca3af;">Hawks Marketing Team</div>
              </div>
            </div>
            <p style="font-size:13px;color:#6b7280;margin-top:14px;line-height:1.65;margin-bottom:0;">
              Digital marketing experts helping businesses grow their online presence through data-driven strategies.
            </p>
          </div>

          {{-- Recent posts --}}
          @if($recentBlogs->isNotEmpty())
          <div class="blog-sidebar-card">
            <h5>Recent Posts</h5>
            @foreach($recentBlogs as $recent)
            <a href="{{ route('blog.show', $recent->slug) }}" class="recent-post-item">
              @if($recent->featured_image)
                <img src="{{ asset($recent->featured_image) }}" alt="" class="rpi-thumb">
              @else
                <div class="rpi-thumb-placeholder"><i class="fas fa-newspaper" style="font-size:18px;color:rgba(255,255,255,.3);"></i></div>
              @endif
              <div>
                <div class="rpi-title">{{ Str::limit($recent->title, 60) }}</div>
                <div class="rpi-date">{{ $recent->published_at?->format('d M Y') }}</div>
              </div>
            </a>
            @endforeach
          </div>
          @endif

          {{-- CTA --}}
          <div class="blog-sidebar-card" style="background:linear-gradient(135deg,#212741,#2d3561);border:none;">
            <h5 style="color:#fff;border-bottom-color:rgba(255,255,255,.2);">Ready to Grow?</h5>
            <p style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.65;margin-bottom:16px;">
              Let Hawks Marketing build your digital strategy. Get a free consultation today.
            </p>
            <a href="{{ route('contact') }}" style="display:block;text-align:center;background:#f1a51e;color:#fff;padding:10px;border-radius:8px;font-size:13px;font-weight:700;text-decoration:none;">
              Contact Us <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

@endif

{{-- Related posts footer strip --}}
@if($recentBlogs->isNotEmpty() && $blog->layout !== 'magazine')
<section style="background:#f8f9fc;padding:60px 0;">
  <div class="container">
    <div class="section-heading" style="margin-bottom:40px;">
      <h6>MORE FROM OUR BLOG</h6>
      <h4>Related Posts</h4>
    </div>
    <div class="row g-4">
      @foreach($recentBlogs->take(3) as $recent)
      <div class="col-lg-4 col-md-6">
        <a href="{{ route('blog.show', $recent->slug) }}" style="text-decoration:none;display:block;height:100%;">
          <div style="background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 20px rgba(33,39,65,.07);height:100%;transition:all .3s;">
            <div style="height:160px;overflow:hidden;">
              @if($recent->featured_image)
                <img src="{{ asset($recent->featured_image) }}" alt="{{ $recent->title }}" style="width:100%;height:100%;object-fit:cover;transition:transform .4s;">
              @else
                <div style="width:100%;height:100%;background:linear-gradient(135deg,#212741,#2d3561);display:flex;align-items:center;justify-content:center;">
                  <i class="fas fa-newspaper" style="font-size:32px;color:rgba(255,255,255,.2);"></i>
                </div>
              @endif
            </div>
            <div style="padding:20px;">
              <div style="font-size:11px;color:#9ca3af;margin-bottom:8px;">{{ $recent->published_at?->format('d M Y') }}</div>
              <h5 style="font-size:15px;font-weight:700;color:#212741;line-height:1.4;margin-bottom:8px;">{{ Str::limit($recent->title, 70) }}</h5>
              <span style="color:#f1a51e;font-size:13px;font-weight:700;">Read More <i class="fas fa-arrow-right"></i></span>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endif

@endsection

@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js?v=3"></script>
@endsection

