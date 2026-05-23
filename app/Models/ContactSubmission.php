<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'subject', 'message'];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    public function isRead(): bool
    {
        return $this->read_at !== null;
    }
}
