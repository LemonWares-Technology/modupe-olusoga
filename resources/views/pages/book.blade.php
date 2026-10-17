@extends('layouts.app')

@section('title', 'Building the Transgenerational Law Firm | Modupe Olusoga')
@section('meta_description', 'Building the Transgenerational Law Firm by Modupe Olusoga. How founders and leaders build professional services institutions that thrive beyond their creators. Target Launch: November 2027.')

@section('content')

{{-- ============================================================
     HERO — 5/7 split, book cover left, copy right
     No blur-xl glow blob, no rounded-2xl, no frosted blockquote card
     ============================================================ --}}
<section class="pt-32 pb-16 sm:pb-20 border-b border-brand-stone/60 bg-brand-cream">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            {{-- Book cover — clean shadow, no glow, no white padding frame --}}
            <div class="lg:col-span-4 order-2 lg:order-1 flex justify-center" data-reveal>
                <div class="relative max-w-[260px] sm:max-w-[300px] w-full">
                    <div class="shadow-2xl border border-brand-stone/60 overflow-hidden image-wipe-container" data-image-wipe>
                        <img
                            src="{{ asset('images/bookc1.jpeg') }}"
                            alt="Building the Transgenerational Law Firm by Modupe Olusoga"
                            width="500"
                            height="750"
                            class="w-full h-auto object-cover"
                            loading="eager"
                        >
                    </div>
                    {{-- Publication badge — simple bottom strip, no absolute badge --}}
                    <div class="mt-4 border-t-2 border-brand-gold pt-3 flex items-center justify-between">
                        <span class="section-label text-brand-muted">Target Publication</span>
                        <span class="font-serif text-sm font-semibold text-brand-navy">November 2027</span>
                    </div>
                </div>
            </div>

            {{-- Editorial copy --}}
            <div class="lg:col-span-8 order-1 lg:order-2 space-y-7">

                <div class="space-y-4">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark" data-reveal-hero>Print &bull; Digital &bull; Corporate Editions</p>
                    <h1
                        class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight"
                        style="font-size: clamp(2.4rem, 5vw, 4.8rem);"
                        data-hero-heading
                    >
                        Building the Transgenerational Law Firm
                    </h1>
                    <p class="font-serif text-base text-brand-muted italic" data-reveal-hero>
                        From Founder Dependency to Institutional Longevity
                    </p>
                </div>

                <p class="text-base text-brand-charcoal leading-[1.85]" data-reveal-hero>
                    How can founders, managing partners, and senior leaders construct law firms — and professional services organisations at large — that thrive with vigor beyond their creators and current generation of leaders?
                </p>

                {{-- Central inquiry — blockquote-ledger, no frosted card --}}
                <blockquote class="blockquote-ledger font-serif text-lg text-brand-navy leading-[1.6] italic" data-reveal-hero>
                    "When an institution's brilliance is inseparable from the founder's personality, its lifespan is capped by human mortality. Longevity requires deliberate structural design: shifting from charismatic proprietorship to codified institutional stewardship."
                </blockquote>

                <div class="flex flex-wrap gap-3" data-reveal-hero>
                    <a href="#waitlist" class="btn-base btn-primary">
                        <span>Join the Book Waiting List</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="{{ route('speaking') }}#enquiry" class="btn-base btn-outline">
                        <span>Book Keynote on This Topic</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     TEN STRUCTURAL PILLARS — no individual shadow cards
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Comprehensive Inquiry</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                The Ten Structural Pillars of Institutional Longevity
            </h2>
            <p class="text-base text-brand-charcoal/70 mt-3 max-w-xl leading-relaxed">
                An architectural blueprint for leaders seeking to build organizations designed for endurance across generations.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-px bg-brand-stone/50 border border-brand-stone/60 overflow-hidden" data-stagger-group>
            @foreach([
                ['01','Institutionalisation',    'Codifying knowledge, decision matrices, and standards into self-sustaining firm assets.'],
                ['02','Governance Architecture', 'Separating management execution from equity ownership and partner remuneration metrics.'],
                ['03','Succession Design',        'Navigating equity transition, client handover protocols, and leadership succession gracefully.'],
                ['04','Leadership Pipelines',     'Developing junior lawyers into business developers, practice managers, and long-term custodians.'],
                ['05','Cultural Durability',      'Embedding core values that remain robust when founding creators are no longer in the room.'],
                ['06','Talent Development',       'Aligning transparent equity pathways and career trajectories for elite talent retention.'],
                ['07','Founder De-linking',       'Diagnosing key-person vulnerabilities and intentionally distributing institutional authority.'],
                ['08','Institutional Brand',      'Establishing brand trust that clients revere independently of individual attorneys.'],
                ['09','Technology &amp; AI',      'Deploying automated workflows while preserving the indispensable human judgment premium.'],
                ['10','Next-Gen Custodians',      'Designing stewardship structures for the generation that will direct the firm thirty years out.'],
            ] as $pillar)
            <div data-stagger-item class="bg-brand-cream p-5 sm:p-6 hover:bg-brand-parchment/60 transition-colors">
                <span class="section-label text-brand-gold block mb-2">{!! $pillar[0] !!}</span>
                <h3 class="font-serif text-sm font-semibold text-brand-navy mb-2 leading-snug">{!! $pillar[1] !!}</h3>
                <p class="text-xs text-brand-charcoal/70 leading-relaxed hidden sm:block">{{ $pillar[2] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     INTENDED READERSHIP + PROLOGUE EXCERPT — dark section
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-navy text-white border-b border-white/10" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Readership --}}
            <div class="lg:col-span-6 space-y-6">
                <span class="gold-rule"></span>
                <p class="section-label text-brand-gold">Intended Readership</p>
                <h2 class="font-serif font-bold text-white text-2xl sm:text-3xl leading-snug tracking-tight">
                    Written for custodians of professional institutions.
                </h2>
                <p class="text-base text-white/75 leading-[1.8]">
                    Synthesizing operational leadership as COO of Streamsowers &amp; Köhn, presidency of ALAN, and international comparative discussions across the International Bar Association.
                </p>
                <div class="space-y-3 pt-2 border-t border-white/10">
                    @foreach([
                        'Founders and Senior Partners preparing for succession',
                        'Managing Partners redesigning partner governance &amp; equity distribution',
                        'Law firm COOs, Executive Directors, and Business Leaders',
                        'Next-generation partners stepping into stewardship',
                        'Leaders of accounting, engineering, and consulting partnerships',
                    ] as $reader)
                    <div class="flex items-start gap-3 text-sm text-white/75">
                        <span class="text-brand-gold mt-0.5 shrink-0">&bull;</span>
                        <span>{!! $reader !!}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Prologue excerpt — bordered blockquote, no frosted card --}}
            <div class="lg:col-span-6">
                <div class="border-l-2 border-brand-gold pl-8 space-y-5">
                    <p class="section-label text-brand-gold">Prologue Excerpt</p>
                    <blockquote class="font-serif text-xl sm:text-2xl text-white leading-[1.5] font-bold">
                        "A firm that cannot survive its founder was never an institution."
                    </blockquote>
                    <p class="text-sm text-white/70 leading-[1.8]">
                        Too many partnerships equate commercial profitability with institutional health. But commercial success in the present can easily disguise terminal succession failure in the future. The test of an institution is not what happens when you are in the room; it is whether the standards, culture, and client relationships endure when you walk away forever.
                    </p>
                    <p class="font-serif italic text-brand-gold text-sm">— Modupe Olusoga, Prologue</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     WAITING LIST FORM
     ============================================================ --}}
<section id="waitlist" class="py-16 sm:py-24 bg-brand-parchment/40">
    <div class="max-w-3xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Advance Priority Access</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Join the Book Waiting List
            </h2>
            <p class="text-base text-brand-charcoal mt-3 leading-relaxed">
                Be first to receive confidential chapter excerpts, author briefings, and priority notification when pre-orders open.
            </p>
        </div>

        <form action="{{ route('book.waitlist') }}" method="POST" class="space-y-5 bg-white border border-brand-stone/60 p-7 sm:p-10" style="border-radius:2px;">
            @csrf

            @foreach([
                ['full_name',    'text',  'Full Name *',                   'e.g. Modupe Olusoga',     true],
                ['email',        'email', 'Email Address *',               'executive@domain.com',    true],
                ['organisation', 'text',  'Organisation / Law Firm',       'e.g. Streamsowers & Köhn',false],
                ['role',         'text',  'Professional Role / Title',     'e.g. Managing Partner',   false],
            ] as [$name, $type, $label, $ph, $req])
            <div>
                <label for="{{ $name }}" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">{{ $label }}</label>
                <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
                    {{ $req ? 'required' : '' }} value="{{ old($name) }}" placeholder="{{ $ph }}"
                    class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                    style="border-radius:2px;"
                >
                @error($name)<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
            </div>
            @endforeach

            <label class="flex items-start gap-3 p-4 border border-brand-stone/60 cursor-pointer hover:bg-brand-cream/60 transition-colors" style="border-radius:2px;">
                <input type="checkbox" name="bulk_interest" value="1" {{ old('bulk_interest') ? 'checked' : '' }}
                    class="mt-0.5 h-4 w-4 border-brand-stone text-brand-navy focus:ring-brand-gold shrink-0">
                <span class="text-sm text-brand-charcoal leading-relaxed">
                    <strong class="font-semibold text-brand-navy">Corporate &amp; Bulk Copies:</strong>
                    I am interested in reserving bulk copies for my partners, leadership team, or executive cohort.
                </span>
            </label>

            <div class="pt-2">
                <button type="submit" class="btn-base btn-primary w-full justify-center">
                    <span>Join Book Waiting List</span>
                    <span aria-hidden="true">&rarr;</span>
                </button>
            </div>
        </form>

    </div>
</section>

@endsection
