<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerSlide extends Model
{
    protected $fillable = ['image', 'heading', 'subtext', 'sort_order', 'active'];

    protected $casts = ['active' => 'boolean'];
}
