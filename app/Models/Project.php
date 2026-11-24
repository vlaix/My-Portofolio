<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'slug',
        'category',
        'role_title',
        'summary',
        'description',
        'description_en',
        'image',
        'screenshots',
        'technologies',
        'live_url',
        'github_url',
        'featured',
        'order',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'technologies' => 'array',
            'screenshots' => 'array',
            'featured' => 'boolean',
            'order' => 'integer',
        ];
    }

    /**
     * Scope a query to only include ordered projects.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    /**
     * Get all gallery images starting with the main cover image, followed by screenshots.
     *
     * @return array<int, string>
     */
    public function getGalleryAttribute(): array
    {
        $gallery = [];

        if (!empty($this->image)) {
            $gallery[] = $this->image;
        }

        $screenshots = $this->screenshots;

        // Auto-fallback: check if folder exists in public/assets/{title} Screenshot
        if (empty($screenshots) || !is_array($screenshots)) {
            $folderName = $this->title . ' Screenshot';
            $folderPath = public_path('assets/' . $folderName);
            if (is_dir($folderPath)) {
                $files = glob($folderPath . '/*.*');
                if ($files) {
                    $screenshots = array_map(function ($filePath) {
                        return 'assets/' . basename(dirname($filePath)) . '/' . basename($filePath);
                    }, $files);
                }
            }
        }

        if (!empty($screenshots) && is_array($screenshots)) {
            foreach ($screenshots as $shot) {
                if (!in_array($shot, $gallery, true)) {
                    $gallery[] = $shot;
                }
            }
        }

        return $gallery;
    }
}
