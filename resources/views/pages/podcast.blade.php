@extends('layouts.app')

@section('title', 'Media, Podcast & Press Resources | Modupe Olusoga')
@section('meta_description', 'Official podcast previews, media appearances, press kit, high-resolution photography, and interview booking for Modupe Olusoga.')

@section('content')

{{-- ============================================================
     HERO — left-aligned
     ============================================================ --}}
<section class="pt-32 pb-16 sm:pb-20 border-b border-brand-stone/60 bg-brand-cream">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="max-w-2xl">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-4" data-reveal-hero>Broadcast Hub &bull; Press Resources</p>
            <h1
                class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight mb-5"
                style="font-size: clamp(2.4rem, 5vw, 4.8rem);"
                data-hero-heading
            >
                Media, Podcast &amp; Press Assets
            </h1>
            <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                Strategic dialogues on institutional longevity, the business of law, and official assets for conference conveners and journalists.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================
     PODCAST SERIES — dark section, no gradient glow ring
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-navy text-white border-b border-white/10" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Series info --}}
            <div class="lg:col-span-7 space-y-7">
                <div class="space-y-4">
                    <span class="gold-rule"></span>
                    <p class="section-label text-brand-gold">Upcoming Broadcast Series</p>
                    <h2 class="font-serif font-bold text-white text-2xl sm:text-4xl leading-snug tracking-tight">
                        The Transgenerational Enterprise
                    </h2>
                    <p class="font-serif text-base italic text-brand-gold/80">
                        In-depth conversations with founders, managing partners, and institutional stewards.
                    </p>
                </div>

                <p class="text-base text-white/75 leading-[1.8]">
                    A curated dialogue exploring the unspoken realities of partnership survival, transition of authority, building operational discipline, and scaling human excellence across Africa and emerging global markets.
                </p>

                {{-- Episode index — no bg-white/5 frosted tiles, just ruled rows --}}
                <div class="border-t border-white/10">
                    <p class="section-label text-white/40 py-3">Upcoming Episode Lineup</p>
                    @foreach([
                        ['Ep. 01', 'When the Founder Walks Out', 'The Architecture of Real Succession'],
                        ['Ep. 02', 'The Business of Law',        'Why Billable Hours Are No Longer Sufficient'],
                        ['Ep. 03', 'The Discipline Gap',         'Turning Ambition into Weekly Execution'],
                    ] as $ep)
                    <div class="py-4 border-b border-white/10 flex items-center justify-between gap-4">
                        <div>
                            <span class="section-label text-brand-gold">{{ $ep[0] }}</span>
                            <p class="text-sm font-semibold text-white mt-1">{{ $ep[1] }}: <span class="font-light text-white/70">{{ $ep[2] }}</span></p>
                        </div>
                        <span class="section-label text-brand-gold shrink-0">Preview</span>
                    </div>
                    @endforeach
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ route('speaking') }}#enquiry" class="btn-base btn-gold">
                        <span>Propose Guest / Collaboration</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                    <span class="text-xs text-white/40">Distribution: Apple Podcasts, Spotify &amp; YouTube</span>
                </div>
            </div>

            {{-- Podcast identity — no gradient glow ring, clean type treatment --}}
            <div class="lg:col-span-5 flex items-start justify-center">
                <div class="border border-white/15 p-10 text-center space-y-5 w-full" style="border-radius:2px;">
                    <div class="w-14 h-14 border border-brand-gold/40 flex items-center justify-center mx-auto">
                        <svg class="w-7 h-7 text-brand-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 100-6 3 3 0 000 6z" />
                        </svg>
                    </div>
                    <div>
                        <p class="font-serif text-lg font-bold text-white tracking-wide">MODUPE OLUSOGA</p>
                        <p class="section-label text-brand-gold mt-1">The Transgenerational Enterprise</p>
                    </div>
                    <p class="text-xs text-white/40 border-t border-white/10 pt-4">Audio &bull; Video &bull; Transcripts</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ============================================================
     PRESS KIT — speaker bios + photography
     ============================================================ --}}
<section id="press" class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="mb-10">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-3">Media &amp; Conference Assets</p>
            <h2 class="font-serif font-bold text-brand-navy text-2xl sm:text-3xl leading-snug tracking-tight">
                Official Press Kit &amp; Editorial Materials
            </h2>
            <p class="text-base text-brand-charcoal/70 mt-3 max-w-xl leading-relaxed">
                Materials prepared for conference conveners, journalists, panel programmers, and media hosts.
            </p>
        </div>

        {{-- Approved bios — editorial row layout --}}
        <div class="space-y-0 border border-brand-stone/60 overflow-hidden" style="border-radius:2px;">
            @foreach([
                ['Short Bio (50 Words)',    'Programme Booklets &amp; Badges',
                 'Modupe Olusoga is Chief Operating Officer of commercial law firm Streamsowers &amp; Köhn, President of the Association of Law Firm Administrators Nigeria (ALAN), and author of the upcoming book <em>Building the Transgenerational Law Firm</em>. She is an executive coach and keynote speaker on institutional governance and the business of law.'],
                ['Standard Bio (150 Words)','Conference Introductions &amp; Press Releases',
                 'Modupe Olusoga is an institutional leader, professional services executive, author, and speaker. She currently serves as Chief Operating Officer of commercial law firm Streamsowers &amp; Köhn and President of the Association of Law Firm Administrators Nigeria (ALAN, 2026–2029 term). She actively contributes to the International Bar Association\'s Law Firm Management Committee as African Regional Forum Liaison Officer. An alumnus of executive education at Harvard and MIT Sloan, holder of an MSc in Industrial &amp; Labour Relations and Senior Professional in Human Resources (SPHRi) accreditation, Modupe advises and speaks globally on law firm management, transgenerational institutional governance, partner succession, and deliberate personal leadership execution.'],
            ] as $bio)
            <div class="p-7 sm:p-8 border-b border-brand-stone/60 last:border-b-0">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4 pb-4 border-b border-brand-stone/50">
                    <span class="section-label text-brand-gold-dark">{!! $bio[0] !!}</span>
                    <span class="text-xs text-brand-muted">{!! $bio[1] !!}</span>
                </div>
                <p class="text-sm text-brand-charcoal leading-[1.85]">{!! $bio[2] !!}</p>
            </div>
            @endforeach
        </div>

        {{-- Photography download --}}
        <div class="mt-8 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 p-7 border border-brand-stone/60" style="border-radius:2px;">
            <div class="flex items-center gap-5">
                <img
                    src="{{ asset('images/modupe_portrait.jpg') }}"
                    alt="Modupe Olusoga Official Press Portrait"
                    class="w-14 h-14 object-cover object-top border border-brand-gold/40"
                    style="border-radius:2px;"
                >
                <div>
                    <h4 class="font-serif text-base font-semibold text-brand-navy">High-Resolution Press Photography</h4>
                    <p class="text-sm text-brand-muted">Print-ready 300 DPI portraits and stage photographs.</p>
                </div>
            </div>
            <a
                href="{{ asset('images/modupe_portrait.jpg') }}"
                download="Modupe_Olusoga_Official_Portrait.jpg"
                class="btn-base btn-primary shrink-0"
            >
                <span>Download Official Portrait</span>
                <span aria-hidden="true">&darr;</span>
            </a>
        </div>

    </div>
</section>

@endsection
