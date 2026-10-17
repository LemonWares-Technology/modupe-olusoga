@extends('layouts.app')

@section('title', 'Speaking & Executive Advisory | Modupe Olusoga')
@section('meta_description', 'Keynotes, partner retreats, governance advisory, and executive moderation by Modupe Olusoga. Invite Modupe to speak at your conference or leadership summit.')

@section('content')

{{-- ============================================================
     HERO — 7/5 split
     ============================================================ --}}
<section class="pt-32 pb-0 border-b border-brand-stone/60 bg-brand-cream overflow-hidden">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-end">

            {{-- Copy --}}
            <div class="lg:col-span-7 pb-14 space-y-7">
                <div class="space-y-4">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark" data-reveal-hero>Keynotes &bull; Partner Retreats &bull; Board Advisory</p>
                    <h1
                        class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight"
                        style="font-size: clamp(2.5rem, 5.5vw, 5rem);"
                        data-hero-heading
                    >
                        Provocative perspective for leadership and institutions.
                    </h1>
                </div>

                <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                    Modupe Olusoga delivers high-impact keynote addresses, facilitates closed-door partner retreats, and guides strategic governance sessions for commercial law firms, professional services bodies, and corporate boards.
                </p>

                <div class="flex flex-wrap gap-3" data-reveal-hero>
                    <a href="#enquiry" class="btn-base btn-primary">
                        <span>Submit Speaking Enquiry</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="#topics" class="btn-base btn-outline">
                        <span>Explore Keynote Topics</span>
                    </a>
                </div>
            </div>

            {{-- Image — flush to bottom --}}
            <div class="lg:col-span-5">
                <div class="relative overflow-hidden image-wipe-container" data-image-wipe>
                    <img
                        src="{{ asset('images/modupe_speaking.jpg') }}"
                        alt="Modupe Olusoga on Stage"
                        width="800"
                        height="600"
                        class="w-full h-[400px] sm:h-[480px] object-cover object-center hover:scale-[1.015] transition-transform duration-700"
                        loading="eager"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-brand-navy/25 to-transparent" aria-hidden="true"></div>
                    <div class="absolute bottom-0 inset-x-0 px-7 pb-7 text-white space-y-1">
                        <p class="section-label text-brand-gold">Global Convenings</p>
                        <p class="font-serif text-sm font-semibold leading-snug">
                            International Bar Association &bull; Managing Partner Forums &bull; Executive Offsites
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     KEYNOTE TOPICS — editorial grid
     ============================================================ --}}
<section id="topics" class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Keynote Curricula</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Signature Addresses &amp; Executive Curricula
            </h2>
            <p class="text-base text-brand-charcoal/70 mt-3 max-w-xl leading-relaxed">
                Every engagement is tailored to the strategic objectives, institutional maturity, and executive seniority of the convening.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-px bg-brand-stone/50 border border-brand-stone/60 overflow-hidden" data-stagger-group>
            @foreach([
                ['01 / Institutional Governance', 'Building the Transgenerational Firm',        'How founders and equity partners evolve personality-driven practices into durable enterprises. Codifying governance, de-linking client fidelity from singular figures, and engineering succession pipelines.',          'Partner retreats, legal summits, founder roundtables.'],
                ['02 / Discipline of Execution',  'From Aspiration to Intentional Action',       'Why high-potential talent fails without structural consistency. The psychology of execution stamina, designing institutional accountability, and converting ambitious strategies into operational reality.',              'Executive offsites, leadership congresses, high-potential assemblies.'],
                ['03 / Modern Practice',          'Law Firm Operations &amp; The AI Era',        'Navigating the modern intersection of legal practice, AI workflow integration, operational agility, and people strategy — transforming firm management from support overhead into strategic driver.',                   'ALAN congresses, IBA symposia, law management forums.'],
                ['04 / Succession Planning',      'Partnership Succession &amp; Equity Transition','Navigating the unspoken tensions in professional partnerships: equity transfer models, founder retirement psychological dynamics, and preparing the next cohort of institutional custodians.',                         'Closed-door board sessions, senior partner assemblies.'],
                ['05 / Human Capital',            'People Strategy in High-Performance Firms',   'Bridging industrial relations rigor with modern executive coaching — building professional ecosystems where high billable standards and long-term human sustainability coexist.',                                       'People leadership forums, managing partner workshops.'],
                ['06 / Moderation',               'High-Level Plenary Moderation',              'Bringing intellectual rigor, incisive cross-examination, and dignified executive flow to high-profile plenaries involving ministers, jurists, managing partners, and corporate executives.',                          'International summits, national bar conventions, plenary panels.'],
            ] as $topic)
            <div data-stagger-item class="bg-brand-cream p-7 sm:p-8 flex flex-col group hover:bg-brand-parchment/60 transition-colors insight-card-ledger">
                <span class="section-label text-brand-gold mb-3">{!! $topic[0] !!}</span>
                <h3 class="font-serif text-lg font-semibold text-brand-navy mb-3 leading-snug">{!! $topic[1] !!}</h3>
                <p class="text-sm text-brand-charcoal leading-[1.8] flex-1">{!! $topic[2] !!}</p>
                <p class="text-xs text-brand-muted mt-4 pt-4 border-t border-brand-stone/50">
                    <em>Ideal for:</em> {!! $topic[3] !!}
                </p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     ENQUIRY FORM
     ============================================================ --}}
<section id="enquiry" class="py-16 sm:py-24 bg-brand-parchment/40">
    <div class="max-w-3xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Keynote Mandates</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Submit Speaking &amp; Advisory Enquiry
            </h2>
            <p class="text-base text-brand-charcoal mt-3 leading-relaxed">
                Please provide the core particulars of your event. The executive office reviews and responds within 48 hours.
            </p>
        </div>

        <form action="{{ route('speaking.enquire') }}" method="POST" class="space-y-6 bg-white border border-brand-stone/60 p-7 sm:p-10" style="border-radius:2px;">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach([
                    ['full_name',      'text',  'Your Full Name *',                    'e.g. Dr. Adaeze Okafor',            true],
                    ['email',          'email', 'Email Address *',                     'contact@organisation.com',          true],
                    ['phone',          'text',  'Contact Phone',                       '+234 ...',                          false],
                    ['organisation',   'text',  'Organisation / Conference Body *',    'e.g. Nigerian Bar Association',     true],
                    ['job_title',      'text',  'Your Role / Job Title',               'e.g. Managing Partner',             false],
                    ['proposed_date',  'text',  'Proposed Date(s) / Timeframe',        'e.g. October 2026 or Q1 2027',      false],
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

                <div>
                    <label for="engagement_type" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">Nature of Engagement *</label>
                    <select id="engagement_type" name="engagement_type" required
                        class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                        style="border-radius:2px;"
                    >
                        <option value="">Select Engagement Type...</option>
                        <option>Conference / Keynote Address</option>
                        <option>Panel Participation &amp; Moderation</option>
                        <option>Partner &amp; Leadership Retreat Facilitation</option>
                        <option>Law Firm / Strategy Session</option>
                        <option>Governance &amp; Succession Advisory</option>
                        <option>Organisational Workshop</option>
                        <option>Podcast or Media Interview</option>
                        <option>Strategic Collaboration</option>
                    </select>
                    @error('engagement_type')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label for="location_type" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">Format *</label>
                    <select id="location_type" name="location_type" required
                        class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                        style="border-radius:2px;"
                    >
                        <option>In-Person</option>
                        <option>Virtual / Remote</option>
                        <option>Hybrid</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="topic_objectives" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">Proposed Topic, Focus or Objectives *</label>
                <textarea id="topic_objectives" name="topic_objectives" rows="4" required
                    placeholder="What key perspectives or deliverables would you like Modupe to address?"
                    class="w-full text-sm p-4 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                    style="border-radius:2px;"
                >{{ old('topic_objectives') }}</textarea>
                @error('topic_objectives')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
            </div>

            <div class="pt-2">
                <button type="submit" class="btn-base btn-primary w-full justify-center">
                    <span>Submit Speaking Enquiry</span>
                    <span aria-hidden="true">&rarr;</span>
                </button>
            </div>
        </form>

    </div>
</section>

@endsection
