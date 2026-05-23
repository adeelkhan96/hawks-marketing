<?php

namespace App\Livewire\Admin;

use App\Models\ContactSubmission;
use Livewire\Component;

class ContactSubmissions extends Component
{
    public ?int $viewingId = null;
    public ?int $confirmDeleteId = null;

    public function view(int $id): void
    {
        $this->viewingId    = $id;
        $this->confirmDeleteId = null;

        ContactSubmission::where('id', $id)->whereNull('read_at')
            ->update(['read_at' => now()]);
    }

    public function closeView(): void
    {
        $this->viewingId = null;
    }

    public function markUnread(int $id): void
    {
        ContactSubmission::where('id', $id)->update(['read_at' => null]);
        if ($this->viewingId === $id) {
            $this->viewingId = null;
        }
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
        ContactSubmission::destroy($id);
        $this->confirmDeleteId = null;
        if ($this->viewingId === $id) {
            $this->viewingId = null;
        }
    }

    public function render()
    {
        $submissions = ContactSubmission::latest()->get();
        $viewing     = $this->viewingId ? ContactSubmission::find($this->viewingId) : null;

        return view('livewire.admin.contact-submissions', compact('submissions', 'viewing'));
    }
}
