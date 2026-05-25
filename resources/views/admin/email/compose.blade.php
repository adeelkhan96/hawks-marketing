@extends('layouts.admin')
@section('title', $to ? 'Reply to Email' : 'Compose Email')
@section('page-title', $to ? 'Email — Reply' : 'Email — Compose')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="mb-0 fw-semibold">{{ $to ? 'Reply' : 'New Email' }}</h5>
    <a href="{{ route('admin.email.inbox') }}" class="btn btn-sm btn-outline-secondary">
        <i class="fas fa-times me-1"></i> Cancel
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body">

        @if($errors->any())
            <div class="alert alert-danger mb-4">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.email.send') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">From</label>
                <input type="text" class="form-control bg-light"
                       value="{{ config('mail.from.address') }} — {{ config('mail.from.name') }}"
                       disabled>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">To <span class="text-danger">*</span></label>
                <input type="email" name="to"
                       class="form-control @error('to') is-invalid @enderror"
                       value="{{ old('to', $to) }}"
                       placeholder="recipient@example.com" required>
                @error('to') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Subject <span class="text-danger">*</span></label>
                <input type="text" name="subject"
                       class="form-control @error('subject') is-invalid @enderror"
                       value="{{ old('subject', $subject) }}"
                       placeholder="Email subject..." required>
                @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Message <span class="text-danger">*</span></label>
                <textarea name="body" rows="16"
                          class="form-control @error('body') is-invalid @enderror"
                          placeholder="Write your message here..." required>{{ old('body', $quote ? "\n\n\n— Original message —\n" . $quote : '') }}</textarea>
                @error('body') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn px-4" style="background:#ff511a;color:#fff;">
                    <i class="fas fa-paper-plane me-2"></i> Send Email
                </button>
                <a href="{{ route('admin.email.inbox') }}" class="btn btn-outline-secondary">
                    Discard
                </a>
            </div>
        </form>
    </div>
</div>

@endsection
