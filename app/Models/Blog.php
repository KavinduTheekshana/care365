<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'date',
        'description',
        'image_path',
        'is_public',
        'title_slug',           
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'date'      => 'date',
    ];

    // Auto-generate slug when creating or updating
    protected static function booted()
    {
        static::creating(function ($blog) {
            if ($blog->title && !$blog->title_slug) {
                $blog->title_slug = static::generateUniqueSlug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title') && $blog->title) {
                $blog->title_slug = static::generateUniqueSlug($blog->title, $blog->id);
            }
        });
    }

    protected static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title); // or Str::limit(Str::slug($title), 100, '')
        
        $original = $slug;
        $count = 1;

        while (static::where('title_slug', $slug)
            ->where('id', '!=', $ignoreId)
            ->exists()) {
            $slug = $original . '-' . $count++;
        }

        return $slug;
    }
}