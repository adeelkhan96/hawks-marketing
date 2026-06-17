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
          <h6 class="fw-bold mb-4">{{ $editId ? 'Edit Company' : 'Add Company Logo' }}</h6>

          <form wire:submit.prevent="save">

            <div class="mb-3">
              <label class="form-label fw-semibold">Alt Text / Company Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" wire:model="name" placeholder="e.g. Google">
              @error('name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">
                Logo Image {{ $editId ? '(leave blank to keep current)' : '' }}
                <span class="text-danger">{{ $editId ? '' : '*' }}</span>
              </label>
              <input type="file" class="form-control" wire:model="logo" accept="image/*">
              <div class="form-text">Recommended: 200×80 px, transparent PNG or SVG. Max 2 MB.</div>
              @error('logo')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
            </div>

            {{-- Live preview --}}
            @if($logo)
              <div class="mb-3 p-3 bg-light rounded text-center">
                <img src="{{ $logo->temporaryUrl() }}" alt="Preview"
                     style="max-height:60px; max-width:180px; object-fit:contain;">
                <div class="text-muted small mt-1">Preview</div>
              </div>
            @elseif($editId)
              @php $ec = \App\Models\Company::find($editId); @endphp
              @if($ec && $ec->logo)
              <div class="mb-3 p-3 bg-light rounded text-center">
                <img src="{{ asset($ec->logo) }}" alt="{{ $ec->name }}"
                     style="max-height:60px; max-width:180px; object-fit:contain;">
                <div class="text-muted small mt-1">Current logo</div>
              </div>
              @endif
            @endif

            <div class="d-flex gap-2">
              <button type="submit" class="btn btn-primary flex-grow-1"
                      wire:loading.attr="disabled" wire:target="logo">
                <span wire:loading wire:target="logo">
                  <span class="spinner-border spinner-border-sm me-1"></span>Uploading…
                </span>
                <span wire:loading.remove wire:target="logo">
                  <i class="fas fa-{{ $editId ? 'save' : 'plus' }} me-1"></i>
                  {{ $editId ? 'Save Changes' : 'Add Company' }}
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

    {{-- Company List --}}
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
          <h6 class="fw-bold mb-4">Company Logos ({{ $companies->count() }})</h6>

          @if($companies->isEmpty())
            <div class="text-center py-5 text-muted">
              <i class="fas fa-building fa-2x mb-3 d-block"></i>
              No companies added yet. The default placeholder logos will show on the site.
            </div>
          @else
            <div class="row g-3">
              @foreach($companies as $i => $c)
              <div class="col-md-6">
                <div class="border rounded-3 p-3 d-flex align-items-center gap-3 {{ $c->active ? '' : 'opacity-50' }}">

                  {{-- Logo thumbnail --}}
                  <div class="bg-light rounded-2 d-flex align-items-center justify-content-center flex-shrink-0"
                       style="width:90px;height:54px;overflow:hidden;">
                    <img src="{{ asset($c->logo) }}" alt="{{ $c->name }}"
                         style="max-width:86px;max-height:50px;object-fit:contain;">
                  </div>

                  {{-- Info --}}
                  <div class="flex-grow-1 min-width-0">
                    <div class="fw-semibold text-truncate small">{{ $c->name }}</div>
                    <span class="badge {{ $c->active ? 'bg-success' : 'bg-secondary' }} mt-1" style="font-size:10px;">
                      {{ $c->active ? 'Visible' : 'Hidden' }}
                    </span>
                  </div>

                  {{-- Actions --}}
                  <div class="d-flex flex-column gap-1 flex-shrink-0">
                    <div class="d-flex gap-1">
                      <button class="btn btn-sm btn-outline-secondary py-0 px-1" wire:click="moveUp({{ $c->id }})" title="Move up">
                        <i class="fas fa-chevron-up" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-secondary py-0 px-1" wire:click="moveDown({{ $c->id }})" title="Move down">
                        <i class="fas fa-chevron-down" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-primary py-0 px-1" wire:click="edit({{ $c->id }})" title="Edit">
                        <i class="fas fa-pen" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm {{ $c->active ? 'btn-outline-warning' : 'btn-outline-success' }} py-0 px-1"
                              wire:click="toggleActive({{ $c->id }})" title="{{ $c->active ? 'Hide' : 'Show' }}">
                        <i class="fas fa-{{ $c->active ? 'eye-slash' : 'eye' }}" style="font-size:10px;"></i>
                      </button>
                      <button class="btn btn-sm btn-outline-danger py-0 px-1" wire:click="confirmDelete({{ $c->id }})" title="Delete">
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
          <h6 class="modal-title fw-bold">Remove Company</h6>
        </div>
        <div class="modal-body">Are you sure you want to remove this company logo?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" wire:click="$set('deleteId', null)">Cancel</button>
          <button class="btn btn-danger" wire:click="delete">Remove</button>
        </div>
      </div>
    </div>
  </div>
  @endif

</div>
