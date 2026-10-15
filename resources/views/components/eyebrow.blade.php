@props([
    'dot' => true,
    'tag' => 'span',
    'color' => 'text-brand-gold',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'inline-flex items-center gap-2 text-[10px] sm:text-[11px] uppercase tracking-[0.22em] font-semibold text-brand-navy']) }}>
    @if($dot)
        <span class="w-1.5 h-1.5 rounded-full bg-brand-gold flex-shrink-0 animate-pulse"></span>
    @endif
    <span class="{{ $color }}">{{ $slot }}</span>
</{{ $tag }}>
