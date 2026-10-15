@extends('layouts.app')

@section('title', 'The 6-Month Mentorship Programme | Modupe Olusoga')
@section('meta_description', 'A focused six-month executive mentorship programme for leaders and professionals ready to move beyond intention and deliberately birth their goals. February – July Cohort.')

@section('content')
    <!-- Programme Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 space-y-6">
                    <div data-reveal-hero>
                        <x-eyebrow>Cohort 2027 &bull; Applications Open</x-eyebrow>
                    </div>

                    <h1 data-reveal-hero class="font-serif text-4xl sm:text-5xl lg:text-6xl text-brand-navy font-normal leading-[1.12]">
                        You already have the aspiration. <span class="italic font-light text-brand-gold-dark">Are you ready to do the work?</span>
                    </h1>

                    <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/85 leading-relaxed font-light">
                        For executives, partners, and high-potential professionals prepared to move beyond intention and build the mental stamina, structured weekly rituals, and unbroken consistency required to realize their most significant mandates.
                    </p>

                    <div data-reveal-hero class="p-6 rounded bg-white/80 border border-brand-stone/80 space-y-3">
                        <div class="text-[10px] uppercase tracking-[0.25em] text-brand-gold font-semibold">The Core Environment</div>
                        <div class="grid grid-cols-5 gap-2 text-center text-xs font-medium text-brand-navy border-t border-brand-stone/60 pt-3">
                            <div class="p-2 bg-brand-cream/60 rounded">Clarity</div>
                            <div class="p-2 bg-brand-cream/60 rounded">Action</div>
                            <div class="p-2 bg-brand-cream/60 rounded">Accountability</div>
                            <div class="p-2 bg-brand-cream/60 rounded">Consistency</div>
                            <div class="p-2 bg-brand-cream/60 rounded">Execution</div>
                        </div>
                    </div>

                    <div data-reveal-hero class="flex flex-wrap items-center gap-4 pt-2">
                        <x-button variant="primary" size="lg" href="#apply" arrow="true">
                            Submit Application
                        </x-button>
                        <div class="text-xs text-brand-muted tracking-wide font-light">
                            <span class="font-medium text-brand-navy">Limited Cohort</span> &bull; ₦200,000 Tuition
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative max-w-md mx-auto">
                        <div class="absolute -inset-3 rounded border border-brand-gold/30 -rotate-1 pointer-events-none" aria-hidden="true"></div>
                        <div data-reveal-image class="relative rounded overflow-hidden shadow-2xl border border-brand-stone/80 bg-brand-navy">
                            <img src="{{ asset('images/mentorship_cohort.jpg') }}" 
                                 alt="Mentorship Cohort Atmosphere" 
                                 width="800" 
                                 height="600" 
                                 class="w-full h-[460px] object-cover hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/95 via-brand-navy/40 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 right-6 text-white space-y-2">
                                <p class="text-[10px] font-semibold uppercase tracking-[0.25em] text-brand-gold">The Journey</p>
                                <p class="font-serif text-lg leading-snug font-normal">
                                    Aspiration &rarr; Clarity &rarr; Action &rarr; Consistency &rarr; Results
                                </p>
                                <p class="text-[11px] text-white/70 font-light">
                                    Facilitated directly by Modupe Olusoga with guest executive interventions.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Programme Architecture Details -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70" data-reveal>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                align="center"
                eyebrow="Programme Architecture"
                title="Structured for Measurable"
                italic="and Enduring Progress."
                description="This experience is engineered not for motivational highs, but to provide the quiet, relentless scaffolding required for breakthrough execution.">
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12" data-stagger-group>
                
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Stage 01 &bull; Mid-January</span>
                        <h3 class="font-serif text-xl font-normal text-brand-navy">In-Person Orientation</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            A focused convening in Lagos ahead of commencement. Clarifying personal baseline metrics, establishing cohort agreements, and setting six-month milestone markers.
                        </p>
                    </div>
                </div>

                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Stage 02 &bull; Feb – Jul</span>
                        <h3 class="font-serif text-xl font-normal text-brand-navy">Weekly Masterclasses</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            <strong>Thursdays | 7:00 PM – 9:00 PM (WAT)</strong>. Structured masterclasses featuring reflective inquiry, tactical problem-solving, and systematic progress accountability.
                        </p>
                    </div>
                </div>

                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Stage 03 &bull; Continuous</span>
                        <h3 class="font-serif text-xl font-normal text-brand-navy">Cohort Accountability</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Structured weekly check-ins, peer progress tracking, and calibrated challenges to keep momentum alive when normal organizational pressures mount.
                        </p>
                    </div>
                </div>

                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] uppercase tracking-widest font-bold text-brand-gold block">Stage 04 &bull; July Finale</span>
                        <h3 class="font-serif text-xl font-normal text-brand-navy">Culmination &amp; Review</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Formal defense of achievements, retrospective analysis of growth, transition plans for self-sustaining discipline, and alumni network induction.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section id="apply" class="py-24 bg-brand-parchment/60 border-b border-brand-stone/70">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <x-section-heading 
                align="center"
                eyebrow="Application Process"
                title="Apply for the 6-Month Mentorship Programme"
                description="Please complete this questionnaire thoughtfully. Every submission is individually evaluated to ensure cohort chemistry and readiness.">
            </x-section-heading>

            <div class="bg-white rounded border border-brand-stone/80 shadow-xl p-8 sm:p-12 mt-12">
                <form action="{{ route('mentorship.apply') }}" method="POST" class="space-y-8">
                    @csrf

                    <!-- 1. Personal & Professional Profile -->
                    <div>
                        <h3 class="font-serif text-xl font-normal text-brand-navy pb-3 border-b border-brand-stone/80 mb-6">
                            1. Personal &amp; Professional Profile
                        </h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="full_name" name="full_name" required value="{{ old('full_name') }}" placeholder="e.g. Modupe Olusoga" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('full_name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="executive@domain.com" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Phone / WhatsApp <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="+234 ..." class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('phone') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="location" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    City &amp; Country of Residence <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="location" name="location" required value="{{ old('location') }}" placeholder="e.g. Lagos, Nigeria" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('location') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="current_role" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Current Professional Role / Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="current_role" name="current_role" required value="{{ old('current_role') }}" placeholder="e.g. Head of Strategy / Partner" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('current_role') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="organisation" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Organisation / Firm Name
                                </label>
                                <input type="text" id="organisation" name="organisation" value="{{ old('organisation') }}" placeholder="e.g. Streamsowers & Köhn" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                @error('organisation') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- 2. Aspirations, Goals & Execution -->
                    <div>
                        <h3 class="font-serif text-xl font-normal text-brand-navy pb-3 border-b border-brand-stone/80 mb-6">
                            2. Aspirations &amp; Goals
                        </h3>

                        <div class="space-y-6">
                            <div>
                                <label for="aspirations_and_goals" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    What specific goals, ambition, or venture are you serious about birthing? <span class="text-red-500">*</span>
                                </label>
                                <p class="text-xs text-brand-muted mb-2 font-light">Describe the core mandate you are committed to advancing over the next six months.</p>
                                <textarea id="aspirations_and_goals" name="aspirations_and_goals" rows="4" required class="w-full text-xs sm:text-sm p-4 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">{{ old('aspirations_and_goals') }}</textarea>
                                @error('aspirations_and_goals') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="six_month_objective" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    What concrete milestone must be achieved by the end of six months? <span class="text-red-500">*</span>
                                </label>
                                <p class="text-xs text-brand-muted mb-2 font-light">Specify tangible, measurable evidence of progress.</p>
                                <textarea id="six_month_objective" name="six_month_objective" rows="3" required class="w-full text-xs sm:text-sm p-4 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">{{ old('six_month_objective') }}</textarea>
                                @error('six_month_objective') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label for="why_now" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                    Why is now the right time for this mentorship experience? <span class="text-red-500">*</span>
                                </label>
                                <textarea id="why_now" name="why_now" rows="3" required class="w-full text-xs sm:text-sm p-4 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">{{ old('why_now') }}</textarea>
                                @error('why_now') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- 3. Commitments & Agreements -->
                    <div class="space-y-4 pt-4 border-t border-brand-stone/80">
                        <h3 class="font-serif text-xl font-normal text-brand-navy">
                            3. Commitments &amp; Agreements
                        </h3>

                        <label class="flex items-start gap-3 p-4 rounded bg-brand-cream/60 border border-brand-stone/80 cursor-pointer hover:bg-brand-cream transition-colors">
                            <input type="checkbox" name="schedule_commitment" value="1" required {{ old('schedule_commitment') ? 'checked' : '' }} class="mt-1 h-4 w-4 rounded border-brand-stone text-brand-gold focus:ring-brand-gold">
                            <span class="text-xs text-brand-charcoal/90 leading-relaxed font-light">
                                <strong class="font-medium text-brand-navy">Schedule Commitment:</strong> I confirm that I can attend the mid-January orientation in Lagos and commit to Thursday weekly sessions (7:00 PM – 9:00 PM WAT, February – July).
                            </span>
                        </label>
                        @error('schedule_commitment') <p class="text-xs text-red-500">{{ $message }}</p> @enderror

                        <label class="flex items-start gap-3 p-4 rounded bg-brand-cream/60 border border-brand-stone/80 cursor-pointer hover:bg-brand-cream transition-colors">
                            <input type="checkbox" name="investment_acknowledged" value="1" required {{ old('investment_acknowledged') ? 'checked' : '' }} class="mt-1 h-4 w-4 rounded border-brand-stone text-brand-gold focus:ring-brand-gold">
                            <span class="text-xs text-brand-charcoal/90 leading-relaxed font-light">
                                <strong class="font-medium text-brand-navy">Tuition Investment:</strong> I understand that the programme investment is <strong class="text-brand-navy font-semibold">₦200,000</strong> per participant, payable upon application acceptance and cohort confirmation.
                            </span>
                        </label>
                        @error('investment_acknowledged') <p class="text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-6">
                        <x-button variant="primary" size="lg" type="submit" arrow="true" class="w-full">
                            Submit Mentorship Application
                        </x-button>
                        <p class="text-center text-[11px] text-brand-muted mt-3 font-light">
                            Applications are evaluated on a rolling basis. Successful applicants receive formal onboarding notices within 5 business days.
                        </p>
                    </div>

                </form>
            </div>

        </div>
    </section>
@endsection
