<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'is_published',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->title);
            }
        });

        static::updating(function ($blog) {
            if ($blog->isDirty('title') && empty($blog->getOriginal('slug'))) {
                $blog->slug = Str::slug($blog->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                    ->where('published_at', '<=', now());
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected function metaTitle(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ?: $this->title,
        );
    }

    /**
     * Get full URL for the featured image, regardless of stored path style.
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (!$this->featured_image) {
            return null;
        }

        $rawPath = ltrim($this->featured_image, '/');

        // Full URL already
        if (str_starts_with($rawPath, 'http://') || str_starts_with($rawPath, 'https://')) {
            return $rawPath;
        }

        // Seeder paths often use 'public/images/...'; prefer public asset when present
        if (str_starts_with($rawPath, 'public/')) {
            $publicRelative = substr($rawPath, strlen('public/'));
            if (function_exists('public_path') && file_exists(public_path($publicRelative))) {
                return asset($publicRelative);
            }
            // Fallback to storage URL for files stored under storage/app/public
            return Storage::url($publicRelative);
        }

        // If points into the public directory directly
        if (function_exists('public_path') && file_exists(public_path($rawPath))) {
            return asset($rawPath);
        }

        // Fallback: assume it's on the public disk
        return Storage::url($rawPath);
    }
}
