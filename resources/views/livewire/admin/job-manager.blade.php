<div>

@if($toast)
<div x-data="{show:true}" x-show="show" x-init="setTimeout(()=>show=false,3500)"
     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
     class="alert alert-success d-flex align-items-center gap-2 mb-4" style="border-left:4px solid #198754;">
    <i class="fas fa-check-circle"></i> {{ $toast }}
</div>
@endif

@if($view === 'list')
{{-- ======= LIST ======= --}}
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h5 class="mb-0 fw-bold" style="color:#212741;">Job Postings</h5>
        <small class="text-muted">Manage open positions</small>
    </div>
    <button wire:click="create" class="btn btn-sm fw-semibold" style="background:#f1a51e;color:#fff;padding:8px 20px;border-radius:8px;">
        <i class="fas fa-plus me-1"></i> New Job
    </button>
</div>

<div class="card border-0 shadow-sm" style="border-radius:12px;overflow:hidden;">
    <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead style="background:#f8f9fc;">
                <tr>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;padding:14px 20px;">Position</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Type</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Status</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Applications</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jobs as $job)
                <tr>
                    <td style="padding:14px 20px;">
                        <div class="fw-semibold" style="color:#212741;">{{ $job->title }}</div>
                        <div style="font-size:12px;color:#9ca3af;margin-top:2px;">
                            <i class="fas fa-building me-1"></i>{{ $job->department }}
                            &nbsp;&middot;&nbsp;
                            <i class="fas fa-map-marker-alt me-1"></i>{{ $job->location }}
                        </div>
                    </td>
                    <td>
                        <span class="badge" style="font-size:11px;border-radius:6px;padding:4px 10px;font-weight:600;
                            background:{{ explode(',', $job->type_color)[1] }};color:{{ explode(',', $job->type_color)[0] }};">
                            {{ $job->type_label }}
                        </span>
                    </td>
                    <td>
                        <button wire:click="toggleStatus({{ $job->id }})"
                            class="badge border-0" style="cursor:pointer;font-size:11px;font-weight:600;border-radius:6px;padding:5px 12px;
                            background:{{ $job->status==='active' ? '#d1fae5' : ($job->status==='draft' ? '#fef9c3' : '#fee2e2') }};
                            color:{{ $job->status==='active' ? '#065f46' : ($job->status==='draft' ? '#854d0e' : '#991b1b') }};">
                            <i class="fas fa-circle me-1" style="font-size:8px;"></i>{{ ucfirst($job->status) }}
                        </button>
                    </td>
                    <td>
                        <span class="fw-bold" style="color:#212741;">{{ $job->applications_count }}</span>
                        <span style="font-size:12px;color:#9ca3af;"> applicants</span>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button wire:click="edit({{ $job->id }})" class="btn btn-sm btn-outline-primary" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <a href="{{ url('/career') }}" target="_blank" class="btn btn-sm btn-outline-secondary" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-eye"></i>
                            </a>
                            <button wire:click="confirmDelete({{ $job->id }})" class="btn btn-sm btn-outline-danger" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="5" class="text-center py-5" style="color:#9ca3af;">No job postings yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@if($deleteId)
<div style="position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:1050;display:flex;align-items:center;justify-content:center;">
    <div class="card border-0 shadow-lg" style="width:420px;border-radius:16px;padding:32px;text-align:center;">
        <div style="width:56px;height:56px;background:#fee2e2;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
            <i class="fas fa-trash" style="color:#dc2626;font-size:20px;"></i>
        </div>
        <h6 class="fw-bold mb-2">Delete Job Posting?</h6>
        <p class="text-muted mb-4" style="font-size:14px;">All associated applications will also be deleted. This cannot be undone.</p>
        <div class="d-flex gap-2 justify-content-center">
            <button wire:click="cancelDelete" class="btn btn-outline-secondary" style="border-radius:8px;min-width:100px;">Cancel</button>
            <button wire:click="delete" class="btn btn-danger" style="border-radius:8px;min-width:100px;">Delete</button>
        </div>
    </div>
</div>
@endif

@elseif($view === 'form')
{{-- ======= FORM ======= --}}
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <button wire:click="backToList" class="btn btn-sm btn-outline-secondary mb-2" style="border-radius:8px;">
            <i class="fas fa-arrow-left me-1"></i> Back
        </button>
        <h5 class="mb-0 fw-bold" style="color:#212741;">{{ $editId ? 'Edit Job Posting' : 'Create Job Posting' }}</h5>
    </div>
    <button wire:click="save" class="btn btn-sm fw-semibold" style="background:#f1a51e;color:#fff;border-radius:8px;padding:8px 22px;">
        <span wire:loading.remove wire:target="save"><i class="fas fa-save me-1"></i> Save</span>
        <span wire:loading wire:target="save"><i class="fas fa-spinner fa-spin me-1"></i> Saving…</span>
    </button>
</div>

<div class="row g-4">
    <div class="col-lg-8">

        {{-- Basic info --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Basic Information</h6>
                <div class="mb-3">
                    <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Job Title *</label>
                    <input wire:model="title" type="text" class="form-control" style="border-radius:8px;" placeholder="e.g. Digital Marketing Executive">
                    @error('title')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Department *</label>
                        <input wire:model="department" type="text" class="form-control" style="border-radius:8px;" placeholder="e.g. Digital Marketing">
                        @error('department')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Location *</label>
                        <input wire:model="location" type="text" class="form-control" style="border-radius:8px;" placeholder="e.g. Islamabad / Hybrid">
                        @error('location')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Job Type *</label>
                        <select wire:model="type" class="form-select" style="border-radius:8px;">
                            <option value="full-time">Full Time</option>
                            <option value="part-time">Part Time</option>
                            <option value="contract">Contract</option>
                            <option value="internship">Internship</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Experience Required *</label>
                        <input wire:model="experience" type="text" class="form-control" style="border-radius:8px;" placeholder="e.g. 1–2 Years">
                        @error('experience')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Salary Range</label>
                        <input wire:model="salary" type="text" class="form-control" style="border-radius:8px;" placeholder="e.g. PKR 50,000 – 80,000">
                    </div>
                </div>
            </div>
        </div>

        {{-- Description --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Job Description *</h6>
                <textarea wire:model="description" rows="5" class="form-control" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;"
                    placeholder="Overview of the role and what the candidate will do day-to-day…"></textarea>
                @error('description')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
            </div>
        </div>

        {{-- Responsibilities --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-1" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Responsibilities *</h6>
                <p class="text-muted mb-3" style="font-size:12px;">Enter one responsibility per line — each line becomes a bullet point.</p>
                <textarea wire:model="responsibilities" rows="7" class="form-control" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;"
                    placeholder="Plan and execute SEO and social media campaigns&#10;Monitor and report on campaign performance&#10;Collaborate with content team…"></textarea>
                @error('responsibilities')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
            </div>
        </div>

        {{-- Requirements --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-1" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Requirements *</h6>
                <p class="text-muted mb-3" style="font-size:12px;">Enter one requirement per line.</p>
                <textarea wire:model="requirements" rows="7" class="form-control" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;"
                    placeholder="Bachelor's degree in Marketing or related field&#10;1–2 years of hands-on experience&#10;Familiarity with Google Ads and Meta Ads Manager…"></textarea>
                @error('requirements')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
            </div>
        </div>

        {{-- Nice to have --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-1" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Nice to Have <span style="font-weight:400;color:#9ca3af;">(Optional)</span></h6>
                <p class="text-muted mb-3" style="font-size:12px;">One item per line.</p>
                <textarea wire:model="niceToHave" rows="4" class="form-control" style="border-radius:8px;font-size:14px;resize:vertical;"
                    placeholder="Google Ads certification&#10;Experience in agency environment…"></textarea>
            </div>
        </div>

        {{-- Benefits --}}
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-1" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Benefits <span style="font-weight:400;color:#9ca3af;">(Optional)</span></h6>
                <p class="text-muted mb-3" style="font-size:12px;">One benefit per line.</p>
                <textarea wire:model="benefits" rows="5" class="form-control" style="border-radius:8px;font-size:14px;resize:vertical;"
                    placeholder="Competitive salary&#10;Hybrid work model&#10;Performance bonuses…"></textarea>
            </div>
        </div>

    </div>

    {{-- Sidebar settings --}}
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Posting Settings</h6>
                <div class="mb-3">
                    <label class="form-label" style="font-size:12px;font-weight:600;color:#6b7280;">Status</label>
                    <select wire:model="status" class="form-select form-select-sm" style="border-radius:8px;">
                        <option value="active">Active — visible on site</option>
                        <option value="draft">Draft — hidden</option>
                        <option value="closed">Closed — no longer accepting</option>
                    </select>
                </div>
                <div>
                    <label class="form-label" style="font-size:12px;font-weight:600;color:#6b7280;">Application Deadline <span style="font-weight:400;">(Optional)</span></label>
                    <input wire:model="deadline" type="date" class="form-control form-control-sm" style="border-radius:8px;">
                </div>
            </div>
        </div>
    </div>
</div>

@endif

</div>
