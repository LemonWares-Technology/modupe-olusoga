@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'arrow' => false,
])

@php
    $baseStyles = 'inline-flex items-center justify-center font-medium tracking-wider uppercase transition-all duration-300 relative select-none disabled:opacity-50 disabled:pointer-events-none';

    $sizes = [
        'sm' => 'text-[10px] px-4 py-2.5 gap-1.5',
        'md' => 'text-xs px-6 py-3.5 gap-2',
        'lg' => 'text-xs sm:text-sm px-8 py-4 gap-2.5',
    ];

    $variants = [
        'primary' => 'bg-brand-navy text-white hover:bg-brand-gold hover:text-brand-navy shadow-sm hover:shadow-md border border-brand-navy hover:border-brand-gold',
        'secondary' => 'bg-transparent text-brand-navy hover:text-brand-navy hover:bg-brand-navy/5 border border-brand-navy/20 hover:border-brand-navy',
        'gold' => 'bg-brand-gold text-brand-navy font-semibold hover:bg-brand-gold-light border border-brand-gold shadow-sm',
        'dark-outline' => 'bg-transparent text-white border border-white/20 hover:border-brand-gold hover:text-brand-gold',
        'ghost' => 'text-brand-navy hover:text-brand-gold p-0 font-semibold tracking-widest editorial-link',
    ];

    $classes = $baseStyles . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if($arrow)
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
        @endif
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes]) }}>
        <span>{{ $slot }}</span>
        @if($arrow)
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
        @endif
    </button>
@endif
