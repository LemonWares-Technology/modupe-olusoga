@extends('layouts.app')

@section('title', 'Building the Transgenerational Law Firm | Modupe Olusoga')
@section('meta_description', 'Building the Transgenerational Law Firm by Modupe Olusoga. How founders and leaders build professional services institutions that thrive beyond their creators. Target Launch: November 2027.')

@section('content')
    <!-- Book Hero Landing Section -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left: Book Cover Presentation -->
                <div class="lg:col-span-5 flex justify-center order-2 lg:order-1">
                    <div class="relative max-w-sm sm:max-w-md w-full">
                        <div class="absolute -inset-4 bg-brand-gold/20 rounded-2xl blur-xl pointer-events-none" aria-hidden="true"></div>
                        <div data-reveal-image class="relative rounded overflow-hidden shadow-2xl border border-brand-stone/80 bg-white">
                            <img src="{{ asset('images/bookc1.jpeg') }}" 
                                 alt="Building the Transgenerational Law Firm by Modupe Olusoga" 
                                 width="500" 
                                 height="750" 
                                 class="w-full h-auto object-cover hover:scale-[1.01] transition-transform duration-700">
                        </div>
                        
                        <div class="absolute -bottom-4 right-4 bg-brand-navy text-white px-4 py-2.5 rounded shadow-xl border border-brand-gold/40 text-xs text-center">
                            <span class="text-brand-gold font-bold block text-[9px] tracking-widest uppercase">Target Publication</span>
                            <span class="font-serif text-sm font-normal">November 2027</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Editorial Narrative -->
                <div class="lg:col-span-7 space-y-6 order-1 lg:order-2">
                    <div class="space-y-3">
                        <div data-reveal-hero>
                            <x-eyebrow>Print &bull; Digital &bull; Corporate Editions</x-eyebrow>
                        </div>
                        
                        <h1 data-reveal-hero class="font-serif text-4xl sm:text-5xl lg:text-6xl text-brand-navy font-normal leading-[1.12]">
                            Building the Transgenerational <span class="italic font-light text-brand-gold-dark">Law Firm</span>
                        </h1>
                        <p data-reveal-hero class="font-serif text-base sm:text-lg text-brand-muted italic">
                            From Founder Dependency to Institutional Longevity
                        </p>
                    </div>

                    <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/85 leading-relaxed font-light">
                        How can founders, managing partners, and senior leaders construct law firms—and professional services organisations at large—that thrive with vigor beyond their creators and current generation of leaders?
                    </p>

                    <div data-reveal-hero class="p-6 rounded bg-white/70 border border-brand-stone/80 space-y-3">
                        <div class="text-[10px] uppercase tracking-[0.25em] text-brand-gold font-semibold">The Central Inquiry</div>
                        <blockquote class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light italic">
                            "When an institution’s brilliance is inseparable from the founder’s personality, its lifespan is capped by human mortality. Longevity requires deliberate structural design: shifting from charismatic proprietorship to codified institutional stewardship."
                        </blockquote>
                    </div>

                    <div data-reveal-hero class="flex flex-wrap items-center gap-4 pt-2">
                        <x-button variant="primary" size="lg" href="#waitlist" arrow="true">
                            Join the Book Waiting List
                        </x-button>
                        <x-button variant="secondary" size="lg" href="{{ route('speaking') }}#enquiry">
                            Book Keynote on This Topic &rarr;
                        </x-button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Ten Core Structural Pillars -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70" data-reveal>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading 
                align="center"
                eyebrow="Comprehensive Inquiry"
                title="The Ten Structural Pillars of"
                italic="Institutional Longevity."
                description="An architectural blueprint for leaders seeking to build organizations designed for endurance across generations.">
            </x-section-heading>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mt-12" data-stagger-group>
                
                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">01</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Institutionalisation</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Codifying knowledge, decision matrices, and standards into self-sustaining firm assets.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">02</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Governance Architecture</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Separating management execution from equity ownership and partner remuneration metrics.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">03</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Succession Design</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Navigating equity transition, client handover protocols, and leadership succession gracefully.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">04</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Leadership Pipelines</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Developing junior lawyers into business developers, practice managers, and long-term custodians.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">05</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Cultural Durability</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Embedding core values that remain robust when founding creators are no longer in the room.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">06</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Talent Development</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Aligning transparent equity pathways and career trajectories for elite talent retention.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">07</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Founder De-linking</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Diagnosing key-person vulnerabilities and intentionally distributing institutional authority.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">08</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Institutional Brand</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Establishing brand trust that clients revere independently of individual attorneys.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">09</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Technology &amp; AI</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Deploying automated workflows while preserving the indispensable human judgment premium.</p>
                    </div>
                </div>

                <div data-stagger-item class="p-6 rounded bg-white border border-brand-stone/80 shadow-sm space-y-2 flex flex-col justify-between">
                    <div>
                        <span class="text-[10px] font-mono text-brand-gold font-bold block">10</span>
                        <h3 class="font-serif text-base font-normal text-brand-navy mt-1">Next-Gen Custodians</h3>
                        <p class="text-xs text-brand-charcoal/80 leading-relaxed font-light mt-2">Designing stewardship structures for the generation that will direct the firm thirty years out.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Intended Readership & Excerpt Note -->
    <section class="py-24 bg-brand-navy text-white" data-reveal>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <x-eyebrow color="text-brand-gold">Intended Readership</x-eyebrow>
                    <h2 class="font-serif text-3xl sm:text-5xl font-normal leading-tight text-white">
                        Written for custodians of professional institutions.
                    </h2>
                    <p class="text-sm sm:text-base text-brand-stone/80 font-light leading-relaxed">
                        Synthesizing operational leadership as Chief Operating Officer of Streamsowers &amp; Köhn, presidency of ALAN, and international comparative discussions across the International Bar Association.
                    </p>

                    <div class="space-y-3 text-xs sm:text-sm text-brand-stone font-light">
                        <div class="flex items-start gap-3"><span class="text-brand-gold font-bold">&bull;</span> Founders and Senior Partners preparing for succession</div>
                        <div class="flex items-start gap-3"><span class="text-brand-gold font-bold">&bull;</span> Managing Partners redesigning partner governance &amp; equity distribution</div>
                        <div class="flex items-start gap-3"><span class="text-brand-gold font-bold">&bull;</span> Law firm COOs, Executive Directors, and Business Leaders</div>
                        <div class="flex items-start gap-3"><span class="text-brand-gold font-bold">&bull;</span> Next-generation partners stepping into stewardship</div>
                        <div class="flex items-start gap-3"><span class="text-brand-gold font-bold">&bull;</span> Leaders of accounting, engineering, and consulting partnerships</div>
                    </div>
                </div>

                <div class="lg:col-span-6 bg-white/5 border border-white/10 rounded p-8 sm:p-12 space-y-4">
                    <span class="text-[10px] uppercase tracking-widest text-brand-gold font-semibold block">Prologue Excerpt</span>
                    <blockquote class="font-serif text-xl sm:text-2xl text-white font-normal leading-relaxed">
                        "A firm that cannot survive its founder was never an institution."
                    </blockquote>
                    <p class="text-xs sm:text-sm text-brand-stone/80 leading-relaxed font-light">
                        Too many partnerships equate commercial profitability with institutional health. But commercial success in the present can easily disguise terminal succession failure in the future. The test of an institution is not what happens when you are in the room; it is whether the standards, culture, and client relationships endure when you walk away forever.
                    </p>
                    <p class="text-[11px] text-brand-gold font-serif italic pt-2">— Modupe Olusoga, Prologue</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Book Waiting List Form -->
    <section id="waitlist" class="py-24 bg-brand-parchment/60 border-b border-brand-stone/70">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <x-section-heading 
                align="center"
                eyebrow="Advance Priority Access"
                title="Join the Book Waiting List"
                italic="for Confidential Previews."
                description="Be first to receive confidential chapter excerpts, author briefings, and priority notification when pre-orders and corporate bulk reservations open.">
            </x-section-heading>

            <div class="bg-white rounded border border-brand-stone/80 shadow-xl p-8 sm:p-12 mt-12">
                <form action="{{ route('book.waitlist') }}" method="POST" class="space-y-6">
                    @csrf

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

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="organisation" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Organisation / Law Firm Name
                            </label>
                            <input type="text" id="organisation" name="organisation" value="{{ old('organisation') }}" placeholder="e.g. Streamsowers & Köhn" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                        </div>

                        <div>
                            <label for="role" class="block text-[11px] uppercase tracking-wider font-semibold text-brand-charcoal mb-2">
                                Professional Role / Title
                            </label>
                            <input type="text" id="role" name="role" value="{{ old('role') }}" placeholder="e.g. Managing Partner / COO" class="w-full text-xs sm:text-sm px-4 py-3 rounded border border-brand-stone bg-brand-cream/40 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors">
                        </div>
                    </div>

                    <div>
                        <label class="flex items-start gap-3 p-4 rounded bg-brand-cream/60 border border-brand-stone/80 cursor-pointer hover:bg-brand-cream transition-colors">
                            <input type="checkbox" name="bulk_interest" value="1" {{ old('bulk_interest') ? 'checked' : '' }} class="mt-1 h-4 w-4 rounded border-brand-stone text-brand-gold focus:ring-brand-gold">
                            <span class="text-xs text-brand-charcoal/90 leading-relaxed font-light">
                                <strong class="font-medium text-brand-navy">Corporate &amp; Bulk Copies:</strong> I am interested in reserving bulk copies for my partners, leadership team, or executive cohort.
                            </span>
                        </label>
                    </div>

                    <div class="pt-2">
                        <x-button variant="primary" size="lg" type="submit" arrow="true" class="w-full">
                            Join Book Waiting List
                        </x-button>
                    </div>

                </form>
            </div>

        </div>
    </section>
@endsection
