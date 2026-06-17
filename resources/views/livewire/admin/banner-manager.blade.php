<div>

  @if($message)
    <div class="alert alert-success alert-dismissible fade show mb-4">
      <i class="fas fa-check-circle me-2"></i>{{ $message }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="row g-4">

    {{-- Upload / Edit Form --}}
    <div class="col-lg-4">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body p-4">
          <h6 class="fw-bold mb-4">{{ $editId ? 'Edit Slide' : 'Add Banner Slide' }}</h6>

          <form wire:submit.prevent="save">

            <div class="mb-3">
              <label class="form-label fw-semibold">
                Banner Image {{ $editId ? '(leave blank to keep current)' : '' }}
                <span class="text-danger">{{ $editId ? '' : '*' }}</span>
              </label>
              <input type="file" class="form-control" wire:model="image" accept="image/jpeg,image/png,image/webp">
              <div class="form-text">Recommended: 1920 × 700 px &nbsp;|&nbsp; JPG, PNG or WebP &nbsp;|&nbsp; Max 4 MB</div>
              @error('image')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Image preview --}}
            @if($image)
              <div class="mb-3 rounded overflow-hidden" style="height:120px;background:#212741;">
                <img src="{{ $image->temporaryUrl() }}" alt="Preview"
                     style="width:100%;height:100%;object-fit:cover;opacity:.85;">
              </div>
            @elseif($editId)
              @php $es = \App\Models\BannerSlide::find($editId); @endphp
              @if($es)
              <div class="mb-3 rounded overflow-hidden" style="height:120px;background:#212741;">
                <img src="{{ asset($es->image) }}" alt="Current"
                     style="width:100%;height:100%;object-fit:cover;opacity:.85;">
              </div>
              @endif
            @endif

            <div class="mb-3">
              <label class="form-label fw-semibold">Heading <span class="text-muted fw-normal">(optional)</span></label>
              <input type="text" class="form-control" wire:model="heading"
                     placeholder="e.g. Transform Your Vision into Digital Success">
              @error('heading')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Subtext <span class="text-muted fw-normal">(optional)</span></label>
              <textarea class="form-control" wire:model="subtext" rows="3"
                        placeholder="Brief description shown below the heading..."></textarea>
              @error('subtext')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary flex-grow-1"
                      wire:loading.attr="disabled" wire:target="image">
                <span wire:loading wire:target="image">
                  <span class="spinner-border spinner-border-sm me-1"></span>Uploading…
                </span>
                <span wire:loading.remove wire:target="image">
                  <i class="fas fa-{{ $editId ? 'save' : 'plus' }} me-1"></i>
                  {{ $editId ? 'Save Changes' : 'Add Slide' }}
                </span>
              </button>
              @if($editId)
                <button type="button" class="btn btn-outline-secondary" wire:click="cancelEdit">Cancel</button>
              @endif
            </div>

          </form>
        </div>
      </div>
    </div>

    {{-- Slide List --}}
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
          <h6 class="fw-bold mb-1">Banner Slides ({{ $slides->count() }})</h6>
          <p class="text-muted small mb-4">
            Slides are shown in order. If no slides are added, the site displays a default banner.
            When only 1 slide is active, the slider arrows and autoplay are hidden automatically.
          </p>

          @if($slides->isEmpty())
            <div class="text-center py-5 text-muted">
              <i class="fas fa-images fa-2x mb-3 d-block"></i>
              No slides added yet. The default banner image will show on the site.
            </div>
          @else
            <div class="d-flex flex-column gap-3">
              @foreach($slides as $i => $s)
              <div class="border rounded-3 overflow-hidden {{ $s->active ? '' : 'opacity-50' }}">
                <div class="d-flex align-items-stretch">

                  {{-- Thumbnail --}}
                  <div class="flex-shrink-0" style="width:140px;height:80px;background:#212741;">
                    <img src="{{ asset($s->image) }}" alt="{{ $s->heading ?? 'Slide '.($i+1) }}"
                         style="width:140px;height:80px;object-fit:cover;opacity:.85;">
                  </div>

                  {{-- Info --}}
                  <div class="flex-grow-1 px-3 py-2 min-width-0">
                    <div class="fw-semibold small text-truncate">
                      {{ $s->heading ?: '(no heading)' }}
                    </div>
                    @if($s->subtext)
                    <div class="text-muted small text-truncate" style="font-size:11px;">{{ $s->subtext }}</div>
                    @endif
                    <div class="mt-1">
                      <span class="badge {{ $s->active ? 'bg-success' : 'bg-secondary' }}" style="font-size:10px;">
                        {{ $s->active ? 'Visible' : 'Hidden' }}
                      </span>
                      <span class="badge bg-light text-muted ms-1" style="font-size:10px;">
                        #{{ $i + 1 }}
                      </span>
                    </div>
                  </div>

                  {{-- Actions --}}
                  <div class="d-flex flex-column gap-1 justify-content-center px-2 flex-shrink-0">
                    <div class="d-flex gap-1">
                      <button class="btn btn-sm btn-outline-secondary py-0 px-1" wire:click="moveUp({{ $s->id }})" title="Move up">
                        <i class="fas fa-chevron-up" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-secondary py-0 px-1" wire:click="moveDown({{ $s->id }})" title="Move down">
                        <i class="fas fa-chevron-down" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-primary py-0 px-1" wire:click="edit({{ $s->id }})" title="Edit">
                        <i class="fas fa-pen" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm {{ $s->active ? 'btn-outline-warning' : 'btn-outline-success' }} py-0 px-1"
                              wire:click="toggleActive({{ $s->id }})" title="{{ $s->active ? 'Hide' : 'Show' }}">
                        <i class="fas fa-{{ $s->active ? 'eye-slash' : 'eye' }}" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger py-0 px-1" wire:click="confirmDelete({{ $s->id }})" title="Delete">
                        <i class="fas fa-trash" style="font-size:10px;"></i>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
              @endforeach
            </div>
          @endif

        </div>
      </div>
    </div>
  </div>

  {{-- Delete Modal --}}
  @if($deleteId)
  <div class="modal fade show d-block" style="background:rgba(0,0,0,0.5);">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title fw-bold">Remove Slide</h6>
        </div>
        <div class="modal-body">Are you sure you want to remove this banner slide?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" wire:click="$set('deleteId', null)">Cancel</button>
          <button class="btn btn-danger" wire:click="delete">Remove</button>
        </div>
      </div>
    </div>
  </div>
  @endif

</div>
