<?php

namespace App\Http\Controllers;

use App\Models\BookWaitlist;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Store interest in the upcoming book waiting list / pre-order.
     */
    public function storeWaitlist(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'organisation' => ['nullable', 'string', 'max:255'],
            'interest_format' => ['required', 'string', 'max:50'],
            'interested_in_bulk' => ['nullable', 'boolean'],
            'estimated_copies' => ['nullable', 'integer', 'min:1'],
            'notes' => ['nullable', 'string'],
        ]);

        BookWaitlist::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'organisation' => $validated['organisation'] ?? null,
            'interest_format' => $validated['interest_format'],
            'interested_in_bulk' => $request->boolean('interested_in_bulk'),
            'estimated_copies' => $validated['estimated_copies'] ?? null,
            'notes' => $validated['notes'] ?? null,
        ]);

        return redirect()->route('book')
            ->with('success', 'You have been added to the exclusive advance priority list for "Building the Transgenerational Law Firm". You will receive author updates, early chapter excerpts, and first access when pre-orders open.');
    }
}
