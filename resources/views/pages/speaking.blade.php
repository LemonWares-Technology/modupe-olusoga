@extends('layouts.app')

@section('title', 'Speaking & Executive Advisory | Modupe Olusoga')
@section('meta_description', 'Keynotes, partner retreats, governance advisory, and executive moderation by Modupe Olusoga. Invite Modupe to speak at your conference or leadership summit.')

@section('content')
    <!-- Speaking Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 space-y-6">
                    <div data-reveal-hero>
                        <x-eyebrow>Keynotes &bull; Partner Retreats &bull; Board Advisory</x-eyebrow>
                    </div>

                    <h1 data-reveal-hero class="font-serif text-4xl sm:text-5xl lg:text-6xl text-brand-navy font-normal leading-[1.12]">
                        Provocative perspective for <span class="italic font-light text-brand-gold-dark">leadership and institutions.</span>
                    </h1>

                    <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/85 leading-relaxed font-light">
                        Modupe Olusoga delivers high-impact keynote addresses, facilitates closed-door partner retreats, and guides strategic governance sessions for commercial law firms, professional services bodies, and corporate boards.
                    </p>

                    <div data-reveal-hero class="flex flex-wrap items-center gap-4 pt-2">
                        <x-button variant="primary" size="lg" href="#enquiry" arrow="true">
                            Submit Speaking Enquiry
                        </x-button>
                        <x-button variant="secondary" size="lg" href="#topics">
                            Explore Keynote Topics &rarr;
                        </x-button>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div class="relative max-w-md mx-auto">
                        <div class="absolute -inset-3 rounded border border-brand-gold/30 -rotate-1 pointer-events-none" aria-hidden="true"></div>
                        <div data-reveal-image class="relative rounded overflow-hidden shadow-2xl border border-brand-stone/80 bg-brand-navy">
                            <img src="{{ asset('images/modupe_speaking.jpg') }}" 
                                 alt="Modupe Olusoga on Stage" 
                                 width="800" 
                                 height="600" 
                                 class="w-full h-[440px] object-cover hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-navy/90 via-brand-navy/30 to-transparent"></div>
                            <div class="absolute bottom-6 left-6 right-6 text-white space-y-1">
                                <p class="text-[10px] font-semibold uppercase tracking-[0.25em] text-brand-gold">Global Convenings</p>
                                <p class="font-serif text-base font-normal leading-snug">
                                    International Bar Association &bull; Managing Partner Forums &bull; Executive Offsites
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Keynote Curricula & Topics -->
    <section id="topics" class="py-24 bg-brand-cream border-b border-brand-stone/70" data-reveal>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                align="center"
                eyebrow="Keynote Curricula"
                title="Signature Curricula &amp;"
                italic="Executive Addresses."
                description="Every engagement is tailored to the strategic objectives, institutional maturity, and executive seniority of the convening.">
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12" data-stagger-group>
                
                <!-- Topic 01 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">01 // INSTITUTIONAL GOVERNANCE</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">Building the Transgenerational Firm</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            How founders and equity partners evolve personality-driven practices into durable enterprises. Codifying governance, de-linking client fidelity from singular figures, and engineering succession pipelines.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> Partner retreats, legal summits, founder roundtables.
                    </div>
                </div>

                <!-- Topic 02 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">02 // DISCIPLINE OF EXECUTION</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">From Aspiration to Intentional Action</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Why high-potential talent fails without structural consistency. The psychology of execution stamina, designing institutional accountability, and converting ambitious strategies into operational reality.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> Executive offsites, leadership congresses, high-potential assemblies.
                    </div>
                </div>

                <!-- Topic 03 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">03 // MODERN PRACTICE</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">Law Firm Operations &amp; The AI Era</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Navigating the modern intersection of legal practice, AI workflow integration, operational agility, and people strategy—transforming firm management from support overhead into strategic driver.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> ALAN congresses, IBA symposia, law management forums.
                    </div>
                </div>

                <!-- Topic 04 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">04 // SUCCESSION PLANNING</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">Partnership Succession &amp; Equity Transition</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Navigating the unspoken tensions in professional partnerships: equity transfer models, founder retirement psychological dynamics, and preparing the next cohort of institutional custodians.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> Closed-door board sessions, senior partner assemblies.
                    </div>
                </div>

                <!-- Topic 05 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">05 // HUMAN CAPITAL ARCHITECTURE</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">People Strategy in High-Performance Firms</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Bridging industrial relations rigor with modern executive coaching: building professional ecosystems where high billable standards and long-term human sustainability coexist.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> People leadership forums, managing partner workshops.
                    </div>
                </div>

                <!-- Topic 06 -->
                <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm hover:border-brand-gold/60 transition-all duration-300 space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <span class="text-[10px] font-mono text-brand-gold font-bold uppercase tracking-widest block">06 // EXECUTIVE MODERATION</span>
                        <h3 class="font-serif text-xl sm:text-2xl font-normal text-brand-navy">High-Level Plenary Moderation</h3>
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Bringing intellectual rigor, incisive cross-examination, and dignified executive flow to high-profile plenaries involving ministers, jurists, managing partners, and corporate executives.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-brand-stone/60 text-[11px] text-brand-muted font-light">
                        <em>Ideal for:</em> International summits, national bar conventions, plenary panels.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Speaking Enquiry Form -->
    <section id="enquiry" class="py-24 bg-brand-parchment/60">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <x-section-heading 
                align="center"
                eyebrow="Keynote Mandates"
                title="Submit Speaking &amp;"
                italic="Advisory Enquiry."
                description="Please provide the core particulars of your event. The executive office reviews and responds within 48 hours.">
            </x-section-heading>

            <div class="bg-white rounded border border-brand-stone/80 shadow-xl p-8 sm:p-12 mt-12">
                <form action="{{ route('speaking.enquire') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="full_name" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Your Full Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="full_name" name="full_name" required value="{{ old('full_name') }}" placeholder="e.g. Dr. Adaeze Okafor" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                            @error('full_name') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="contact@organisation.com" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                            @error('email') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Contact Phone
                            </label>
                            <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+234 ..." class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                        </div>

                        <div>
                            <label for="organisation" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Organisation / Conference Body <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="organisation" name="organisation" required value="{{ old('organisation') }}" placeholder="e.g. Nigerian Bar Association" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                            @error('organisation') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="job_title" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Your Role / Job Title
                            </label>
                            <input type="text" id="job_title" name="job_title" value="{{ old('job_title') }}" placeholder="e.g. Conference Planning Chair / Managing Partner" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                        </div>

                        <div>
                            <label for="engagement_type" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Nature of Engagement <span class="text-red-500">*</span>
                            </label>
                            <select id="engagement_type" name="engagement_type" required class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                <option value="">Select Engagement Type...</option>
                                <option value="Keynote Address">Conference / Keynote Address</option>
                                <option value="Panel Participation & Moderation">Panel Participation &amp; Moderation</option>
                                <option value="Partner & Leadership Retreat">Partner &amp; Leadership Retreat Facilitation</option>
                                <option value="Law Firm Strategy Session">Law Firm / Strategy Session</option>
                                <option value="Governance & Succession Advisory">Governance &amp; Succession Advisory</option>
                                <option value="Organisational Workshop">Organisational Workshop</option>
                                <option value="Podcast or Media Interview">Podcast or Media Interview</option>
                                <option value="Strategic Collaboration">Strategic Collaboration</option>
                            </select>
                            @error('engagement_type') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="proposed_date" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Proposed Date(s) / Timeframe
                            </label>
                            <input type="text" id="proposed_date" name="proposed_date" value="{{ old('proposed_date') }}" placeholder="e.g. October 2026 or Q1 2027" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                        </div>

                        <div>
                            <label for="location_type" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Format <span class="text-red-500">*</span>
                            </label>
                            <select id="location_type" name="location_type" required class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                                <option value="In-Person">In-Person</option>
                                <option value="Virtual">Virtual / Remote</option>
                                <option value="Hybrid">Hybrid</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="topic_objectives" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                            Proposed Topic, Focus or Objectives <span class="text-red-500">*</span>
                        </label>
                        <textarea id="topic_objectives" name="topic_objectives" rows="4" required placeholder="What key perspectives or deliverables would you like Modupe to address?" class="w-full text-xs sm:text-sm p-4 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">{{ old('topic_objectives') }}</textarea>
                        @error('topic_objectives') <p class="text-xs text-red-500 mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="pt-2">
                        <x-button variant="primary" size="lg" type="submit" arrow="true" class="w-full">
                            Submit Speaking Enquiry
                        </x-button>
                    </div>

                </form>
            </div>

        </div>
    </section>
@endsection
