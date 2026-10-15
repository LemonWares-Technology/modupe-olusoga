@extends('layouts.app')

@section('title', 'Insights & Executive Journal | Modupe Olusoga')
@section('meta_description', 'Thought leadership essays and research on institutional governance, law firm management, succession planning, and intentional leadership by Modupe Olusoga.')

@section('content')
    <!-- Insights Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <div data-reveal-hero class="flex justify-center">
                <x-eyebrow>Thought Leadership &bull; Executive Journal</x-eyebrow>
            </div>
            <h1 data-reveal-hero class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal leading-[1.12]">
                Insights, Governance &amp; Perspectives
            </h1>
            <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/80 font-light max-w-2xl mx-auto leading-relaxed">
                Examining institutional design, law firm operations, executive consistency, and the modern future of professional work.
            </p>
        </div>
    </section>

    <!-- Categories Filter & List -->
    <section class="py-20 bg-brand-cream border-b border-brand-stone/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2 mb-16">
                <a href="{{ route('insights.index') }}" class="px-4 py-2 rounded text-[11px] font-semibold tracking-wider uppercase transition-all {{ empty($selectedCategory) || $selectedCategory === 'all' ? 'bg-brand-navy text-white shadow-sm' : 'bg-white border border-brand-stone text-brand-charcoal hover:border-brand-gold' }}">
                    All Topics
                </a>
                @foreach($categories as $cat)
                    <a href="{{ route('insights.index', ['category' => $cat]) }}" class="px-4 py-2 rounded text-[11px] font-semibold tracking-wider uppercase transition-all {{ $selectedCategory === $cat ? 'bg-brand-navy text-white shadow-sm' : 'bg-white border border-brand-stone text-brand-charcoal hover:border-brand-gold' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-stagger-group>
                @forelse($insights as $insight)
                    <div data-stagger-item>
                        <x-insight-card :insight="$insight" />
                    </div>
                @empty
                    <div class="col-span-3 text-center py-20 bg-white rounded border border-brand-stone">
                        <p class="text-sm text-brand-muted font-light">No dispatches published in this category yet.</p>
                        <a href="{{ route('insights.index') }}" class="inline-block mt-4 text-xs font-semibold uppercase tracking-wider text-brand-gold-dark hover:underline">
                            View all articles &rarr;
                        </a>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($insights->hasPages())
                <div class="mt-16 pt-8 border-t border-brand-stone/60 flex justify-center">
                    {{ $insights->links() }}
                </div>
            @endif

        </div>
    </section>
@endsection
