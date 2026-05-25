@extends('layouts.admin')
@section('title', 'Email Inbox')
@section('page-title', 'Email — Inbox')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="mb-0 fw-semibold">Inbox</h5>
        @if($total > 0)
            <small class="text-muted">{{ $total }} total messages — showing latest 50</small>
        @endif
    </div>
    <a href="{{ route('admin.email.compose') }}" class="btn btn-sm px-3" style="background:#ff511a;color:#fff;">
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
            <i class="fas fa-inbox fa-2x mb-3 d-block" style="opacity:.3"></i>
            Your inbox is empty.
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
                        <th>From</th>
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
                                <span style="width:8px;height:8px;background:#ff511a;border-radius:50%;display:inline-block;"></span>
                            @endif
                        </td>
                        <td style="max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-size:14px;">
                            {{ $msg['from'] }}
                        </td>
                        <td>
                            <a href="{{ route('admin.email.show', $msg['uid']) }}"
                               class="text-decoration-none {{ !$msg['seen'] ? 'text-dark' : 'text-secondary' }}">
                                {{ $msg['subject'] }}
                            </a>
                        </td>
                        <td class="text-muted" style="font-size:13px;white-space:nowrap;">
                            {{ $msg['date'] }}
                        </td>
                        <td>
                            <a href="{{ route('admin.email.show', $msg['uid']) }}"
                               class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif

@endsection
