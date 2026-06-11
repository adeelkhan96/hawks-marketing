@extends('layouts.admin')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

  <!-- Stats Row -->
  <div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl">
      <div class="stat-card d-flex align-items-center justify-content-between">
        <div>
          <h2>{{ $stats['total_users'] }}</h2>
          <p>Total Users</p>
        </div>
        <i class="fas fa-users"></i>
      </div>
    </div>
    <div class="col-sm-6 col-xl">
      <div class="stat-card d-flex align-items-center justify-content-between" style="border-color:#43ba7f;">
        <div>
          <h2 style="color:#43ba7f;">{{ $stats['admins'] }}</h2>
          <p>Admins</p>
        </div>
        <i class="fas fa-user-shield" style="color:#43ba7f;"></i>
      </div>
    </div>
    <div class="col-sm-6 col-xl">
      <div class="stat-card d-flex align-items-center justify-content-between" style="border-color:#6366f1;">
        <div>
          <h2 style="color:#6366f1;">{{ $stats['editors'] }}</h2>
          <p>Editors</p>
        </div>
        <i class="fas fa-pen" style="color:#6366f1;"></i>
      </div>
    </div>
    <div class="col-sm-6 col-xl">
      <div class="stat-card d-flex align-items-center justify-content-between" style="border-color:#f59e0b;">
        <div>
          <h2 style="color:#f59e0b;">{{ $stats['total_contents'] }}</h2>
          <p>Content Items</p>
        </div>
        <i class="fas fa-file-lines" style="color:#f59e0b;"></i>
      </div>
    </div>
    <div class="col-sm-6 col-xl">
      <a href="{{ route('admin.submissions') }}" style="text-decoration:none;">
        <div class="stat-card d-flex align-items-center justify-content-between"
             style="border-color:{{ $stats['unread_submissions'] > 0 ? '#f1a51e' : '#cbd5e1' }}; transition:.2s;">
          <div>
            <h2 style="color:{{ $stats['unread_submissions'] > 0 ? '#f1a51e' : '#212741' }};">
              {{ $stats['total_submissions'] }}
            </h2>
            <p style="display:flex; align-items:center; gap:6px;">
              Messages
              @if($stats['unread_submissions'] > 0)
                <span style="background:#f1a51e; color:#fff; font-size:10px; font-weight:700; padding:1px 7px; border-radius:10px; line-height:1.6;">
                  {{ $stats['unread_submissions'] }} new
                </span>
              @endif
            </p>
          </div>
          <i class="fas fa-envelope" style="color:{{ $stats['unread_submissions'] > 0 ? '#f1a51e' : '#cbd5e1' }};"></i>
        </div>
      </a>
    </div>
  </div>

  <!-- Main Row -->
  <div class="row g-4">

    <!-- Recent Messages -->
    <div class="col-lg-8">
      <div class="admin-card h-100" style="margin-bottom:0;">
        <div class="d-flex align-items-center justify-content-between mb-3" style="padding-bottom:14px; border-bottom:1px solid #f0f0f0;">
          <h5 class="mb-0">
            <i class="fas fa-inbox me-2"></i>Recent Messages
            @if($stats['unread_submissions'] > 0)
              <span class="badge-admin ms-2" style="font-size:11px;">{{ $stats['unread_submissions'] }} unread</span>
            @endif
          </h5>
          <a href="{{ route('admin.submissions') }}" class="btn btn-sm btn-outline-secondary" style="font-size:12px;">
            View All <i class="fas fa-arrow-right ms-1"></i>
          </a>
        </div>

        @if($recentSubmissions->isEmpty())
          <div class="text-center py-5 text-muted">
            <i class="fas fa-inbox fa-2x mb-3 d-block" style="opacity:.25;"></i>
            <p class="mb-0 small">No messages yet. They'll appear here once someone fills out the contact form.</p>
          </div>
        @else
          <table class="admin-table">
            <thead>
              <tr>
                <th style="width:8px;"></th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Date</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($recentSubmissions as $sub)
                <tr style="{{ $sub->read_at === null ? 'background:#fffbf8;' : '' }}">
                  <td style="padding-right:0;">
                    @if($sub->read_at === null)
                      <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#f1a51e;"></span>
                    @endif
                  </td>
                  <td style="{{ $sub->read_at === null ? 'font-weight:600;' : '' }}">{{ $sub->name }}</td>
                  <td style="font-size:13px; color:#666;">{{ $sub->email }}</td>
                  <td style="font-size:13px; color:#888; max-width:180px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                    {{ $sub->subject ?: '(no subject)' }}
                  </td>
                  <td style="font-size:12px; color:#aaa; white-space:nowrap;">{{ $sub->created_at->format('M d, g:i A') }}</td>
                  <td>
                    <a href="{{ route('admin.submissions') }}" class="btn btn-sm btn-outline-secondary" style="padding:4px 10px; font-size:12px;">
                      <i class="fas fa-eye"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        @endif
      </div>
    </div>

    <!-- Quick Actions -->
    <div class="col-lg-4">
      <div class="admin-card" style="margin-bottom:16px;">
        <h5>Quick Actions</h5>
        <div class="d-grid gap-2">
          <a href="{{ route('admin.submissions') }}" class="btn btn-admin">
            <i class="fas fa-envelope me-2"></i>
            Contact Inbox
            @if($stats['unread_submissions'] > 0)
              <span style="background:rgba(255,255,255,.25); font-size:11px; padding:1px 7px; border-radius:10px; margin-left:4px;">
                {{ $stats['unread_submissions'] }}
              </span>
            @endif
          </a>
          <a href="{{ route('admin.banner') }}" class="btn btn-outline-secondary">
            <i class="fas fa-image me-2"></i>Update Banner Image
          </a>
          <a href="{{ route('admin.content') }}" class="btn btn-outline-secondary">
            <i class="fas fa-pen-to-square me-2"></i>Edit Website Content
          </a>
          @if(auth()->user()->role === 'admin')
          <a href="{{ route('admin.users') }}" class="btn btn-outline-secondary">
            <i class="fas fa-user-plus me-2"></i>Manage Users
          </a>
          @endif
          <a href="{{ route('home') }}" target="_blank" class="btn btn-outline-secondary">
            <i class="fas fa-external-link-alt me-2"></i>View Live Website
          </a>
        </div>
      </div>

      <div class="admin-card" style="margin-bottom:0;">
        <div class="d-flex align-items-center gap-2 mb-1">
          <span class="small text-muted">Logged in as</span>
          <span class="fw-semibold" style="font-size:14px;">{{ auth()->user()->name }}</span>
          <span class="badge {{ auth()->user()->role === 'admin' ? 'badge-admin' : 'badge-editor' }}">
            {{ ucfirst(auth()->user()->role) }}
          </span>
        </div>
        <p class="text-muted small mb-0" style="font-size:12px;">Content changes take effect immediately on the live site.</p>
      </div>
    </div>

  </div>

@endsection
