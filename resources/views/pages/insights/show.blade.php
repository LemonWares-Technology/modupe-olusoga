@extends('layouts.app')

@section('title', $insight->title . ' | Modupe Olusoga')
@section('meta_description', Str::limit($insight->summary, 150))

@section('content')
    <!-- Article Header -->
    <header class="relative pt-12 pb-20 lg:pt-20 lg:pb-24 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
            
            <div data-reveal-hero class="flex items-center justify-center gap-3 text-[11px] uppercase tracking-widest font-semibold text-brand-gold-dark">
                <a href="{{ route('insights.index', ['category' => $insight->category]) }}" class="hover:underline">{{ $insight->category }}</a>
                <span class="text-brand-stone">&bull;</span>
                <span class="text-brand-muted font-normal">{{ $insight->read_time }}</span>
                <span class="text-brand-stone">&bull;</span>
                <span class="text-brand-muted font-normal">{{ $insight->published_date->format('F d, Y') }}</span>
            </div>

            <h1 data-reveal-hero class="font-serif text-3xl sm:text-5xl lg:text-6xl text-brand-navy font-normal leading-[1.12]">
                {{ $insight->title }}
            </h1>

            <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/80 font-light max-w-2xl mx-auto leading-relaxed">
                {{ $insight->summary }}
            </p>

            <div data-reveal-hero class="pt-6 flex items-center justify-center gap-4">
                <img src="{{ asset('images/modupe_portrait.jpg') }}" alt="Modupe Olusoga" class="w-12 h-12 rounded-full object-cover border border-brand-gold/60">
                <div class="text-left text-xs">
                    <p class="font-serif font-medium text-brand-navy text-sm">Modupe Olusoga</p>
                    <p class="text-brand-muted font-light text-[11px]">COO, Streamsowers &amp; Köhn &bull; President, ALAN</p>
                </div>
            </div>

        </div>
    </header>

    <!-- Article Content -->
    <article class="py-20 bg-brand-cream border-b border-brand-stone/70">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-brand-charcoal/90 font-light leading-relaxed space-y-8 dropcap text-base sm:text-lg">
                @foreach(explode("\n\n", $insight->content) as $paragraph)
                    @if(Str::startsWith(trim($paragraph), '1.') || Str::startsWith(trim($paragraph), '2.') || Str::startsWith(trim($paragraph), '3.'))
                        <div class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm my-6">
                            <p class="text-sm sm:text-base font-normal text-brand-charcoal leading-relaxed">
                                {!! nl2br(e(trim($paragraph))) !!}
                            </p>
                        </div>
                    @elseif(Str::contains($paragraph, 'Aspiration → Clarity → Action → Consistency → Results'))
                        <div class="my-10 p-8 rounded bg-brand-navy text-white text-center shadow-lg border border-brand-gold/30">
                            <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block mb-2">The Execution Continuum</span>
                            <p class="font-serif text-lg sm:text-xl font-normal tracking-wide">
                                Aspiration &rarr; Clarity &rarr; Action &rarr; Consistency &rarr; Results
                            </p>
                        </div>
                    @else
                        <p class="leading-relaxed">
                            {!! nl2br(e(trim($paragraph))) !!}
                        </p>
                    @endif
                @endforeach
            </div>

            <!-- Author Bio Ledger -->
            <div class="mt-20 p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col sm:flex-row gap-6 items-center">
                <img src="{{ asset('images/modupe_portrait.jpg') }}" alt="Modupe Olusoga" class="w-20 h-20 rounded-full object-cover border border-brand-gold/60 shrink-0">
                <div class="space-y-2 text-center sm:text-left">
                    <h3 class="font-serif text-xl font-normal text-brand-navy">About Modupe Olusoga</h3>
                    <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light">
                        Modupe Olusoga is Chief Operating Officer of Streamsowers &amp; Köhn, President of the Association of Law Firm Administrators Nigeria (ALAN), and author of the upcoming book <em>Building the Transgenerational Law Firm</em>.
                    </p>
                    <div class="pt-2 flex flex-wrap gap-4 text-xs font-semibold uppercase tracking-wider text-brand-gold-dark">
                        <a href="{{ route('speaking') }}#enquiry" class="editorial-link">Invite to Speak &rarr;</a>
                        <a href="{{ route('mentorship') }}" class="editorial-link">Mentorship Cohort &rarr;</a>
                        <a href="{{ route('book') }}" class="editorial-link">The Forthcoming Book &rarr;</a>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="mt-12 pt-8 border-t border-brand-stone/70 flex items-center justify-between text-xs font-semibold uppercase tracking-wider text-brand-navy">
                <a href="{{ route('insights.index') }}" class="hover:text-brand-gold-dark flex items-center gap-2">
                    &larr; Back to all Insights
                </a>
                <a href="{{ route('contact') }}" class="text-brand-gold-dark hover:underline">
                    Executive Dialogue &rarr;
                </a>
            </div>

        </div>
    </article>

    <!-- Related Thought Pieces -->
    @if(isset($relatedInsights) && $relatedInsights->count() > 0)
        <section class="py-20 bg-brand-parchment/50 border-b border-brand-stone/70">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <x-eyebrow :dot="false">Related Research</x-eyebrow>
                    <h3 class="font-serif text-2xl sm:text-3xl text-brand-navy font-normal mt-2">
                        Further Reading &amp; Perspectives
                    </h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($relatedInsights as $related)
                        <x-insight-card :insight="$related" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
