<div>
  {{-- Flash Message --}}
  @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show mb-4">
      <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="admin-card">
    {{-- Page Tabs --}}
    <div class="mb-4">
      <p class="fw-semibold text-muted small mb-2 text-uppercase" style="letter-spacing: 1px;">Select Page to Edit</p>
      <div class="d-flex gap-2 flex-wrap">
        @foreach($pages as $page)
          <button wire:click="changePage('{{ $page }}')"
            class="btn btn-sm {{ $selectedPage === $page ? 'btn-admin' : 'btn-outline-secondary' }}">
            <i class="fas fa-file-alt me-1"></i>{{ ucfirst($page) }}
          </button>
        @endforeach
      </div>
    </div>

    <hr class="my-4">

    {{-- Content Sections --}}
    @if(count($contents) === 0)
      <div class="text-center py-5 text-muted">
        <i class="fas fa-file-circle-question fa-3x mb-3 d-block"></i>
        <p class="mb-1">No editable content found for the <strong>{{ ucfirst($selectedPage) }}</strong> page.</p>
        <p class="small">Run the AdminSeeder to populate default content.</p>
      </div>
    @else
      @foreach($contents as $section => $items)
        <div class="content-section-card">
          <h6>
            <i class="fas fa-layer-group me-1"></i>
            {{ ucwords(str_replace('_', ' ', $section)) }}
          </h6>
          @foreach($items as $item)
            <div class="content-item">
              <span class="content-key" title="{{ $item['key'] }}">
                {{ ucwords(str_replace('_', ' ', $item['key'])) }}
              </span>
              <div class="content-value flex-grow-1 px-2">
                @if($editingId === $item['id'])
                  <textarea wire:model="editValue" class="edit-textarea" rows="4"
                    placeholder="Enter content..."></textarea>
                  <div class="d-flex gap-2 mt-2">
                    <button wire:click="saveEdit" class="btn btn-admin btn-sm" wire:loading.attr="disabled">
                      <span wire:loading wire:target="saveEdit"><i class="fas fa-spinner fa-spin"></i></span>
                      <i wire:loading.remove wire:target="saveEdit" class="fas fa-check"></i>
                      Save
                    </button>
                    <button wire:click="cancelEdit" class="btn btn-secondary btn-sm">
                      <i class="fas fa-times"></i> Cancel
                    </button>
                  </div>
                @else
                  <span class="text-truncate d-block" style="max-width: 500px; font-size:13px; color:#555;">
                    {{ \Illuminate\Support\Str::limit(strip_tags($item['value']), 120) }}
                  </span>
                @endif
              </div>
              <div class="content-actions ms-2 flex-shrink-0">
                @if($editingId !== $item['id'])
                  <button wire:click="startEdit({{ $item['id'] }})" class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-pencil"></i> Edit
                  </button>
                @endif
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    @endif
  </div>
</div>
