<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookWaitlist;
use App\Models\Insight;
use App\Models\MentorshipApplication;
use App\Models\NewsletterSubscriber;
use App\Models\SpeakingEnquiry;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    /**
     * Display executive overview metrics and recent activity.
     */
    public function index(): View
    {
        $metrics = [
            'total_insights' => Insight::count(),
            'featured_insights' => Insight::where('is_featured', true)->count(),
            'mentorship_applications' => MentorshipApplication::count(),
            'speaking_enquiries' => SpeakingEnquiry::count(),
            'book_waitlist' => BookWaitlist::count(),
            'newsletter_subscribers' => NewsletterSubscriber::count(),
        ];

        $recentInsights = Insight::orderByDesc('published_date')
            ->take(5)
            ->get();

        $recentMentorships = MentorshipApplication::latest()
            ->take(4)
            ->get();

        $recentSpeaking = SpeakingEnquiry::latest()
            ->take(4)
            ->get();

        $recentWaitlists = BookWaitlist::latest()
            ->take(4)
            ->get();

        return view('admin.dashboard', [
            'metrics' => $metrics,
            'recentInsights' => $recentInsights,
            'recentMentorships' => $recentMentorships,
            'recentSpeaking' => $recentSpeaking,
            'recentWaitlists' => $recentWaitlists,
        ]);
    }
}
