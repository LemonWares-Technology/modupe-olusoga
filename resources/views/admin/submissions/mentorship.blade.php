@extends('layouts.admin')

@section('title', 'Mentorship Cohort Applications')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Executive Roster &bull; 6-Month Cohort</span>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Mentorship Applications
            </h1>
            <p class="text-xs text-brand-muted font-light mt-1">
                Review executive applicants for the deliberate leadership and institutional stewardship mentorship cohort.
            </p>
        </div>
        <div>
            <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-brand-gold/20 text-brand-gold-dark border border-brand-gold/40">
                Total Applicants: {{ $applications->total() }}
            </span>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl border border-brand-stone/80 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-brand-parchment/60 border-b border-brand-stone/70 text-[10px] uppercase tracking-wider text-brand-navy font-semibold">
                        <th class="py-3.5 px-6">Applicant</th>
                        <th class="py-3.5 px-4">Role &amp; Organisation</th>
                        <th class="py-3.5 px-4">Contact</th>
                        <th class="py-3.5 px-4">Commitments</th>
                        <th class="py-3.5 px-4">6-Month Objective</th>
                        <th class="py-3.5 px-6 text-right">Applied</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-stone/60">
                    @forelse($applications as $app)
                        <tr class="hover:bg-brand-cream/30 transition-colors align-top">
                            <td class="py-4 px-6 font-medium text-brand-navy whitespace-nowrap">
                                <span class="font-serif text-sm block">{{ $app->full_name }}</span>
                                <span class="text-[10px] text-brand-muted block font-sans">{{ $app->location ?? 'Nigeria' }}</span>
                            </td>
                            <td class="py-4 px-4">
                                <span class="font-medium text-brand-charcoal block">{{ $app->current_role }}</span>
                                <span class="text-[11px] text-brand-muted block">{{ $app->organisation }}</span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-[11px]">
                                <a href="mailto:{{ $app->email }}" class="text-brand-gold-dark hover:underline block">{{ $app->email }}</a>
                                <span class="text-brand-muted block font-mono text-[10px]">{{ $app->phone }}</span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-[10px]">
                                <span class="inline-block px-2 py-0.5 rounded {{ $app->investment_acknowledged ? 'bg-emerald-50 text-emerald-800 border border-emerald-200' : 'bg-gray-100 text-gray-700' }}">
                                    ₦200,000 Acknowledged
                                </span>
                                <span class="block mt-1 text-brand-muted">
                                    {{ $app->schedule_commitment ? '✓ Schedule Committed' : '✗ Unconfirmed' }}
                                </span>
                            </td>
                            <td class="py-4 px-4 max-w-xs text-[11px] text-brand-charcoal/80 leading-relaxed font-light">
                                <p class="line-clamp-2">"{{ $app->six_month_objective }}"</p>
                                @if($app->aspirations_and_goals)
                                    <details class="mt-1 text-[10px] text-brand-gold-dark cursor-pointer">
                                        <summary class="hover:underline">View full statement</summary>
                                        <div class="mt-2 p-3 bg-brand-cream/60 rounded border border-brand-stone/60 text-brand-charcoal text-[11px] font-sans">
                                            <p class="font-semibold text-brand-navy mb-1">Aspirations &amp; Goals:</p>
                                            <p class="mb-2">{{ $app->aspirations_and_goals }}</p>
                                            <p class="font-semibold text-brand-navy mb-1">Why Now:</p>
                                            <p>{{ $app->why_now }}</p>
                                        </div>
                                    </details>
                                @endif
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-right text-[11px] text-brand-muted">
                                {{ $app->created_at->format('M d, Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-sm text-brand-muted">
                                No mentorship applications received yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($applications->hasPages())
            <div class="p-4 border-t border-brand-stone/70 bg-brand-parchment/30">
                {{ $applications->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
