<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'job_posting_id', 'job_title', 'name', 'email', 'phone',
        'city', 'experience_years', 'current_position', 'cover_letter',
        'resume_path', 'linkedin_url', 'portfolio_url',
        'status', 'admin_notes', 'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobPosting::class, 'job_posting_id');
    }

    public function isUnread(): bool
    {
        return is_null($this->read_at);
    }

    public function markRead(): void
    {
        if (! $this->read_at) {
            $this->update(['read_at' => now()]);
        }
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'new'        => 'background:#dbeafe;color:#1e40af;',
            'reviewing'  => 'background:#fef3c7;color:#92400e;',
            'shortlisted'=> 'background:#d1fae5;color:#065f46;',
            'rejected'   => 'background:#fee2e2;color:#991b1b;',
            'hired'      => 'background:#f3e8ff;color:#6b21a8;',
            default      => 'background:#f3f4f6;color:#374151;',
        };
    }
}
