<?php

namespace App\Models;

use Database\Factories\BookWaitlistFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookWaitlist extends Model
{
    /** @use HasFactory<BookWaitlistFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'organisation',
        'interest_format',
        'interested_in_bulk',
        'estimated_copies',
        'notes',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'interested_in_bulk' => 'boolean',
            'estimated_copies' => 'integer',
        ];
    }
}
