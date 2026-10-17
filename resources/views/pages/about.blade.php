@extends('layouts.app')

@section('title', 'About Modupe Olusoga | Executive Biography & Philosophy')
@section('meta_description', 'Executive profile of Modupe Olusoga — Institutional Leader, Chief Operating Officer of Streamsowers & Köhn, ALAN President, and contributor to the International Bar Association.')

@section('content')

{{-- ============================================================
     HERO — mobile: copy first, portrait below
     Desktop: 5/7 grid, portrait left / copy right
     ============================================================ --}}
<section class="pt-24 sm:pt-28 lg:pt-32 pb-0 border-b border-brand-stone/60 bg-brand-cream overflow-hidden">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-end">

            {{-- Portrait — order-2 on mobile so copy reads first --}}
            <div class="lg:col-span-5 order-2 lg:order-1" data-reveal>
                {{-- portrait-ledger uses ::before left:−1.25rem so we need at least 1.5rem left margin --}}
                <div class="portrait-ledger ml-6 sm:ml-8 lg:ml-8">
                    <div class="image-wipe-container overflow-hidden" data-image-wipe>
                        <img
                            src="{{ asset('images/modupe_portrait.jpg') }}"
                            alt="Modupe Olusoga Executive Portrait"
                            width="800"
                            height="1040"
                            class="w-full object-cover object-top"
                            style="height: clamp(280px, 60vw, 560px);"
                            loading="eager"
                        >
                    </div>
                </div>
            </div>

            {{-- Biography copy — order-1 so it shows first on mobile --}}
            <div class="lg:col-span-7 order-1 lg:order-2 pb-10 sm:pb-14 space-y-6">

                <div class="space-y-3">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark" data-reveal-hero>Executive Biography</p>
                    <h1
                        class="font-serif font-bold text-brand-navy leading-[1.0] tracking-tight"
                        style="font-size: clamp(2.4rem, 5.5vw, 5.5rem);"
                        data-hero-heading
                    >
                        Modupe Olusoga
                    </h1>
                    <p class="section-label text-brand-muted" data-reveal-hero>
                        Institutional Leader &bull; Executive &bull; Author &bull; Speaker
                    </p>
                </div>

                <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                    Operating at the intersection of institutional architecture and human capability, advising and leading across governance, people systems, operations, and organizational longevity.
                </p>

                <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                    Currently serving as <strong class="font-semibold">Chief Operating Officer of Streamsowers &amp; Köhn</strong>, partnering with equity leadership to shape strategic direction, build resilient governance structures, and drive the operational backbone that supports top-tier commercial legal practice.
                </p>

                <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                    Beyond organizational leadership, the central intellectual inquiry is this: <em>How do we build people and institutions with the clarity, discipline, and stamina to translate potential into enduring outcomes?</em>
                </p>

                <div class="flex flex-wrap gap-3 pt-1" data-reveal-hero>
                    <a href="{{ route('speaking') }}#enquiry" class="btn-base btn-primary">
                        <span>Invite to Speak</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="{{ route('mentorship') }}" class="btn-base btn-outline">
                        <span>Mentorship Programme</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     DUAL PHILOSOPHY — editorial essay, dropcap
     ============================================================ --}}
<section class="py-14 sm:py-20 lg:py-24 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-4xl mx-auto px-5 sm:px-8 lg:px-10 space-y-8 sm:space-y-10">

        <div>
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Guiding Philosophy</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl lg:text-4xl leading-snug tracking-tight">
                Operating at Two Connected Levels
            </h2>
        </div>

        <div class="space-y-5 text-base text-brand-charcoal leading-[1.85] dropcap">
            <p>
                At the <strong class="font-semibold">organisational level</strong>, the focus encompasses institution building, governance, leadership development, succession, organisational effectiveness, professional services management, and the future of work. Across law firms and professional services, longevity is often threatened when firms are built as proprietorships in partnership clothing. The mission is to help firms de-link their excellence from single charismatic figures and embed durability into their policies, culture, and operational architecture.
            </p>
            <p>
                At the <strong class="font-semibold">individual level</strong>, this work extends to helping professionals gain clarity around their aspirations, translate goals into deliberate action, and develop the consistency required to achieve them. Aspiration without structure generates frustration; ambition without accountability evaporates.
            </p>
        </div>

        {{-- Architecture of Execution
             Mobile: 3 cols (01–03 top row, 04–05 bottom spanning proportionally)
             Tablet+: 5 cols
        --}}
        <div class="pt-6 sm:pt-8 border-t border-brand-stone/60">
            <p class="section-label text-brand-muted mb-4 sm:mb-6">The Architecture of Execution</p>

            {{-- Mobile layout: stacked numbered list --}}
            <div class="sm:hidden border border-brand-stone/60 overflow-hidden divide-y divide-brand-stone/60" style="border-radius:2px;">
                @foreach([
                    ['01','Aspiration','Vision &amp; raw desire'],
                    ['02','Clarity','Non-negotiable levers'],
                    ['03','Action','Deliberate weekly rituals'],
                    ['04','Consistency','Unbroken accountability'],
                    ['05','Results','Enduring outcomes'],
                ] as $step)
                <div class="flex items-center gap-4 px-4 py-3.5 bg-brand-cream">
                    <span class="section-label text-brand-gold w-6 shrink-0">{{ $step[0] }}</span>
                    <div>
                        <strong class="font-serif text-sm font-semibold text-brand-navy">{!! $step[1] !!}</strong>
                        <span class="text-xs text-brand-muted ml-2">{!! $step[2] !!}</span>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Tablet+ layout: 5-col grid --}}
            <div class="hidden sm:grid grid-cols-5 gap-0 border border-brand-stone/60 overflow-hidden" style="border-radius:2px;">
                @foreach([
                    ['01','Aspiration','Vision &amp; raw desire'],
                    ['02','Clarity','Non-negotiable levers'],
                    ['03','Action','Deliberate weekly rituals'],
                    ['04','Consistency','Unbroken accountability'],
                    ['05','Results','Enduring outcomes'],
                ] as $step)
                <div class="p-4 sm:p-5 text-center border-r border-brand-stone/60 last:border-r-0 bg-brand-cream hover:bg-brand-parchment transition-colors">
                    <span class="section-label text-brand-gold block mb-2">{{ $step[0] }}</span>
                    <strong class="font-serif text-sm font-semibold text-brand-navy block">{!! $step[1] !!}</strong>
                    <p class="text-xs text-brand-muted mt-1 leading-snug">{!! $step[2] !!}</p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

{{-- ============================================================
     LEADERSHIP CHRONOLOGY — sticky label + editorial rows
     ============================================================ --}}
<section class="py-14 sm:py-20 lg:py-24 bg-brand-parchment/40 border-b border-brand-stone/60">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16">

            {{-- Sticky label — not sticky on mobile (would pin mid-scroll) --}}
            <div class="lg:col-span-4 lg:sticky lg:top-28 lg:self-start space-y-3">
                <span class="gold-rule"></span>
                <p class="section-label text-brand-gold-dark">Leadership Record</p>
                <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                    Chronology of Institutional Responsibilities
                </h2>
                <p class="text-sm text-brand-charcoal/70 leading-relaxed hidden sm:block">
                    A continuous progression of enterprise administration, industry stewardship, and global engagement.
                </p>
            </div>

            {{-- Rows --}}
            <div class="lg:col-span-8" data-stagger-group>

                @php
                $roles = [
                    ['Current Mandate',       'Chief Operating Officer',        'Streamsowers &amp; Köhn',
                     'Directing firmwide operations, administrative stewardship, people strategy, and institutional modernisation across an established commercial law firm in Nigeria. Partnering closely with the Managing Partner and Practice Group leaders to elevate operational resilience and delivery predictability.'],
                    ['2026–2029 Term',         'President',                      'Association of Law Firm Administrators Nigeria (ALAN)',
                     'Leading the national professional body to elevate, standardize, and empower law firm administrators and operations leaders across Nigeria\'s legal industry. Championing continuing executive certification, operations benchmarking, and governance standards.'],
                    ['International',          'African Regional Liaison Officer','International Bar Association (IBA)',
                     'Contributing to the IBA Law Firm Management Committee, bridging international legal management paradigms with African regional realities on digital workflows, AI adoption, and cross-generational partner succession.'],
                    ['Advisory Foundations',  'People Strategy &amp; Governance','KPMG Nigeria Advisory',
                     'Extensive career roots in human resources management, industrial relations, organizational design, and corporate restructuring within Big Four consulting environments.'],
                ];
                @endphp

                @foreach($roles as $role)
                <div data-stagger-item class="editorial-row group py-6 sm:py-8 space-y-3 sm:space-y-0 sm:grid sm:grid-cols-12 sm:gap-6 items-start">
                    {{-- Meta column --}}
                    <div class="sm:col-span-5 space-y-1">
                        <span class="section-label text-brand-gold">{!! $role[0] !!}</span>
                        <h3 class="font-serif text-lg font-semibold text-brand-navy leading-snug">{!! $role[1] !!}</h3>
                        <p class="section-label text-brand-muted">{!! $role[2] !!}</p>
                    </div>
                    {{-- Description --}}
                    <p class="sm:col-span-7 text-sm text-brand-charcoal leading-[1.8]">{{ $role[3] }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     CREDENTIALS — dark section
     Mobile: stacked single column with dividers (no gap-px hack)
     ============================================================ --}}
<section class="py-14 sm:py-20 lg:py-24 bg-brand-navy text-white" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10 sm:mb-12">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold mb-3">Academic &amp; Professional Rigor</p>
            <h2 class="font-serif font-bold text-white text-2xl sm:text-3xl leading-snug tracking-tight">
                Global Executive Education &amp; Accreditations
            </h2>
        </div>

        {{-- Mobile: divide-y stack. Tablet+: 2-col. Desktop: 4-col. --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 divide-white/10 border border-white/10 sm:border-0 overflow-hidden" style="border-radius:2px;">
            @foreach([
                ['MSc',    'Industrial &amp; Labour Relations', 'Deep institutional scholarship in labour economics, dispute arbitration, and organizational dynamics.'],
                ['SPHRi',  'Senior Professional in HR',         'Globally accredited certification affirming executive-level human capital strategy and governance.'],
                ['Harvard','Harvard &amp; MIT Sloan',           'Executive education credentials in leadership, strategy, operations, and institutional technology.'],
                ['Coach',  'Certified Executive Coach',         'Accredited coaching credential facilitating executive transitions, personal mastery, and consistent leadership.'],
            ] as $i => $cred)
            <div class="p-6 sm:p-8 bg-brand-navy sm:border sm:border-white/10 hover:border-brand-gold/40 transition-colors sm:first:rounded-none">
                <span class="font-serif text-2xl sm:text-3xl font-bold text-brand-gold block mb-3">{!! $cred[0] !!}</span>
                <h3 class="font-serif text-base font-semibold text-white mb-2">{!! $cred[1] !!}</h3>
                <p class="text-sm text-white/60 leading-relaxed">{{ $cred[2] }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
