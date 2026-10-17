@props([
    'dot' => false,
    'tag' => 'span',
    'color' => 'text-brand-gold-dark',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'inline-flex items-center gap-2 section-label']) }}>
    @if($dot)
        <span class="w-1 h-1 rounded-full bg-brand-gold flex-shrink-0" aria-hidden="true"></span>
    @endif
    <span class="{{ $color }}">{{ $slot }}</span>
</{{ $tag }}>
