<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobPosting extends Model
{
    protected $fillable = [
        'title', 'department', 'location', 'type', 'experience',
        'salary', 'description', 'responsibilities', 'requirements',
        'nice_to_have', 'benefits', 'status', 'deadline', 'sort_order',
    ];

    protected $casts = [
        'deadline' => 'date',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function getTypeLabelAttribute(): string
    {
        return match($this->type) {
            'full-time'  => 'Full Time',
            'part-time'  => 'Part Time',
            'contract'   => 'Contract',
            'internship' => 'Internship',
            default      => ucfirst($this->type),
        };
    }

    public function getTypeColorAttribute(): string
    {
        return match($this->type) {
            'full-time'  => '#065f46,#d1fae5',
            'part-time'  => '#1e40af,#dbeafe',
            'contract'   => '#92400e,#fef3c7',
            'internship' => '#6b21a8,#f3e8ff',
            default      => '#374151,#f3f4f6',
        };
    }

    public function getDepartmentColorAttribute(): string
    {
        return match(strtolower($this->department)) {
            'digital marketing' => '#ff511a',
            'design'            => '#8b5cf6',
            'it solution'       => '#0ea5e9',
            'content'           => '#10b981',
            'branding'          => '#f59e0b',
            default             => '#6b7280',
        };
    }
}
