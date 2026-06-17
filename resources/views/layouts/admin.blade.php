<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Admin') | Hawks Marketing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
  @livewireStyles
</head>
<body class="admin-body">

{{-- Page loader --}}
<div id="admin-loader" style="display:none;position:fixed;inset:0;background:rgba(26,31,54,.9);align-items:center;justify-content:center;z-index:99999;backdrop-filter:blur(3px);" aria-hidden="true">
  <div class="loader-inner" style="text-align:center;">
    <div class="loader-ring" style="position:relative;width:60px;height:60px;margin:0 auto 20px;">
      <svg viewBox="0 0 60 60" width="60" height="60" style="animation:loader-rotate 1s linear infinite;">
        <circle cx="30" cy="30" r="26" fill="none" stroke="#f1a51e" stroke-width="3.5" stroke-linecap="round" stroke-dasharray="120" stroke-dashoffset="0" style="animation:loader-dash 1.4s ease-in-out infinite;" />
      </svg>
      <span class="loader-dot" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:8px;height:8px;background:#f1a51e;border-radius:50%;animation:loader-pulse 1.4s ease-in-out infinite;"></span>
    </div>
    <div class="loader-message" id="loader-msg" style="font-size:15px;font-weight:600;color:#fff;letter-spacing:0.3px;margin-bottom:6px;text-shadow:0 1px 4px rgba(0,0,0,0.4);">Loading…</div>
    <div class="loader-brand" style="font-size:10px;text-transform:uppercase;letter-spacing:2px;color:rgba(255,255,255,0.4);">Hawks Marketing</div>
  </div>
</div>

  <div class="admin-wrapper d-flex">

    <!-- Sidebar -->
    <aside class="admin-sidebar">
      <div class="admin-logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Hawks Marketing">
        <span>Admin Panel</span>
      </div>
      <nav class="admin-nav">
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <i class="fas fa-gauge-high"></i> Dashboard
        </a>
        <a href="{{ route('admin.banner') }}" class="{{ request()->routeIs('admin.banner') ? 'active' : '' }}">
          <i class="fas fa-image"></i> Banner Image
        </a>
        <a href="{{ route('admin.content') }}" class="{{ request()->routeIs('admin.content') ? 'active' : '' }}">
          <i class="fas fa-pen-to-square"></i> Content Editor
        </a>
        <a href="{{ route('admin.testimonials') }}" class="{{ request()->routeIs('admin.testimonials') ? 'active' : '' }}">
          <i class="fas fa-star"></i> Testimonials
        </a>
        <a href="{{ route('admin.companies') }}" class="{{ request()->routeIs('admin.companies') ? 'active' : '' }}">
          <i class="fas fa-building"></i> Companies
        </a>
        <a href="{{ route('admin.blogs') }}" class="{{ request()->routeIs('admin.blogs') ? 'active' : '' }}">
          <i class="fas fa-newspaper"></i> Blog Manager
        </a>
        <a href="{{ route('admin.client-stories') }}" class="{{ request()->routeIs('admin.client-stories') ? 'active' : '' }}">
          <i class="fas fa-star"></i> Client Stories
        </a>
        <a href="{{ route('admin.jobs') }}" class="{{ request()->routeIs('admin.jobs') ? 'active' : '' }}">
          <i class="fas fa-briefcase"></i> Job Postings
        </a>
        <a href="{{ route('admin.job-applications') }}" class="{{ request()->routeIs('admin.job-applications') ? 'active' : '' }}" style="position:relative;">
          <i class="fas fa-file-alt"></i> Applications
          @php $newApps = \App\Models\JobApplication::whereNull('read_at')->count(); @endphp
          @if($newApps > 0)
            <span style="background:#f1a51e;color:#fff;font-size:10px;font-weight:700;padding:1px 6px;border-radius:10px;margin-left:auto;">{{ $newApps }}</span>
          @endif
        </a>
        <a href="{{ route('admin.submissions') }}" class="{{ request()->routeIs('admin.submissions') ? 'active' : '' }}" style="position:relative;">
          <i class="fas fa-envelope"></i> Contact Inbox
          @php $unread = \App\Models\ContactSubmission::whereNull('read_at')->count(); @endphp
          @if($unread > 0)
            <span style="background:#f1a51e; color:#fff; font-size:10px; font-weight:700; padding:1px 6px; border-radius:10px; margin-left:auto;">{{ $unread }}</span>
          @endif
        </a>
        <a href="{{ route('admin.email.inbox') }}" class="{{ request()->routeIs('admin.email.*') ? 'active' : '' }}">
          <i class="fas fa-envelope-open-text"></i> Email
        </a>
        @if(auth()->user()->role === 'admin')
        <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">
          <i class="fas fa-users"></i> User Management
        </a>
        @endif
      </nav>
      <div class="admin-sidebar-footer">
        <a href="{{ route('home') }}" target="_blank">
          <i class="fas fa-external-link-alt"></i> View Website
        </a>
      </div>
    </aside>

    <!-- Main Area -->
    <div class="admin-main flex-grow-1 d-flex flex-column">

      <!-- Top Header -->
      <header class="admin-header d-flex align-items-center justify-content-between">
        <h6 class="mb-0 fw-semibold text-muted">@yield('page-title', 'Dashboard')</h6>
        <div class="d-flex align-items-center gap-3">
          <span class="admin-user-info">
            <i class="fas fa-user-circle me-1"></i>
            {{ auth()->user()->name }}
            <span class="badge ms-1 {{ auth()->user()->role === 'admin' ? 'badge-admin' : 'badge-editor' }}">
              {{ ucfirst(auth()->user()->role) }}
            </span>
          </span>
          <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </button>
          </form>
        </div>
      </header>

      <!-- Content Area -->
      <main class="admin-content-area flex-grow-1">

        @if(session('message'))
          <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        @yield('content')

      </main>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @livewireScripts
  @stack('admin-scripts')

  <script>
  (function () {
    var loader = document.getElementById('admin-loader');
    var msgEl  = document.getElementById('loader-msg');

    function show(msg) {
      msgEl.textContent = msg || 'Loading…';
      loader.style.display = 'flex';
      loader.classList.add('loader-visible');
    }

    function hide() {
      loader.classList.remove('loader-visible');
      loader.style.display = 'none';
    }

    // Always hide on page load/restore (handles back-forward cache too)
    hide();
    window.addEventListener('pageshow', hide);

    // Map URL path → message
    function navMessage(path) {
      if (/\/email\/compose/.test(path))   return 'Opening composer…';
      if (/\/email\/sent/.test(path))      return 'Loading sent folder…';
      if (/\/email\/\d+/.test(path))       return 'Loading email…';
      if (/\/email/.test(path))            return 'Loading inbox…';
      if (/\/submissions/.test(path))      return 'Loading submissions…';
      if (/\/banner/.test(path))           return 'Loading banner settings…';
      if (/\/content/.test(path))          return 'Loading content editor…';
      if (/\/testimonials/.test(path))     return 'Loading testimonials…';
      if (/\/companies/.test(path))        return 'Loading companies…';
      if (/\/blogs/.test(path))                return 'Loading blog manager…';
      if (/\/client-stories/.test(path))      return 'Loading client stories…';
      if (/\/job-applications/.test(path))    return 'Loading applications…';
      if (/\/jobs/.test(path))                return 'Loading job postings…';
      if (/\/users/.test(path))            return 'Loading users…';
      if (/\/admin\/?$/.test(path))        return 'Loading dashboard…';
      return 'Loading…';
    }

    // Map form action → message
    function formMessage(form) {
      var action = (form.getAttribute('action') || '').toLowerCase();
      if (/\/email\/send/.test(action))    return 'Sending email…';
      if (/\/logout/.test(action))         return 'Logging out…';
      if (/\/login/.test(action))          return 'Signing in…';
      if (/\/contact/.test(action))        return 'Sending message…';
      return 'Processing…';
    }

    // Intercept navigation clicks
    document.addEventListener('click', function (e) {
      var a = e.target.closest('a[href]');
      if (!a) return;
      var href = a.getAttribute('href');
      // Skip: same-page anchors, javascript, mailto, external, new-tab
      if (!href || href.charAt(0) === '#' || /^(javascript|mailto|tel):/.test(href) || a.target === '_blank') return;
      try {
        var url = new URL(href, location.origin);
        if (url.origin !== location.origin) return;
        show(navMessage(url.pathname));
      } catch (err) {
        show('Loading…');
      }
    });

    // Intercept form submits — skip Livewire forms (AJAX, no full page reload)
    document.addEventListener('submit', function (e) {
      var f = e.target;
      if (f.hasAttribute('wire:submit') || f.hasAttribute('wire:submit.prevent') || f.closest('[wire\\:id]')) return;
      show(formMessage(f));
    });
  }());
  </script>
</body>
</html>
