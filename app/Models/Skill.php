<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'category',
        'icon',
        'proficiency',
        'order',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'proficiency' => 'integer',
            'order' => 'integer',
        ];
    }

    /**
     * Scope a query to order skills.
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc')->orderBy('name', 'asc');
    }
}
