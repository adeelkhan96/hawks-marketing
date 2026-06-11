@extends('layouts.admin')
@section('title', $activeTab === 'sent' ? 'Sent Emails' : 'Email Inbox')
@section('page-title', 'Email — ' . ($activeTab === 'sent' ? 'Sent' : 'Inbox'))

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        {{-- Inbox / Sent tabs --}}
        <ul class="nav nav-pills nav-sm gap-1">
            <li class="nav-item">
                <a href="{{ route('admin.email.inbox') }}"
                   class="nav-link px-3 py-1 {{ $activeTab === 'inbox' ? 'active' : 'text-secondary' }}"
                   style="{{ $activeTab === 'inbox' ? 'background:#f1a51e;' : '' }}">
                    <i class="fas fa-inbox me-1"></i> Inbox
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.email.sent') }}"
                   class="nav-link px-3 py-1 {{ $activeTab === 'sent' ? 'active' : 'text-secondary' }}"
                   style="{{ $activeTab === 'sent' ? 'background:#f1a51e;' : '' }}">
                    <i class="fas fa-paper-plane me-1"></i> Sent
                </a>
            </li>
        </ul>
        @if($total > 0)
            <small class="text-muted mt-1 d-block">{{ $total }} total messages — showing latest 50</small>
        @endif
    </div>
    <a href="{{ route('admin.email.compose') }}" class="btn btn-sm px-3" style="background:#f1a51e;color:#fff;">
        <i class="fas fa-pen me-1"></i> Compose
    </a>
</div>

@if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if($error)
    <div class="alert alert-danger">
        <i class="fas fa-exclamation-circle me-2"></i>
        <strong>Could not connect to mailbox:</strong> {{ $error }}
        <div class="mt-2 small">
            Make sure <code>IMAP_HOST</code>, <code>IMAP_USERNAME</code>, and <code>IMAP_PASSWORD</code>
            are set in your server <code>.env</code> file, then run the clearcache script.
        </div>
    </div>
@endif

@if(!$error && count($messages) === 0)
    <div class="card border-0 shadow-sm">
        <div class="card-body text-center py-5 text-muted">
            <i class="fas fa-{{ $activeTab === 'sent' ? 'paper-plane' : 'inbox' }} fa-2x mb-3 d-block" style="opacity:.3"></i>
            {{ $activeTab === 'sent' ? 'No sent messages.' : 'Your inbox is empty.' }}
        </div>
    </div>
@endif

@if(count($messages) > 0)
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th style="width:12px;"></th>
                        <th>{{ $activeTab === 'sent' ? 'To' : 'From' }}</th>
                        <th>Subject</th>
                        <th>Date</th>
                        <th style="width:60px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $msg)
                    <tr class="{{ !$msg['seen'] ? 'fw-semibold' : '' }}"
                        style="{{ !$msg['seen'] ? 'background:#fff9f7;' : '' }}">
                        <td>
                            @if(!$msg['seen'])
                                <span style="width:8px;height:8px;background:#f1a51e;border-radius:50%;display:inline-block;"></span>
                            @endif
                        </td>
                        <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-size:14px;">
                            {{ $msg['label'] }}
                        </td>
                        <td>
                            @if($activeTab === 'inbox')
                                <a href="{{ route('admin.email.show', $msg['uid']) }}"
                                   class="text-decoration-none {{ !$msg['seen'] ? 'text-dark' : 'text-secondary' }}">
                                    {{ $msg['subject'] }}
                                </a>
                            @else
                                <span class="text-secondary">{{ $msg['subject'] }}</span>
                            @endif
                        </td>
                        <td class="text-muted" style="font-size:13px;white-space:nowrap;">
                            {{ $msg['date'] }}
                        </td>
                        <td>
                            @if($activeTab === 'inbox')
                                <a href="{{ route('admin.email.show', $msg['uid']) }}"
                                   class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection
