<?php

namespace App\Livewire\Admin;

use App\Models\PageContent;
use Livewire\Component;

class ContentEditor extends Component
{
    public string $selectedPage = 'home';
    public array $pageGroups = [
        'General'           => ['home', 'about', 'contact', 'our-services'],
        'Digital Marketing' => ['seo-services', 'social-media', 'ppc-advertising', 'google-meta-advertising'],
        'Designing'         => ['graphic-designing', 'ui-ux-designing', 'video-editing', 'social-media-design', 'logo-designing'],
        'Branding'          => ['branding-strategy', 'branding-service', 'brand-manual'],
        'IT Solution'       => ['web-development', 'custom-website-development', 'ecommerce-development', 'app-development'],
        'Content Creation'  => ['content-writing', 'social-media-content-marketing', 'social-media-content-creation', 'blog-writing'],
        'Other Services'    => ['business-analysis', 'consultation'],
    ];
    public array $contents = [];
    public ?int $editingId = null;
    public string $editValue = '';

    public function mount(): void
    {
        $this->loadContents();
    }

    public function updatedSelectedPage(): void
    {
        $this->editingId = null;
        $this->editValue = '';
        $this->loadContents();
    }

    public function loadContents(): void
    {
        $this->contents = PageContent::where('page', $this->selectedPage)
            ->orderBy('section')
            ->orderBy('key')
            ->get()
            ->groupBy('section')
            ->map(fn($items) => $items->values()->toArray())
            ->toArray();
    }

    public function changePage(string $page): void
    {
        $this->selectedPage = $page;
        $this->editingId = null;
        $this->editValue = '';
        $this->loadContents();
    }

    public function startEdit(int $id): void
    {
        $content = PageContent::findOrFail($id);
        $this->editingId = $id;
        $this->editValue = $content->value;
    }

    public function saveEdit(): void
    {
        $this->validate(['editValue' => 'required|string']);

        PageContent::findOrFail($this->editingId)->update(['value' => $this->editValue]);

        $this->editingId = null;
        $this->editValue = '';
        $this->loadContents();
        session()->flash('message', 'Content updated successfully.');
    }

    public function cancelEdit(): void
    {
        $this->editingId = null;
        $this->editValue = '';
    }

    public function render()
    {
        return view('livewire.admin.content-editor');
    }
}
