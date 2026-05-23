<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['name', 'position', 'message', 'image', 'sort_order', 'active'];

    protected $casts = ['active' => 'boolean'];
}
