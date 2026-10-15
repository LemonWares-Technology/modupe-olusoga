@extends('layouts.admin')

@section('title', 'Speaking & Advisory Enquiries')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Keynote &bull; Panel &bull; Institutional Engagements</span>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Speaking &amp; Advisory Enquiries
            </h1>
            <p class="text-xs text-brand-muted font-light mt-1">
                Invitations for keynotes, conference moderations, and bespoke executive retreat facilitation.
            </p>
        </div>
        <div>
            <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-brand-gold/20 text-brand-gold-dark border border-brand-gold/40">
                Total Enquiries: {{ $enquiries->total() }}
            </span>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl border border-brand-stone/80 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-brand-parchment/60 border-b border-brand-stone/70 text-[10px] uppercase tracking-wider text-brand-navy font-semibold">
                        <th class="py-3.5 px-6">Organisation</th>
                        <th class="py-3.5 px-4">Contact Person</th>
                        <th class="py-3.5 px-4">Engagement Type</th>
                        <th class="py-3.5 px-4">Date &amp; Location</th>
                        <th class="py-3.5 px-4">Audience &amp; Objectives</th>
                        <th class="py-3.5 px-6 text-right">Received</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-stone/60">
                    @forelse($enquiries as $enquiry)
                        <tr class="hover:bg-brand-cream/30 transition-colors align-top">
                            <td class="py-4 px-6 font-medium text-brand-navy whitespace-nowrap">
                                <span class="font-serif text-sm block">{{ $enquiry->organisation }}</span>
                                <span class="text-[10px] text-brand-gold-dark block font-medium">{{ $enquiry->engagement_type }}</span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap">
                                <span class="font-medium text-brand-charcoal block">{{ $enquiry->full_name }}</span>
                                <span class="text-[11px] text-brand-muted block">{{ $enquiry->job_title }}</span>
                                <a href="mailto:{{ $enquiry->email }}" class="text-[11px] text-brand-gold-dark hover:underline block mt-0.5">{{ $enquiry->email }}</a>
                                <span class="text-[10px] text-brand-muted font-mono block">{{ $enquiry->phone }}</span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-[11px]">
                                <span class="px-2 py-0.5 rounded bg-brand-cream border border-brand-stone/80 font-medium text-brand-navy">
                                    {{ $enquiry->engagement_type }}
                                </span>
                            </td>
                            <td class="py-4 px-4 text-[11px]">
                                <span class="font-medium block text-brand-charcoal">{{ $enquiry->proposed_date ?? 'Flexible' }}</span>
                                <span class="text-brand-muted text-[10px] block">{{ $enquiry->location_type }} &bull; {{ $enquiry->event_location ?? 'Not specified' }}</span>
                            </td>
                            <td class="py-4 px-4 max-w-xs text-[11px] text-brand-charcoal/80 leading-relaxed font-light">
                                <p class="font-medium text-brand-navy text-[11px]">{{ $enquiry->audience_profile }} ({{ $enquiry->expected_participants }})</p>
                                <p class="line-clamp-2 mt-0.5">"{{ $enquiry->topic_objectives }}"</p>
                                @if($enquiry->additional_info)
                                    <details class="mt-1 text-[10px] text-brand-gold-dark cursor-pointer">
                                        <summary class="hover:underline">More details</summary>
                                        <div class="mt-1.5 p-2.5 bg-brand-cream/60 rounded border border-brand-stone/60 text-brand-charcoal text-[11px]">
                                            {{ $enquiry->additional_info }}
                                        </div>
                                    </details>
                                @endif
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-right text-[11px] text-brand-muted">
                                {{ $enquiry->created_at->format('M d, Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-sm text-brand-muted">
                                No speaking enquiries received yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($enquiries->hasPages())
            <div class="p-4 border-t border-brand-stone/70 bg-brand-parchment/30">
                {{ $enquiries->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
