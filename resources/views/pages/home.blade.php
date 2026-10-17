@extends('layouts.app')

@section('title', 'Modupe Olusoga | Institutional Leader, Author & Executive')
@section('meta_description', 'Official platform of Modupe Olusoga — COO of Streamsowers & Köhn, ALAN President 2026–2029, author of Building the Transgenerational Law Firm, and executive mentor.')

@section('content')

{{-- ============================================================
     HERO
     Mobile: stacked (text top, portrait below)
     Desktop: side-by-side with vertical rail
     H1 clamped to column width, never overflows
     ============================================================ --}}
<section
    id="hero"
    class="relative bg-brand-cream"
    aria-labelledby="hero-heading"
>
    {{-- Wrapper: rail + content --}}
    <div class="flex min-h-screen">

        {{-- Left Vertical Rail — desktop only, 56px, gold line --}}
        <aside class="hero-rail hidden lg:flex shrink-0" aria-hidden="true">
            <span class="text-vertical text-brand-muted/50">Modupe Olusoga</span>
            <div class="hero-rail__line"></div>
        </aside>

        {{-- Content column --}}
        <div class="flex-1 min-w-0 flex flex-col">

            {{-- Top bar --}}
            <div class="pt-24 lg:pt-28 px-5 sm:px-8 lg:px-14 pb-6 border-b border-brand-stone/50 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <p class="text-xs text-brand-muted tracking-wide">Lagos, Nigeria &mdash; GMT+1</p>
                <p class="text-xs text-brand-charcoal/70 tracking-wide" data-reveal-hero>
                    COO, Streamsowers &amp; Köhn
                    <span class="mx-2 text-brand-stone">/</span>
                    President, ALAN 2026–2029
                </p>
            </div>

            {{-- Body: headline left, portrait right --}}
            <div class="flex-1 flex flex-col lg:flex-row">

                {{-- Text column — headline + descriptor stacked naturally, no justify-between --}}
                <div class="flex-1 min-w-0 px-5 sm:px-8 lg:px-14 pt-10 lg:pt-16 pb-12 lg:pb-16 flex flex-col justify-center">

                    {{-- H1: uses container-relative calc so it fills ~70% of the text column --}}
                    <h1
                        id="hero-heading"
                        class="font-serif font-bold text-brand-navy leading-[0.92] tracking-[-0.03em]"
                        style="font-size: clamp(3.5rem, 8vw, 9.5rem);"
                        data-hero-heading
                    >
                        Building<br>
                        institutions<br>
                        that endure.
                    </h1>

                    {{-- Descriptor and CTAs sit directly below the heading --}}
                    <div class="mt-10 space-y-7 max-w-lg">
                        <p class="text-base sm:text-lg text-brand-charcoal font-light leading-[1.75]">
                            Operating at the intersection of enterprise governance and human potential — creating professional institutions structured to outlive their founders, and equipping leaders to turn intention into enduring results.
                        </p>
                        <div class="flex flex-col sm:flex-row flex-wrap gap-2.5 sm:gap-3">
                            <a href="{{ route('mentorship') }}#apply" class="btn-base btn-primary text-center justify-center">
                                <span>Apply for Mentorship</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                            <a href="{{ route('book') }}" class="btn-base btn-outline text-center justify-center">
                                <span>The Forthcoming Book</span>
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Portrait column — appears BELOW text on mobile, right column on desktop --}}
                <div
                    class="relative w-full h-[75vw] sm:h-[55vw] lg:w-[38vw] lg:max-w-[560px] lg:h-auto lg:self-stretch shrink-0 image-wipe-container overflow-hidden"
                    data-image-wipe
                >
                    <img
                        src="{{ asset('images/modupe_portrait.jpg') }}"
                        alt="Modupe Olusoga — Institutional Leader, Author &amp; Executive"
                        class="absolute inset-0 w-full h-full object-cover object-top"
                        width="520"
                        height="700"
                        loading="eager"
                        fetchpriority="high"
                    >
                    {{-- Fade into cream on mobile so it blends with credential strip below --}}
                    <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-t from-brand-cream to-transparent lg:hidden" aria-hidden="true"></div>
                </div>

            </div>

            {{-- Bottom credential index strip --}}
            <div class="border-t border-brand-stone/50 px-5 sm:px-8 lg:px-14" data-reveal>
                <div class="grid grid-cols-2 lg:grid-cols-4">
                    @foreach([
                        ['Operations',  'COO',                   'Streamsowers &amp; Köhn'],
                        ['Governance',  'President',             'ALAN 2026–2029'],
                        ['Monograph',   'Author',                'Building the Transgenerational Law Firm'],
                        ['Scholarship', 'Harvard &amp; MIT Sloan','Executive Education &amp; Coaching'],
                    ] as $i => [$label, $title, $sub])
                    <div class="py-5 {{ $i > 0 ? 'border-l border-brand-stone/50 pl-4 sm:pl-5' : '' }} {{ $i < 3 ? 'pr-4 sm:pr-5' : '' }} {{ $i >= 2 ? 'mt-0 border-t lg:border-t-0 border-brand-stone/50' : '' }}">
                        <p class="section-label text-brand-muted/60 mb-1">{{ $label }}</p>
                        <p class="font-serif text-xs sm:text-sm font-semibold text-brand-navy leading-snug">{!! $title !!}</p>
                        <p class="text-[11px] text-brand-muted font-light mt-0.5 leading-snug hidden sm:block">{!! $sub !!}</p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     CREDENTIAL STRIP
     ============================================================ --}}
<div class="credential-strip bg-brand-parchment overflow-x-auto">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="flex min-w-max md:min-w-0 md:flex-wrap">
            @foreach([
                'COO · Streamsowers &amp; Köhn',
                'President · ALAN 2026–2029',
                'Harvard &amp; MIT Sloan',
                'IBA African Regional Liaison',
                'Author · Nov 2027',
            ] as $credential)
            <div class="credential-strip__item py-4 px-5 first:pl-0 last:pr-0">
                <span class="text-[11px] font-medium text-brand-charcoal/70 tracking-wide whitespace-nowrap">{!! $credential !!}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- ============================================================
     SECTION 01: EXECUTIVE PROFILE
     ============================================================ --}}
<section class="py-16 sm:py-24 lg:py-32 bg-brand-cream border-b border-brand-stone/60" id="executive-profile">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-20 items-center">

            {{-- Portrait --}}
            <div class="lg:col-span-5" data-reveal>
                <div class="portrait-ledger ml-4 lg:ml-8">
                    <div class="aspect-[4/5] overflow-hidden image-wipe-container" data-image-wipe>
                        <img
                            src="{{ asset('images/modupe_portrait.jpg') }}"
                            alt="Modupe Olusoga — Institutional Leader, Author &amp; Executive"
                            class="w-full h-full object-cover object-top hover:scale-[1.015] transition-transform duration-700 ease-out"
                            width="560"
                            height="700"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>

            {{-- Narrative --}}
            <div class="lg:col-span-7 space-y-7" data-reveal data-delay="0.1">

                <div class="space-y-3">
                    <span class="gold-rule"></span>
                    <h2 class="font-serif font-bold text-brand-navy leading-[1.06] tracking-tight" style="font-size: clamp(1.9rem, 3.8vw, 3.8rem);">
                        Building organizations that thrive beyond individuals.
                    </h2>
                </div>

                <div class="text-base text-brand-charcoal leading-[1.8] space-y-4">
                    <p>
                        Modupe Olusoga is the Chief Operating Officer of <strong class="font-semibold">Streamsowers &amp; Köhn</strong>, one of Nigeria's leading commercial law partnerships, and the President of the <strong class="font-semibold">Association of Law Firm Administrators Nigeria (ALAN)</strong> for the 2026–2029 term.
                    </p>
                    <p>
                        With over two decades at the nexus of institutional governance, operational design, and human potential, she guides law firms and professional service enterprises in replacing founder dependency with codified, transgenerational management structures.
                    </p>
                </div>

                {{-- Credential rows --}}
                <div class="divide-y divide-brand-stone/50 border-t border-brand-stone/50">
                    <div class="py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <p class="section-label text-brand-muted mb-1">Executive Pedigree</p>
                            <p class="font-serif text-sm font-semibold text-brand-navy">Harvard &amp; MIT Sloan</p>
                            <p class="text-sm text-brand-muted mt-0.5 leading-snug">Executive Education in Strategy, Leadership &amp; Innovation</p>
                        </div>
                        <div>
                            <p class="section-label text-brand-muted mb-1">Global Practice</p>
                            <p class="font-serif text-sm font-semibold text-brand-navy">International Bar Association</p>
                            <p class="text-sm text-brand-muted mt-0.5 leading-snug">African Regional Liaison, Law Firm Management Committee</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-1">
                    <a href="{{ route('about') }}" class="btn-base btn-primary">
                        <span>Full Executive Biography</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="{{ route('impact') }}" class="editorial-link text-sm font-medium text-brand-charcoal/70 hover:text-brand-navy transition-colors">
                        Leadership &amp; Impact
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 02: THE DUAL MANDATE — pull quote
     ============================================================ --}}
<section class="py-16 sm:py-24 lg:py-32 bg-brand-cream border-b border-brand-stone/60">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-20 items-start">

            {{-- Left framing --}}
            <div class="lg:col-span-4" data-reveal>
                <span class="gold-rule"></span>
                <p class="section-label text-brand-gold-dark mb-3">The Dual Mandate</p>
                <p class="text-base text-brand-charcoal leading-[1.8]">
                    Real impact requires equal mastery of the enterprise and the individual — building structures that outlast human lifespans, while teaching leaders to bridge intention and execution.
                </p>
                <div class="mt-8 space-y-4">
                    <div class="border-l-2 border-brand-gold pl-4">
                        <p class="text-sm font-semibold text-brand-navy mb-1">The Institution</p>
                        <p class="text-sm text-brand-charcoal/70 leading-relaxed">Governance frameworks that decouple firm success from founder presence.</p>
                    </div>
                    <div class="border-l-2 border-brand-stone pl-4">
                        <p class="text-sm font-semibold text-brand-navy mb-1">The Individual</p>
                        <p class="text-sm text-brand-charcoal/70 leading-relaxed">The mental discipline and accountability to turn strategy into sustained results.</p>
                    </div>
                </div>
            </div>

            {{-- Right: quote + continuum --}}
            <div class="lg:col-span-8" data-reveal data-delay="0.1">
                <blockquote class="blockquote-ledger font-serif font-bold text-brand-navy leading-[1.1] tracking-tight" style="font-size: clamp(1.5rem, 3vw, 3rem);">
                    "How do leaders construct organizations with the governance depth to outlive their founders, while equipping individuals with the discipline to turn aspiration into enduring outcome?"
                </blockquote>

                <div class="mt-10 pt-8 border-t border-brand-stone/60">
                    <p class="section-label text-brand-muted mb-4">The Execution Continuum</p>
                    <div class="flex flex-wrap items-center gap-x-3 gap-y-2 text-sm font-medium text-brand-navy">
                        @foreach(['Aspiration','Clarity','Action','Consistency','Results'] as $step)
                            <span>{{ $step }}</span>
                            @if(!$loop->last)<span class="text-brand-gold" aria-hidden="true">&mdash;</span>@endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 03: FLAGSHIP MENTORSHIP — dark
     ============================================================ --}}
<section class="relative bg-brand-navy overflow-hidden py-16 sm:py-24 lg:py-32 text-white" id="mentorship-flagship" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-24 items-center">

            {{-- Programme details --}}
            <div class="lg:col-span-7 space-y-7">
                <div class="space-y-3">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold">Flagship Programme &bull; 2027 Cohort</p>
                    <h2 class="font-serif font-bold text-white leading-[1.04] tracking-tight" style="font-size: clamp(2rem, 4.5vw, 4.8rem);">
                        Six months.<br>No shortcuts.
                    </h2>
                </div>

                <p class="text-base text-white/80 leading-[1.8]">
                    A rigorous, highly selective mentorship journey designed for senior professionals, partners, and emerging institutional leaders who have significant aspirations they are determined to convert into measurable reality.
                </p>

                {{-- Specs --}}
                <div class="specs-strip grid-cols-3">
                    <div class="specs-strip__item">
                        <p class="section-label text-white/50 mb-1">Duration</p>
                        <p class="font-serif text-base font-semibold text-white">Feb &ndash; July</p>
                    </div>
                    <div class="specs-strip__item">
                        <p class="section-label text-white/50 mb-1">Tuition</p>
                        <p class="font-serif text-base font-semibold text-brand-gold">&#8358;200,000</p>
                    </div>
                    <div class="specs-strip__item">
                        <p class="section-label text-white/50 mb-1">Selection</p>
                        <p class="font-serif text-base font-semibold text-white">Application Only</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-3 pt-1">
                    <a href="{{ route('mentorship') }}#apply" class="btn-base btn-gold">
                        <span>Apply for Mentorship</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="{{ route('mentorship') }}" class="btn-base btn-outline-light">
                        <span>Review Syllabus</span>
                    </a>
                </div>
            </div>

            {{-- Image --}}
            <div class="lg:col-span-5">
                <div class="relative overflow-hidden border border-white/10 image-wipe-container" data-image-wipe>
                    <img
                        src="{{ asset('images/mentorship_cohort.jpg') }}"
                        alt="Mentorship cohort executive session"
                        width="620"
                        height="520"
                        loading="lazy"
                        class="w-full h-64 sm:h-80 lg:h-[440px] object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/70 via-transparent to-transparent" aria-hidden="true"></div>
                    <div class="cohort-badge absolute bottom-0 inset-x-0 px-5 pb-5">
                        <p class="section-label text-brand-gold mb-1">Admissions Open</p>
                        <p class="text-sm text-white/90 font-light">Strictly limited to 25 executives per cohort</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 04: THE FORTHCOMING MONOGRAPH
     ============================================================ --}}
<section class="py-16 sm:py-24 lg:py-32 bg-brand-parchment/50 border-b border-brand-stone/60" id="the-book" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-20 items-center">

            {{-- Book cover --}}
            <div class="lg:col-span-4 order-2 lg:order-1">
                <div class="max-w-[240px] sm:max-w-[280px] mx-auto">
                    <div class="shadow-2xl border border-brand-stone/60 overflow-hidden image-wipe-container" data-image-wipe>
                        <img
                            src="{{ asset('images/bookc1.jpeg') }}"
                            alt="Building the Transgenerational Law Firm — Modupe Olusoga"
                            width="320"
                            height="450"
                            loading="lazy"
                            class="w-full h-auto object-cover"
                        >
                    </div>
                    <p class="mt-3 text-xs text-brand-muted text-center tracking-wide">
                        Hardcover &bull; Digital Edition &bull; Nov 2027
                    </p>
                </div>
            </div>

            {{-- Book premise --}}
            <div class="lg:col-span-8 order-1 lg:order-2 space-y-6">

                <div class="space-y-3">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark">Forthcoming Monograph</p>
                    <h2 class="font-serif font-bold text-brand-navy leading-[1.04] tracking-tight" style="font-size: clamp(1.9rem, 3.8vw, 3.8rem);">
                        Building the Transgenerational Law Firm
                    </h2>
                </div>

                <p class="text-base text-brand-charcoal leading-[1.8]">
                    Why do high-performing commercial law firms disintegrate when founding partners step down? Drawing on two decades of operational governance, Modupe Olusoga details the blueprints required to decouple enterprise survival from founder presence.
                </p>

                <div class="flex flex-wrap gap-2">
                    @foreach(['Founder De-linking', 'Codified Governance', 'Succession Architecture', 'Talent Retention', 'AI & Operations', 'Financial Longevity'] as $chip)
                        <span class="text-xs font-medium text-brand-charcoal/80 border border-brand-stone bg-white px-3 py-1.5 leading-none" style="border-radius:2px;">
                            {{ $chip }}
                        </span>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-1">
                    <a href="{{ route('book') }}#waitlist" class="btn-base btn-primary">
                        <span>Join Priority Waitlist</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="{{ route('book') }}" class="editorial-link text-sm font-medium text-brand-charcoal/70 hover:text-brand-navy transition-colors">
                        Explore Monograph Synopsis
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 05: KEYNOTES — full bleed image
     ============================================================ --}}
<section class="relative min-h-[60vh] flex items-end overflow-hidden" id="speaking-keynotes" data-reveal>
    <img
        src="{{ asset('images/modupe_speaking.jpg') }}"
        alt="Modupe Olusoga addressing international legal summit"
        width="1400"
        height="700"
        loading="lazy"
        class="absolute inset-0 w-full h-full object-cover object-center"
        data-parallax
        data-parallax-speed="0.12"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/92 via-brand-navy/45 to-transparent" aria-hidden="true"></div>

    <div class="relative z-10 max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10 w-full py-16 lg:py-24">
        <div class="max-w-2xl space-y-5">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold">Keynotes &bull; Partner Retreats &bull; Board Advisory</p>
            <h2 class="font-serif font-bold text-white leading-[1.06] tracking-tight" style="font-size: clamp(1.6rem, 3.5vw, 3.4rem);">
                Addressing boards, law firm partnerships, and continental congresses on institutional longevity.
            </h2>
            <p class="text-base text-white/80 leading-[1.8] max-w-lg">
                Available for select keynote addresses, partner retreats, and executive facilitation on institutional succession and business-of-law transformation.
            </p>
            <div class="pt-1">
                <a href="{{ route('speaking') }}#enquiry" class="btn-base btn-gold">
                    <span>Enquire About Speaking</span>
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 06: INSTITUTIONAL ANCHORS — editorial rows
     ============================================================ --}}
<section class="py-16 sm:py-24 lg:py-32 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-20">

            {{-- Section label --}}
            <div class="lg:col-span-3">
                <div class="lg:sticky lg:top-28">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark leading-loose">
                        Institutional<br>Leadership<br>Anchors
                    </p>
                </div>
            </div>

            {{-- Rows --}}
            <div class="lg:col-span-9">
                @php
                $anchors = [
                    ['Chief Operating Officer',          'Streamsowers &amp; Köhn',                           'Directing operational strategy, institutional transformation, and business-of-law execution for one of Nigeria\'s foremost commercial law firms.'],
                    ['President (2026–2029)',             'Association of Law Firm Administrators Nigeria',    'Leading the national professional body advancing operational excellence and institutional governance across the legal ecosystem.'],
                    ['African Regional Liaison Officer',  'International Bar Association (IBA)',               'Contributing to the IBA Law Firm Management Committee on cross-border legal governance, modernization, and talent succession.'],
                    ['Global Executive Scholar',          'Harvard &amp; MIT Sloan',                          'Harvard Executive Education and MIT Sloan alumna. MSc Industrial Relations. SPHRi certified. Accredited executive coach.'],
                ];
                @endphp
                @foreach($anchors as $i => [$title, $org, $desc])
                <div class="editorial-row group py-7 grid grid-cols-1 sm:grid-cols-12 gap-3 sm:gap-6 items-start cursor-default">
                    <span class="hidden sm:block sm:col-span-1 font-serif text-brand-stone/50 text-lg font-light leading-none mt-1 select-none">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>
                    <div class="sm:col-span-5">
                        <h3 class="font-serif text-lg sm:text-xl font-semibold text-brand-navy leading-snug">{{ $title }}</h3>
                        <p class="section-label text-brand-gold-dark mt-1.5">{!! $org !!}</p>
                    </div>
                    <p class="sm:col-span-5 sm:col-start-8 text-sm text-brand-charcoal/70 leading-relaxed hidden sm:block">{{ $desc }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 07: INSIGHTS
     ============================================================ --}}
@if($featuredInsights->count())
<section class="py-16 sm:py-24 lg:py-32 bg-brand-parchment/40 border-b border-brand-stone/60" id="insights" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-8 gap-4">
            <div>
                <span class="gold-rule"></span>
                <h2 class="font-serif font-bold text-brand-navy leading-[1.06]" style="font-size: clamp(1.7rem, 3.2vw, 3.2rem);">
                    Perspectives on governance<br class="hidden sm:block">&amp; the business of law.
                </h2>
            </div>
            <a href="{{ route('insights.index') }}" class="editorial-link shrink-0 text-sm font-medium text-brand-charcoal/70 hover:text-brand-navy transition-colors">
                All Journal Essays &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-brand-stone/50 border border-brand-stone/60 overflow-hidden" data-stagger-group>
            @foreach($featuredInsights as $insight)
            <div data-stagger-item class="insight-card-ledger bg-brand-cream p-6 sm:p-8 lg:p-10 flex flex-col justify-between group">
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="section-label text-brand-gold-dark">{{ $insight->category }}</span>
                        <span class="text-xs text-brand-muted">{{ $insight->read_time }}</span>
                    </div>
                    <h3 class="font-serif text-lg font-semibold text-brand-navy leading-snug group-hover:text-brand-gold-dark transition-colors duration-300">
                        <a href="{{ route('insights.show', $insight->slug) }}">{{ $insight->title }}</a>
                    </h3>
                    <p class="text-sm text-brand-charcoal/70 leading-relaxed line-clamp-3">
                        {{ $insight->summary }}
                    </p>
                </div>
                <div class="pt-5 border-t border-brand-stone/40 mt-5">
                    <a href="{{ route('insights.show', $insight->slug) }}" class="editorial-link text-xs font-semibold text-brand-navy hover:text-brand-gold-dark uppercase tracking-wider transition-colors">
                        Read Essay &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     SECTION 08: CLOSING CTA — dark, left-aligned
     ============================================================ --}}
<section class="relative bg-brand-navy overflow-hidden py-20 sm:py-28 lg:py-36" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10 relative z-10">
        <div class="max-w-3xl space-y-7">
            <span class="block w-10 h-0.5 bg-brand-gold" aria-hidden="true"></span>
            <p class="section-label text-brand-gold">Ready to begin?</p>
            <blockquote class="font-serif font-bold text-white leading-[1.08] tracking-tight" style="font-size: clamp(1.7rem, 4vw, 4.2rem);">
                "You already have the aspiration. Are you prepared to do the work?"
            </blockquote>
            <div class="flex flex-wrap items-center gap-4 pt-2">
                <a href="{{ route('mentorship') }}#apply" class="btn-base btn-gold">
                    <span>Apply for Mentorship</span>
                    <span aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ route('contact') }}" class="text-sm font-medium text-white/70 hover:text-white transition-colors border-b border-white/20 hover:border-white/50 pb-0.5">
                    Get in touch
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
