<div>

{{-- Toast --}}
@if($toast)
<div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3500)"
     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
     class="alert alert-success d-flex align-items-center gap-2 mb-4" style="border-left:4px solid #198754;">
    <i class="fas fa-check-circle"></i> {{ $toast }}
</div>
@endif

{{-- ===== LIST VIEW ===== --}}
@if($view === 'list')

<div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
    <div>
        <h5 class="mb-0 fw-bold" style="color:#212741;">Blog Posts</h5>
        <small class="text-muted">Manage all blog articles</small>
    </div>
    <button wire:click="create" class="btn btn-sm fw-semibold" style="background:#f1a51e;color:#fff;padding:8px 20px;border-radius:8px;">
        <i class="fas fa-plus me-1"></i> New Post
    </button>
</div>

{{-- Filters --}}
<div class="d-flex gap-2 flex-wrap mb-4">
    <input wire:model.live="search" type="text" placeholder="Search posts…"
           class="form-control form-control-sm" style="max-width:260px;border-radius:8px;">
    <select wire:model.live="filter" class="form-select form-select-sm" style="max-width:140px;border-radius:8px;">
        <option value="all">All</option>
        <option value="published">Published</option>
        <option value="draft">Draft</option>
    </select>
</div>

{{-- Table --}}
<div class="card border-0 shadow-sm" style="border-radius:12px;overflow:hidden;">
    <div class="table-responsive">
        <table class="table table-hover mb-0 align-middle">
            <thead style="background:#f8f9fc;">
                <tr>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;padding:14px 20px;">Title</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;">Layout</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;">Status</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;">Date</th>
                    <th style="font-size:12px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:.5px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr>
                    <td style="padding:14px 20px;">
                        <div class="d-flex align-items-center gap-3">
                            @if($blog->featured_image)
                                <img src="{{ asset($blog->featured_image) }}" alt="" style="width:48px;height:36px;object-fit:cover;border-radius:6px;">
                            @else
                                <div style="width:48px;height:36px;background:linear-gradient(135deg,#212741,#f1a51e30);border-radius:6px;display:flex;align-items:center;justify-content:center;">
                                    <i class="fas fa-newspaper" style="color:#f1a51e;font-size:14px;"></i>
                                </div>
                            @endif
                            <div>
                                <div class="fw-semibold" style="font-size:14px;color:#212741;max-width:320px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">{{ $blog->title }}</div>
                                <div style="font-size:12px;color:#9ca3af;">/blogs/{{ $blog->slug }}</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="badge" style="font-size:11px;background:#f1f5f9;color:#475569;font-weight:600;border-radius:6px;padding:4px 10px;text-transform:capitalize;">
                            {{ str_replace('-', ' ', $blog->layout) }}
                        </span>
                    </td>
                    <td>
                        <button wire:click="toggleStatus({{ $blog->id }})" class="badge border-0 cursor-pointer"
                            style="font-size:11px;font-weight:600;border-radius:6px;padding:5px 12px;
                            background:{{ $blog->status === 'published' ? '#d1fae5' : '#fef9c3' }};
                            color:{{ $blog->status === 'published' ? '#065f46' : '#854d0e' }};">
                            <i class="fas fa-circle me-1" style="font-size:8px;"></i>
                            {{ ucfirst($blog->status) }}
                        </button>
                    </td>
                    <td style="font-size:13px;color:#6b7280;">
                        {{ $blog->published_at ? $blog->published_at->format('d M Y') : $blog->updated_at->format('d M Y') }}
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <button wire:click="edit({{ $blog->id }})" class="btn btn-sm btn-outline-primary" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <a href="{{ url('/blogs/' . $blog->slug) }}" target="_blank" class="btn btn-sm btn-outline-secondary" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-external-link-alt"></i>
                            </a>
                            <button wire:click="confirmDelete({{ $blog->id }})" class="btn btn-sm btn-outline-danger" style="border-radius:7px;font-size:12px;">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5">
                        <div style="color:#9ca3af;">
                            <i class="fas fa-newspaper" style="font-size:36px;margin-bottom:12px;display:block;opacity:.4;"></i>
                            No blog posts yet.
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

{{-- Delete modal --}}
@if($deleteId)
<div class="modal-backdrop-custom" style="position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:1050;display:flex;align-items:center;justify-content:center;">
    <div class="card border-0 shadow-lg" style="width:420px;border-radius:16px;padding:32px;text-align:center;">
        <div style="width:56px;height:56px;background:#fee2e2;border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px;">
            <i class="fas fa-trash" style="color:#dc2626;font-size:20px;"></i>
        </div>
        <h6 class="fw-bold mb-2">Delete Blog Post?</h6>
        <p class="text-muted mb-4" style="font-size:14px;">This action cannot be undone. The post and its featured image will be permanently deleted.</p>
        <div class="d-flex gap-2 justify-content-center">
            <button wire:click="cancelDelete" class="btn btn-outline-secondary" style="border-radius:8px;min-width:100px;">Cancel</button>
            <button wire:click="delete" class="btn btn-danger" style="border-radius:8px;min-width:100px;">
                <span wire:loading.remove wire:target="delete">Delete</span>
                <span wire:loading wire:target="delete"><i class="fas fa-spinner fa-spin"></i></span>
            </button>
        </div>
    </div>
</div>
@endif

{{-- ===== FORM VIEW ===== --}}
@elseif($view === 'form')

{{-- Header --}}
<div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-3">
    <div>
        <button wire:click="backToList" class="btn btn-sm btn-outline-secondary mb-2" style="border-radius:8px;">
            <i class="fas fa-arrow-left me-1"></i> Back
        </button>
        <h5 class="mb-0 fw-bold" style="color:#212741;">{{ $editId ? 'Edit Post' : 'New Blog Post' }}</h5>
    </div>
    <div class="d-flex gap-2">
        <button wire:click="$set('status','draft')" type="button"
                class="btn btn-sm {{ $status === 'draft' ? 'btn-warning' : 'btn-outline-warning' }}"
                style="border-radius:8px;font-size:13px;">
            <i class="fas fa-file me-1"></i> Draft
        </button>
        <button wire:click="save" type="button"
                class="btn btn-sm fw-semibold" style="background:#f1a51e;color:#fff;border-radius:8px;padding:8px 22px;"
                wire:loading.attr="disabled" wire:target="featuredImage,save">
            <span wire:loading wire:target="featuredImage"><span class="spinner-border spinner-border-sm me-1"></span> Uploading…</span>
            <span wire:loading.remove wire:target="featuredImage">
                <span wire:loading.remove wire:target="save"><i class="fas fa-save me-1"></i> Publish</span>
                <span wire:loading wire:target="save"><i class="fas fa-spinner fa-spin me-1"></i> Saving…</span>
            </span>
        </button>
    </div>
</div>

{{-- Tabs --}}
<ul class="nav nav-pills mb-4" style="gap:6px;">
    <li class="nav-item">
        <button wire:click="$set('tab','content')" type="button"
                class="nav-link {{ $tab === 'content' ? 'active' : '' }}"
                style="border-radius:8px;font-size:13px;font-weight:600;{{ $tab === 'content' ? 'background:#212741;color:#fff;' : 'color:#374151;' }}">
            <i class="fas fa-align-left me-1"></i> Content
        </button>
    </li>
    <li class="nav-item">
        <button wire:click="$set('tab','seo')" type="button"
                class="nav-link {{ $tab === 'seo' ? 'active' : '' }}"
                style="border-radius:8px;font-size:13px;font-weight:600;{{ $tab === 'seo' ? 'background:#212741;color:#fff;' : 'color:#374151;' }}">
            <i class="fas fa-magnifying-glass me-1"></i> SEO
        </button>
    </li>
</ul>

@if($tab === 'content')
<div class="row g-4">

    {{-- Main Content Column --}}
    <div class="col-lg-8">

        {{-- Title --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <label class="form-label fw-semibold" style="font-size:13px;color:#374151;">Post Title</label>
                <input wire:model.live.debounce.400ms="title" type="text" class="form-control form-control-lg border-0 p-0"
                       style="font-size:22px;font-weight:700;color:#212741;box-shadow:none;"
                       placeholder="Enter an engaging title…">
                @error('title')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror
                <div class="mt-3 pt-3 border-top d-flex align-items-center gap-2">
                    <span style="font-size:12px;color:#9ca3af;">Slug:</span>
                    <input wire:model="slug" type="text" class="form-control form-control-sm border-0 p-0"
                           style="font-size:12px;color:#6b7280;box-shadow:none;flex:1;">
                    @error('slug')<span class="text-danger" style="font-size:12px;">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

        {{-- Rich Text Editor --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;overflow:hidden;">
            <div class="card-body p-0">
                <div class="px-4 pt-3 pb-2 border-bottom d-flex align-items-center justify-content-between">
                    <label class="form-label fw-semibold mb-0" style="font-size:13px;color:#374151;">Content</label>
                    {{-- Hidden file input for inline image upload --}}
                    <input type="file" id="quill-img-input" accept="image/*" style="display:none"
                           onchange="handleInlineImageUpload(this)">
                </div>

                {{-- Quill editor — wire:ignore prevents Livewire from overwriting the DOM --}}
                <div wire:ignore x-data x-init="initQuill($el)">
                    <div id="quill-editor" style="min-height:420px;font-size:15px;line-height:1.7;"></div>
                </div>

                {{-- Hidden textarea syncs content to Livewire --}}
                <textarea id="quill-content-sync" wire:model="content" style="display:none"></textarea>
                @error('content')<div class="px-4 pb-3 text-danger" style="font-size:12px;">{{ $message }}</div>@enderror
            </div>
        </div>

        {{-- Excerpt --}}
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <label class="form-label fw-semibold" style="font-size:13px;color:#374151;">Excerpt <span class="text-muted fw-normal">(optional — shown in blog listing)</span></label>
                <textarea wire:model="excerpt" rows="3" class="form-control" style="border-radius:8px;font-size:13px;resize:none;"
                          placeholder="A short summary of this post (max 500 characters)…" maxlength="500"></textarea>
                <div class="text-end mt-1" style="font-size:12px;color:#9ca3af;">{{ strlen($excerpt) }}/500</div>
                @error('excerpt')<div class="text-danger" style="font-size:12px;">{{ $message }}</div>@enderror
            </div>
        </div>

    </div>

    {{-- Sidebar Settings --}}
    <div class="col-lg-4">

        {{-- Publish Settings --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;color:#374151;text-transform:uppercase;letter-spacing:.5px;">Publish Settings</h6>

                <div class="mb-3">
                    <label class="form-label" style="font-size:12px;color:#6b7280;font-weight:600;">Status</label>
                    <select wire:model.live="status" class="form-select form-select-sm" style="border-radius:8px;">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                @if($status === 'published')
                <div class="mb-3">
                    <label class="form-label" style="font-size:12px;color:#6b7280;font-weight:600;">Publish Date</label>
                    <input wire:model="publishedAt" type="datetime-local" class="form-control form-control-sm" style="border-radius:8px;">
                </div>
                @endif

                <div>
                    <label class="form-label" style="font-size:12px;color:#6b7280;font-weight:600;">Author</label>
                    <input wire:model="author" type="text" class="form-control form-control-sm" style="border-radius:8px;">
                </div>
            </div>
        </div>

        {{-- Featured Image --}}
        <div class="card border-0 shadow-sm mb-4" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;color:#374151;text-transform:uppercase;letter-spacing:.5px;">Featured Image</h6>

                @if($imagePreview && !$featuredImage)
                <div class="position-relative mb-3">
                    <img src="{{ asset($imagePreview) }}" alt="" style="width:100%;height:160px;object-fit:cover;border-radius:8px;">
                    <button wire:click="removeImage" type="button"
                            style="position:absolute;top:8px;right:8px;background:rgba(0,0,0,.6);border:none;color:#fff;border-radius:6px;width:28px;height:28px;font-size:12px;cursor:pointer;display:flex;align-items:center;justify-content:center;">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                @elseif($featuredImage)
                <div class="mb-3">
                    <img src="{{ $featuredImage->temporaryUrl() }}" alt="" style="width:100%;height:160px;object-fit:cover;border-radius:8px;">
                </div>
                @endif

                <label class="w-100 text-center py-3 cursor-pointer"
                       style="border:2px dashed #e5e7eb;border-radius:8px;cursor:pointer;font-size:13px;color:#9ca3af;transition:all .2s;"
                       onmouseover="this.style.borderColor='#f1a51e';this.style.color='#f1a51e'"
                       onmouseout="this.style.borderColor='#e5e7eb';this.style.color='#9ca3af'">
                    <i class="fas fa-cloud-upload-alt d-block mb-1" style="font-size:22px;"></i>
                    Click to upload image
                    <input wire:model="featuredImage" type="file" accept="image/*" class="d-none">
                </label>
                <div class="mt-1" style="font-size:11px;color:#9ca3af;">JPG, PNG, WebP — max 5 MB</div>
                @error('featuredImage')<div class="text-danger mt-1" style="font-size:12px;">{{ $message }}</div>@enderror

                <div wire:loading wire:target="featuredImage" class="mt-2 text-center" style="font-size:12px;color:#6b7280;">
                    <i class="fas fa-spinner fa-spin me-1"></i> Uploading…
                </div>
            </div>
        </div>

        {{-- Layout Selector --}}
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-3" style="font-size:13px;color:#374151;text-transform:uppercase;letter-spacing:.5px;">Layout</h6>

                <div class="d-flex flex-column gap-2">
                    {{-- Standard --}}
                    <label class="layout-option {{ $layout === 'standard' ? 'active' : '' }}"
                           style="border:2px solid {{ $layout === 'standard' ? '#f1a51e' : '#e5e7eb' }};border-radius:10px;padding:12px 14px;cursor:pointer;display:flex;align-items:center;gap:12px;transition:all .2s;">
                        <input type="radio" wire:model.live="layout" value="standard" class="d-none">
                        <div style="flex-shrink:0;">
                            <svg width="42" height="32" viewBox="0 0 42 32" fill="none">
                                <rect width="42" height="32" rx="4" fill="#f1f5f9"/>
                                <rect x="4" y="4" width="34" height="8" rx="2" fill="{{ $layout === 'standard' ? '#f1a51e' : '#cbd5e1' }}"/>
                                <rect x="8" y="16" width="26" height="3" rx="1" fill="#94a3b8"/>
                                <rect x="8" y="21" width="26" height="2" rx="1" fill="#cbd5e1"/>
                                <rect x="8" y="25" width="18" height="2" rx="1" fill="#cbd5e1"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size:13px;font-weight:700;color:{{ $layout === 'standard' ? '#f1a51e' : '#374151' }};">Standard</div>
                            <div style="font-size:11px;color:#9ca3af;">Hero image + centered content</div>
                        </div>
                    </label>

                    {{-- Full Width --}}
                    <label class="layout-option {{ $layout === 'full-width' ? 'active' : '' }}"
                           style="border:2px solid {{ $layout === 'full-width' ? '#f1a51e' : '#e5e7eb' }};border-radius:10px;padding:12px 14px;cursor:pointer;display:flex;align-items:center;gap:12px;transition:all .2s;">
                        <input type="radio" wire:model.live="layout" value="full-width" class="d-none">
                        <div style="flex-shrink:0;">
                            <svg width="42" height="32" viewBox="0 0 42 32" fill="none">
                                <rect width="42" height="32" rx="4" fill="#f1f5f9"/>
                                <rect x="0" y="0" width="42" height="12" rx="4" fill="{{ $layout === 'full-width' ? '#f1a51e' : '#cbd5e1' }}"/>
                                <rect x="4" y="16" width="34" height="2" rx="1" fill="#94a3b8"/>
                                <rect x="4" y="21" width="34" height="2" rx="1" fill="#cbd5e1"/>
                                <rect x="4" y="26" width="22" height="2" rx="1" fill="#cbd5e1"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size:13px;font-weight:700;color:{{ $layout === 'full-width' ? '#f1a51e' : '#374151' }};">Full Width</div>
                            <div style="font-size:11px;color:#9ca3af;">Billboard image + wide content</div>
                        </div>
                    </label>

                    {{-- Magazine --}}
                    <label class="layout-option {{ $layout === 'magazine' ? 'active' : '' }}"
                           style="border:2px solid {{ $layout === 'magazine' ? '#f1a51e' : '#e5e7eb' }};border-radius:10px;padding:12px 14px;cursor:pointer;display:flex;align-items:center;gap:12px;transition:all .2s;">
                        <input type="radio" wire:model.live="layout" value="magazine" class="d-none">
                        <div style="flex-shrink:0;">
                            <svg width="42" height="32" viewBox="0 0 42 32" fill="none">
                                <rect width="42" height="32" rx="4" fill="#f1f5f9"/>
                                <rect x="4" y="4" width="26" height="6" rx="2" fill="{{ $layout === 'magazine' ? '#f1a51e' : '#cbd5e1' }}"/>
                                <rect x="4" y="13" width="26" height="2" rx="1" fill="#94a3b8"/>
                                <rect x="4" y="17" width="26" height="2" rx="1" fill="#cbd5e1"/>
                                <rect x="4" y="21" width="26" height="2" rx="1" fill="#cbd5e1"/>
                                <rect x="4" y="25" width="16" height="2" rx="1" fill="#cbd5e1"/>
                                <rect x="33" y="4" width="5" height="23" rx="2" fill="#e2e8f0"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-size:13px;font-weight:700;color:{{ $layout === 'magazine' ? '#f1a51e' : '#374151' }};">Magazine</div>
                            <div style="font-size:11px;color:#9ca3af;">Content + sidebar layout</div>
                        </div>
                    </label>
                </div>

            </div>
        </div>

    </div>
</div>

@elseif($tab === 'seo')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm" style="border-radius:12px;">
            <div class="card-body p-4">
                <h6 class="fw-bold mb-4" style="font-size:14px;color:#212741;">Search Engine Optimisation</h6>

                <div class="mb-4">
                    <label class="form-label fw-semibold" style="font-size:13px;color:#374151;">Meta Title</label>
                    <input wire:model="metaTitle" type="text" class="form-control" style="border-radius:8px;" maxlength="65"
                           placeholder="Leave blank to use the post title">
                    <div class="d-flex justify-content-between mt-1">
                        <small class="text-muted">Recommended: 50–65 characters</small>
                        <small class="text-muted">{{ strlen($metaTitle) }}/65</small>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold" style="font-size:13px;color:#374151;">Meta Description</label>
                    <textarea wire:model="metaDesc" rows="3" class="form-control" style="border-radius:8px;resize:none;" maxlength="165"
                              placeholder="Brief description for search results…"></textarea>
                    <div class="d-flex justify-content-between mt-1">
                        <small class="text-muted">Recommended: 120–155 characters</small>
                        <small class="text-muted">{{ strlen($metaDesc) }}/165</small>
                    </div>
                </div>

                {{-- SERP Preview --}}
                <div style="background:#f8f9fc;border-radius:10px;padding:20px;">
                    <div style="font-size:12px;color:#9ca3af;margin-bottom:10px;font-weight:600;text-transform:uppercase;letter-spacing:.5px;">SERP Preview</div>
                    <div style="font-size:18px;color:#1a0dab;font-weight:400;line-height:1.3;margin-bottom:3px;">
                        {{ $metaTitle ?: ($title ?: 'Your Post Title') }}
                    </div>
                    <div style="font-size:13px;color:#006621;margin-bottom:4px;">
                        thehawksmarketing.com/blogs/{{ $slug ?: 'post-slug' }}
                    </div>
                    <div style="font-size:13px;color:#4d5156;line-height:1.5;">
                        {{ $metaDesc ?: ($excerpt ?: 'Your meta description will appear here. Write a compelling summary to improve click-through rates from search results.') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endif

@endif

</div>

@push('admin-scripts')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
<style>
#quill-editor .ql-editor { min-height: 400px; font-family: 'Poppins', sans-serif; font-size: 15px; line-height: 1.8; color: #212741; }
#quill-editor .ql-toolbar { border-top: none !important; border-left: none !important; border-right: none !important; border-bottom: 1px solid #f3f4f6 !important; padding: 10px 14px !important; }
#quill-editor .ql-container { border: none !important; }
#quill-editor .ql-editor h2 { font-size: 22px; font-weight: 700; color: #212741; margin: 24px 0 12px; }
#quill-editor .ql-editor h3 { font-size: 18px; font-weight: 700; color: #212741; margin: 20px 0 10px; }
#quill-editor .ql-editor h4 { font-size: 16px; font-weight: 700; color: #212741; margin: 16px 0 8px; }
#quill-editor .ql-editor blockquote { border-left: 4px solid #f1a51e; padding-left: 16px; color: #6b7280; margin: 16px 0; }
#quill-editor .ql-editor a { color: #f1a51e; }
</style>
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
var quillInstance = null;

function initQuill(container) {
    var toolbarOptions = [
        [{ 'header': [2, 3, 4, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'color': [] }, { 'background': [] }],
        ['blockquote', 'code-block'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'indent': '-1'}, { 'indent': '+1' }],
        [{ 'align': [] }],
        ['link', 'image'],
        ['clean']
    ];

    quillInstance = new Quill('#quill-editor', {
        theme: 'snow',
        modules: {
            toolbar: {
                container: toolbarOptions,
                handlers: {
                    image: function() {
                        document.getElementById('quill-img-input').click();
                    }
                }
            }
        }
    });

    // Load existing content from hidden textarea
    var sync = document.getElementById('quill-content-sync');
    if (sync && sync.value) {
        quillInstance.root.innerHTML = sync.value;
    }

    // Sync changes to Livewire via the hidden textarea
    quillInstance.on('text-change', function() {
        sync.value = quillInstance.root.innerHTML;
        sync.dispatchEvent(new Event('input'));
    });
}

// Called when Livewire loads a blog for editing or creates a new one
document.addEventListener('livewire:initialized', function() {
    Livewire.on('refreshEditor', function(params) {
        if (!quillInstance) return;
        var content = params[0] && params[0].content !== undefined ? params[0].content : (params.content || '');
        quillInstance.root.innerHTML = content || '';
        var sync = document.getElementById('quill-content-sync');
        if (sync) sync.value = content || '';
    });
});

async function handleInlineImageUpload(input) {
    if (!input.files || !input.files[0]) return;
    var file = input.files[0];
    var formData = new FormData();
    formData.append('image', file);
    formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

    try {
        var response = await fetch('/admin/upload-blog-image', { method: 'POST', body: formData });
        var data = await response.json();
        if (data.url && quillInstance) {
            var range = quillInstance.getSelection() || { index: quillInstance.getLength() };
            quillInstance.insertEmbed(range.index, 'image', data.url, Quill.sources.USER);
            quillInstance.setSelection(range.index + 1);
        }
    } catch (e) {
        alert('Image upload failed. Please try again.');
    }
    input.value = '';
}
</script>
@endpush
