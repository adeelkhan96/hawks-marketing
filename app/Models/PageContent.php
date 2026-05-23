<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = ['page', 'section', 'key', 'value'];

    public static function getValue(string $page, string $section, string $key, string $default = ''): string
    {
        try {
            $content = static::where('page', $page)
                ->where('section', $section)
                ->where('key', $key)
                ->first();
            return $content ? $content->value : $default;
        } catch (\Exception $e) {
            return $default;
        }
    }
}
