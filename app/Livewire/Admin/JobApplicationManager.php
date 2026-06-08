<?php

namespace App\Livewire\Admin;

use App\Models\JobApplication;
use App\Models\JobPosting;
use Livewire\Component;

class JobApplicationManager extends Component
{
    public string  $view      = 'list';
    public ?int    $viewId    = null;
    public string  $filter    = 'all';
    public string  $jobFilter = 'all';
    public string  $search    = '';
    public string  $toast     = '';

    // Detail edit fields
    public string $appStatus = 'new';
    public string $adminNotes = '';

    public function viewApplication(int $id): void
    {
        $app = JobApplication::findOrFail($id);
        $app->markRead();
        $this->viewId     = $id;
        $this->appStatus  = $app->status;
        $this->adminNotes = $app->admin_notes ?? '';
        $this->view       = 'detail';
    }

    public function saveNotes(): void
    {
        $this->validate(['appStatus' => 'required|in:new,reviewing,shortlisted,rejected,hired']);

        JobApplication::findOrFail($this->viewId)->update([
            'status'       => $this->appStatus,
            'admin_notes'  => $this->adminNotes,
        ]);

        $this->toast = 'Application updated.';
    }

    public function backToList(): void
    {
        $this->viewId = null;
        $this->view   = 'list';
        $this->reset(['appStatus', 'adminNotes']);
        $this->appStatus = 'new';
    }

    public function deleteApplication(int $id): void
    {
        $app = JobApplication::findOrFail($id);
        // delete resume file
        $path = storage_path('app/resumes/' . $app->resume_path);
        if (file_exists($path)) @unlink($path);
        $app->delete();
        $this->toast = 'Application deleted.';
        if ($this->view === 'detail') {
            $this->backToList();
        }
    }

    public function render()
    {
        $applications = JobApplication::with('job')
            ->when($this->search, fn($q) => $q->where(function($q) {
                $q->where('name', 'like', "%{$this->search}%")
                  ->orWhere('email', 'like', "%{$this->search}%")
                  ->orWhere('job_title', 'like', "%{$this->search}%");
            }))
            ->when($this->filter !== 'all', fn($q) => $q->where('status', $this->filter))
            ->when($this->jobFilter !== 'all', fn($q) => $q->where('job_posting_id', $this->jobFilter))
            ->latest()
            ->get();

        $jobs        = JobPosting::orderBy('title')->get();
        $currentApp  = $this->viewId ? JobApplication::with('job')->find($this->viewId) : null;
        $unreadCount = JobApplication::whereNull('read_at')->count();

        return view('livewire.admin.job-application-manager',
            compact('applications', 'jobs', 'currentApp', 'unreadCount'));
    }
}
