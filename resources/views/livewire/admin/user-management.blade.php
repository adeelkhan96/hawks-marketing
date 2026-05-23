<div>
  {{-- Flash Messages --}}
  @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show mb-4">
      <i class="fas fa-check-circle me-2"></i>{{ session('message') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif
  @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mb-4">
      <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  @if(!$showForm)
    {{-- Users Table --}}
    <div class="admin-card">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="mb-0">All Users ({{ count($users) }})</h5>
        <button wire:click="showCreateForm" class="btn btn-admin btn-sm">
          <i class="fas fa-plus me-1"></i> Add User
        </button>
      </div>

      @if(count($users) === 0)
        <div class="text-center py-5 text-muted">
          <i class="fas fa-users fa-3x mb-3 d-block"></i>
          <p>No users found. Create the first one.</p>
        </div>
      @else
        <div class="table-responsive">
          <table class="admin-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Joined</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $index => $user)
                <tr>
                  <td class="text-muted small">{{ $index + 1 }}</td>
                  <td class="fw-semibold">{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <span class="badge {{ $user->role === 'admin' ? 'badge-admin' : 'badge-editor' }}">
                      {{ ucfirst($user->role) }}
                    </span>
                  </td>
                  <td class="text-muted small">{{ $user->created_at->format('d M Y') }}</td>
                  <td>
                    <button wire:click="edit({{ $user->id }})" class="btn btn-sm btn-outline-secondary me-1">
                      <i class="fas fa-edit"></i> Edit
                    </button>
                    @if($user->id !== auth()->id())
                      <button wire:click="confirmDelete({{ $user->id }})" class="btn btn-sm btn-outline-danger"
                              wire:loading.attr="disabled">
                        <i class="fas fa-trash"></i>
                      </button>
                    @else
                      <span class="text-muted small">(you)</span>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>

  @else
    {{-- Create / Edit Form --}}
    <div class="admin-card" style="max-width: 620px;">
      <h5>{{ $editingId ? 'Edit User' : 'Create New User' }}</h5>
      <form wire:submit="save" novalidate>
        <div class="mb-3">
          <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
          <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter full name">
          @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
          <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com">
          @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
          <label class="form-label fw-semibold">
            Password
            @if($editingId) <span class="text-muted fw-normal small">(leave blank to keep current)</span> @else <span class="text-danger">*</span> @endif
          </label>
          <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" placeholder="Min. 8 characters">
          @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
          <label class="form-label fw-semibold">Role <span class="text-danger">*</span></label>
          <select wire:model="role" class="form-select @error('role') is-invalid @enderror">
            <option value="editor">Editor — can edit content</option>
            <option value="admin">Admin — full access</option>
          </select>
          @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>
        <div class="d-flex gap-2">
          <button type="submit" class="btn btn-admin" wire:loading.attr="disabled">
            <span wire:loading wire:target="save"><i class="fas fa-spinner fa-spin me-1"></i></span>
            <i wire:loading.remove wire:target="save" class="fas fa-save me-1"></i>
            {{ $editingId ? 'Update User' : 'Create User' }}
          </button>
          <button type="button" wire:click="cancel" class="btn btn-secondary">
            <i class="fas fa-times me-1"></i>Cancel
          </button>
        </div>
      </form>
    </div>
  @endif

  {{-- Delete Confirmation --}}
  @if($deleteConfirmId)
    <div class="modal-overlay">
      <div class="modal-box">
        <h5><i class="fas fa-exclamation-triangle text-danger me-2"></i>Confirm Delete</h5>
        <p class="text-muted mb-0">Are you sure you want to delete this user? This action cannot be undone.</p>
        <div class="d-flex gap-2 mt-4">
          <button wire:click="delete" class="btn btn-danger" wire:loading.attr="disabled">
            <i class="fas fa-trash me-1"></i>Yes, Delete
          </button>
          <button wire:click="cancelDelete" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </div>
  @endif
</div>
