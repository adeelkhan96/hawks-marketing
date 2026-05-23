<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Admin') | Hawks Marketing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
  @livewireStyles
</head>
<body class="admin-body">

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
        <a href="{{ route('admin.submissions') }}" class="{{ request()->routeIs('admin.submissions') ? 'active' : '' }}" style="position:relative;">
          <i class="fas fa-envelope"></i> Contact Inbox
          @php $unread = \App\Models\ContactSubmission::whereNull('read_at')->count(); @endphp
          @if($unread > 0)
            <span style="background:#ff511a; color:#fff; font-size:10px; font-weight:700; padding:1px 6px; border-radius:10px; margin-left:auto;">{{ $unread }}</span>
          @endif
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
</body>
</html>
