<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogManager extends Component
{
    use WithFileUploads;

    // UI state
    public string $view   = 'list'; // list | form
    public string $tab    = 'content'; // content | seo
    public ?int   $editId = null;
    public ?int   $deleteId = null;
    public string $search = '';
    public string $filter = 'all';
    public string $toast  = '';

    // Form fields
    public string  $title       = '';
    public string  $slug        = '';
    public string  $excerpt     = '';
    public string  $content     = '';
    public string  $layout      = 'standard';
    public string  $author      = 'Hawks Marketing';
    public string  $status      = 'draft';
    public string  $publishedAt = '';
    public string  $metaTitle   = '';
    public string  $metaDesc    = '';

    #[Rule('nullable|image|max:5120|mimes:jpg,jpeg,png,webp')]
    public $featuredImage = null;
    public ?string $imagePreview = null;

    public function updatedTitle(string $value): void
    {
        if (! $this->editId) {
            $this->slug = Blog::generateSlug($value);
        }
    }

    public function updatedStatus(string $value): void
    {
        if ($value === 'published' && ! $this->publishedAt) {
            $this->publishedAt = now()->format('Y-m-d\TH:i');
        }
    }

    public function updatedFeaturedImage(): void
    {
        $this->validate(['featuredImage' => 'nullable|image|max:5120|mimes:jpg,jpeg,png,webp']);
    }

    public function create(): void
    {
        $this->resetForm();
        $this->view = 'form';
        $this->dispatch('refreshEditor', content: '');
    }

    public function edit(int $id): void
    {
        $blog = Blog::findOrFail($id);
        $this->editId       = $id;
        $this->title        = $blog->title;
        $this->slug         = $blog->slug;
        $this->excerpt      = $blog->excerpt ?? '';
        $this->content      = $blog->content;
        $this->layout       = $blog->layout;
        $this->author       = $blog->author;
        $this->status       = $blog->status;
        $this->publishedAt  = $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '';
        $this->metaTitle    = $blog->meta_title ?? '';
        $this->metaDesc     = $blog->meta_description ?? '';
        $this->imagePreview = $blog->featured_image;
        $this->featuredImage = null;
        $this->tab          = 'content';
        $this->view         = 'form';
        $this->dispatch('refreshEditor', content: $blog->content);
    }

    public function save(): void
    {
        $this->validate([
            'title'        => 'required|string|max:255',
            'slug'         => 'required|string|max:255',
            'excerpt'      => 'nullable|string|max:500',
            'content'      => 'required|string|min:10',
            'layout'       => 'required|in:standard,full-width,magazine',
            'author'       => 'required|string|max:100',
            'status'       => 'required|in:draft,published',
            'featuredImage'=> 'nullable|image|max:5120|mimes:jpg,jpeg,png,webp',
        ]);

        $imagePath = $this->imagePreview;

        if ($this->featuredImage) {
            $dir = public_path('assets/images/blogs');
            File::ensureDirectoryExists($dir);

            if ($imagePath && file_exists(public_path($imagePath))) {
                @unlink(public_path($imagePath));
            }
            $filename  = 'blog_' . time() . '.' . $this->featuredImage->getClientOriginalExtension();
            $this->featuredImage->move($dir, $filename);
            $imagePath = 'assets/images/blogs/' . $filename;
        }

        $data = [
            'title'            => $this->title,
            'slug'             => Blog::generateSlug($this->slug, $this->editId),
            'excerpt'          => $this->excerpt ?: null,
            'content'          => $this->content,
            'featured_image'   => $imagePath,
            'layout'           => $this->layout,
            'author'           => $this->author,
            'status'           => $this->status,
            'published_at'     => ($this->status === 'published' && $this->publishedAt)
                                    ? $this->publishedAt
                                    : ($this->status === 'published' ? now() : null),
            'meta_title'       => $this->metaTitle ?: null,
            'meta_description' => $this->metaDesc ?: null,
        ];

        if ($this->editId) {
            Blog::findOrFail($this->editId)->update($data);
            $this->toast = 'Blog post updated successfully.';
        } else {
            Blog::create($data);
            $this->toast = 'Blog post created successfully.';
        }

        $this->resetForm();
        $this->view = 'list';
    }

    public function confirmDelete(int $id): void
    {
        $this->deleteId = $id;
    }

    public function cancelDelete(): void
    {
        $this->deleteId = null;
    }

    public function delete(): void
    {
        $blog = Blog::findOrFail($this->deleteId);
        if ($blog->featured_image && file_exists(public_path($blog->featured_image))) {
            @unlink(public_path($blog->featured_image));
        }
        $blog->delete();
        $this->deleteId = null;
        $this->toast    = 'Blog post deleted.';
    }

    public function toggleStatus(int $id): void
    {
        $blog = Blog::findOrFail($id);
        $blog->status = $blog->status === 'published' ? 'draft' : 'published';
        if ($blog->status === 'published' && ! $blog->published_at) {
            $blog->published_at = now();
        }
        $blog->save();
    }

    public function backToList(): void
    {
        $this->resetForm();
        $this->view = 'list';
    }

    public function removeImage(): void
    {
        if ($this->imagePreview && file_exists(public_path($this->imagePreview))) {
            @unlink(public_path($this->imagePreview));
        }
        $this->imagePreview  = null;
        $this->featuredImage = null;
        if ($this->editId) {
            Blog::findOrFail($this->editId)->update(['featured_image' => null]);
        }
    }

    private function resetForm(): void
    {
        $this->reset([
            'editId', 'title', 'slug', 'excerpt', 'content',
            'layout', 'author', 'status', 'publishedAt',
            'metaTitle', 'metaDesc', 'featuredImage', 'imagePreview',
        ]);
        $this->layout = 'standard';
        $this->author = 'Hawks Marketing';
        $this->status = 'draft';
        $this->tab    = 'content';
    }

    public function render()
    {
        $blogs = Blog::when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->when($this->filter !== 'all', fn($q) => $q->where('status', $this->filter))
            ->latest('updated_at')
            ->get();

        return view('livewire.admin.blog-manager', compact('blogs'));
    }
}
