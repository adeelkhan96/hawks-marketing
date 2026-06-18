@extends('layouts.base')
@section('title', 'Apply — ' . $job->title . ' | Hawks Marketing')
@section('meta-title', 'Apply — ' . $job->title)

@section('head')
<style>
.apply-section-heading { font-size:13px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:18px;padding-bottom:10px;border-bottom:2px solid rgba(241,165,30,.2); }
.form-control:focus, .form-select:focus { border-color:#f1a51e !important; box-shadow:0 0 0 3px rgba(241,165,30,.12) !important; }
.apply-card { background:#fff;border-radius:14px;padding:32px;box-shadow:0 4px 20px rgba(33,39,65,.07);margin-bottom:24px; }
.field-label { font-size:13px;font-weight:600;color:#374151;margin-bottom:6px; }
.field-required { color:#f1a51e; }
</style>
@endsection

@section('content')

{{-- Breadcrumb --}}
<div style="background:#f8f9fc;padding:14px 0;">
    <div class="container">
        <nav style="font-size:13px;color:#9ca3af;">
            <a href="{{ route('home') }}" style="color:#6b7280;text-decoration:none;">Home</a>
            <span class="mx-2">›</span>
            <a href="{{ route('career') }}" style="color:#6b7280;text-decoration:none;">Careers</a>
            <span class="mx-2">›</span>
            <a href="{{ route('career.job', $job->id) }}" style="color:#6b7280;text-decoration:none;">{{ $job->title }}</a>
            <span class="mx-2">›</span>
            <span style="color:#212741;">Apply</span>
        </nav>
    </div>
</div>

{{-- Header --}}
<section style="background:linear-gradient(135deg,#212741 0%,#1a2155 100%);padding:50px 0 40px;">
    <div class="container">
        <p style="color:#f1a51e;font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:2px;margin-bottom:8px;">Application Form</p>
        <h1 style="color:#fff;font-size:30px;font-weight:800;margin-bottom:8px;">{{ $job->title }}</h1>
        <div class="d-flex flex-wrap gap-3" style="font-size:13px;color:rgba(255,255,255,.65);">
            <span><i class="fas fa-building me-1" style="color:#f1a51e;"></i>{{ $job->department }}</span>
            <span><i class="fas fa-map-marker-alt me-1" style="color:#f1a51e;"></i>{{ $job->location }}</span>
            <span><i class="fas fa-briefcase me-1" style="color:#f1a51e;"></i>{{ $job->type_label }}</span>
        </div>
    </div>
</section>

<section style="background:#f8f9fc;padding:60px 0 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Validation errors --}}
                @if($errors->any())
                <div class="alert alert-danger mb-4" style="border-radius:10px;border-left:4px solid #dc2626;">
                    <div class="fw-bold mb-2"><i class="fas fa-exclamation-circle me-2"></i>Please fix the following errors:</div>
                    <ul class="mb-0" style="font-size:14px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('career.apply', $job->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf

                    {{-- Personal details --}}
                    <div class="apply-card">
                        <h5 class="apply-section-heading"><i class="fas fa-user me-2" style="color:#f1a51e;"></i>Personal Details</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="field-label">Full Name <span class="field-required">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="Ahmed Khan" autocomplete="name">
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">Email Address <span class="field-required">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="ahmed@example.com" autocomplete="email">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">Phone Number <span class="field-required">*</span></label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="+92 300 000 0000" autocomplete="tel">
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">City <span class="field-required">*</span></label>
                                <input type="text" name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="Islamabad">
                                @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Professional details --}}
                    <div class="apply-card">
                        <h5 class="apply-section-heading"><i class="fas fa-briefcase me-2" style="color:#f1a51e;"></i>Professional Background</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="field-label">Years of Experience <span class="field-required">*</span></label>
                                <select name="experience_years" class="form-select @error('experience_years') is-invalid @enderror" style="border-radius:8px;">
                                    <option value="" disabled {{ old('experience_years') ? '' : 'selected' }}>Select experience</option>
                                    <option value="Fresher / No Experience" {{ old('experience_years') === 'Fresher / No Experience' ? 'selected' : '' }}>Fresher / No Experience</option>
                                    <option value="Less than 1 Year" {{ old('experience_years') === 'Less than 1 Year' ? 'selected' : '' }}>Less than 1 Year</option>
                                    <option value="1–2 Years" {{ old('experience_years') === '1–2 Years' ? 'selected' : '' }}>1–2 Years</option>
                                    <option value="2–3 Years" {{ old('experience_years') === '2–3 Years' ? 'selected' : '' }}>2–3 Years</option>
                                    <option value="3–5 Years" {{ old('experience_years') === '3–5 Years' ? 'selected' : '' }}>3–5 Years</option>
                                    <option value="5–8 Years" {{ old('experience_years') === '5–8 Years' ? 'selected' : '' }}>5–8 Years</option>
                                    <option value="8+ Years" {{ old('experience_years') === '8+ Years' ? 'selected' : '' }}>8+ Years</option>
                                </select>
                                @error('experience_years')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">Current / Last Job Title</label>
                                <input type="text" name="current_position" value="{{ old('current_position') }}" class="form-control @error('current_position') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="e.g. Junior Marketing Executive">
                                @error('current_position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">LinkedIn Profile <span style="color:#9ca3af;font-weight:400;">(Optional)</span></label>
                                <input type="url" name="linkedin_url" value="{{ old('linkedin_url') }}" class="form-control @error('linkedin_url') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="https://linkedin.com/in/your-name">
                                @error('linkedin_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="field-label">Portfolio / Website <span style="color:#9ca3af;font-weight:400;">(Optional)</span></label>
                                <input type="url" name="portfolio_url" value="{{ old('portfolio_url') }}" class="form-control @error('portfolio_url') is-invalid @enderror"
                                       style="border-radius:8px;" placeholder="https://yourportfolio.com">
                                @error('portfolio_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    {{-- Cover letter --}}
                    <div class="apply-card">
                        <h5 class="apply-section-heading"><i class="fas fa-file-alt me-2" style="color:#f1a51e;"></i>Cover Letter <span class="field-required">*</span></h5>
                        <p style="font-size:13px;color:#9ca3af;margin-bottom:12px;">Tell us why you're the right fit for this role. Include relevant experience, key achievements, and what excites you about working at Hawks Marketing. (Minimum 100 characters)</p>
                        <textarea name="cover_letter" rows="8" class="form-control @error('cover_letter') is-invalid @enderror"
                                  style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;"
                                  placeholder="Dear Hiring Team,&#10;&#10;I am excited to apply for the {{ $job->title }} position at Hawks Marketing...">{{ old('cover_letter') }}</textarea>
                        @error('cover_letter')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        <div class="text-end mt-1" style="font-size:12px;color:#9ca3af;" id="cover-counter">0 characters</div>
                    </div>

                    {{-- Resume upload --}}
                    <div class="apply-card">
                        <h5 class="apply-section-heading"><i class="fas fa-paperclip me-2" style="color:#f1a51e;"></i>Resume / CV <span class="field-required">*</span></h5>
                        <p style="font-size:13px;color:#9ca3af;margin-bottom:16px;">Upload your CV in PDF or Word format. Maximum file size: 5 MB.</p>

                        <label class="w-100 text-center py-4 cursor-pointer"
                               style="border:2px dashed #e5e7eb;border-radius:10px;cursor:pointer;transition:all .2s;"
                               id="resume-label"
                               onmouseover="this.style.borderColor='#f1a51e'"
                               onmouseout="this.style.borderColor='#e5e7eb'">
                            <i class="fas fa-cloud-upload-alt d-block mb-2" style="font-size:32px;color:#9ca3af;" id="resume-icon"></i>
                            <span id="resume-text" style="font-size:14px;color:#9ca3af;">Click to upload or drag and drop</span>
                            <div style="font-size:12px;color:#d1d5db;margin-top:4px;">PDF, DOC, DOCX — max 5 MB</div>
                            <input type="file" name="resume" id="resume-input" accept=".pdf,.doc,.docx" class="d-none @error('resume') is-invalid @enderror"
                                   onchange="handleResumeChange(this)">
                        </label>
                        @error('resume')<div class="text-danger mt-2" style="font-size:13px;"><i class="fas fa-exclamation-circle me-1"></i>{{ $message }}</div>@enderror
                    </div>

                    {{-- Agreement & submit --}}
                    <div class="apply-card">
                        <div class="form-check mb-4">
                            <input type="checkbox" name="agree" id="agree" value="1" class="form-check-input @error('agree') is-invalid @enderror"
                                   style="width:18px;height:18px;border-radius:4px;cursor:pointer;" {{ old('agree') ? 'checked' : '' }}>
                            <label for="agree" class="form-check-label" style="font-size:14px;color:#374151;margin-left:8px;cursor:pointer;">
                                I confirm that the information provided is accurate, and I consent to Hawks Marketing processing my personal data for recruitment purposes.
                            </label>
                            @error('agree')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                        </div>

                        <button type="submit"
                                style="display:block;width:100%;background:#f1a51e;color:#fff;border:none;padding:16px;border-radius:10px;font-size:16px;font-weight:700;cursor:pointer;transition:background .2s;"
                                onmouseover="this.style.background='#e04010'"
                                onmouseout="this.style.background='#f1a51e'">
                            <i class="fas fa-paper-plane me-2"></i> Submit Application
                        </button>
                        <p style="font-size:12px;color:#9ca3af;text-align:center;margin-top:12px;margin-bottom:0;">
                            <i class="fas fa-lock me-1"></i> Your information is private and will only be used for this application.
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom.js?v=3"></script>
  <script>
  // Cover letter character counter
  var coverTextarea = document.querySelector('textarea[name="cover_letter"]');
  var counter = document.getElementById('cover-counter');
  if (coverTextarea && counter) {
      function updateCounter() {
          var len = coverTextarea.value.length;
          counter.textContent = len + ' characters' + (len < 100 ? ' — need at least ' + (100 - len) + ' more' : ' ✓');
          counter.style.color = len < 100 ? '#ef4444' : '#10b981';
      }
      coverTextarea.addEventListener('input', updateCounter);
      updateCounter();
  }

  // Resume file picker display
  function handleResumeChange(input) {
      var label = document.getElementById('resume-label');
      var icon  = document.getElementById('resume-icon');
      var text  = document.getElementById('resume-text');
      if (input.files && input.files[0]) {
          var file = input.files[0];
          var sizeKb = (file.size / 1024).toFixed(0);
          label.style.borderColor = '#10b981';
          label.style.background  = '#f0fdf4';
          icon.className = 'fas fa-file-check d-block mb-2';
          icon.style.color = '#10b981';
          text.textContent = file.name + ' (' + sizeKb + ' KB)';
          text.style.color = '#065f46';
          text.style.fontWeight = '600';
      }
  }
  </script>
@endsection

