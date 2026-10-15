<?php

namespace App\Http\Controllers;

use App\Models\SpeakingEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SpeakingController extends Controller
{
    /**
     * Store a speaking, keynote, or advisory session request.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'organisation' => ['required', 'string', 'max:255'],
            'job_title' => ['nullable', 'string', 'max:255'],
            'engagement_type' => ['required', 'string', 'max:255'],
            'proposed_date' => ['nullable', 'string', 'max:255'],
            'location_type' => ['required', 'string', 'max:50'],
            'event_location' => ['nullable', 'string', 'max:255'],
            'audience_profile' => ['nullable', 'string', 'max:255'],
            'expected_participants' => ['nullable', 'string', 'max:255'],
            'topic_objectives' => ['required', 'string', 'min:20'],
            'additional_info' => ['nullable', 'string'],
        ]);

        SpeakingEnquiry::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'organisation' => $validated['organisation'],
            'job_title' => $validated['job_title'] ?? null,
            'engagement_type' => $validated['engagement_type'],
            'proposed_date' => $validated['proposed_date'] ?? null,
            'location_type' => $validated['location_type'],
            'event_location' => $validated['event_location'] ?? null,
            'audience_profile' => $validated['audience_profile'] ?? null,
            'expected_participants' => $validated['expected_participants'] ?? null,
            'topic_objectives' => $validated['topic_objectives'],
            'additional_info' => $validated['additional_info'] ?? null,
            'status' => 'new',
        ]);

        return back()->with('success', 'Thank you for your enquiry. Your invitation has been delivered to Modupe Olusoga\'s executive office. Following preliminary review, approved engagements will be directed to scheduling.');
    }
}
