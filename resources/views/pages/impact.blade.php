@extends('layouts.app')

@section('title', 'Leadership & Institutional Impact | Modupe Olusoga')
@section('meta_description', 'Institutional leadership roles, social impact initiatives, and professional platforms: Streamsowers & Köhn, ALAN, The Strides Platform, and Project CHAM.')

@section('content')
    <!-- Impact Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <div data-reveal-hero class="flex justify-center">
                <x-eyebrow>Stewardship &bull; Institutional Ecosystem</x-eyebrow>
            </div>
            <h1 data-reveal-hero class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal leading-[1.12]">
                Leadership, Institutions &amp; Social Impact
            </h1>
            <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/80 font-light max-w-2xl mx-auto leading-relaxed">
                Evidence of institutional stewardship and deliberate community commitment across commercial, industry, and humanitarian platforms.
            </p>
        </div>
    </section>

    <!-- Main Institutions Grid -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16" data-stagger-group>
            
            <!-- 1. Streamsowers & Köhn -->
            <div data-stagger-item id="streamsowers" class="p-8 sm:p-12 rounded bg-white border border-brand-stone/80 shadow-sm space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-brand-stone/80 pb-6">
                    <div>
                        <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block">Commercial Practice &bull; Operational Leadership</span>
                        <h2 class="font-serif text-2xl sm:text-3xl font-normal text-brand-navy mt-1">
                            Streamsowers &amp; Köhn
                        </h2>
                    </div>
                    <span class="inline-block px-3.5 py-1.5 rounded bg-brand-navy text-white text-[11px] font-semibold tracking-wider uppercase self-start sm:self-auto">
                        Chief Operating Officer
                    </span>
                </div>

                <div class="space-y-4 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed">
                    <p>
                        Streamsowers &amp; Köhn is an established commercial law firm in Nigeria with a distinguished record across major corporate transactions, dispute resolution, energy, and corporate governance advisory.
                    </p>
                    <p>
                        Serving as Chief Operating Officer, Modupe Olusoga collaborates with the Managing Partner and Practice Group leaders to formulate firmwide strategy, modernize operational frameworks, and drive administrative infrastructure that enables lawyers, clients, and sustainable commercial longevity.
                    </p>
                </div>

                <div class="pt-4 border-t border-brand-stone/60 flex items-center justify-between text-xs">
                    <span class="text-brand-muted font-light">Commercial Legal Practice &bull; Lagos, Nigeria</span>
                    <a href="https://sskohn.com" target="_blank" rel="noopener noreferrer" class="font-semibold uppercase tracking-wider text-brand-navy hover:text-brand-gold-dark transition-colors flex items-center gap-1.5">
                        <span>Visit Firm Website</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 2. ALAN -->
            <div data-stagger-item id="alan" class="p-8 sm:p-12 rounded bg-white border border-brand-stone/80 shadow-sm space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-brand-stone/80 pb-6">
                    <div>
                        <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block">Industry Professionalisation &bull; Governance</span>
                        <h2 class="font-serif text-2xl sm:text-3xl font-normal text-brand-navy mt-1">
                            Association of Law Firm Administrators Nigeria (ALAN)
                        </h2>
                    </div>
                    <span class="inline-block px-3.5 py-1.5 rounded bg-brand-gold text-brand-navy text-[11px] font-bold tracking-wider uppercase self-start sm:self-auto">
                        President &bull; 2026–2029 Term
                    </span>
                </div>

                <div class="space-y-4 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed">
                    <p>
                        The Association of Law Firm Administrators Nigeria (ALAN) is the national professional body advancing education, certification, and standard-setting for business managers and administrative executives within Nigeria's legal sector.
                    </p>
                    <p>
                        As President for the 2026–2029 term, Modupe leads the national executive council in implementing programs to professionalize law firm management, establish operations benchmarking, and advance the strategic standing of administrators in law firm longevity.
                    </p>
                </div>

                <div class="pt-4 border-t border-brand-stone/60 flex items-center justify-between text-xs">
                    <span class="text-brand-muted font-light">National Professional Body &bull; Legal Sector Stewardship</span>
                    <a href="https://alanigeria.org" target="_blank" rel="noopener noreferrer" class="font-semibold uppercase tracking-wider text-brand-navy hover:text-brand-gold-dark transition-colors flex items-center gap-1.5">
                        <span>Visit ALAN Website</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 3. The Strides Platform -->
            <div data-stagger-item id="strides" class="p-8 sm:p-12 rounded bg-white border border-brand-stone/80 shadow-sm space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-brand-stone/80 pb-6">
                    <div>
                        <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block">Personal &bull; Professional Growth</span>
                        <h2 class="font-serif text-2xl sm:text-3xl font-normal text-brand-navy mt-1">
                            The Strides Platform
                        </h2>
                    </div>
                    <span class="inline-block px-3.5 py-1.5 rounded bg-brand-cream border border-brand-stone text-brand-charcoal text-[11px] font-semibold tracking-wider uppercase self-start sm:self-auto">
                        Founder &bull; Initiative
                    </span>
                </div>

                <div class="space-y-4 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed">
                    <p>
                        The Strides Platform is a focused leadership and personal development initiative established to equip emerging executives and professionals with the mental discipline, practical tools, and accountability structures required to achieve meaningful career milestones.
                    </p>
                </div>

                <div class="pt-4 border-t border-brand-stone/60 flex items-center justify-between text-xs">
                    <span class="text-brand-muted font-light">Leadership Development &bull; Mentorship Community</span>
                    <a href="{{ route('mentorship') }}" class="font-semibold uppercase tracking-wider text-brand-navy hover:text-brand-gold-dark transition-colors flex items-center gap-1.5">
                        <span>Explore Programmes</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- 4. Project CHAM -->
            <div data-stagger-item id="cham" class="p-8 sm:p-12 rounded bg-white border border-brand-stone/80 shadow-sm space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-brand-stone/80 pb-6">
                    <div>
                        <span class="text-[10px] uppercase tracking-widest text-brand-gold font-bold block">Humanitarian &bull; Social Responsibility</span>
                        <h2 class="font-serif text-2xl sm:text-3xl font-normal text-brand-navy mt-1">
                            Project CHAM
                        </h2>
                    </div>
                    <span class="inline-block px-3.5 py-1.5 rounded bg-red-900/10 text-red-900 text-[11px] font-semibold tracking-wider uppercase self-start sm:self-auto">
                        Advocacy &bull; Health
                    </span>
                </div>

                <div class="space-y-4 text-xs sm:text-sm text-brand-charcoal/80 font-light leading-relaxed">
                    <p>
                        Project CHAM is a dedicated philanthropic initiative advocating for and supporting children navigating pediatric health crises, particularly childhood cancer awareness, early diagnosis education, and family support resources in Nigeria.
                    </p>
                </div>

                <div class="pt-4 border-t border-brand-stone/60 flex items-center justify-between text-xs">
                    <span class="text-brand-muted font-light">Childhood Health Advocacy &bull; Philanthropy</span>
                    <span class="text-brand-muted italic">Community Partnership</span>
                </div>
            </div>

        </div>
    </section>
@endsection
