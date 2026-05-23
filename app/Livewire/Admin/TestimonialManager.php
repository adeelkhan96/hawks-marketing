<?php

namespace App\Livewire\Admin;

use App\Models\Testimonial;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialManager extends Component
{
    use WithFileUploads;

    public bool $showForm     = false;
    public ?int $editingId    = null;
    public ?int $confirmDeleteId = null;

    public string $name      = '';
    public string $position  = '';
    public string $message   = '';
    public $image;
    public bool $active      = true;
    public ?string $existingImage = null;

    public function startCreate(): void
    {
        $this->resetForm();
        $this->showForm = true;
    }

    public function startEdit(int $id): void
    {
        $t = Testimonial::findOrFail($id);
        $this->editingId     = $id;
        $this->name          = $t->name;
        $this->position      = $t->position;
        $this->message       = $t->message;
        $this->active        = $t->active;
        $this->existingImage = $t->image;
        $this->image         = null;
        $this->showForm      = true;
    }

    public function save(): void
    {
        $this->validate([
            'name'     => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'message'  => 'required|string|max:1000',
            'image'    => 'nullable|image|max:3072|mimes:jpg,jpeg,png,webp',
        ]);

        $imagePath = $this->existingImage;

        if ($this->image) {
            $dir = public_path('assets/images/testimonials');
            File::ensureDirectoryExists($dir);
            $filename = 'testimonial-' . time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->move($dir, $filename);
            $imagePath = 'assets/images/testimonials/' . $filename;
        }

        $data = [
            'name'     => $this->name,
            'position' => $this->position,
            'message'  => $this->message,
            'active'   => $this->active,
            'image'    => $imagePath,
        ];

        if ($this->editingId) {
            Testimonial::find($this->editingId)->update($data);
            session()->flash('message', 'Testimonial updated successfully.');
        } else {
            $data['sort_order'] = (Testimonial::max('sort_order') ?? 0) + 1;
            Testimonial::create($data);
            session()->flash('message', 'Testimonial added successfully.');
        }

        $this->resetForm();
    }

    public function toggleActive(int $id): void
    {
        $t = Testimonial::find($id);
        $t->update(['active' => !$t->active]);
    }

    public function moveUp(int $id): void
    {
        $current = Testimonial::find($id);
        $previous = Testimonial::where('sort_order', '<', $current->sort_order)
            ->orderByDesc('sort_order')->first();

        if ($previous) {
            [$current->sort_order, $previous->sort_order] = [$previous->sort_order, $current->sort_order];
            $current->save();
            $previous->save();
        }
    }

    public function moveDown(int $id): void
    {
        $current = Testimonial::find($id);
        $next = Testimonial::where('sort_order', '>', $current->sort_order)
            ->orderBy('sort_order')->first();

        if ($next) {
            [$current->sort_order, $next->sort_order] = [$next->sort_order, $current->sort_order];
            $current->save();
            $next->save();
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
        $t = Testimonial::find($id);
        if ($t && $t->image && file_exists(public_path($t->image))) {
            unlink(public_path($t->image));
        }
        Testimonial::destroy($id);
        $this->confirmDeleteId = null;
        if ($this->editingId === $id) {
            $this->resetForm();
        }
    }

    public function cancel(): void
    {
        $this->resetForm();
    }

    private function resetForm(): void
    {
        $this->showForm      = false;
        $this->editingId     = null;
        $this->name          = '';
        $this->position      = '';
        $this->message       = '';
        $this->image         = null;
        $this->existingImage = null;
        $this->active        = true;
    }

    public function render()
    {
        $testimonials = Testimonial::orderBy('sort_order')->orderBy('id')->get();
        return view('livewire.admin.testimonial-manager', compact('testimonials'));
    }
}
