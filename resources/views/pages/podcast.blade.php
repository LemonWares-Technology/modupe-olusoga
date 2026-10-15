@extends('layouts.app')

@section('title', 'Media, Podcast & Press Resources | Modupe Olusoga')
@section('meta_description', 'Official podcast previews, media appearances, press kit, high-resolution photography, and interview booking for Modupe Olusoga.')

@section('content')
    <!-- Media Hero -->
    <section class="relative pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-brand-stone/70 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            <div data-reveal-hero class="flex justify-center">
                <x-eyebrow>Broadcast Hub &bull; Press Resources</x-eyebrow>
            </div>
            <h1 data-reveal-hero class="font-serif text-4xl sm:text-6xl text-brand-navy font-normal leading-[1.12]">
                Media, Podcast &amp; Press Assets
            </h1>
            <p data-reveal-hero class="text-base sm:text-lg text-brand-charcoal/80 font-light max-w-2xl mx-auto leading-relaxed">
                Strategic dialogues on institutional longevity, the business of law, and official assets for conference conveners and journalists.
            </p>
        </div>
    </section>

    <!-- Podcast Showcase Series -->
    <section class="py-24 bg-brand-cream border-b border-brand-stone/70" data-reveal>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-brand-navy text-white rounded p-8 sm:p-14 shadow-2xl relative overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10">
                    
                    <div class="lg:col-span-7 space-y-6">
                        <div class="space-y-3">
                            <x-eyebrow color="text-brand-gold">Upcoming Broadcast Series</x-eyebrow>
                            <h2 class="font-serif text-3xl sm:text-5xl font-normal leading-tight text-white">
                                The Transgenerational Enterprise
                            </h2>
                            <p class="font-serif text-base sm:text-lg text-brand-gold italic font-light">
                                In-depth conversations with founders, managing partners, and institutional stewards.
                            </p>
                        </div>

                        <p class="text-sm sm:text-base text-brand-stone/80 font-light leading-relaxed">
                            A curated dialogue exploring the unspoken realities of partnership survival, transition of authority, building operational discipline, and scaling human excellence across Africa and emerging global markets.
                        </p>

                        <!-- Episode Index -->
                        <div class="space-y-3 pt-2 text-xs text-brand-stone font-light">
                            <p class="font-semibold text-white uppercase tracking-widest text-[10px]">Upcoming Episode Lineup:</p>
                            <div class="p-4 bg-white/5 rounded border border-white/10 flex items-center justify-between">
                                <span>&bull; Ep. 01: <strong>When the Founder Walks Out:</strong> The Architecture of Real Succession</span>
                                <span class="text-brand-gold text-[10px] uppercase font-bold tracking-wider">Preview</span>
                            </div>
                            <div class="p-4 bg-white/5 rounded border border-white/10 flex items-center justify-between">
                                <span>&bull; Ep. 02: <strong>The Business of Law:</strong> Why Billable Hours Are No Longer Sufficient</span>
                                <span class="text-brand-gold text-[10px] uppercase font-bold tracking-wider">Preview</span>
                            </div>
                            <div class="p-4 bg-white/5 rounded border border-white/10 flex items-center justify-between">
                                <span>&bull; Ep. 03: <strong>The Discipline Gap:</strong> Turning Ambition into Weekly Execution</span>
                                <span class="text-brand-gold text-[10px] uppercase font-bold tracking-wider">Preview</span>
                            </div>
                        </div>

                        <div class="pt-4 flex flex-wrap gap-4 items-center">
                            <x-button variant="gold" size="md" href="{{ route('speaking') }}#enquiry">
                                Propose Guest / Collaboration
                            </x-button>
                            <span class="text-xs text-brand-stone/60 font-light">Distribution: Apple Podcasts, Spotify &amp; YouTube</span>
                        </div>
                    </div>

                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-64 h-64 sm:w-80 sm:h-80 rounded bg-gradient-to-tr from-brand-midnight via-brand-deep to-brand-gold/30 p-1 flex items-center justify-center border border-white/20 shadow-2xl">
                            <div class="w-full h-full rounded bg-brand-midnight/90 flex flex-col items-center justify-center text-center p-6 space-y-4">
                                <div class="w-16 h-16 rounded-full bg-brand-gold/20 text-brand-gold flex items-center justify-center">
                                    <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z" />
                                    </svg>
                                </div>
                                <div class="space-y-1">
                                    <p class="font-serif text-lg font-normal text-white tracking-wide">MODUPE OLUSOGA</p>
                                    <p class="text-[10px] uppercase tracking-widest text-brand-gold font-semibold">The Transgenerational Enterprise</p>
                                </div>
                                <span class="text-[10px] px-3 py-1 bg-white/10 rounded text-white/70">Audio &bull; Video &bull; Transcripts</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Official Press Kit & Conference Assets -->
    <section id="press" class="py-24 bg-brand-parchment/50 border-b border-brand-stone/70" data-reveal>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <x-section-heading 
                align="center"
                eyebrow="Media &amp; Conference Assets"
                title="Official Press Kit &amp;"
                italic="Editorial Materials."
                description="Materials prepared for conference conveners, journalists, panel programmers, and media hosts.">
            </x-section-heading>

            <!-- Bio Options for Programmers -->
            <div class="space-y-6">
                <h3 class="font-serif text-2xl font-normal text-brand-navy">Approved Speaker Biographies</h3>
                
                <div class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-brand-stone/60 pb-3">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-brand-gold">Short Bio (50 Words)</span>
                        <span class="text-xs text-brand-muted font-light">Programme Booklets &amp; Badges</span>
                    </div>
                    <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                        Modupe Olusoga is Chief Operating Officer of commercial law firm Streamsowers &amp; Köhn, President of the Association of Law Firm Administrators Nigeria (ALAN), and author of the upcoming book <em>Building the Transgenerational Law Firm</em>. She is an executive coach and keynote speaker on institutional governance and the business of law.
                    </p>
                </div>

                <div class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm space-y-3">
                    <div class="flex items-center justify-between border-b border-brand-stone/60 pb-3">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-brand-gold">Standard Bio (150 Words)</span>
                        <span class="text-xs text-brand-muted font-light">Conference Introductions &amp; Press Releases</span>
                    </div>
                    <p class="text-xs sm:text-sm text-brand-charcoal/80 leading-relaxed font-light">
                        Modupe Olusoga is an institutional leader, professional services executive, author, and speaker. She currently serves as Chief Operating Officer of commercial law firm Streamsowers &amp; Köhn and President of the Association of Law Firm Administrators Nigeria (ALAN, 2026–2029 term). She actively contributes to the International Bar Association's Law Firm Management Committee as African Regional Forum Liaison Officer. An alumnus of executive education at Harvard and MIT Sloan, holder of an MSc in Industrial &amp; Labour Relations and Senior Professional in Human Resources (SPHRi) accreditation, Modupe advises and speaks globally on law firm management, transgenerational institutional governance, partner succession, and deliberate personal leadership execution.
                    </p>
                </div>
            </div>

            <!-- Approved Photography & Assets -->
            <div class="p-8 rounded bg-white border border-brand-stone/80 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/modupe_portrait.jpg') }}" alt="Modupe Olusoga Official Press Portrait" class="w-16 h-16 rounded object-cover border border-brand-gold/60">
                    <div>
                        <h4 class="font-serif text-lg font-normal text-brand-navy">High-Resolution Press Photography</h4>
                        <p class="text-xs text-brand-muted font-light">Print-ready 300 DPI portraits and stage photographs.</p>
                    </div>
                </div>
                <x-button variant="primary" size="sm" href="{{ asset('images/modupe_portrait.jpg') }}" download="Modupe_Olusoga_Official_Portrait.jpg">
                    Download Official Portrait
                </x-button>
            </div>

        </div>
    </section>
@endsection
