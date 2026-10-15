<?php

namespace App\Models;

use Database\Factories\MentorshipApplicationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorshipApplication extends Model
{
    /** @use HasFactory<MentorshipApplicationFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'location',
        'current_role',
        'organisation',
        'aspirations_and_goals',
        'six_month_objective',
        'why_now',
        'schedule_commitment',
        'investment_acknowledged',
        'status',
        'review_notes',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'schedule_commitment' => 'boolean',
            'investment_acknowledged' => 'boolean',
        ];
    }
}
