<?php

namespace App\Livewire\Admin;

use App\Models\PageContent;
use Illuminate\Support\Str;
use Livewire\Component;

class ContentEditor extends Component
{
    public string $selectedPage = 'home';
    public array $pages = ['home', 'about', 'services', 'contact'];
    public array $contents = [];
    public ?int $editingId = null;
    public string $editValue = '';

    public function mount(): void
    {
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
