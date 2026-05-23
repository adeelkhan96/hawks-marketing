<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login | Hawks Marketing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body class="admin-login-body">

  <div class="login-wrapper">
    <div class="login-card">

      <div class="login-logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Hawks Marketing Logo">
        <h4>Admin Panel</h4>
        <p class="text-muted small">Sign in to manage your website</p>
      </div>

      @if($errors->any())
        <div class="alert alert-danger py-2 px-3 mb-3">
          <i class="fas fa-exclamation-circle me-1"></i>{{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login.post') }}">
        @csrf
        <div class="mb-3">
          <label class="form-label fw-semibold">Email Address</label>
          <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="admin@example.com">
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Password</label>
          <input type="password" name="password" class="form-control" required placeholder="••••••••">
        </div>
        <div class="mb-4 form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember">
          <label class="form-check-label small" for="remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-admin w-100">
          <i class="fas fa-sign-in-alt me-2"></i>Sign In
        </button>
      </form>

    </div>
    <p class="text-center mt-3" style="color: rgba(255,255,255,0.5); font-size: 13px;">
      &copy; {{ date('Y') }} Hawks Marketing
    </p>
  </div>

</body>
</html>
