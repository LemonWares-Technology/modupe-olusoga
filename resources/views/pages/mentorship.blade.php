@extends('layouts.app')

@section('title', 'The 6-Month Mentorship Programme | Modupe Olusoga')
@section('meta_description', 'A focused six-month executive mentorship programme for leaders and professionals ready to move beyond intention and deliberately birth their goals. February – July Cohort.')

@section('content')

{{-- ============================================================
     HERO — 7/5 split, copy left, image right
     ============================================================ --}}
<section class="pt-32 pb-0 border-b border-brand-stone/60 bg-brand-cream overflow-hidden">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-end">

            {{-- Copy --}}
            <div class="lg:col-span-7 pb-14 space-y-7">
                <div class="space-y-4">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold-dark" data-reveal-hero>Cohort 2027 &bull; Applications Open</p>
                    <h1
                        class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight"
                        style="font-size: clamp(2.5rem, 5.5vw, 5rem);"
                        data-hero-heading
                    >
                        You already have the aspiration. Are you ready to do the work?
                    </h1>
                </div>

                <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                    For executives, partners, and high-potential professionals prepared to move beyond intention and build the mental stamina, structured weekly rituals, and unbroken consistency required to realize their most significant mandates.
                </p>

                {{-- Core environment — inline strip, no frosted card --}}
                <div class="border-t border-brand-stone/60 pt-6" data-reveal-hero>
                    <p class="section-label text-brand-muted mb-4">The Core Environment</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Clarity','Action','Accountability','Consistency','Execution'] as $pillar)
                        <span class="text-xs font-medium text-brand-charcoal border border-brand-stone bg-brand-parchment px-3 py-1.5" style="border-radius:2px;">
                            {{ $pillar }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4" data-reveal-hero>
                    <a href="#apply" class="btn-base btn-primary">
                        <span>Submit Application</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <p class="text-sm text-brand-muted">
                        <span class="font-semibold text-brand-navy">Limited Cohort</span> &bull; &#8358;200,000 Tuition
                    </p>
                </div>
            </div>

            {{-- Image — flush to bottom of section --}}
            <div class="lg:col-span-5">
                <div class="relative overflow-hidden image-wipe-container" data-image-wipe>
                    <img
                        src="{{ asset('images/mentorship_cohort.jpg') }}"
                        alt="Mentorship Cohort Atmosphere"
                        width="800"
                        height="600"
                        class="w-full h-[420px] sm:h-[500px] object-cover"
                        loading="eager"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/85 via-brand-navy/30 to-transparent" aria-hidden="true"></div>
                    <div class="absolute bottom-0 inset-x-0 px-7 pb-7 text-white space-y-2">
                        <p class="section-label text-brand-gold">The Journey</p>
                        <p class="font-serif text-base font-semibold leading-snug">
                            Aspiration &rarr; Clarity &rarr; Action &rarr; Consistency &rarr; Results
                        </p>
                        <p class="text-xs text-white/65">Facilitated directly by Modupe Olusoga with guest executive interventions.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     PROGRAMME ARCHITECTURE — editorial ledger rows
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Programme Architecture</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Structured for Measurable and Enduring Progress
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-brand-stone/50 border border-brand-stone/60 overflow-hidden" data-stagger-group>
            @foreach([
                ['Stage 01 &bull; Mid-January', 'In-Person Orientation',   'A focused convening in Lagos ahead of commencement. Clarifying personal baseline metrics, establishing cohort agreements, and setting six-month milestone markers.'],
                ['Stage 02 &bull; Feb – Jul',   'Weekly Masterclasses',    '<strong>Thursdays | 7:00 PM – 9:00 PM (WAT)</strong>. Structured masterclasses featuring reflective inquiry, tactical problem-solving, and systematic progress accountability.'],
                ['Stage 03 &bull; Continuous',  'Cohort Accountability',   'Structured weekly check-ins, peer progress tracking, and calibrated challenges to keep momentum alive when normal organizational pressures mount.'],
                ['Stage 04 &bull; July Finale', 'Culmination &amp; Review','Formal defense of achievements, retrospective analysis of growth, transition plans for self-sustaining discipline, and alumni network induction.'],
            ] as $stage)
            <div data-stagger-item class="bg-brand-cream p-7 sm:p-8 flex flex-col">
                <span class="section-label text-brand-gold mb-3">{!! $stage[0] !!}</span>
                <h3 class="font-serif text-lg font-semibold text-brand-navy mb-3">{!! $stage[1] !!}</h3>
                <p class="text-sm text-brand-charcoal leading-[1.8]">{!! $stage[2] !!}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

{{-- ============================================================
     APPLICATION FORM
     ============================================================ --}}
<section id="apply" class="py-16 sm:py-24 bg-brand-parchment/40 border-b border-brand-stone/60">
    <div class="max-w-3xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Application Process</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Apply for the 6-Month Mentorship Programme
            </h2>
            <p class="text-base text-brand-charcoal leading-relaxed mt-3">
                Please complete this questionnaire thoughtfully. Every submission is individually evaluated to ensure cohort chemistry and readiness.
            </p>
        </div>

        <form action="{{ route('mentorship.apply') }}" method="POST" class="space-y-8 bg-white border border-brand-stone/60 p-7 sm:p-10" style="border-radius:2px;">
            @csrf

            {{-- 1. Personal & Professional Profile --}}
            <div>
                <h3 class="font-serif text-lg font-semibold text-brand-navy pb-3 border-b border-brand-stone/60 mb-6">
                    1. Personal &amp; Professional Profile
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    @foreach([
                        ['full_name',     'text',  'Full Name *',                      'e.g. Modupe Olusoga',          true],
                        ['email',         'email', 'Email Address *',                  'executive@domain.com',         true],
                        ['phone',         'text',  'Phone / WhatsApp *',               '+234 ...',                     true],
                        ['location',      'text',  'City &amp; Country *',             'e.g. Lagos, Nigeria',          true],
                        ['current_role',  'text',  'Current Role / Title *',           'e.g. Head of Strategy',        true],
                        ['organisation',  'text',  'Organisation / Firm',              'e.g. Streamsowers & Köhn',     false],
                    ] as [$name, $type, $label, $placeholder, $required])
                    <div>
                        <label for="{{ $name }}" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">
                            {!! $label !!}
                        </label>
                        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
                            {{ $required ? 'required' : '' }}
                            value="{{ old($name) }}"
                            placeholder="{{ $placeholder }}"
                            class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                            style="border-radius:2px;"
                        >
                        @error($name)<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- 2. Aspirations & Goals --}}
            <div>
                <h3 class="font-serif text-lg font-semibold text-brand-navy pb-3 border-b border-brand-stone/60 mb-6">
                    2. Aspirations &amp; Goals
                </h3>
                <div class="space-y-5">
                    @foreach([
                        ['aspirations_and_goals', 4, 'What specific goals are you serious about birthing? *',             'Describe the core mandate you are committed to advancing over the next six months.'],
                        ['six_month_objective',   3, 'What concrete milestone must be achieved by end of six months? *', 'Specify tangible, measurable evidence of progress.'],
                        ['why_now',               3, 'Why is now the right time for this mentorship experience? *',      ''],
                    ] as [$name, $rows, $label, $hint])
                    <div>
                        <label for="{{ $name }}" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">{{ $label }}</label>
                        @if($hint)<p class="text-xs text-brand-muted mb-2">{{ $hint }}</p>@endif
                        <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" required
                            class="w-full text-sm p-4 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                            style="border-radius:2px;"
                        >{{ old($name) }}</textarea>
                        @error($name)<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- 3. Commitments --}}
            <div class="space-y-4 pt-4 border-t border-brand-stone/60">
                <h3 class="font-serif text-lg font-semibold text-brand-navy">3. Commitments &amp; Agreements</h3>
                @foreach([
                    ['schedule_commitment',   'Schedule Commitment',   'I confirm that I can attend the mid-January orientation in Lagos and commit to Thursday weekly sessions (7:00 PM – 9:00 PM WAT, February – July).'],
                    ['investment_acknowledged','Tuition Investment',    'I understand that the programme investment is <strong class="font-semibold">₦200,000</strong> per participant, payable upon application acceptance and cohort confirmation.'],
                ] as [$name, $title, $text])
                <label class="flex items-start gap-3 p-4 border border-brand-stone/60 cursor-pointer hover:bg-brand-cream/60 transition-colors" style="border-radius:2px;">
                    <input type="checkbox" name="{{ $name }}" value="1" required {{ old($name) ? 'checked' : '' }}
                        class="mt-0.5 h-4 w-4 border-brand-stone text-brand-navy focus:ring-brand-gold shrink-0">
                    <span class="text-sm text-brand-charcoal leading-relaxed">
                        <strong class="font-semibold text-brand-navy">{{ $title }}:</strong>
                        {!! $text !!}
                    </span>
                </label>
                @error($name)<p class="text-xs text-red-500">{{ $message }}</p>@enderror
                @endforeach
            </div>

            {{-- Submit --}}
            <div class="pt-4">
                <button type="submit" class="btn-base btn-primary w-full justify-center">
                    <span>Submit Mentorship Application</span>
                    <span aria-hidden="true">&rarr;</span>
                </button>
                <p class="text-center text-xs text-brand-muted mt-3">
                    Applications are evaluated on a rolling basis. Successful applicants receive onboarding notices within 5 business days.
                </p>
            </div>

        </form>
    </div>
</section>

@endsection
