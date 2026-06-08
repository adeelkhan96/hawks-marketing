<?php

namespace App\Livewire\Admin;

use App\Models\JobPosting;
use Livewire\Component;

class JobManager extends Component
{
    public string $view   = 'list';
    public ?int   $editId = null;
    public ?int   $deleteId = null;
    public string $toast  = '';

    // Form fields
    public string  $title           = '';
    public string  $department      = '';
    public string  $location        = '';
    public string  $type            = 'full-time';
    public string  $experience      = '';
    public string  $salary          = '';
    public string  $description     = '';
    public string  $responsibilities = '';
    public string  $requirements    = '';
    public string  $niceToHave      = '';
    public string  $benefits        = '';
    public string  $status          = 'active';
    public string  $deadline        = '';

    public function create(): void
    {
        $this->resetForm();
        $this->view = 'form';
    }

    public function edit(int $id): void
    {
        $job = JobPosting::findOrFail($id);
        $this->editId          = $id;
        $this->title           = $job->title;
        $this->department      = $job->department;
        $this->location        = $job->location;
        $this->type            = $job->type;
        $this->experience      = $job->experience;
        $this->salary          = $job->salary ?? '';
        $this->description     = $job->description;
        $this->responsibilities = $job->responsibilities;
        $this->requirements    = $job->requirements;
        $this->niceToHave      = $job->nice_to_have ?? '';
        $this->benefits        = $job->benefits ?? '';
        $this->status          = $job->status;
        $this->deadline        = $job->deadline ? $job->deadline->format('Y-m-d') : '';
        $this->view            = 'form';
    }

    public function save(): void
    {
        $this->validate([
            'title'           => 'required|string|max:150',
            'department'      => 'required|string|max:100',
            'location'        => 'required|string|max:150',
            'type'            => 'required|in:full-time,part-time,contract,internship',
            'experience'      => 'required|string|max:50',
            'description'     => 'required|string|min:50',
            'responsibilities'=> 'required|string|min:20',
            'requirements'    => 'required|string|min:20',
            'status'          => 'required|in:active,draft,closed',
        ]);

        $data = [
            'title'           => $this->title,
            'department'      => $this->department,
            'location'        => $this->location,
            'type'            => $this->type,
            'experience'      => $this->experience,
            'salary'          => $this->salary ?: null,
            'description'     => $this->description,
            'responsibilities'=> $this->responsibilities,
            'requirements'    => $this->requirements,
            'nice_to_have'    => $this->niceToHave ?: null,
            'benefits'        => $this->benefits ?: null,
            'status'          => $this->status,
            'deadline'        => $this->deadline ?: null,
        ];

        if ($this->editId) {
            JobPosting::findOrFail($this->editId)->update($data);
            $this->toast = 'Job posting updated.';
        } else {
            JobPosting::create($data + ['sort_order' => JobPosting::max('sort_order') + 1]);
            $this->toast = 'Job posting created.';
        }

        $this->resetForm();
        $this->view = 'list';
    }

    public function confirmDelete(int $id): void  { $this->deleteId = $id; }
    public function cancelDelete(): void           { $this->deleteId = null; }

    public function delete(): void
    {
        JobPosting::findOrFail($this->deleteId)->delete();
        $this->deleteId = null;
        $this->toast    = 'Job posting deleted.';
    }

    public function toggleStatus(int $id): void
    {
        $job = JobPosting::findOrFail($id);
        $job->status = $job->status === 'active' ? 'closed' : 'active';
        $job->save();
    }

    public function backToList(): void
    {
        $this->resetForm();
        $this->view = 'list';
    }

    private function resetForm(): void
    {
        $this->reset(['editId', 'title', 'department', 'location', 'experience',
            'salary', 'description', 'responsibilities', 'requirements',
            'niceToHave', 'benefits', 'deadline']);
        $this->type   = 'full-time';
        $this->status = 'active';
    }

    public function render()
    {
        $jobs = JobPosting::withCount('applications')->orderBy('sort_order')->get();
        return view('livewire.admin.job-manager', compact('jobs'));
    }
}
