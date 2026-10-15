<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Subscribe to the executive thought leadership journal.
     */
    public function subscribe(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'name' => ['nullable', 'string', 'max:255'],
            'interest_focus' => ['nullable', 'string', 'max:255'],
        ]);

        NewsletterSubscriber::updateOrCreate(
            ['email' => $validated['email']],
            [
                'name' => $validated['name'] ?? null,
                'interest_focus' => $validated['interest_focus'] ?? 'General Executive Insights',
            ]
        );

        return back()->with('success', 'Thank you for subscribing to Modupe Olusoga\'s executive journal. You will receive curated perspectives on institutional governance, leadership discipline, and professional services management directly in your inbox.');
    }
}
