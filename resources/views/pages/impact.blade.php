@extends('layouts.app')

@section('title', 'Leadership & Institutional Impact | Modupe Olusoga')
@section('meta_description', 'Institutional leadership roles, social impact initiatives, and professional platforms: Streamsowers & Köhn, ALAN, The Strides Platform, and Project CHAM.')

@section('content')

{{-- ============================================================
     HERO — left-aligned, no centre-stacking
     ============================================================ --}}
<section class="pt-32 pb-16 sm:pb-20 border-b border-brand-stone/60 bg-brand-cream">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        <div class="max-w-3xl">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-4" data-reveal-hero>Stewardship &bull; Institutional Ecosystem</p>
            <h1
                class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight mb-6"
                style="font-size: clamp(2.6rem, 6vw, 5.5rem);"
                data-hero-heading
            >
                Leadership,<br>Institutions &amp;<br>Social Impact
            </h1>
            <p class="text-base text-brand-charcoal leading-[1.8] max-w-xl" data-reveal-hero>
                Evidence of institutional stewardship and deliberate community commitment across commercial, industry, and humanitarian platforms.
            </p>
        </div>

    </div>
</section>

{{-- ============================================================
     INSTITUTION LEDGER — editorial row layout, not card stacks
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">

        @php
        $institutions = [
            [
                'index'    => '01',
                'category' => 'Commercial Practice',
                'name'     => 'Streamsowers & Köhn',
                'role'     => 'Chief Operating Officer',
                'badge_class' => 'bg-brand-navy text-white',
                'body'     => [
                    'Streamsowers & Köhn is an established commercial law firm in Nigeria with a distinguished record across major corporate transactions, dispute resolution, energy, and corporate governance advisory.',
                    'Serving as Chief Operating Officer, Modupe Olusoga collaborates with the Managing Partner and Practice Group leaders to formulate firmwide strategy, modernize operational frameworks, and drive administrative infrastructure that enables lawyers, clients, and sustainable commercial longevity.',
                ],
                'meta'  => 'Commercial Legal Practice &bull; Lagos, Nigeria',
                'link'  => ['href' => 'https://sskohn.com', 'label' => 'Visit Firm Website', 'external' => true],
            ],
            [
                'index'    => '02',
                'category' => 'Industry Governance',
                'name'     => 'Association of Law Firm Administrators Nigeria (ALAN)',
                'role'     => 'President &mdash; 2026–2029 Term',
                'badge_class' => 'bg-brand-gold text-brand-navy',
                'body'     => [
                    'The Association of Law Firm Administrators Nigeria (ALAN) is the national professional body advancing education, certification, and standard-setting for business managers and administrative executives within Nigeria\'s legal sector.',
                    'As President for the 2026–2029 term, Modupe leads the national executive council in implementing programs to professionalize law firm management, establish operations benchmarking, and advance the strategic standing of administrators in law firm longevity.',
                ],
                'meta'  => 'National Professional Body &bull; Legal Sector Stewardship',
                'link'  => ['href' => 'https://alanigeria.org', 'label' => 'Visit ALAN Website', 'external' => true],
            ],
            [
                'index'    => '03',
                'category' => 'Leadership Development',
                'name'     => 'The Strides Platform',
                'role'     => 'Founder',
                'badge_class' => 'border border-brand-stone text-brand-charcoal',
                'body'     => [
                    'The Strides Platform is a focused leadership and personal development initiative established to equip emerging executives and professionals with the mental discipline, practical tools, and accountability structures required to achieve meaningful career milestones.',
                ],
                'meta'  => 'Leadership Development &bull; Mentorship Community',
                'link'  => ['href' => '/mentorship', 'label' => 'Explore Programmes', 'external' => false],
            ],
            [
                'index'    => '04',
                'category' => 'Humanitarian',
                'name'     => 'Project CHAM',
                'role'     => 'Advocacy &bull; Health',
                'badge_class' => 'bg-red-50 text-red-900 border border-red-200',
                'body'     => [
                    'Project CHAM is a dedicated philanthropic initiative advocating for and supporting children navigating pediatric health crises, particularly childhood cancer awareness, early diagnosis education, and family support resources in Nigeria.',
                ],
                'meta'  => 'Childhood Health Advocacy &bull; Philanthropy',
                'link'  => null,
            ],
        ];
        @endphp

        @foreach($institutions as $inst)
        <div
            class="editorial-row group py-10 sm:py-12 grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 items-start"
            id="{{ strtolower(preg_replace('/[^a-z0-9]+/i', '-', $inst['name'])) }}"
            data-reveal
        >
            {{-- Index + category --}}
            <div class="lg:col-span-2 pt-1 flex lg:flex-col gap-4 lg:gap-2 items-center lg:items-start">
                <span class="font-serif text-3xl font-bold text-brand-stone/40 leading-none select-none shrink-0">{{ $inst['index'] }}</span>
                <p class="section-label text-brand-gold-dark hidden lg:block mt-2">{{ $inst['category'] }}</p>
            </div>

            {{-- Role + name --}}
            <div class="lg:col-span-4">
                <p class="section-label text-brand-muted mb-2">{{ $inst['category'] }}</p>
                <h2 class="font-serif text-xl sm:text-2xl font-bold text-brand-navy leading-snug mb-3">
                    {{ $inst['name'] }}
                </h2>
                <span class="inline-block text-xs font-semibold tracking-wide px-3 py-1.5 {{ $inst['badge_class'] }}" style="border-radius:2px;">
                    {!! $inst['role'] !!}
                </span>
            </div>

            {{-- Description + link --}}
            <div class="lg:col-span-6 space-y-4">
                @foreach($inst['body'] as $para)
                    <p class="text-base text-brand-charcoal leading-[1.8]">{{ $para }}</p>
                @endforeach

                <div class="pt-3 flex items-center justify-between border-t border-brand-stone/40">
                    <span class="text-xs text-brand-muted">{!! $inst['meta'] !!}</span>
                    @if($inst['link'])
                        <a
                            href="{{ $inst['link']['href'] }}"
                            @if($inst['link']['external']) target="_blank" rel="noopener noreferrer" @endif
                            class="editorial-link text-xs font-semibold text-brand-navy hover:text-brand-gold-dark transition-colors uppercase tracking-wider"
                        >
                            {{ $inst['link']['label'] }} &rarr;
                        </a>
                    @endif
                </div>
            </div>

        </div>
        @endforeach

    </div>
</section>

{{-- ============================================================
     CLOSING CTA — dark strip
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-navy" data-reveal>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-8">
            <div class="max-w-xl">
                <span class="gold-rule"></span>
                <p class="font-serif font-bold text-white text-2xl sm:text-3xl leading-snug">
                    Explore the mentorship programme or invite Modupe to speak at your next convening.
                </p>
            </div>
            <div class="flex flex-wrap gap-3 shrink-0">
                <a href="{{ route('mentorship') }}#apply" class="btn-base btn-gold">
                    <span>Apply for Mentorship</span>
                    <span aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ route('speaking') }}#enquiry" class="btn-base btn-outline-light">
                    <span>Speaking Enquiry</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
