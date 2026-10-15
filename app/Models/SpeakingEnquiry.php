<?php

namespace App\Models;

use Database\Factories\SpeakingEnquiryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakingEnquiry extends Model
{
    /** @use HasFactory<SpeakingEnquiryFactory> */
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
        'organisation',
        'job_title',
        'engagement_type',
        'proposed_date',
        'location_type',
        'event_location',
        'audience_profile',
        'expected_participants',
        'topic_objectives',
        'additional_info',
        'status',
    ];
}
