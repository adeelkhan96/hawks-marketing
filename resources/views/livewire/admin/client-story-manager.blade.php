<div>

{{-- ===== LIST VIEW ===== --}}
@if(!$showForm)

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h5 class="fw-bold mb-1" style="color:#212741;">Client Stories</h5>
        <p class="text-muted mb-0" style="font-size:13px;">Case studies and success stories shown on the /clients page.</p>
    </div>
    <button wire:click="startCreate" class="btn btn-sm" style="background:#f1a51e;color:#fff;font-weight:600;border-radius:8px;padding:8px 18px;">
        <i class="fas fa-plus me-1"></i> Add Story
    </button>
</div>

@if($stories->isEmpty())
<div class="text-center py-5" style="background:#f8f9fc;border-radius:14px;">
    <i class="fas fa-star" style="font-size:36px;color:#f1a51e;opacity:.4;margin-bottom:12px;display:block;"></i>
    <h6 style="color:#374151;font-weight:700;">No client stories yet</h6>
    <p style="color:#9ca3af;font-size:13px;">Add your first case study to showcase on the clients page.</p>
</div>
@else
<div class="d-flex flex-column gap-3">
    @foreach($stories as $story)
    <div class="card border-0 shadow-sm" style="border-radius:12px;{{ $confirmDeleteId === $story->id ? 'border:2px solid #ef4444 !important;' : '' }}">
        <div class="card-body p-4">
            <div class="d-flex align-items-start gap-3">

                {{-- Logo or placeholder --}}
                <div style="width:56px;height:56px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#f3f4f6;display:flex;align-items:center;justify-content:center;">
                    @if($story->client_logo)
                        <img src="{{ asset($story->client_logo) }}" alt="{{ $story->client_name }}" style="width:100%;height:100%;object-fit:contain;padding:4px;">
                    @else
                        <i class="fas fa-building" style="color:#d1d5db;font-size:22px;"></i>
                    @endif
                </div>

                {{-- Info --}}
                <div class="flex-grow-1">
                    <div class="d-flex align-items-center gap-2 mb-1 flex-wrap">
                        <span style="font-size:15px;font-weight:700;color:#212741;">{{ $story->client_name }}</span>
                        <span style="background:#f3f4f6;color:#6b7280;font-size:11px;font-weight:600;padding:2px 8px;border-radius:20px;">{{ $story->industry }}</span>
                        @if(!$story->active)
                        <span style="background:#fef3c7;color:#92400e;font-size:11px;font-weight:600;padding:2px 8px;border-radius:20px;">Hidden</span>
                        @endif
                    </div>
                    <p style="font-size:13px;color:#f1a51e;font-weight:600;margin-bottom:6px;"><i class="fas fa-trophy me-1"></i>{{ $story->tagline }}</p>
                    <p style="font-size:12px;color:#9ca3af;margin:0;line-height:1.5;">{{ Str::limit($story->challenge, 120) }}</p>
                </div>

                {{-- Actions --}}
                <div class="d-flex flex-column gap-2 flex-shrink-0">
                    @if($confirmDeleteId === $story->id)
                    <div class="d-flex gap-1 align-items-center">
                        <span style="font-size:11px;color:#ef4444;font-weight:600;">Delete?</span>
                        <button wire:click="delete({{ $story->id }})" class="btn btn-sm btn-danger" style="font-size:11px;padding:3px 8px;border-radius:6px;">Yes</button>
                        <button wire:click="cancelDelete" class="btn btn-sm btn-outline-secondary" style="font-size:11px;padding:3px 8px;border-radius:6px;">No</button>
                    </div>
                    @else
                    <div class="d-flex gap-1">
                        <button wire:click="moveUp({{ $story->id }})" class="btn btn-sm btn-outline-secondary" style="padding:4px 8px;border-radius:6px;" title="Move up"><i class="fas fa-arrow-up" style="font-size:10px;"></i></button>
                        <button wire:click="moveDown({{ $story->id }})" class="btn btn-sm btn-outline-secondary" style="padding:4px 8px;border-radius:6px;" title="Move down"><i class="fas fa-arrow-down" style="font-size:10px;"></i></button>
                        <button wire:click="toggleActive({{ $story->id }})" class="btn btn-sm {{ $story->active ? 'btn-outline-success' : 'btn-outline-warning' }}" style="padding:4px 8px;border-radius:6px;font-size:11px;" title="{{ $story->active ? 'Hide' : 'Show' }}">
                            <i class="fas {{ $story->active ? 'fa-eye' : 'fa-eye-slash' }}"></i>
                        </button>
                        <button wire:click="startEdit({{ $story->id }})" class="btn btn-sm" style="background:#212741;color:#fff;padding:4px 10px;border-radius:6px;font-size:11px;font-weight:600;">
                            <i class="fas fa-pen me-1"></i>Edit
                        </button>
                        <button wire:click="confirmDelete({{ $story->id }})" class="btn btn-sm btn-outline-danger" style="padding:4px 8px;border-radius:6px;" title="Delete">
                            <i class="fas fa-trash" style="font-size:10px;"></i>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif

{{-- ===== FORM VIEW ===== --}}
@else

<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h5 class="fw-bold mb-1" style="color:#212741;">{{ $editingId ? 'Edit Client Story' : 'Add Client Story' }}</h5>
        <p class="text-muted mb-0" style="font-size:13px;">Fill in the case study details below.</p>
    </div>
    <button wire:click="cancel" class="btn btn-sm btn-outline-secondary" style="border-radius:8px;">
        <i class="fas fa-arrow-left me-1"></i> Back to List
    </button>
</div>

<form wire:submit="save">
<div class="row g-4">

    {{-- Left column --}}
    <div class="col-lg-8">

        {{-- Basic info --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 style="font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:20px;padding-bottom:10px;border-bottom:2px solid rgba(241,165,30,.15);">
                    <i class="fas fa-building me-2" style="color:#f1a51e;"></i>Client & Industry
                </h6>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Client Name <span style="color:#f1a51e;">*</span></label>
                        <input type="text" wire:model="client_name" class="form-control @error('client_name') is-invalid @enderror" style="border-radius:8px;" placeholder="e.g. TechBridge Solutions">
                        @error('client_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Industry <span style="color:#f1a51e;">*</span></label>
                        <input type="text" wire:model="industry" class="form-control @error('industry') is-invalid @enderror" style="border-radius:8px;" placeholder="e.g. IT & Software, Retail, Healthcare">
                        @error('industry')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Win Tagline <span style="color:#f1a51e;">*</span></label>
                        <input type="text" wire:model="tagline" class="form-control @error('tagline') is-invalid @enderror" style="border-radius:8px;" placeholder="e.g. 320% increase in organic traffic within 4 months">
                        <div style="font-size:11px;color:#9ca3af;margin-top:4px;">The headline result — shown prominently on the story card.</div>
                        @error('tagline')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Client Website <span style="color:#9ca3af;font-weight:400;">(Optional)</span></label>
                        <input type="url" wire:model="website_url" class="form-control @error('website_url') is-invalid @enderror" style="border-radius:8px;" placeholder="https://example.com">
                        @error('website_url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- Story content --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 style="font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:20px;padding-bottom:10px;border-bottom:2px solid rgba(241,165,30,.15);">
                    <i class="fas fa-book-open me-2" style="color:#f1a51e;"></i>Case Study Content
                </h6>
                <div class="d-flex flex-column gap-4">
                    <div>
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">The Challenge <span style="color:#f1a51e;">*</span></label>
                        <textarea wire:model="challenge" rows="5" class="form-control @error('challenge') is-invalid @enderror" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;" placeholder="Describe the problems or pain points the client faced before working with Hawks Marketing..."></textarea>
                        @error('challenge')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Our Solution <span style="color:#f1a51e;">*</span></label>
                        <textarea wire:model="solution" rows="5" class="form-control @error('solution') is-invalid @enderror" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;" placeholder="Explain the strategies, campaigns, and actions Hawks Marketing took to address those challenges..."></textarea>
                        @error('solution')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="form-label" style="font-size:13px;font-weight:600;color:#374151;">Results / Metrics <span style="color:#f1a51e;">*</span></label>
                        <textarea wire:model="results" rows="6" class="form-control @error('results') is-invalid @enderror" style="border-radius:8px;font-size:14px;line-height:1.7;resize:vertical;font-family:monospace;" placeholder="320% increase in organic traffic&#10;4x growth in monthly leads&#10;Cost-per-lead reduced by 58%&#10;...one result per line"></textarea>
                        <div style="font-size:11px;color:#9ca3af;margin-top:4px;">Enter each result on a new line — they'll be shown as bullet points.</div>
                        @error('results')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Right column --}}
    <div class="col-lg-4">

        {{-- Visibility --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 style="font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:14px;">Visibility</h6>
                <div class="form-check form-switch">
                    <input type="checkbox" wire:model="active" class="form-check-input" id="story-active" role="switch" style="width:40px;height:22px;cursor:pointer;">
                    <label for="story-active" class="form-check-label" style="font-size:14px;font-weight:600;color:#374151;padding-left:6px;cursor:pointer;">
                        {{ $active ? 'Visible on website' : 'Hidden from website' }}
                    </label>
                </div>
            </div>
        </div>

        {{-- Featured image --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 style="font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:14px;">Featured Image</h6>
                <p style="font-size:11px;color:#9ca3af;margin-bottom:12px;">Banner/header image for the story card. Recommended: 800×500px.</p>

                @if($existingFeaturedImage)
                <div style="position:relative;border-radius:8px;overflow:hidden;margin-bottom:10px;">
                    <img src="{{ asset($existingFeaturedImage) }}" style="width:100%;height:120px;object-fit:cover;">
                    <button type="button" wire:click="removeFeaturedImage" style="position:absolute;top:6px;right:6px;background:rgba(0,0,0,.6);color:#fff;border:none;border-radius:50%;width:24px;height:24px;font-size:11px;cursor:pointer;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @endif

                @if(!$existingFeaturedImage)
                <label style="display:block;border:2px dashed #e5e7eb;border-radius:8px;padding:20px;text-align:center;cursor:pointer;transition:border-color .2s;"
                       onmouseover="this.style.borderColor='#f1a51e'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <i class="fas fa-image" style="font-size:24px;color:#d1d5db;margin-bottom:8px;display:block;"></i>
                    <span style="font-size:12px;color:#9ca3af;">Click to upload image</span>
                    <input type="file" wire:model="featured_image" class="d-none" accept="image/*">
                </label>
                @error('featured_image')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                @if($featured_image)
                <p style="font-size:11px;color:#10b981;margin-top:6px;"><i class="fas fa-check me-1"></i>Image selected</p>
                @endif
                @else
                <label style="display:block;border:2px dashed #e5e7eb;border-radius:8px;padding:12px;text-align:center;cursor:pointer;" onmouseover="this.style.borderColor='#f1a51e'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <span style="font-size:12px;color:#9ca3af;"><i class="fas fa-sync me-1"></i>Replace image</span>
                    <input type="file" wire:model="featured_image" class="d-none" accept="image/*">
                </label>
                @if($featured_image)
                <p style="font-size:11px;color:#10b981;margin-top:6px;"><i class="fas fa-check me-1"></i>New image selected</p>
                @endif
                @endif
            </div>
        </div>

        {{-- Client logo --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 style="font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1px;color:#212741;margin-bottom:14px;">Client Logo</h6>
                <p style="font-size:11px;color:#9ca3af;margin-bottom:12px;">Company logo shown on story card. PNG with transparency works best.</p>

                @if($existingClientLogo)
                <div style="background:#f8f9fc;border-radius:8px;padding:12px;text-align:center;position:relative;margin-bottom:10px;">
                    <img src="{{ asset($existingClientLogo) }}" style="max-height:50px;max-width:100%;object-fit:contain;">
                    <button type="button" wire:click="removeClientLogo" style="position:absolute;top:4px;right:4px;background:rgba(0,0,0,.5);color:#fff;border:none;border-radius:50%;width:20px;height:20px;font-size:10px;cursor:pointer;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @endif

                @if(!$existingClientLogo)
                <label style="display:block;border:2px dashed #e5e7eb;border-radius:8px;padding:16px;text-align:center;cursor:pointer;transition:border-color .2s;"
                       onmouseover="this.style.borderColor='#f1a51e'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <i class="fas fa-id-badge" style="font-size:20px;color:#d1d5db;margin-bottom:6px;display:block;"></i>
                    <span style="font-size:12px;color:#9ca3af;">Click to upload logo</span>
                    <input type="file" wire:model="client_logo" class="d-none" accept="image/*">
                </label>
                @error('client_logo')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                @if($client_logo)
                <p style="font-size:11px;color:#10b981;margin-top:6px;"><i class="fas fa-check me-1"></i>Logo selected</p>
                @endif
                @else
                <label style="display:block;border:2px dashed #e5e7eb;border-radius:8px;padding:10px;text-align:center;cursor:pointer;" onmouseover="this.style.borderColor='#f1a51e'" onmouseout="this.style.borderColor='#e5e7eb'">
                    <span style="font-size:12px;color:#9ca3af;"><i class="fas fa-sync me-1"></i>Replace logo</span>
                    <input type="file" wire:model="client_logo" class="d-none" accept="image/*">
                </label>
                @if($client_logo)
                <p style="font-size:11px;color:#10b981;margin-top:6px;"><i class="fas fa-check me-1"></i>New logo selected</p>
                @endif
                @endif
            </div>
        </div>

        {{-- Save --}}
        <button type="submit" class="btn w-100" style="background:#f1a51e;color:#fff;font-weight:700;border-radius:10px;padding:13px;font-size:15px;">
            <i class="fas fa-save me-2"></i>{{ $editingId ? 'Update Story' : 'Save Story' }}
        </button>
        <button type="button" wire:click="cancel" class="btn btn-outline-secondary w-100 mt-2" style="border-radius:10px;font-size:14px;">
            Cancel
        </button>

    </div>
</div>
</form>

@endif

</div>
