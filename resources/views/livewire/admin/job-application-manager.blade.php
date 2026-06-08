<div>

@if($toast)
<div x-data="{show:true}" x-show="show" x-init="setTimeout(()=>show=false,3500)"
     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
     class="alert alert-success d-flex gap-2 align-items-center mb-4" style="border-left:4px solid #198754;">
    <i class="fas fa-check-circle"></i> {{ $toast }}
</div>
@endif

@if($view === 'list')
{{-- ======= LIST ======= --}}
<div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
    <div>
        <h5 class="mb-0 fw-bold" style="color:#212741;">Job Applications
            @if($unreadCount > 0)
                <span style="background:#ff511a;color:#fff;font-size:11px;font-weight:700;padding:2px 8px;border-radius:10px;vertical-align:middle;">{{ $unreadCount }} new</span>
            @endif
        </h5>
        <small class="text-muted">All submitted applications</small>
    </div>
</div>

{{-- Filters --}}
<div class="d-flex gap-2 flex-wrap mb-4">
    <input wire:model.live="search" type="text" placeholder="Search by name, email, position…"
           class="form-control form-control-sm" style="max-width:280px;border-radius:8px;">
    <select wire:model.live="filter" class="form-select form-select-sm" style="max-width:160px;border-radius:8px;">
        <option value="all">All Statuses</option>
        <option value="new">New</option>
        <option value="reviewing">Reviewing</option>
        <option value="shortlisted">Shortlisted</option>
        <option value="rejected">Rejected</option>
        <option value="hired">Hired</option>
    </select>
    <select wire:model.live="jobFilter" class="form-select form-select-sm" style="max-width:220px;border-radius:8px;">
        <option value="all">All Positions</option>
        @foreach($jobs as $job)
            <option value="{{ $job->id }}">{{ $job->title }}</option>
        @endforeach
    </select>
</div>

<div class="card border-0 shadow-sm" style="border-radius:12px;overflow:hidden;">
    <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead style="background:#f8f9fc;">
                <tr>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;padding:14px 20px;">Applicant</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Position</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Experience</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Status</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Applied</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $app)
                <tr style="{{ $app->isUnread() ? 'background:#fffbf5;' : '' }}">
                    <td style="padding:14px 20px;">
                        <div class="d-flex align-items-center gap-3">
                            <div style="width:36px;height:36px;background:linear-gradient(135deg,#212741,#ff511a30);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
                                <span style="color:#ff511a;font-size:13px;font-weight:800;">{{ strtoupper(substr($app->name, 0, 1)) }}</span>
                            </div>
                            <div>
                                <div class="fw-semibold" style="font-size:14px;color:#212741;">
                                    {{ $app->name }}
                                    @if($app->isUnread())<span style="width:7px;height:7px;background:#ff511a;border-radius:50%;display:inline-block;margin-left:6px;vertical-align:middle;"></span>@endif
                                </div>
                                <div style="font-size:12px;color:#9ca3af;">{{ $app->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td style="font-size:13px;color:#374151;max-width:180px;">{{ $app->job_title }}</td>
                    <td style="font-size:13px;color:#6b7280;">{{ $app->experience_years }}</td>
                    <td>
                        <span class="badge" style="font-size:11px;font-weight:600;border-radius:6px;padding:4px 10px;{{ $app->status_color }}">
                            {{ ucfirst($app->status) }}
                        </span>
                    </td>
                    <td style="font-size:12px;color:#9ca3af;">{{ $app->created_at->format('d M Y') }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <button wire:click="viewApplication({{ $app->id }})" class="btn btn-sm btn-outline-primary" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-eye"></i> View
                            </button>
                            <button wire:click="deleteApplication({{ $app->id }})" class="btn btn-sm btn-outline-danger" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center py-5" style="color:#9ca3af;"><i class="fas fa-inbox d-block mb-2" style="font-size:32px;opacity:.3;"></i>No applications yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@elseif($view === 'detail' && $currentApp)
{{-- ======= DETAIL ======= --}}
<div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
    <div>
        <button wire:click="backToList" class="btn btn-sm btn-outline-secondary mb-2" style="border-radius:8px;">
            <i class="fas fa-arrow-left me-1"></i> Back to Applications
        </button>
        <h5 class="mb-0 fw-bold" style="color:#212741;">{{ $currentApp->name }}</h5>
        <small class="text-muted">Applied for: <strong>{{ $currentApp->job_title }}</strong> &middot; {{ $currentApp->created_at->format('d M Y, h:i A') }}</small>
    </div>
    <a href="{{ route('admin.applications.resume', $currentApp->id) }}" target="_blank"
       class="btn btn-sm fw-semibold" style="background:#212741;color:#fff;border-radius:8px;padding:8px 18px;">
        <i class="fas fa-download me-1"></i> Download CV
    </a>
</div>

<div class="row g-4">
    <div class="col-lg-8">

        {{-- Applicant info --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Personal Information</h6>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Full Name</div>
                        <div style="font-size:14px;color:#212741;font-weight:600;margin-top:3px;">{{ $currentApp->name }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Email</div>
                        <div style="font-size:14px;margin-top:3px;"><a href="mailto:{{ $currentApp->email }}" style="color:#ff511a;">{{ $currentApp->email }}</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Phone</div>
                        <div style="font-size:14px;color:#212741;font-weight:600;margin-top:3px;"><a href="tel:{{ $currentApp->phone }}" style="color:#212741;">{{ $currentApp->phone }}</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">City</div>
                        <div style="font-size:14px;color:#212741;font-weight:600;margin-top:3px;">{{ $currentApp->city }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Years of Experience</div>
                        <div style="font-size:14px;color:#212741;font-weight:600;margin-top:3px;">{{ $currentApp->experience_years }}</div>
                    </div>
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Current / Last Position</div>
                        <div style="font-size:14px;color:#212741;font-weight:600;margin-top:3px;">{{ $currentApp->current_position ?: '—' }}</div>
                    </div>
                    @if($currentApp->linkedin_url)
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">LinkedIn</div>
                        <div style="margin-top:3px;"><a href="{{ $currentApp->linkedin_url }}" target="_blank" rel="noopener" style="color:#0a66c2;font-size:13px;"><i class="fab fa-linkedin me-1"></i>View Profile</a></div>
                    </div>
                    @endif
                    @if($currentApp->portfolio_url)
                    <div class="col-sm-6">
                        <div style="font-size:11px;color:#9ca3af;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">Portfolio</div>
                        <div style="margin-top:3px;"><a href="{{ $currentApp->portfolio_url }}" target="_blank" rel="noopener" style="color:#ff511a;font-size:13px;"><i class="fas fa-external-link-alt me-1"></i>View Portfolio</a></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Cover letter --}}
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Cover Letter</h6>
                <div style="font-size:14px;color:#374151;line-height:1.85;white-space:pre-wrap;background:#f8f9fc;border-radius:8px;padding:20px;">{{ $currentApp->cover_letter }}</div>
            </div>
        </div>

    </div>

    {{-- Sidebar --}}
    <div class="col-lg-4">

        {{-- Status & Notes --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Application Status</h6>
                <select wire:model="appStatus" class="form-select form-select-sm mb-3" style="border-radius:8px;">
                    <option value="new">New</option>
                    <option value="reviewing">Reviewing</option>
                    <option value="shortlisted">Shortlisted</option>
                    <option value="rejected">Rejected</option>
                    <option value="hired">Hired</option>
                </select>
                <label class="form-label" style="font-size:12px;font-weight:600;color:#6b7280;">Internal Notes</label>
                <textarea wire:model="adminNotes" rows="4" class="form-control form-control-sm mb-3" style="border-radius:8px;resize:none;font-size:13px;" placeholder="Add private notes about this applicant…"></textarea>
                <button wire:click="saveNotes" class="btn btn-sm w-100 fw-semibold" style="background:#ff511a;color:#fff;border-radius:8px;">
                    <span wire:loading.remove wire:target="saveNotes"><i class="fas fa-save me-1"></i> Save Changes</span>
                    <span wire:loading wire:target="saveNotes"><i class="fas fa-spinner fa-spin me-1"></i> Saving…</span>
                </button>
            </div>
        </div>

        {{-- Quick actions --}}
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;text-transform:uppercase;letter-spacing:.5px;color:#374151;">Quick Actions</h6>
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('admin.applications.resume', $currentApp->id) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary" style="border-radius:8px;font-size:13px;">
                        <i class="fas fa-file-download me-1"></i> Download Resume / CV
                    </a>
                    <a href="mailto:{{ $currentApp->email }}"
                       class="btn btn-sm btn-outline-secondary" style="border-radius:8px;font-size:13px;">
                        <i class="fas fa-envelope me-1"></i> Send Email
                    </a>
                    @if($currentApp->phone)
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $currentApp->phone) }}" target="_blank"
                       class="btn btn-sm btn-outline-success" style="border-radius:8px;font-size:13px;">
                        <i class="fab fa-whatsapp me-1"></i> WhatsApp
                    </a>
                    @endif
                    <button wire:click="deleteApplication({{ $currentApp->id }})" class="btn btn-sm btn-outline-danger" style="border-radius:8px;font-size:13px;">
                        <i class="fas fa-trash me-1"></i> Delete Application
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
@endif

</div>
