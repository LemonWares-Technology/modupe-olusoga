@extends('layouts.admin')

@section('title', 'Book Waiting List')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Forthcoming Monograph &bull; November 2027</span>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Book Waiting List &bull; Building the Transgenerational Law Firm
            </h1>
            <p class="text-xs text-brand-muted font-light mt-1">
                Executives and firms pre-registering interest for the forthcoming publication.
            </p>
        </div>
        <div>
            <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-brand-gold/20 text-brand-gold-dark border border-brand-gold/40">
                Total Pre-Orders / Waitlist: {{ $waitlists->total() }}
            </span>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl border border-brand-stone/80 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-brand-parchment/60 border-b border-brand-stone/70 text-[10px] uppercase tracking-wider text-brand-navy font-semibold">
                        <th class="py-3.5 px-6">Subscriber</th>
                        <th class="py-3.5 px-4">Organisation</th>
                        <th class="py-3.5 px-4">Format Preference</th>
                        <th class="py-3.5 px-4">Bulk Order Interest</th>
                        <th class="py-3.5 px-4">Notes / Focus Areas</th>
                        <th class="py-3.5 px-6 text-right">Joined</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-stone/60">
                    @forelse($waitlists as $item)
                        <tr class="hover:bg-brand-cream/30 transition-colors align-top">
                            <td class="py-4 px-6 font-medium text-brand-navy whitespace-nowrap">
                                <span class="font-serif text-sm block">{{ $item->full_name }}</span>
                                <a href="mailto:{{ $item->email }}" class="text-[11px] text-brand-gold-dark hover:underline block font-sans">{{ $item->email }}</a>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-brand-charcoal">
                                {{ $item->organisation ?? 'Independent / Private' }}
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-[11px]">
                                <span class="px-2 py-0.5 rounded bg-brand-cream border border-brand-stone/80 text-brand-navy">
                                    {{ $item->interest_format }}
                                </span>
                            </td>
                            <td class="py-4 px-4 whitespace-nowrap text-[11px]">
                                @if($item->interested_in_bulk)
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-brand-gold/20 text-brand-gold-dark font-semibold text-[10px] border border-brand-gold/40">
                                        Bulk: {{ $item->estimated_copies ?? 'Multiple' }} copies
                                    </span>
                                @else
                                    <span class="text-brand-muted text-[11px]">Single Copy</span>
                                @endif
                            </td>
                            <td class="py-4 px-4 max-w-xs text-[11px] text-brand-charcoal/80 leading-relaxed font-light">
                                {{ $item->notes ?? '—' }}
                            </td>
                            <td class="py-4 px-6 whitespace-nowrap text-right text-[11px] text-brand-muted">
                                {{ $item->created_at->format('M d, Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-sm text-brand-muted">
                                No book waiting list entries yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($waitlists->hasPages())
            <div class="p-4 border-t border-brand-stone/70 bg-brand-parchment/30">
                {{ $waitlists->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
