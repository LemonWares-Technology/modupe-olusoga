{{-- Minimal Studio Navigation: Logo + 4 anchors + one CTA + hamburger --}}
<header
    id="site-header"
    data-site-header
    class="fixed top-0 inset-x-0 z-50 bg-transparent transition-all duration-300"
>
    <div class="max-w-screen-xl mx-auto px-6 lg:px-10 h-[72px] flex items-center justify-between">

        {{-- Logo Mark --}}
        <a href="{{ route('home') }}" class="group flex flex-col leading-none" aria-label="Modupe Olusoga — Home">
            <span class="font-serif text-[1.1rem] tracking-[0.06em] text-brand-navy uppercase font-normal">Modupe Olusoga</span>
            <span class="text-[9px] tracking-[0.28em] uppercase text-brand-muted/80 mt-[3px] font-medium">Institutional Leader</span>
        </a>

        {{-- Primary Nav (Desktop — 4 items max) --}}
        <nav class="hidden lg:flex items-center gap-10 text-[11px] tracking-[0.18em] uppercase font-medium text-brand-charcoal/80">
            <a href="{{ route('about') }}" class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('about') ? 'text-brand-navy font-semibold' : '' }}">About</a>
            <a href="{{ route('mentorship') }}" class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('mentorship') ? 'text-brand-navy font-semibold' : '' }}">Mentorship</a>
            <a href="{{ route('book') }}" class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('book') ? 'text-brand-navy font-semibold' : '' }}">The Book</a>
            <a href="{{ route('insights.index') }}" class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('insights.*') ? 'text-brand-navy font-semibold' : '' }}">Insights</a>
        </nav>

        {{-- Right side: CTA + Hamburger --}}
        <div class="flex items-center gap-3 sm:gap-4">
            
            {{-- Quick Apply Pill (Desktop & Tablet) --}}
            <a
                href="{{ route('mentorship') }}#apply"
                class="hidden sm:inline-flex items-center gap-2 text-[11px] tracking-[0.18em] uppercase font-semibold text-brand-navy border border-brand-navy/30 px-5 py-2.5 rounded-full hover:bg-brand-navy hover:text-white transition-all duration-300"
            >
                <span>Apply</span>
                <span class="text-brand-gold">&rarr;</span>
            </a>

            {{-- Hamburger Toggle Button (Universal touch target) --}}
            <button
                id="nav-hamburger"
                type="button"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                class="flex items-center justify-center w-11 h-11 rounded-full border border-brand-stone/80 sm:border-transparent hover:border-brand-stone hover:bg-white/60 active:scale-95 transition-all text-brand-navy group"
            >
                <div class="w-5 flex flex-col items-end gap-[5px]">
                    <span class="hamburger-line block h-[1.5px] w-5 bg-brand-navy rounded-full transition-all duration-300 group-hover:w-5"></span>
                    <span class="hamburger-line block h-[1.5px] w-3.5 bg-brand-navy rounded-full transition-all duration-300 group-hover:w-5"></span>
                </div>
            </button>

        </div>

    </div>
</header>

{{-- Full-Screen Architectural Overlay Menu --}}
<div
    id="nav-overlay"
    class="fixed inset-0 z-[60] bg-brand-navy flex flex-col justify-between p-6 sm:p-12 lg:p-16 overflow-y-auto opacity-0 pointer-events-none transition-opacity duration-300"
    aria-hidden="true"
>
    {{-- Overlay Top Bar --}}
    <div class="flex items-center justify-between pb-6 border-b border-white/10 shrink-0">
        <div>
            <span class="font-serif text-xl sm:text-2xl text-white tracking-tight block">Modupe Olusoga</span>
            <span class="text-[9px] sm:text-[10px] text-brand-gold tracking-[0.28em] uppercase font-medium block mt-0.5">Executive Platform &bull; Navigation</span>
        </div>

        {{-- Close Button --}}
        <button
            id="nav-close"
            type="button"
            aria-label="Close menu"
            class="w-11 h-11 rounded-full border border-white/20 hover:border-brand-gold flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all active:scale-95 shrink-0"
        >
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>

    {{-- Overlay Navigation Links (Scrollable & Responsive) --}}
    <nav class="my-auto py-8 sm:py-12 space-y-1">
        @php
        $links = [
            ['label' => 'Home',        'route' => route('home'),           'num' => '01'],
            ['label' => 'About',       'route' => route('about'),          'num' => '02'],
            ['label' => 'Mentorship',  'route' => route('mentorship'),     'num' => '03'],
            ['label' => 'Speaking',    'route' => route('speaking'),       'num' => '04'],
            ['label' => 'The Book',    'route' => route('book'),           'num' => '05'],
            ['label' => 'Insights',    'route' => route('insights.index'), 'num' => '06'],
            ['label' => 'Impact',      'route' => route('impact'),         'num' => '07'],
            ['label' => 'Contact',     'route' => route('contact'),        'num' => '08'],
        ];
        @endphp
        @foreach($links as $link)
        <a
            href="{{ $link['route'] }}"
            class="nav-overlay-link group flex items-baseline gap-4 sm:gap-6 py-2.5 sm:py-3.5 border-b border-white/8 hover:border-brand-gold/40 transition-colors duration-300"
        >
            <span class="text-[10px] sm:text-xs text-white/30 font-mono tracking-widest w-6 shrink-0">{{ $link['num'] }}</span>
            <span class="font-serif text-3xl sm:text-5xl lg:text-6xl font-light text-white/85 group-hover:text-white transition-colors duration-300 leading-none tracking-tight">{{ $link['label'] }}</span>
            <span class="ml-auto text-brand-gold/0 group-hover:text-brand-gold group-hover:translate-x-1 transition-all duration-300 text-xl sm:text-2xl">&rarr;</span>
        </a>
        @endforeach
    </nav>

    {{-- Overlay Bottom Footer Strip --}}
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6 pt-6 border-t border-white/10 shrink-0">
        <div class="text-[10px] text-white/40 uppercase tracking-[0.25em] space-y-1 font-light">
            <p>Lagos, Nigeria &bull; Global Advisory</p>
            <p>ALAN President 2026–2029 &bull; IBA African Regional Liaison</p>
        </div>
        
        <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
            <a
                href="{{ route('mentorship') }}#apply"
                class="w-full sm:w-auto text-center text-[11px] uppercase tracking-[0.2em] font-semibold text-brand-navy bg-brand-gold px-8 py-3.5 rounded-full hover:bg-brand-gold-light transition-colors shadow-sm"
            >
                Apply for Mentorship &rarr;
            </a>
            <a
                href="{{ route('contact') }}"
                class="w-full sm:w-auto text-center text-[11px] uppercase tracking-[0.2em] font-medium text-white/80 hover:text-white px-6 py-3.5 rounded-full border border-white/20 hover:border-white/40 transition-colors"
            >
                Executive Enquiry
            </a>
        </div>
    </div>
</div>
