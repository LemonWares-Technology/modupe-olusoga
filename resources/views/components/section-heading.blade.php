@props([
    'eyebrow' => null,
    'title' => null,
    'italic' => null,
    'description' => null,
    'align' => 'left',
    'dark' => false,
])

@php
    $textColor = $dark ? 'text-white' : 'text-brand-navy';
    $descColor = $dark ? 'text-brand-stone/80' : 'text-brand-charcoal/80';
@endphp

@if($align === 'split')
    <div {{ $attributes->merge(['class' => 'grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-end pb-8 sm:pb-12 border-b ' . ($dark ? 'border-white/10' : 'border-brand-stone/70')]) }}>
        <div class="lg:col-span-7 space-y-3">
            @if($eyebrow)
                <x-eyebrow :color="$dark ? 'text-brand-gold' : 'text-brand-gold-dark'">{{ $eyebrow }}</x-eyebrow>
            @endif
            <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl {{ $textColor }} font-normal tracking-tight leading-[1.12]">
                {{ $title }}
                @if($italic)
                    <span class="italic font-light {{ $dark ? 'text-brand-gold' : 'text-brand-gold-dark' }}">{{ $italic }}</span>
                @endif
            </h2>
        </div>
        @if($description || $slot->isNotEmpty())
            <div class="lg:col-span-5">
                <p class="text-sm sm:text-base {{ $descColor }} font-light leading-relaxed max-w-lg">
                    {{ $description ?? $slot }}
                </p>
            </div>
        @endif
    </div>
@elseif($align === 'center')
    <div {{ $attributes->merge(['class' => 'max-w-3xl mx-auto text-center space-y-4 mb-12 sm:mb-16']) }}>
        @if($eyebrow)
            <div class="flex justify-center">
                <x-eyebrow :color="$dark ? 'text-brand-gold' : 'text-brand-gold-dark'">{{ $eyebrow }}</x-eyebrow>
            </div>
        @endif
        <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl {{ $textColor }} font-normal tracking-tight leading-[1.12]">
            {{ $title }}
            @if($italic)
                <span class="italic font-light {{ $dark ? 'text-brand-gold' : 'text-brand-gold-dark' }}">{{ $italic }}</span>
            @endif
        </h2>
        @if($description || $slot->isNotEmpty())
            <p class="text-sm sm:text-base {{ $descColor }} font-light leading-relaxed max-w-xl mx-auto">
                {{ $description ?? $slot }}
            </p>
        @endif
    </div>
@else
    <div {{ $attributes->merge(['class' => 'space-y-3 mb-8 sm:mb-12 max-w-3xl']) }}>
        @if($eyebrow)
            <x-eyebrow :color="$dark ? 'text-brand-gold' : 'text-brand-gold-dark'">{{ $eyebrow }}</x-eyebrow>
        @endif
        <h2 class="font-serif text-3xl sm:text-4xl lg:text-5xl {{ $textColor }} font-normal tracking-tight leading-[1.12]">
            {{ $title }}
            @if($italic)
                <span class="italic font-light {{ $dark ? 'text-brand-gold' : 'text-brand-gold-dark' }}">{{ $italic }}</span>
            @endif
        </h2>
        @if($description || $slot->isNotEmpty())
            <p class="text-sm sm:text-base {{ $descColor }} font-light leading-relaxed">
                {{ $description ?? $slot }}
            </p>
        @endif
    </div>
@endif
