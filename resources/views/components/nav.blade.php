{{-- Navigation: logo + 4 links + square CTA + hamburger --}}
<header
    id="site-header"
    data-site-header
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
>
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10 h-[64px] sm:h-[68px] flex items-center justify-between">

        {{-- Logo — name only, no subtitle --}}
        <a href="{{ route('home') }}" class="group leading-none" aria-label="Modupe Olusoga — Home">
            <span class="font-serif text-[0.98rem] sm:text-[1.05rem] tracking-[0.04em] text-brand-navy uppercase font-semibold">Modupe Olusoga</span>
        </a>

        {{-- Primary Nav (desktop) --}}
        <nav class="hidden lg:flex items-center gap-10 text-[11px] tracking-[0.14em] uppercase font-semibold text-brand-charcoal/75" aria-label="Primary navigation">
            <a href="{{ route('about') }}"           class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('about')       ? 'text-brand-navy' : '' }}">About</a>
            <a href="{{ route('mentorship') }}"      class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('mentorship')  ? 'text-brand-navy' : '' }}">Mentorship</a>
            <a href="{{ route('book') }}"            class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('book')         ? 'text-brand-navy' : '' }}">The Book</a>
            <a href="{{ route('insights.index') }}"  class="editorial-link hover:text-brand-navy transition-colors {{ request()->routeIs('insights.*')  ? 'text-brand-navy' : '' }}">Insights</a>
        </nav>

        {{-- Right: square CTA + hamburger --}}
        <div class="flex items-center gap-2.5 sm:gap-4">

            {{-- Square-style CTA — not rounded-full --}}
            <a
                href="{{ route('mentorship') }}#apply"
                class="hidden sm:inline-flex btn-base btn-primary py-2.5 px-5 text-[10px]"
            >
                <span>Apply</span>
                <span class="text-brand-gold" aria-hidden="true">&rarr;</span>
            </a>

            {{-- Hamburger --}}
            <button
                id="nav-hamburger"
                type="button"
                aria-label="Toggle navigation menu"
                aria-expanded="false"
                class="flex items-center justify-center w-10 h-10 border border-brand-stone/70 hover:border-brand-charcoal/40 active:scale-95 transition-all text-brand-navy group"
                style="border-radius:2px;"
            >
                <div class="w-5 flex flex-col items-end gap-[5px]">
                    <span class="hamburger-line block h-px w-5 bg-brand-navy rounded-none transition-all duration-300"></span>
                    <span class="hamburger-line block h-px w-3.5 bg-brand-navy rounded-none transition-all duration-300 group-hover:w-5"></span>
                </div>
            </button>

        </div>
    </div>
</header>

{{-- Full-screen overlay menu with safe-area support and scroll container --}}
<div
    id="nav-overlay"
    class="fixed inset-0 z-[60] bg-brand-navy overflow-y-auto opacity-0 pointer-events-none transition-opacity duration-300"
    aria-hidden="true"
>
    <div class="min-h-full flex flex-col justify-between p-5 sm:p-10 lg:p-14 pt-[max(1.25rem,env(safe-area-inset-top))] pb-[max(1.5rem,env(safe-area-inset-bottom))]">

        {{-- Overlay header --}}
        <div class="flex items-center justify-between pb-5 sm:pb-8 border-b border-white/10 shrink-0">
            <span class="font-serif text-base sm:text-xl text-white tracking-[0.04em] uppercase font-semibold">Modupe Olusoga</span>

            <button
                id="nav-close"
                type="button"
                aria-label="Close menu"
                class="w-10 h-10 border border-white/20 hover:border-brand-gold flex items-center justify-center text-white/70 hover:text-white hover:bg-white/10 transition-all active:scale-95 shrink-0"
                style="border-radius:2px;"
            >
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        {{-- Navigation links --}}
        <nav class="py-3 sm:py-6 my-auto space-y-0" aria-label="Full navigation">
            @php
            $links = [
                ['label' => 'Home',       'route' => route('home'),           'active' => request()->routeIs('home')],
                ['label' => 'About',      'route' => route('about'),          'active' => request()->routeIs('about')],
                ['label' => 'Mentorship', 'route' => route('mentorship'),     'active' => request()->routeIs('mentorship')],
                ['label' => 'Speaking',   'route' => route('speaking'),       'active' => request()->routeIs('speaking')],
                ['label' => 'The Book',   'route' => route('book'),           'active' => request()->routeIs('book')],
                ['label' => 'Insights',   'route' => route('insights.index'), 'active' => request()->routeIs('insights.*')],
                ['label' => 'Impact',     'route' => route('impact'),         'active' => request()->routeIs('impact')],
                ['label' => 'Contact',    'route' => route('contact'),        'active' => request()->routeIs('contact')],
            ];
            @endphp
            @foreach($links as $link)
            <a
                href="{{ $link['route'] }}"
                class="nav-overlay-link group flex items-center justify-between py-2 sm:py-3 border-b border-white/8 hover:border-white/20 transition-colors duration-200"
            >
                <div class="flex items-center gap-2.5 sm:gap-3.5">
                    @if($link['active'])
                        <span class="w-1.5 h-1.5 rounded-full bg-brand-gold shrink-0" aria-hidden="true"></span>
                    @endif
                    <span class="font-serif text-xl sm:text-3xl md:text-4xl font-bold leading-none tracking-tight transition-colors duration-200 {{ $link['active'] ? 'text-brand-gold' : 'text-white/80 group-hover:text-white' }}">
                        {{ $link['label'] }}
                    </span>
                </div>
                <span class="text-base sm:text-xl shrink-0 ml-4 transition-all duration-200 {{ $link['active'] ? 'text-brand-gold translate-x-0' : 'text-brand-gold/0 group-hover:text-brand-gold group-hover:translate-x-1' }}" aria-hidden="true">&rarr;</span>
            </a>
            @endforeach
        </nav>

        {{-- Overlay footer --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pt-4 sm:pt-6 border-t border-white/10 shrink-0">
            <div class="text-[10px] sm:text-xs text-white/40 font-light space-y-0.5 hidden xs:block sm:block">
                <p>Lagos, Nigeria &bull; Global Advisory</p>
                <p>ALAN President 2026–2029 &bull; IBA African Regional Liaison</p>
            </div>

            <div class="grid grid-cols-2 gap-2 w-full sm:w-auto sm:flex sm:items-center sm:gap-2.5">
                <a href="{{ route('mentorship') }}#apply" class="btn-base btn-gold text-center justify-center py-2 px-3 text-[10px]">
                    <span class="sm:hidden">Apply &rarr;</span>
                    <span class="hidden sm:inline">Apply for Mentorship</span>
                    <span class="hidden sm:inline" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ route('contact') }}" class="btn-base btn-outline-light text-center justify-center py-2 px-3 text-[10px]">
                    <span class="sm:hidden">Enquiry</span>
                    <span class="hidden sm:inline">Executive Enquiry</span>
                </a>
            </div>
        </div>

    </div>
</div>
