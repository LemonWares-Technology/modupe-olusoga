@props(['insight'])

<article {{ $attributes->merge(['class' => 'group flex flex-col justify-between p-6 sm:p-8 bg-white/90 border border-brand-stone/70 hover:border-brand-gold/60 transition-all duration-500 hover:shadow-lg']) }}>
    <div class="space-y-4">
        <div class="flex items-center justify-between text-[11px] text-brand-muted tracking-wider uppercase font-medium">
            <span class="px-2.5 py-1 rounded bg-brand-stone/40 text-brand-navy font-semibold text-[10px]">
                {{ $insight->category }}
            </span>
            <span>{{ $insight->read_time ?? '5 min read' }}</span>
        </div>

        <h3 class="font-serif text-xl sm:text-2xl text-brand-navy font-normal group-hover:text-brand-gold-dark transition-colors duration-300 leading-snug">
            <a href="{{ route('insights.show', $insight->slug) }}" class="block">
                {{ $insight->title }}
            </a>
        </h3>

        <p class="text-xs sm:text-sm text-brand-charcoal/75 leading-relaxed font-light line-clamp-3">
            {{ $insight->summary }}
        </p>
    </div>

    <div class="pt-6 mt-6 border-t border-brand-stone/50 flex items-center justify-between">
        <span class="text-[11px] text-brand-muted font-light">
            {{ \Carbon\Carbon::parse($insight->published_date)->format('F d, Y') }}
        </span>
        <a href="{{ route('insights.show', $insight->slug) }}" class="inline-flex items-center gap-1.5 text-xs font-semibold uppercase tracking-wider text-brand-navy group-hover:text-brand-gold-dark transition-colors">
            <span>Read Essay</span>
            <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">&rarr;</span>
        </a>
    </div>
</article>
