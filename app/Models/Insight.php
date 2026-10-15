<?php

namespace App\Models;

use Database\Factories\InsightFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insight extends Model
{
    /** @use HasFactory<InsightFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'category',
        'summary',
        'content',
        'read_time',
        'published_date',
        'is_featured',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'published_date' => 'date',
            'is_featured' => 'boolean',
        ];
    }
}
