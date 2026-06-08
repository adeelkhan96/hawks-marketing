<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientStory extends Model
{
    protected $fillable = [
        'client_name', 'industry', 'tagline', 'challenge', 'solution',
        'results', 'featured_image', 'client_logo', 'website_url',
        'sort_order', 'active',
    ];

    protected $casts = ['active' => 'boolean'];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function getResultsListAttribute(): array
    {
        return array_filter(array_map('trim', explode("\n", $this->results)));
    }
}
