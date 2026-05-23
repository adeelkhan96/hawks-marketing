<?php

namespace App\Livewire\Admin;

use App\Models\BannerSlide;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class BannerManager extends Component
{
    use WithFileUploads;

    public $slides;
    public $image;
    public $heading = '';
    public $subtext = '';
    public $editId = null;
    public $deleteId = null;
    public $message = '';

    public function mount(): void
    {
        $this->loadSlides();
    }

    public function loadSlides(): void
    {
        $this->slides = BannerSlide::orderBy('sort_order')->orderBy('id')->get();
    }

    public function save(): void
    {
        $this->validate([
            'heading' => 'nullable|string|max:200',
            'subtext'  => 'nullable|string|max:500',
            'image'    => $this->editId ? 'nullable|image|max:4096|mimes:jpg,jpeg,png,webp' : 'required|image|max:4096|mimes:jpg,jpeg,png,webp',
        ]);

        $dir = public_path('assets/images/banners');
        File::ensureDirectoryExists($dir);

        if ($this->editId) {
            $slide = BannerSlide::findOrFail($this->editId);
            $slide->heading = $this->heading;
            $slide->subtext  = $this->subtext;
            if ($this->image) {
                if ($slide->image && file_exists(public_path($slide->image))) {
                    @unlink(public_path($slide->image));
                }
                $filename = 'banner_' . time() . '.' . $this->image->getClientOriginalExtension();
                $this->image->move($dir, $filename);
                $slide->image = 'assets/images/banners/' . $filename;
            }
            $slide->save();
            $this->message = 'Slide updated.';
        } else {
            $filename = 'banner_' . time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->move($dir, $filename);
            BannerSlide::create([
                'image'      => 'assets/images/banners/' . $filename,
                'heading'    => $this->heading ?: null,
                'subtext'    => $this->subtext ?: null,
                'sort_order' => BannerSlide::max('sort_order') + 1,
                'active'     => true,
            ]);
            $this->message = 'Slide added.';
        }

        $this->reset(['image', 'heading', 'subtext', 'editId']);
        $this->loadSlides();
    }

    public function edit(int $id): void
    {
        $slide = BannerSlide::findOrFail($id);
        $this->editId  = $slide->id;
        $this->heading = $slide->heading ?? '';
        $this->subtext  = $slide->subtext ?? '';
        $this->image    = null;
        $this->message  = '';
    }

    public function cancelEdit(): void
    {
        $this->reset(['image', 'heading', 'subtext', 'editId', 'message']);
    }

    public function toggleActive(int $id): void
    {
        $slide = BannerSlide::findOrFail($id);
        $slide->active = !$slide->active;
        $slide->save();
        $this->loadSlides();
    }

    public function moveUp(int $id): void
    {
        $items = $this->slides;
        foreach ($items as $i => $item) {
            if ($item->id == $id && $i > 0) {
                $prev = $items[$i - 1];
                [$item->sort_order, $prev->sort_order] = [$prev->sort_order, $item->sort_order];
                $item->save();
                $prev->save();
                break;
            }
        }
        $this->loadSlides();
    }

    public function moveDown(int $id): void
    {
        $items = $this->slides;
        foreach ($items as $i => $item) {
            if ($item->id == $id && $i < count($items) - 1) {
                $next = $items[$i + 1];
                [$item->sort_order, $next->sort_order] = [$next->sort_order, $item->sort_order];
                $item->save();
                $next->save();
                break;
            }
        }
        $this->loadSlides();
    }

    public function confirmDelete(int $id): void
    {
        $this->deleteId = $id;
    }

    public function delete(): void
    {
        $slide = BannerSlide::findOrFail($this->deleteId);
        if ($slide->image && file_exists(public_path($slide->image))) {
            @unlink(public_path($slide->image));
        }
        $slide->delete();
        $this->deleteId = null;
        $this->message  = 'Slide removed.';
        $this->loadSlides();
    }

    public function render()
    {
        return view('livewire.admin.banner-manager');
    }
}
