@extends('layouts.app')

@section('title', 'About Modupe Olusoga | Executive Biography & Philosophy')
@section('meta_description', 'Executive profile of Modupe Olusoga — Institutional Leader, Chief Operating Officer of Streamsowers & Köhn, ALAN President, and contributor to the International Bar Association.')

@section('content')
    <!-- Executive Biography Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-5 order-2 lg:order-1">
                    <div class="relative max-w-md mx-auto">
                        <div class="absolute -inset-3 rounded border border-brand-gold/30 -rotate-1 pointer-events-none" aria-hidden="true"></div>
                        <div data-reveal-image class="relative rounded overflow-hidden shadow-2xl border border-brand-stone/80 bg-white">
                            <img src="{{ asset('images/modupe_portrait.jpg') }}" 
                                 alt="Modupe Olusoga Executive Portrait" 
                                 width="800" 
                                 height="1040" 
                                 class="w-full h-[520px] object-cover object-top hover:scale-[1.02] transition-transform duration-700">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                    <div class="space-y-3">
                        <div data-reveal-hero>
                            <x-eyebrow>Executive Biography &bull; Monograph</x-eyebrow>
                        </div>
                        <h1 data-reveal-hero class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal leading-[1.12]">
                            Modupe Olusoga
                        </h1>
                        <p data-reveal-hero class="text-xs sm:text-sm font-semibold tracking-[0.2em] uppercase text-brand-muted">
                            Institutional Leader &bull; Professional Services Executive &bull; Author &bull; Speaker
                        </p>
                    </div>

                    <p data-reveal-hero class="text-lg sm:text-xl text-brand-charcoal/90 leading-relaxed font-light">
                        Operating at the intersection of institutional architecture and human capability, advising and leading across governance, people systems, operations, and organizational longevity.
                    </p>

                    <div data-reveal-hero class="p-6 rounded bg-white/70 border border-brand-stone/80 space-y-3">
                        <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                            Currently serving as <strong class="text-brand-navy font-medium">Chief Operating Officer of Streamsowers &amp; Köhn</strong>, partnering with equity leadership to shape strategic direction, build resilient governance structures, and drive the operational backbone that supports top-tier commercial legal practice.
                        </p>
                    </div>

                    <p data-reveal-hero class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                        Beyond organizational leadership, my intellectual inquiries center on a definitive question: <em>How do we build people and institutions with the clarity, discipline, and stamina to translate potential into enduring outcomes?</em>
                    </p>

                    <div data-reveal-hero class="pt-2 flex flex-wrap gap-4 items-center">
                        <x-button variant="primary" size="lg" href="{{ route('speaking') }}#enquiry" arrow="true">
                            Invite to Speak
                        </x-button>
                        <x-button variant="secondary" size="lg" href="{{ route('mentorship') }}">
                            Mentorship Programme &rarr;
                        </x-button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- The Dual Philosophy Manifesto -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70" data-reveal>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="text-center space-y-3">
                <x-eyebrow :dot="false" class="justify-center">Guiding Philosophy</x-eyebrow>
                <h2 class="font-serif text-3xl sm:text-5xl text-brand-navy font-normal">
                    Operating at Two Connected Levels
                </h2>
            </div>

            <div class="space-y-6 text-base sm:text-lg text-brand-charcoal/85 leading-relaxed font-light dropcap">
                <p>
                    At the <strong>organisational level</strong>, my focus encompasses institution building, governance, leadership development, succession, organisational effectiveness, professional services management, and the future of work. Across law firms and professional services, longevity is often threatened when firms are built as proprietorships in partnership clothing. My mission is to help firms de-link their excellence from single charismatic figures and embed durability into their policies, culture, and operational architecture.
                </p>
                <p>
                    At the <strong>individual level</strong>, this work extends to helping professionals gain clarity around their aspirations, translate goals into deliberate action, and develop the consistency required to achieve them. Aspiration without structure generates frustration; ambition without accountability evaporates.
                </p>
            </div>

            <!-- The Five Levers of Execution -->
            <div class="p-8 sm:p-12 rounded bg-white border border-brand-stone/80 shadow-sm mt-12">
                <h3 class="font-serif text-2xl text-brand-navy text-center mb-8 font-normal">
                    The Architecture of Execution
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-5 gap-4 text-center">
                    <div class="p-4 rounded bg-brand-cream border border-brand-stone/70">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-brand-gold block">Stage 01</span>
                        <strong class="font-serif text-base text-brand-navy block mt-1">Aspiration</strong>
                        <p class="text-[11px] text-brand-muted mt-1 font-light">Vision &amp; raw desire</p>
                    </div>
                    <div class="p-4 rounded bg-brand-cream border border-brand-stone/70">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-brand-gold block">Stage 02</span>
                        <strong class="font-serif text-base text-brand-navy block mt-1">Clarity</strong>
                        <p class="text-[11px] text-brand-muted mt-1 font-light">Non-negotiable levers</p>
                    </div>
                    <div class="p-4 rounded bg-brand-cream border border-brand-stone/70">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-brand-gold block">Stage 03</span>
                        <strong class="font-serif text-base text-brand-navy block mt-1">Action</strong>
                        <p class="text-[11px] text-brand-muted mt-1 font-light">Deliberate weekly rituals</p>
                    </div>
                    <div class="p-4 rounded bg-brand-cream border border-brand-stone/70">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-brand-gold block">Stage 04</span>
                        <strong class="font-serif text-base text-brand-navy block mt-1">Consistency</strong>
                        <p class="text-[11px] text-brand-muted mt-1 font-light">Unbroken accountability</p>
                    </div>
                    <div class="p-4 rounded bg-brand-cream border border-brand-stone/70">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-brand-gold block">Stage 05</span>
                        <strong class="font-serif text-base text-brand-navy block mt-1">Results</strong>
                        <p class="text-[11px] text-brand-muted mt-1 font-light">Enduring outcomes</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Leadership Roles & Chronology (Sticky Editorial Layout) -->
    <section class="py-24 bg-brand-parchment/50 border-b border-brand-stone/70">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                
                <!-- Left Sticky Section Label -->
                <div class="lg:col-span-4 lg:sticky lg:top-28 self-start space-y-3">
                    <x-eyebrow>Leadership Record</x-eyebrow>
                    <h2 class="font-serif text-3xl sm:text-4xl text-brand-navy font-normal leading-snug">
                        Chronology of Institutional Responsibilities
                    </h2>
                    <p class="text-xs sm:text-sm text-brand-charcoal/70 leading-relaxed font-light">
                        A continuous progression of enterprise administration, industry stewardship, and global engagement.
                    </p>
                </div>

                <!-- Right Chronology Rows -->
                <div class="lg:col-span-8 space-y-6" data-stagger-group>
                    
                    <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                        <div class="md:w-1/3 space-y-1">
                            <span class="text-[10px] font-mono font-bold text-brand-gold uppercase tracking-widest block">Current Mandate</span>
                            <h3 class="font-serif text-lg font-normal text-brand-navy">Chief Operating Officer</h3>
                            <p class="text-xs text-brand-muted font-medium">Streamsowers &amp; Köhn</p>
                        </div>
                        <div class="md:w-2/3 space-y-2 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed border-t md:border-t-0 md:border-l border-brand-stone/60 pt-4 md:pt-0 md:pl-6">
                            <p>
                                Directing firmwide operations, administrative stewardship, people strategy, and institutional modernisation across an established commercial law firm in Nigeria. Partnering closely with the Managing Partner and Practice Group leaders to elevate operational resilience and delivery predictability.
                            </p>
                        </div>
                    </div>

                    <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                        <div class="md:w-1/3 space-y-1">
                            <span class="text-[10px] font-mono font-bold text-brand-gold uppercase tracking-widest block">2026 – 2029 Term</span>
                            <h3 class="font-serif text-lg font-normal text-brand-navy">President</h3>
                            <p class="text-xs text-brand-muted font-medium">Assoc. of Law Firm Administrators Nigeria (ALAN)</p>
                        </div>
                        <div class="md:w-2/3 space-y-2 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed border-t md:border-t-0 md:border-l border-brand-stone/60 pt-4 md:pt-0 md:pl-6">
                            <p>
                                Leading the national professional body to elevate, standardize, and empower law firm administrators and operations leaders across Nigeria's legal industry. Championing continuing executive certification, operations benchmarking, and governance standards.
                            </p>
                        </div>
                    </div>

                    <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                        <div class="md:w-1/3 space-y-1">
                            <span class="text-[10px] font-mono font-bold text-brand-gold uppercase tracking-widest block">International Dialogue</span>
                            <h3 class="font-serif text-lg font-normal text-brand-navy">African Regional Liaison Officer</h3>
                            <p class="text-xs text-brand-muted font-medium">International Bar Association (IBA)</p>
                        </div>
                        <div class="md:w-2/3 space-y-2 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed border-t md:border-t-0 md:border-l border-brand-stone/60 pt-4 md:pt-0 md:pl-6">
                            <p>
                                Contributing to the IBA Law Firm Management Committee, bridging international legal management paradigms with African regional realities on digital workflows, AI adoption, and cross-generational partner succession.
                            </p>
                        </div>
                    </div>

                    <div data-stagger-item class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col md:flex-row gap-6 items-start">
                        <div class="md:w-1/3 space-y-1">
                            <span class="text-[10px] font-mono font-bold text-brand-gold uppercase tracking-widest block">Advisory Foundations</span>
                            <h3 class="font-serif text-lg font-normal text-brand-navy">People Strategy &amp; Governance</h3>
                            <p class="text-xs text-brand-muted font-medium">KPMG Nigeria Advisory</p>
                        </div>
                        <div class="md:w-2/3 space-y-2 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed border-t md:border-t-0 md:border-l border-brand-stone/60 pt-4 md:pt-0 md:pl-6">
                            <p>
                                Extensive career roots in human resources management, industrial relations, organizational design, and corporate restructuring within Big Four consulting environments.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Global Executive Credentials -->
    <section class="py-24 bg-brand-navy text-white" data-reveal>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                align="center"
                dark="true"
                eyebrow="Academic &amp; Professional Rigor"
                title="Global Executive Education &amp;"
                italic="Accreditations."
                description="Scholarly foundations grounded in leading international business schools and human capital institutions.">
            </x-section-heading>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                
                <div class="p-8 rounded bg-white/5 border border-white/10 space-y-3 hover:border-brand-gold/60 transition-colors">
                    <span class="text-brand-gold font-serif text-3xl font-light block">MSc</span>
                    <h3 class="font-serif text-lg font-normal text-white">Industrial &amp; Labour Relations</h3>
                    <p class="text-xs text-brand-stone/70 font-light leading-relaxed">
                        Deep institutional scholarship in labour economics, dispute arbitration, and organizational dynamics.
                    </p>
                </div>

                <div class="p-8 rounded bg-white/5 border border-white/10 space-y-3 hover:border-brand-gold/60 transition-colors">
                    <span class="text-brand-gold font-serif text-3xl font-light block">SPHRi</span>
                    <h3 class="font-serif text-lg font-normal text-white">Senior Professional in HR</h3>
                    <p class="text-xs text-brand-stone/70 font-light leading-relaxed">
                        Globally accredited certification affirming executive-level human capital strategy and governance.
                    </p>
                </div>

                <div class="p-8 rounded bg-white/5 border border-white/10 space-y-3 hover:border-brand-gold/60 transition-colors">
                    <span class="text-brand-gold font-serif text-3xl font-light block">Harvard</span>
                    <h3 class="font-serif text-lg font-normal text-white">Harvard &amp; MIT Sloan</h3>
                    <p class="text-xs text-brand-stone/70 font-light leading-relaxed">
                        Executive education credentials in leadership, strategy, operations, and institutional technology.
                    </p>
                </div>

                <div class="p-8 rounded bg-white/5 border border-white/10 space-y-3 hover:border-brand-gold/60 transition-colors">
                    <span class="text-brand-gold font-serif text-3xl font-light block">Coach</span>
                    <h3 class="font-serif text-lg font-normal text-white">Certified Executive Coach</h3>
                    <p class="text-xs text-brand-stone/70 font-light leading-relaxed">
                        Accredited coaching credential facilitating executive transitions, personal mastery, and consistent leadership.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
