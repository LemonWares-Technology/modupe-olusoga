@extends('layouts.admin')

@section('title', 'Executive Journal Subscribers')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Thought Leadership &bull; Executive Distribution</span>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Executive Journal Subscribers
            </h1>
            <p class="text-xs text-brand-muted font-light mt-1">
                Audience members receiving periodic essays on governance, institution building, succession, and deliberate leadership.
            </p>
        </div>
        <div>
            <span class="text-xs font-semibold px-3 py-1.5 rounded-full bg-brand-gold/20 text-brand-gold-dark border border-brand-gold/40">
                Total Subscribers: {{ $subscribers->total() }}
            </span>
        </div>
    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl border border-brand-stone/80 overflow-hidden shadow-sm max-w-3xl">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-brand-parchment/60 border-b border-brand-stone/70 text-[10px] uppercase tracking-wider text-brand-navy font-semibold">
                        <th class="py-3.5 px-6">#</th>
                        <th class="py-3.5 px-6">Subscriber Email</th>
                        <th class="py-3.5 px-6 text-right">Subscribed Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-stone/60">
                    @forelse($subscribers as $index => $sub)
                        <tr class="hover:bg-brand-cream/30 transition-colors">
                            <td class="py-3.5 px-6 text-brand-muted font-mono text-[11px]">
                                {{ $subscribers->firstItem() + $index }}
                            </td>
                            <td class="py-3.5 px-6 font-medium text-brand-navy">
                                <a href="mailto:{{ $sub->email }}" class="hover:text-brand-gold-dark hover:underline">
                                    {{ $sub->email }}
                                </a>
                            </td>
                            <td class="py-3.5 px-6 whitespace-nowrap text-right text-brand-muted text-[11px]">
                                {{ $sub->created_at->format('M d, Y &bull; H:i') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="py-12 text-center text-sm text-brand-muted">
                                No newsletter subscribers yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($subscribers->hasPages())
            <div class="p-4 border-t border-brand-stone/70 bg-brand-parchment/30">
                {{ $subscribers->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
