<div>
  {{-- Delete confirm modal --}}
  @if($confirmDeleteId)
    <div class="modal-overlay">
      <div class="modal-box">
        <h5><i class="fas fa-trash-alt me-2 text-danger"></i>Delete Submission</h5>
        <p class="text-muted" style="font-size:14px;">This message will be permanently deleted and cannot be recovered.</p>
        <div class="d-flex gap-2 mt-4">
          <button wire:click="delete({{ $confirmDeleteId }})" class="btn btn-danger btn-sm">
            <i class="fas fa-trash-alt me-1"></i> Delete
          </button>
          <button wire:click="cancelDelete" class="btn btn-secondary btn-sm">Cancel</button>
        </div>
      </div>
    </div>
  @endif

  <div class="row g-4">

    {{-- Submissions list --}}
    <div class="{{ $viewingId ? 'col-lg-5' : 'col-lg-12' }}">
      <div class="admin-card" style="margin-bottom:0;">
        <h5>
          <i class="fas fa-inbox me-2"></i>Inbox
          @php $unread = $submissions->where('read_at', null)->count(); @endphp
          @if($unread > 0)
            <span class="badge-admin ms-2" style="font-size:11px;">{{ $unread }} new</span>
          @endif
        </h5>

        @if($submissions->isEmpty())
          <div class="text-center py-5 text-muted">
            <i class="fas fa-inbox fa-3x mb-3 d-block" style="opacity:.3;"></i>
            <p class="mb-0">No messages yet.</p>
          </div>
        @else
          <div style="overflow-x:auto;">
            <table class="admin-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($submissions as $sub)
                  <tr style="{{ !$sub->isRead() ? 'background:#fffbf8;' : '' }} {{ $viewingId === $sub->id ? 'background:#fff3ee;' : '' }}">
                    <td style="width:8px; padding-right:0;">
                      @if(!$sub->isRead())
                        <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background:#f1a51e;"></span>
                      @endif
                    </td>
                    <td style="{{ !$sub->isRead() ? 'font-weight:600;' : '' }}">{{ $sub->name }}</td>
                    <td style="font-size:13px; color:#666;">{{ $sub->email }}</td>
                    <td style="font-size:13px; color:#888; max-width:150px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                      {{ $sub->subject ?: '(no subject)' }}
                    </td>
                    <td style="font-size:12px; color:#aaa; white-space:nowrap;">{{ $sub->created_at->format('M d, Y') }}</td>
                    <td style="white-space:nowrap;">
                      <button wire:click="view({{ $sub->id }})" class="btn btn-sm btn-admin" style="padding:5px 12px; font-size:12px;">
                        <i class="fas fa-eye"></i>
                      </button>
                      <button wire:click="confirmDelete({{ $sub->id }})" class="btn btn-sm btn-outline-danger ms-1" style="padding:5px 10px; font-size:12px;">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endif
      </div>
    </div>

    {{-- Message detail panel --}}
    @if($viewingId && $viewing)
      <div class="col-lg-7">
        <div class="admin-card" style="margin-bottom:0;">
          <div class="d-flex align-items-start justify-content-between mb-4">
            <div>
              <h5 class="mb-1">{{ $viewing->subject ?: '(no subject)' }}</h5>
              <p class="text-muted mb-0" style="font-size:13px;">{{ $viewing->created_at->format('F j, Y \a\t g:i A') }}</p>
            </div>
            <button wire:click="closeView" class="btn btn-sm btn-outline-secondary">
              <i class="fas fa-times"></i>
            </button>
          </div>

          <div class="content-section-card mb-3">
            <div class="row g-2" style="font-size:13px;">
              <div class="col-sm-6">
                <span class="content-key" style="width:auto; padding-top:0;">Name</span>
                <span class="ms-2">{{ $viewing->name }}</span>
              </div>
              <div class="col-sm-6">
                <span class="content-key" style="width:auto; padding-top:0;">Email</span>
                <a href="mailto:{{ $viewing->email }}" class="ms-2" style="color:#f1a51e;">{{ $viewing->email }}</a>
              </div>
              @if($viewing->phone)
              <div class="col-sm-6">
                <span class="content-key" style="width:auto; padding-top:0;">Phone</span>
                <a href="tel:{{ $viewing->phone }}" class="ms-2">{{ $viewing->phone }}</a>
              </div>
              @endif
            </div>
          </div>

          <div style="background:#f8f9fc; border-radius:10px; padding:18px 20px; border:1px solid #ebebeb; font-size:14px; line-height:1.7; white-space:pre-wrap; color:#333;">{{ $viewing->message }}</div>

          <div class="d-flex gap-2 mt-4">
            <a href="mailto:{{ $viewing->email }}?subject=Re: {{ urlencode($viewing->subject ?? 'Your Enquiry') }}"
               class="btn btn-admin btn-sm">
              <i class="fas fa-reply me-1"></i> Reply via Email
            </a>
            @if($viewing->isRead())
              <button wire:click="markUnread({{ $viewing->id }})" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-envelope me-1"></i> Mark Unread
              </button>
            @endif
            <button wire:click="confirmDelete({{ $viewing->id }})" class="btn btn-sm btn-outline-danger ms-auto">
              <i class="fas fa-trash-alt me-1"></i> Delete
            </button>
          </div>
        </div>
      </div>
    @endif

  </div>
</div>
