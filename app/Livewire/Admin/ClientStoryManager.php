<?php

namespace App\Livewire\Admin;

use App\Models\ClientStory;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class ClientStoryManager extends Component
{
    use WithFileUploads;

    public bool $showForm        = false;
    public ?int $editingId       = null;
    public ?int $confirmDeleteId = null;

    public string $client_name   = '';
    public string $industry      = '';
    public string $tagline       = '';
    public string $challenge     = '';
    public string $solution      = '';
    public string $results       = '';
    public string $website_url   = '';
    public bool   $active        = true;

    public $featured_image       = null;
    public $client_logo          = null;
    public ?string $existingFeaturedImage = null;
    public ?string $existingClientLogo    = null;

    public function startCreate(): void
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function startEdit(int $id): void
    {
        $s = ClientStory::findOrFail($id);
        $this->editingId             = $id;
        $this->client_name           = $s->client_name;
        $this->industry              = $s->industry;
        $this->tagline               = $s->tagline;
        $this->challenge             = $s->challenge;
        $this->solution              = $s->solution;
        $this->results               = $s->results;
        $this->website_url           = $s->website_url ?? '';
        $this->active                = $s->active;
        $this->existingFeaturedImage = $s->featured_image;
        $this->existingClientLogo    = $s->client_logo;
        $this->featured_image        = null;
        $this->client_logo           = null;
        $this->showForm              = true;
    }

    public function save(): void
    {
        $this->validate([
            'client_name'    => 'required|string|max:120',
            'industry'       => 'required|string|max:80',
            'tagline'        => 'required|string|max:200',
            'challenge'      => 'required|string|min:50',
            'solution'       => 'required|string|min:50',
            'results'        => 'required|string',
            'website_url'    => 'nullable|url|max:255',
            'featured_image' => 'nullable|image|max:4096|mimes:jpg,jpeg,png,webp',
            'client_logo'    => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp,svg',
        ]);

        $featuredPath = $this->existingFeaturedImage;
        $logoPath     = $this->existingClientLogo;

        if ($this->featured_image) {
            $dir = public_path('assets/images/client-stories');
            File::ensureDirectoryExists($dir);
            $filename     = 'story-' . time() . '.' . $this->featured_image->getClientOriginalExtension();
            $this->featured_image->move($dir, $filename);
            $featuredPath = 'assets/images/client-stories/' . $filename;
        }

        if ($this->client_logo) {
            $dir = public_path('assets/images/client-stories/logos');
            File::ensureDirectoryExists($dir);
            $filename = 'logo-' . time() . '.' . $this->client_logo->getClientOriginalExtension();
            $this->client_logo->move($dir, $filename);
            $logoPath = 'assets/images/client-stories/logos/' . $filename;
        }

        $data = [
            'client_name'    => $this->client_name,
            'industry'       => $this->industry,
            'tagline'        => $this->tagline,
            'challenge'      => $this->challenge,
            'solution'       => $this->solution,
            'results'        => $this->results,
            'website_url'    => $this->website_url ?: null,
            'active'         => $this->active,
            'featured_image' => $featuredPath,
            'client_logo'    => $logoPath,
        ];

        if ($this->editingId) {
            ClientStory::find($this->editingId)->update($data);
            session()->flash('message', 'Client story updated successfully.');
        } else {
            $data['sort_order'] = (ClientStory::max('sort_order') ?? 0) + 1;
            ClientStory::create($data);
            session()->flash('message', 'Client story added successfully.');
        }

        $this->resetForm();
    }

    public function toggleActive(int $id): void
    {
        $s = ClientStory::find($id);
        $s->update(['active' => !$s->active]);
    }

    public function moveUp(int $id): void
    {
        $current  = ClientStory::find($id);
        $previous = ClientStory::where('sort_order', '<', $current->sort_order)->orderByDesc('sort_order')->first();
        if ($previous) {
            [$current->sort_order, $previous->sort_order] = [$previous->sort_order, $current->sort_order];
            $current->save();
            $previous->save();
        }
    }

    public function moveDown(int $id): void
    {
        $current = ClientStory::find($id);
        $next    = ClientStory::where('sort_order', '>', $current->sort_order)->orderBy('sort_order')->first();
        if ($next) {
            [$current->sort_order, $next->sort_order] = [$next->sort_order, $current->sort_order];
            $current->save();
            $next->save();
        }
    }

    public function removeFeaturedImage(): void
    {
        if ($this->existingFeaturedImage && file_exists(public_path($this->existingFeaturedImage))) {
            unlink(public_path($this->existingFeaturedImage));
        }
        if ($this->editingId) {
            ClientStory::find($this->editingId)->update(['featured_image' => null]);
        }
        $this->existingFeaturedImage = null;
    }

    public function removeClientLogo(): void
    {
        if ($this->existingClientLogo && file_exists(public_path($this->existingClientLogo))) {
            unlink(public_path($this->existingClientLogo));
        }
        if ($this->editingId) {
            ClientStory::find($this->editingId)->update(['client_logo' => null]);
        }
        $this->existingClientLogo = null;
    }

    public function confirmDelete(int $id): void
    {
        $this->confirmDeleteId = $id;
    }

    public function cancelDelete(): void
    {
        $this->confirmDeleteId = null;
    }

    public function delete(int $id): void
    {
        $s = ClientStory::find($id);
        if ($s) {
            if ($s->featured_image && file_exists(public_path($s->featured_image))) {
                unlink(public_path($s->featured_image));
            }
            if ($s->client_logo && file_exists(public_path($s->client_logo))) {
                unlink(public_path($s->client_logo));
            }
            $s->delete();
        }
        $this->confirmDeleteId = null;
        if ($this->editingId === $id) {
            $this->resetForm();
        }
        session()->flash('message', 'Client story deleted.');
    }

    public function cancel(): void
    {
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->showForm              = false;
        $this->editingId             = null;
        $this->client_name           = '';
        $this->industry              = '';
        $this->tagline               = '';
        $this->challenge             = '';
        $this->solution              = '';
        $this->results               = '';
        $this->website_url           = '';
        $this->active                = true;
        $this->featured_image        = null;
        $this->client_logo           = null;
        $this->existingFeaturedImage = null;
        $this->existingClientLogo    = null;
    }

    public function render()
    {
        $stories = ClientStory::orderBy('sort_order')->orderBy('id')->get();
        return view('livewire.admin.client-story-manager', compact('stories'));
    }
}
