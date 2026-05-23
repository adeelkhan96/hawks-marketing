<div>
  {{-- Delete modal --}}
  @if($confirmDeleteId)
    <div class="modal-overlay">
      <div class="modal-box">
        <h5><i class="fas fa-trash-alt me-2 text-danger"></i>Delete Testimonial</h5>
        <p class="text-muted" style="font-size:14px;">This testimonial will be permanently deleted including its photo.</p>
        <div class="d-flex gap-2 mt-4">
          <button wire:click="delete({{ $confirmDeleteId }})" class="btn btn-danger btn-sm">
            <i class="fas fa-trash-alt me-1"></i> Delete
          </button>
          <button wire:click="cancelDelete" class="btn btn-secondary btn-sm">Cancel</button>
        </div>
      </div>
    </div>
  @endif

  @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show mb-4">
      <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="row g-4">

    {{-- Testimonial List --}}
    <div class="{{ $showForm ? 'col-lg-7' : 'col-lg-12' }}">
      <div class="admin-card" style="margin-bottom:0;">
        <div class="d-flex align-items-center justify-content-between mb-4" style="padding-bottom:14px; border-bottom:1px solid #f0f0f0;">
          <h5 class="mb-0"><i class="fas fa-star me-2"></i>Testimonials <span class="text-muted fw-normal" style="font-size:14px;">({{ $testimonials->count() }})</span></h5>
          @if(!$showForm)
            <button wire:click="startCreate" class="btn btn-admin btn-sm">
              <i class="fas fa-plus me-1"></i> Add Testimonial
            </button>
          @endif
        </div>

        @if($testimonials->isEmpty())
          <div class="text-center py-5 text-muted">
            <i class="fas fa-star fa-3x mb-3 d-block" style="opacity:.2;"></i>
            <p class="mb-2">No testimonials yet.</p>
            <button wire:click="startCreate" class="btn btn-admin btn-sm">
              <i class="fas fa-plus me-1"></i> Add Your First Testimonial
            </button>
          </div>
        @else
          <div class="d-flex flex-column gap-3">
            @foreach($testimonials as $t)
              <div class="d-flex align-items-center gap-3 p-3"
                style="background:{{ $editingId === $t->id ? '#fff3ee' : '#f8f9fc' }}; border-radius:10px; border:1px solid {{ $editingId === $t->id ? '#ff511a40' : '#ebebeb' }};">

                {{-- Photo --}}
                <div style="width:52px; height:52px; border-radius:50%; overflow:hidden; flex-shrink:0; background:#e0e0e0;">
                  @if($t->image)
                    <img src="{{ asset($t->image) }}" alt="{{ $t->name }}" style="width:100%; height:100%; object-fit:cover;">
                  @else
                    <div style="width:100%; height:100%; display:flex; align-items:center; justify-content:center; color:#aaa;">
                      <i class="fas fa-user"></i>
                    </div>
                  @endif
                </div>

                {{-- Info --}}
                <div class="flex-grow-1" style="min-width:0;">
                  <div class="fw-semibold" style="font-size:14px; color:#212741;">{{ $t->name }}</div>
                  <div style="font-size:12px; color:#ff511a; font-weight:500;">{{ $t->position }}</div>
                  <div class="text-truncate" style="font-size:12px; color:#888; max-width:320px;">{{ $t->message }}</div>
                </div>

                {{-- Controls --}}
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                  {{-- Up/Down --}}
                  <div class="d-flex flex-column gap-1">
                    <button wire:click="moveUp({{ $t->id }})" class="btn btn-sm btn-outline-secondary" style="padding:2px 7px; font-size:10px; line-height:1.4;" title="Move up">
                      <i class="fas fa-chevron-up"></i>
                    </button>
                    <button wire:click="moveDown({{ $t->id }})" class="btn btn-sm btn-outline-secondary" style="padding:2px 7px; font-size:10px; line-height:1.4;" title="Move down">
                      <i class="fas fa-chevron-down"></i>
                    </button>
                  </div>

                  {{-- Active toggle --}}
                  <button wire:click="toggleActive({{ $t->id }})"
                    class="btn btn-sm {{ $t->active ? 'btn-success' : 'btn-outline-secondary' }}"
                    style="font-size:11px; padding:4px 10px;" title="{{ $t->active ? 'Visible — click to hide' : 'Hidden — click to show' }}">
                    <i class="fas {{ $t->active ? 'fa-eye' : 'fa-eye-slash' }}"></i>
                  </button>

                  <button wire:click="startEdit({{ $t->id }})" class="btn btn-sm btn-admin" style="font-size:12px; padding:5px 12px;">
                    <i class="fas fa-pencil"></i>
                  </button>
                  <button wire:click="confirmDelete({{ $t->id }})" class="btn btn-sm btn-outline-danger" style="font-size:12px; padding:5px 10px;">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </div>
              </div>
            @endforeach
          </div>
        @endif
      </div>
    </div>

    {{-- Add / Edit Form --}}
    @if($showForm)
      <div class="col-lg-5">
        <div class="admin-card" style="margin-bottom:0; position:sticky; top:100px;">
          <div class="d-flex align-items-center justify-content-between mb-4" style="padding-bottom:14px; border-bottom:1px solid #f0f0f0;">
            <h5 class="mb-0">
              <i class="fas {{ $editingId ? 'fa-pencil' : 'fa-plus' }} me-2"></i>
              {{ $editingId ? 'Edit Testimonial' : 'New Testimonial' }}
            </h5>
            <button wire:click="cancel" class="btn btn-sm btn-outline-secondary">
              <i class="fas fa-times"></i>
            </button>
          </div>

          <form wire:submit="save">

            {{-- Photo upload --}}
            <div class="mb-3 text-center">
              @if($image)
                <img src="{{ $image->temporaryUrl() }}" alt="Preview"
                  style="width:80px; height:80px; border-radius:50%; object-fit:cover; border:3px solid #ff511a; margin-bottom:10px; display:block; margin-left:auto; margin-right:auto;">
              @elseif($existingImage)
                <img src="{{ asset($existingImage) }}" alt="Current"
                  style="width:80px; height:80px; border-radius:50%; object-fit:cover; border:3px solid #ebebeb; margin-bottom:10px; display:block; margin-left:auto; margin-right:auto;">
              @else
                <div style="width:80px; height:80px; border-radius:50%; background:#f0f0f0; display:flex; align-items:center; justify-content:center; margin:0 auto 10px; color:#bbb; font-size:28px;">
                  <i class="fas fa-user"></i>
                </div>
              @endif
              <label class="btn btn-sm btn-outline-secondary" style="font-size:12px; cursor:pointer;">
                <i class="fas fa-camera me-1"></i> {{ $existingImage || $image ? 'Change Photo' : 'Upload Photo' }}
                <input type="file" wire:model="image" accept="image/*" style="display:none;">
              </label>
              @error('image') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
              <p class="text-muted small mt-1" style="font-size:11px;">JPG, PNG, WebP — max 3 MB</p>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold" style="font-size:13px;">Name <span class="text-danger">*</span></label>
              <input type="text" wire:model="name" class="form-control form-control-sm" placeholder="e.g. Sarah Johnson">
              @error('name') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold" style="font-size:13px;">Position / Company <span class="text-danger">*</span></label>
              <input type="text" wire:model="position" class="form-control form-control-sm" placeholder="e.g. CEO, Tech Startup">
              @error('position') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold" style="font-size:13px;">Message <span class="text-danger">*</span></label>
              <textarea wire:model="message" class="form-control form-control-sm" rows="4"
                placeholder="Their testimonial message..."></textarea>
              @error('message') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
              <div class="text-end text-muted small mt-1">{{ strlen($message) }} / 1000</div>
            </div>

            <div class="mb-4 d-flex align-items-center gap-2">
              <div class="form-check form-switch mb-0">
                <input class="form-check-input" type="checkbox" wire:model="active" id="activeToggle">
                <label class="form-check-label" for="activeToggle" style="font-size:13px;">
                  Show on website
                </label>
              </div>
            </div>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-admin" wire:loading.attr="disabled">
                <span wire:loading wire:target="save"><i class="fas fa-spinner fa-spin me-1"></i></span>
                <i wire:loading.remove wire:target="save" class="fas fa-check me-1"></i>
                {{ $editingId ? 'Update' : 'Add Testimonial' }}
              </button>
              <button type="button" wire:click="cancel" class="btn btn-outline-secondary">Cancel</button>
            </div>

          </form>
        </div>
      </div>
    @endif

  </div>
</div>
