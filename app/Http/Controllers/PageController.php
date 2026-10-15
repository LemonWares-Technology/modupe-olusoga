<?php

namespace App\Http\Controllers;

use App\Models\Insight;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the executive brand homepage.
     */
    public function home(): View
    {
        $featuredInsights = Insight::orderByDesc('is_featured')
            ->orderByDesc('published_date')
            ->take(3)
            ->get();

        return view('pages.home', [
            'featuredInsights' => $featuredInsights,
        ]);
    }

    /**
     * Display the comprehensive executive bio & philosophy page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the 6-month Mentorship Programme landing page.
     */
    public function mentorship(): View
    {
        return view('pages.mentorship');
    }

    /**
     * Display the speaking engagements and executive sessions page.
     */
    public function speaking(): View
    {
        return view('pages.speaking');
    }

    /**
     * Display the book landing page for Building the Transgenerational Law Firm.
     */
    public function book(): View
    {
        return view('pages.book');
    }

    /**
     * Display the leadership & organisational impact page.
     */
    public function impact(): View
    {
        return view('pages.impact');
    }

    /**
     * Display the podcast and media press kit hub.
     */
    public function podcast(): View
    {
        return view('pages.podcast');
    }

    /**
     * Display the concierge contact & session request page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }
}
