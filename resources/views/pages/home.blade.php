@extends('layouts.app')

@section('title', 'Modupe Olusoga | Institutional Leader, Author & Executive')
@section('meta_description', 'Official platform of Modupe Olusoga — COO of Streamsowers & Köhn, ALAN President 2026–2029, author of Building the Transgenerational Law Firm, and executive mentor.')

@section('content')

{{-- ============================================================
     HERO — Pure Typographic, Architectural & Modern (No portrait in hero)
     Refined negative space, editorial command, zero cliché
     ============================================================ --}}
<section
    id="hero"
    class="relative min-h-[92vh] lg:min-h-screen flex flex-col justify-between overflow-hidden bg-brand-cream pt-24 lg:pt-32 pb-12 border-b border-brand-stone/70"
>
    {{-- Architectural Grid & Ambient Geometry (Framer/Pentagram feel) --}}
    <div class="absolute inset-0 pointer-events-none select-none overflow-hidden opacity-40" aria-hidden="true">
        {{-- Subtle Hairline Coordinates Grid --}}
        <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(28,35,44,0.04)_1px,transparent_1px),linear-gradient(to_bottom,rgba(28,35,44,0.04)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        {{-- Large Watermark Monogram (Architectural depth) --}}
        <span class="absolute right-[-0.05em] top-[4%] font-serif text-[34vw] font-light leading-none tracking-tighter text-brand-stone/30 select-none">M</span>
    </div>

    {{-- Hero Top Operational Bar --}}
    <div class="relative z-10 max-w-screen-xl mx-auto px-6 lg:px-10 w-full">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-8 border-b border-brand-stone/60 text-xs">
            
            {{-- Status Pulse Indicator --}}
            <div data-reveal class="inline-flex items-center gap-3">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-gold opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-gold"></span>
                </span>
                <span class="text-[10px] uppercase tracking-[0.28em] text-brand-muted font-semibold">
                    Executive Platform &bull; Lagos, Nigeria &bull; GMT+1
                </span>
            </div>

            {{-- Institutional Appointments Badge --}}
            <div data-reveal data-delay="0.05" class="text-[11px] text-brand-charcoal/70 tracking-wide font-light hidden sm:block">
                <span>COO, Streamsowers &amp; Köhn</span>
                <span class="mx-2 text-brand-stone">&bull;</span>
                <span class="text-brand-gold-dark font-medium">President, ALAN 2026–2029</span>
            </div>

        </div>
    </div>

    {{-- Main Typographic Statement — Monumental & Uncluttered --}}
    <div class="relative z-10 max-w-screen-xl mx-auto px-6 lg:px-10 w-full my-auto py-12 lg:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-end">
            
            {{-- Left: Monumental Headline (8 Cols) --}}
            <div class="lg:col-span-8 space-y-6 sm:space-y-8">
                <div data-reveal class="flex flex-wrap items-center gap-2 sm:gap-2.5">
                    <span class="inline-flex items-center text-[10px] sm:text-[11px] uppercase tracking-[0.2em] sm:tracking-[0.28em] text-brand-gold-dark font-semibold px-3.5 py-1.5 rounded-full bg-brand-parchment border border-brand-gold/30 shadow-xs">
                        Institutional Governance
                    </span>
                    <span class="hidden sm:inline-block w-1 h-1 rounded-full bg-brand-gold/50" aria-hidden="true"></span>
                    <span class="inline-flex items-center text-[10px] sm:text-[11px] uppercase tracking-[0.2em] sm:tracking-[0.28em] text-brand-gold-dark font-semibold px-3.5 py-1.5 rounded-full bg-brand-parchment border border-brand-gold/30 shadow-xs">
                        Leadership Architecture
                    </span>
                </div>

                <h1 data-reveal data-delay="0.08" class="font-serif font-light tracking-tight text-brand-navy leading-[0.95] sm:leading-[0.92]" style="font-size: clamp(3.2rem, 9.5vw, 9.5rem);">
                    Building<br>
                    institutions<br>
                    <em class="text-brand-gold not-italic italic font-serif">that endure.</em>
                </h1>
            </div>

            {{-- Right: High-End Editorial Manifesto & Primary Actions (4 Cols) --}}
            <div class="lg:col-span-4 space-y-8" data-reveal data-delay="0.16">
                <div class="p-6 sm:p-8 rounded-2xl bg-white/70 backdrop-blur-sm border border-brand-stone/80 shadow-sm space-y-5">
                    <p class="text-[10px] uppercase tracking-[0.25em] text-brand-gold font-bold">The Core Thesis</p>
                    <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                        Operating at the intersection of enterprise governance and human potential: creating professional institutions structured to outlive their founders, and cultivating leaders with the discipline to turn intention into sustainable results.
                    </p>
                    <div class="pt-2 border-t border-brand-stone/60 flex flex-col gap-3">
                        <a
                            href="{{ route('mentorship') }}"
                            class="inline-flex items-center justify-between text-[11px] uppercase tracking-[0.2em] font-semibold text-white bg-brand-navy px-6 py-3.5 rounded-full hover:bg-brand-charcoal transition-all shadow-sm group"
                        >
                            <span>Mentorship Programme</span>
                            <span class="text-brand-gold group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                        <a
                            href="{{ route('book') }}"
                            class="inline-flex items-center justify-between text-[11px] uppercase tracking-[0.2em] font-medium text-brand-navy px-6 py-3 rounded-full border border-brand-stone hover:border-brand-gold transition-colors"
                        >
                            <span>The Forthcoming Book</span>
                            <span class="text-brand-gold-dark">&nearr;</span>
                        </a>
                    </div>
                </div>

                {{-- Quick quote snippet --}}
                <div class="hidden lg:flex items-center gap-3 text-xs text-brand-muted/70 italic font-serif">
                    <span class="text-brand-gold text-lg">&ldquo;</span>
                    <span>Governance depth liberates firms from founder dependency.</span>
                </div>
            </div>

        </div>
    </div>

    {{-- Bottom Architectural Ledger / 4-Pillar Index (Full-width grid) --}}
    <div class="relative z-10 max-w-screen-xl mx-auto px-6 lg:px-10 w-full pt-8 border-t border-brand-stone/60">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-xs" data-reveal data-delay="0.25">
            
            <div class="space-y-1">
                <span class="text-[10px] font-mono text-brand-gold-dark font-medium uppercase tracking-wider block">01 / Operations</span>
                <h4 class="font-serif text-sm text-brand-navy font-medium">Streamsowers &amp; Köhn</h4>
                <p class="text-[11px] text-brand-muted font-light leading-snug">Chief Operating Officer directing firm-wide strategy</p>
            </div>

            <div class="space-y-1">
                <span class="text-[10px] font-mono text-brand-gold-dark font-medium uppercase tracking-wider block">02 / National Body</span>
                <h4 class="font-serif text-sm text-brand-navy font-medium">President, ALAN</h4>
                <p class="text-[11px] text-brand-muted font-light leading-snug">Leading Association of Law Firm Administrators (2026–2029)</p>
            </div>

            <div class="space-y-1">
                <span class="text-[10px] font-mono text-brand-gold-dark font-medium uppercase tracking-wider block">03 / Monograph</span>
                <h4 class="font-serif text-sm text-brand-navy font-medium">The Forthcoming Book</h4>
                <p class="text-[11px] text-brand-muted font-light leading-snug">Building the Transgenerational Law Firm (Nov 2027)</p>
            </div>

            <div class="space-y-1">
                <span class="text-[10px] font-mono text-brand-gold-dark font-medium uppercase tracking-wider block">04 / Scholarship</span>
                <h4 class="font-serif text-sm text-brand-navy font-medium">Harvard &amp; MIT Sloan</h4>
                <p class="text-[11px] text-brand-muted font-light leading-snug">Global executive education &amp; accredited leadership coaching</p>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     KINETIC MARQUEE RIBBON — Fine Architectural Break
     ============================================================ --}}
<div class="relative overflow-hidden border-b border-brand-stone/60 bg-brand-parchment/60 py-3.5 select-none" aria-hidden="true">
    <div class="animate-marquee text-[10px] sm:text-[11px] uppercase tracking-[0.28em] font-medium text-brand-muted flex items-center gap-10 whitespace-nowrap">
        @foreach(['Institutional Governance', 'Succession Architecture', 'Discipline of Execution', 'Transgenerational Longevity', 'ALAN Presidency 2026–2029', 'Keynote Speaker', 'Executive Mentor', 'Harvard · MIT Sloan', 'Author', 'Lagos · Global Advisory'] as $item)
            <span>{{ $item }}</span>
            <span class="text-brand-gold/60">&bull;</span>
        @endforeach
        @foreach(['Institutional Governance', 'Succession Architecture', 'Discipline of Execution', 'Transgenerational Longevity', 'ALAN Presidency 2026–2029', 'Keynote Speaker', 'Executive Mentor', 'Harvard · MIT Sloan', 'Author', 'Lagos · Global Advisory'] as $item)
            <span>{{ $item }}</span>
            <span class="text-brand-gold/60">&bull;</span>
        @endforeach
    </div>
</div>

{{-- ============================================================
     SECTION 01: THE LEADER / EXECUTIVE MONOGRAPH
     Her portrait is introduced here with artistic dignity, context, and prestige.
     ============================================================ --}}
<section class="py-24 lg:py-36 bg-brand-cream border-b border-brand-stone/60" id="executive-profile">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            {{-- Left: Portrait Monograph with Archival Matting (5 Cols) --}}
            <div class="lg:col-span-5" data-reveal>
                <div class="relative max-w-md mx-auto lg:max-w-none">
                    
                    {{-- Decorative Backdrop Halo --}}
                    <div class="absolute -inset-4 bg-brand-gold/10 rounded-3xl blur-2xl pointer-events-none" aria-hidden="true"></div>

                    {{-- Image Matting Frame --}}
                    <div class="relative rounded-2xl overflow-hidden bg-white p-3 sm:p-4 border border-brand-stone/80 shadow-xl shadow-brand-navy/5">
                        <div class="relative rounded-xl overflow-hidden aspect-[4/5] bg-brand-parchment">
                            <img
                                src="{{ asset('images/modupe_portrait.jpg') }}"
                                alt="Modupe Olusoga — Institutional Leader, Author & Executive"
                                class="w-full h-full object-cover object-top hover:scale-[1.02] transition-transform duration-700 ease-out"
                                width="560"
                                height="700"
                                loading="lazy"
                            >
                            {{-- Archival Vignette Gradient --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/40 via-transparent to-transparent"></div>

                            {{-- Corner Archival Label --}}
                            <div class="absolute bottom-3 left-3 right-3 p-3 rounded-lg bg-brand-navy/90 backdrop-blur-md border border-white/10 text-white flex items-center justify-between">
                                <div>
                                    <h4 class="font-serif text-sm font-normal">MODUPE OLUSOGA</h4>
                                    <p class="text-[9px] uppercase tracking-widest text-brand-gold font-medium">COO &bull; Author &bull; ALAN President</p>
                                </div>
                                <span class="text-xs text-brand-gold/80 font-mono text-[10px]">Lagos</span>
                            </div>
                        </div>

                        {{-- Metadata Caption Under Photo --}}
                        <div class="pt-3 px-1 flex items-center justify-between text-[10px] text-brand-muted font-mono uppercase tracking-wider">
                            <span>Plate No. 01 &bull; Official Portrait</span>
                            <span>Executive Leadership</span>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Right: Narrative & Credentials (7 Cols) --}}
            <div class="lg:col-span-7 space-y-8" data-reveal data-delay="0.1">
                
                {{-- Section Index --}}
                <div class="space-y-2">
                    <span class="text-[10px] uppercase tracking-[0.3em] text-brand-gold-dark font-semibold block">
                        01 &bull; The Leader &bull; Profile &amp; Governance Philosophy
                    </span>
                    <h2 class="font-serif font-light text-brand-navy leading-[1.08] tracking-tight" style="font-size: clamp(2.2rem, 4.5vw, 4.5rem);">
                        Building organizations that <em class="text-brand-gold-dark italic font-serif">thrive beyond individuals.</em>
                    </h2>
                </div>

                {{-- Editorial Copy --}}
                <div class="text-sm sm:text-base text-brand-charcoal/80 font-light leading-relaxed space-y-4">
                    <p>
                        Modupe Olusoga is the Chief Operating Officer of <strong>Streamsowers &amp; Köhn</strong>, one of Nigeria's leading commercial law partnerships, and the President of the <strong>Association of Law Firm Administrators Nigeria (ALAN)</strong> for the 2026–2029 term.
                    </p>
                    <p>
                        With over two decades operating at the nexus of institutional governance, operational design, and human potential, she guides law firms and professional service enterprises in replacing founder dependency with codified, transgenerational management structures.
                    </p>
                </div>

                {{-- Academic & Professional Ledger --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-brand-parchment/60 border border-brand-stone/70 space-y-1">
                        <span class="text-[9px] uppercase tracking-widest text-brand-gold-dark font-bold block">Executive Pedigree</span>
                        <p class="font-serif text-sm font-medium text-brand-navy">Harvard &amp; MIT Sloan</p>
                        <p class="text-xs text-brand-muted font-light leading-snug">Executive Education in Strategy, Leadership &amp; Innovation</p>
                    </div>

                    <div class="p-4 rounded-xl bg-brand-parchment/60 border border-brand-stone/70 space-y-1">
                        <span class="text-[9px] uppercase tracking-widest text-brand-gold-dark font-bold block">Global Practice</span>
                        <p class="font-serif text-sm font-medium text-brand-navy">International Bar Association</p>
                        <p class="text-xs text-brand-muted font-light leading-snug">African Regional Liaison, Law Firm Management Committee</p>
                    </div>
                </div>

                {{-- Action Links --}}
                <div class="pt-2 flex flex-wrap items-center gap-5">
                    <a
                        href="{{ route('about') }}"
                        class="inline-flex items-center gap-2.5 text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy bg-white border border-brand-stone px-7 py-3.5 rounded-full hover:border-brand-gold hover:text-brand-gold-dark transition-all shadow-sm"
                    >
                        <span>Full Executive Biography</span>
                        <span>&rarr;</span>
                    </a>
                    <a
                        href="{{ route('impact') }}"
                        class="text-[11px] uppercase tracking-[0.2em] font-medium text-brand-muted hover:text-brand-navy transition-colors editorial-link"
                    >
                        Leadership &amp; Institutional Impact &rarr;
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 02: THE CORE MANDATE & PULL QUOTE
     ============================================================ --}}
<section class="py-24 lg:py-36 bg-brand-cream border-b border-brand-stone/60">
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">

            {{-- Left: Number & Principle --}}
            <div class="lg:col-span-4" data-reveal>
                <p class="font-serif text-[6rem] sm:text-[7.5rem] font-light leading-none text-brand-stone/50 -mt-4 tracking-tighter select-none">02</p>
                <div class="mt-4 space-y-4">
                    <p class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold">The Dual Mandate</p>
                    <p class="text-xs sm:text-sm text-brand-charcoal/70 leading-relaxed font-light">
                        Real impact requires equal mastery of the enterprise and the individual: building structures that outlast human lifespans, while teaching leaders how to bridge the gap between intention and execution.
                    </p>
                    <div class="pt-2 space-y-3">
                        <div class="border-l-2 border-brand-gold pl-3">
                            <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-navy block">The Institution</span>
                            <span class="text-xs text-brand-muted font-light">Governance frameworks that decouple firm success from individual founder presence.</span>
                        </div>
                        <div class="border-l-2 border-brand-stone pl-3">
                            <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-navy block">The Individual</span>
                            <span class="text-xs text-brand-muted font-light">The mental discipline and weekly accountability to turn strategy into sustained results.</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Monumental Editorial Quote --}}
            <div class="lg:col-span-8" data-reveal data-delay="0.1">
                <blockquote class="font-serif font-light leading-[1.1] text-brand-navy tracking-tight" style="font-size: clamp(2rem, 4vw, 3.8rem);">
                    "How do leaders construct organizations with the governance and operational depth to outlive their founders, while equipping individuals with the discipline to turn aspiration into enduring outcome?"
                </blockquote>
                
                {{-- Continuum Diagram Strip --}}
                <div class="mt-10 p-6 rounded-xl bg-brand-parchment/60 border border-brand-stone/70">
                    <span class="text-[10px] uppercase tracking-widest text-brand-gold-dark font-bold block mb-2">The Execution Continuum</span>
                    <p class="font-serif text-base sm:text-lg text-brand-navy font-normal tracking-wide">
                        Aspiration &rarr; Clarity &rarr; Action &rarr; Consistency &rarr; Results
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 03: FLAGSHIP MENTORSHIP PROGRAMME
     Full-bleed Dark Section for Visual Rhythm Break
     ============================================================ --}}
<section class="relative bg-brand-navy overflow-hidden py-24 lg:py-36 text-white" id="mentorship-flagship" data-reveal>
    {{-- Decorative Background Number --}}
    <span
        aria-hidden="true"
        class="absolute right-0 top-0 font-serif text-[28vw] font-light leading-none text-white/[0.03] select-none pointer-events-none"
        style="line-height:0.85; transform: translateY(-15%);"
    >03</span>

    <div class="max-w-screen-xl mx-auto px-6 lg:px-10 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-center">

            {{-- Left: Programme Thesis & Details (7 Cols) --}}
            <div class="lg:col-span-7 space-y-8">
                <div class="space-y-2">
                    <span class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold block">
                        03 &bull; Flagship Programme &bull; 2027 Cohort
                    </span>
                    <h2 class="font-serif text-white font-light leading-[1.04] tracking-tight" style="font-size: clamp(2.4rem, 5.5vw, 5.5rem);">
                        Six months.<br>
                        <em class="italic text-brand-gold/90 font-serif">No shortcuts.</em>
                    </h2>
                </div>

                <p class="text-sm sm:text-base text-white/70 font-light leading-relaxed max-w-xl">
                    A rigorous, highly selective mentorship journey designed for senior professionals, partners, and emerging institutional leaders who have significant aspirations they are determined to convert into measurable reality.
                </p>

                {{-- Specs Strip --}}
                <div class="grid grid-cols-3 gap-6 py-6 border-y border-white/10 text-xs">
                    <div>
                        <span class="block text-[9px] uppercase tracking-widest text-white/40 mb-1">Duration</span>
                        <strong class="font-medium text-white text-sm sm:text-base font-serif">Feb – July</strong>
                    </div>
                    <div>
                        <span class="block text-[9px] uppercase tracking-widest text-white/40 mb-1">Tuition</span>
                        <strong class="font-medium text-brand-gold text-sm sm:text-base font-serif">₦200,000</strong>
                    </div>
                    <div>
                        <span class="block text-[9px] uppercase tracking-widest text-white/40 mb-1">Selection</span>
                        <strong class="font-medium text-white text-sm sm:text-base font-serif">Application Only</strong>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a
                        href="{{ route('mentorship') }}#apply"
                        class="inline-flex items-center gap-3 text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy bg-brand-gold px-8 py-4 rounded-full hover:bg-brand-gold-light transition-all duration-300 shadow-md"
                    >
                        <span>Apply for Mentorship</span>
                        <span class="text-base">&rarr;</span>
                    </a>
                    <a
                        href="{{ route('mentorship') }}"
                        class="inline-flex items-center gap-2 text-[11px] uppercase tracking-[0.2em] font-medium text-white/80 hover:text-white transition-colors px-6 py-3.5 rounded-full border border-white/20 hover:border-white/50"
                    >
                        Review Syllabus &amp; Structure &rarr;
                    </a>
                </div>
            </div>

            {{-- Right: Cohort Image Card (5 Cols) --}}
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-2xl">
                    <img
                        src="{{ asset('images/mentorship_cohort.jpg') }}"
                        alt="Mentorship cohort executive session"
                        width="620"
                        height="520"
                        loading="lazy"
                        class="w-full h-[380px] lg:h-[480px] object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-brand-navy/30 to-transparent"></div>
                    
                    {{-- Floating Cohort Status Badge --}}
                    <div class="absolute bottom-6 left-6 right-6 p-4 rounded-xl bg-brand-midnight/90 backdrop-blur-md border border-white/10 flex items-center justify-between">
                        <div>
                            <span class="text-[9px] uppercase tracking-widest text-brand-gold font-bold block">Admissions Open</span>
                            <span class="text-xs text-white/90 font-serif">Strictly limited to 25 executives per cohort</span>
                        </div>
                        <span class="px-2.5 py-1 rounded-full bg-brand-gold text-brand-navy text-[10px] uppercase font-bold tracking-wider">Apply</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 04: THE FORTHCOMING MONOGRAPH (THE BOOK)
     ============================================================ --}}
<section class="py-24 lg:py-36 bg-brand-parchment/40 border-b border-brand-stone/60" id="the-book" data-reveal>
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">

            {{-- Book 3D Showcase (4 Cols) --}}
            <div class="lg:col-span-4 order-2 lg:order-1">
                <div class="relative max-w-[280px] sm:max-w-[320px] mx-auto">
                    <div class="absolute -inset-6 bg-brand-gold/15 rounded-3xl blur-2xl pointer-events-none" aria-hidden="true"></div>
                    <div class="relative rounded-xl overflow-hidden shadow-2xl border border-brand-stone/80 bg-white p-2">
                        <img
                            src="{{ asset('images/bookc1.jpeg') }}"
                            alt="Building the Transgenerational Law Firm — Modupe Olusoga"
                            width="320"
                            height="450"
                            loading="lazy"
                            class="w-full h-auto object-cover rounded-lg"
                        >
                    </div>
                    <div class="mt-4 text-center">
                        <span class="text-[10px] uppercase tracking-widest text-brand-muted font-mono">Hardcover &bull; Digital Edition &bull; Nov 2027</span>
                    </div>
                </div>
            </div>

            {{-- Book Premise & Waiting List (8 Cols) --}}
            <div class="lg:col-span-8 order-1 lg:order-2 space-y-6">
                <div class="space-y-2">
                    <span class="text-[10px] uppercase tracking-[0.3em] text-brand-gold-dark font-semibold block">
                        04 &bull; Forthcoming Monograph &bull; Official Release
                    </span>
                    <h2 class="font-serif font-light text-brand-navy leading-[1.06] tracking-tight" style="font-size: clamp(2.2rem, 4.5vw, 4.5rem);">
                        Building the Transgenerational<br>
                        <em class="italic text-brand-gold-dark font-serif">Law Firm</em>
                    </h2>
                </div>

                <p class="text-sm sm:text-base text-brand-charcoal/80 font-light leading-relaxed max-w-xl">
                    Why do high-performing commercial law firms disintegrate when founding partners step down? Drawing on two decades of operational governance, Modupe Olusoga details the blueprints required to decouple enterprise survival from founder presence.
                </p>

                {{-- Core Pillars Treated --}}
                <div class="flex flex-wrap gap-2 pt-1">
                    @foreach(['Founder De-linking', 'Codified Governance', 'Partner Succession Architecture', 'Talent Retention', 'AI & Modern Operations', 'Financial Longevity'] as $chip)
                        <span class="text-[10px] uppercase tracking-[0.16em] font-medium text-brand-charcoal/80 bg-white border border-brand-stone/80 px-3.5 py-1.5 rounded-full shadow-2xs">
                            {{ $chip }}
                        </span>
                    @endforeach
                </div>

                {{-- Actions --}}
                <div class="flex flex-wrap items-center gap-4 pt-3">
                    <a
                        href="{{ route('book') }}#waitlist"
                        class="inline-flex items-center gap-2.5 text-[11px] uppercase tracking-[0.2em] font-semibold text-white bg-brand-navy px-8 py-3.5 rounded-full hover:bg-brand-charcoal transition-all shadow-sm"
                    >
                        <span>Join Priority Waitlist</span>
                        <span class="text-brand-gold">&rarr;</span>
                    </a>
                    <a
                        href="{{ route('book') }}"
                        class="text-[11px] uppercase tracking-[0.2em] font-medium text-brand-muted hover:text-brand-navy transition-colors editorial-link"
                    >
                        Explore Monograph Synopsis &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 05: KEYNOTES & ADVISORY FACILITATION
     ============================================================ --}}
<section class="relative min-h-[60vh] flex items-end overflow-hidden" id="speaking-keynotes" data-reveal>
    <img
        src="{{ asset('images/modupe_speaking.jpg') }}"
        alt="Modupe Olusoga addressing international legal summit"
        width="1400"
        height="700"
        loading="lazy"
        class="absolute inset-0 w-full h-full object-cover object-center"
    >
    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-brand-navy/75 to-brand-navy/30"></div>

    <div class="relative z-10 max-w-screen-xl mx-auto px-6 lg:px-10 w-full py-20 lg:py-28">
        <div class="max-w-2xl space-y-6">
            <span class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold block">
                05 &bull; Keynotes &bull; Partner Retreats &bull; Board Advisory
            </span>
            <h2 class="font-serif font-light text-white leading-[1.06] tracking-tight" style="font-size: clamp(2.2rem, 4vw, 4rem);">
                Addressing boards, law firm partnerships, and continental congresses on institutional longevity.
            </h2>
            <p class="text-xs sm:text-sm text-white/70 font-light leading-relaxed max-w-lg">
                Available for select keynote addresses, partner retreats, and executive facilitation on institutional succession and business-of-law transformation.
            </p>
            <div class="pt-2">
                <a
                    href="{{ route('speaking') }}#enquiry"
                    class="inline-flex items-center gap-3 text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy bg-brand-gold px-8 py-3.5 rounded-full hover:bg-brand-gold-light transition-all"
                >
                    <span>Enquire About Speaking &amp; Facilitation</span>
                    <span>&rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 06: INSTITUTIONAL ANCHORS (EDITORIAL ROWS)
     ============================================================ --}}
<section class="py-24 lg:py-36 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">

            {{-- Section Label --}}
            <div class="lg:col-span-3">
                <p class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold sticky top-28">
                    06<br><br>Institutional<br>Leadership<br>Anchors
                </p>
            </div>

            {{-- Rows --}}
            <div class="lg:col-span-9 divide-y divide-brand-stone/60">
                @php
                $anchors = [
                    ['01', 'Chief Operating Officer', 'Streamsowers & Köhn', 'Directing operational strategy, institutional transformation, and business-of-law execution for one of Nigeria\'s foremost commercial law firms.'],
                    ['02', 'President (2026–2029)', 'Association of Law Firm Administrators Nigeria (ALAN)', 'Leading the national professional body advancing operational excellence and institutional governance across the legal ecosystem.'],
                    ['03', 'African Regional Liaison Officer', 'International Bar Association (IBA)', 'Contributing to the IBA Law Firm Management Committee on cross-border legal governance, modernization, and talent succession.'],
                    ['04', 'Global Executive Scholar', 'Harvard & MIT Sloan', 'Harvard Executive Education and MIT Sloan alumna. MSc Industrial Relations. SPHRi certified. Accredited executive coach.'],
                ];
                @endphp
                @foreach($anchors as [$num, $title, $org, $desc])
                <div class="editorial-row group py-8 grid grid-cols-12 gap-6 items-start cursor-default">
                    <span class="col-span-1 font-serif text-brand-stone/60 text-2xl font-light leading-none mt-1">{{ $num }}</span>
                    <div class="col-span-11 sm:col-span-5">
                        <h3 class="font-serif text-xl sm:text-2xl font-light text-brand-navy leading-snug">{{ $title }}</h3>
                        <p class="text-[10px] uppercase tracking-[0.2em] text-brand-gold font-semibold mt-1">{{ $org }}</p>
                    </div>
                    <p class="col-span-11 sm:col-span-5 sm:col-start-8 text-sm text-brand-charcoal/65 font-light leading-relaxed hidden sm:block">{{ $desc }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     SECTION 07: EDITORIAL ESSAYS & THOUGHT LEADERSHIP
     ============================================================ --}}
@if($featuredInsights->count())
<section class="py-24 lg:py-36 bg-brand-parchment/30 border-b border-brand-stone/60" id="insights" data-reveal>
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-6">
            <div>
                <span class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold block mb-2">
                    07 &bull; Executive Journal &bull; Editorial Dispatches
                </span>
                <h2 class="font-serif font-light text-brand-navy leading-[1.06]" style="font-size: clamp(2rem, 3.8vw, 3.8rem);">
                    Perspectives on governance<br>&amp; the business of law.
                </h2>
            </div>
            <a
                href="{{ route('insights.index') }}"
                class="inline-flex shrink-0 items-center gap-2 text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy editorial-link hover:text-brand-gold-dark transition-colors"
            >
                <span>All Journal Essays</span>
                <span>&rarr;</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-px bg-brand-stone/60 rounded-xl overflow-hidden border border-brand-stone/60" data-stagger-group>
            @foreach($featuredInsights as $insight)
            <div data-stagger-item class="bg-brand-cream p-8 lg:p-10 space-y-4 group hover:bg-brand-parchment/70 transition-colors duration-300 flex flex-col justify-between">
                <div class="space-y-3">
                    <div class="flex items-center justify-between text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-semibold">
                        <span>{{ $insight->category }}</span>
                        <span class="text-brand-muted font-normal text-[11px]">{{ $insight->read_time }}</span>
                    </div>
                    <h3 class="font-serif text-lg sm:text-xl font-light text-brand-navy leading-snug group-hover:text-brand-gold-dark transition-colors">
                        <a href="{{ route('insights.show', $insight->slug) }}">{{ $insight->title }}</a>
                    </h3>
                    <p class="text-xs text-brand-charcoal/70 font-light leading-relaxed line-clamp-3">
                        {{ $insight->summary }}
                    </p>
                </div>
                <div class="pt-4 border-t border-brand-stone/40">
                    <a href="{{ route('insights.show', $insight->slug) }}" class="inline-flex items-center gap-1.5 text-[10px] uppercase tracking-[0.2em] font-semibold text-brand-navy hover:text-brand-gold-dark transition-colors">
                        <span>Read Essay</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif

{{-- ============================================================
     SECTION 08: CLOSING CALL TO ACTION
     ============================================================ --}}
<section class="relative bg-brand-navy overflow-hidden py-28 lg:py-40" data-reveal>
    <span aria-hidden="true" class="absolute left-0 bottom-0 font-serif text-[25vw] font-light leading-none text-white/[0.025] select-none pointer-events-none" style="line-height:0.8; transform: translateY(10%);">A</span>

    <div class="max-w-screen-xl mx-auto px-6 lg:px-10 relative z-10 text-center space-y-8 max-w-3xl mx-auto">
        <p class="text-[10px] uppercase tracking-[0.3em] text-brand-gold font-semibold">Ready to begin?</p>
        <h2 class="font-serif font-light text-white leading-[1.06] tracking-tight" style="font-size: clamp(2.2rem, 5vw, 5rem);">
            "You already have the aspiration.<br>
            <em class="italic text-brand-gold/80 font-serif">Are you prepared to do the work?"</em>
        </h2>
        <div class="flex flex-wrap justify-center gap-4 pt-4">
            <a
                href="{{ route('mentorship') }}#apply"
                class="inline-flex items-center gap-3 text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy bg-brand-gold px-9 py-4 rounded-full hover:bg-brand-gold-light transition-all duration-300"
            >
                <span>Apply for Mentorship</span>
                <span class="text-base">&rarr;</span>
            </a>
            <a
                href="{{ route('contact') }}"
                class="inline-flex items-center gap-3 text-[11px] uppercase tracking-[0.2em] font-semibold text-white border border-white/20 px-9 py-4 rounded-full hover:border-white/50 transition-colors duration-300"
            >
                Get in touch
            </a>
        </div>
    </div>
</section>

@endsection
