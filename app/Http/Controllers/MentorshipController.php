<?php

namespace App\Http\Controllers;

use App\Models\MentorshipApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MentorshipController extends Controller
{
    /**
     * Store a newly submitted mentorship programme application.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'location' => ['required', 'string', 'max:255'],
            'current_role' => ['required', 'string', 'max:255'],
            'organisation' => ['nullable', 'string', 'max:255'],
            'aspirations_and_goals' => ['required', 'string', 'min:30'],
            'six_month_objective' => ['required', 'string', 'min:30'],
            'why_now' => ['required', 'string', 'min:20'],
            'schedule_commitment' => ['required', 'accepted'],
            'investment_acknowledged' => ['required', 'accepted'],
        ]);

        MentorshipApplication::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'location' => $validated['location'],
            'current_role' => $validated['current_role'],
            'organisation' => $validated['organisation'] ?? null,
            'aspirations_and_goals' => $validated['aspirations_and_goals'],
            'six_month_objective' => $validated['six_month_objective'],
            'why_now' => $validated['why_now'],
            'schedule_commitment' => true,
            'investment_acknowledged' => true,
            'status' => 'pending',
        ]);

        return redirect()->route('mentorship')
            ->with('success', 'Your application for the 6-Month Mentorship Programme has been received. Due to deliberately limited cohort size, applications are reviewed individually. Successful applicants will be contacted regarding orientation and onboarding.');
    }
}
