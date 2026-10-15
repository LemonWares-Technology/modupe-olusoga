<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookWaitlist;
use App\Models\MentorshipApplication;
use App\Models\NewsletterSubscriber;
use App\Models\SpeakingEnquiry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display mentorship applications.
     */
    public function mentorship(Request $request): View
    {
        $applications = MentorshipApplication::latest()
            ->paginate(15);

        return view('admin.submissions.mentorship', [
            'applications' => $applications,
        ]);
    }

    /**
     * Display speaking and advisory enquiries.
     */
    public function speaking(Request $request): View
    {
        $enquiries = SpeakingEnquiry::latest()
            ->paginate(15);

        return view('admin.submissions.speaking', [
            'enquiries' => $enquiries,
        ]);
    }

    /**
     * Display book waiting list entries.
     */
    public function bookWaitlist(Request $request): View
    {
        $waitlists = BookWaitlist::latest()
            ->paginate(15);

        return view('admin.submissions.book-waitlist', [
            'waitlists' => $waitlists,
        ]);
    }

    /**
     * Display newsletter subscribers.
     */
    public function subscribers(Request $request): View
    {
        $subscribers = NewsletterSubscriber::latest()
            ->paginate(25);

        return view('admin.submissions.subscribers', [
            'subscribers' => $subscribers,
        ]);
    }
}
