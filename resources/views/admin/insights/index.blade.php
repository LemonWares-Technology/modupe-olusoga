@extends('layouts.admin')

@section('title', 'Insights & Thought Leadership')

@section('content')
<div class="space-y-6">

    <!-- Header & Action -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Content Architecture &bull; Thought Leadership</span>
            <h1 class="font-serif text-3xl font-normal text-brand-navy mt-1">
                Insights &amp; Published Essays
            </h1>
            <p class="text-xs text-brand-muted font-light mt-1">
                Write, revise, and manage your thought leadership essays, monographs, and research articles.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.insights.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-gold text-brand-navy font-semibold text-xs uppercase tracking-wider hover:bg-brand-gold-light transition-all shadow-sm">
                <span>+ Write New Insight</span>
            </a>
        </div>
    </div>

    <!-- Filters & Search Toolbar -->
    <div class="bg-white p-4 rounded-xl border border-brand-stone/80 shadow-sm">
        <form action="{{ route('admin.insights.index') }}" method="GET" class="flex flex-col md:flex-row gap-3 items-stretch md:items-center justify-between">
            
            <!-- Search Input -->
            <div class="relative flex-grow max-w-md">
                <input
                    type="text"
                    name="q"
                    value="{{ $searchQuery }}"
                    placeholder="Search by title, summary, or category..."
                    class="w-full pl-9 pr-4 py-2 rounded-lg border border-brand-stone text-xs text-brand-charcoal focus:outline-none focus:ring-1 focus:ring-brand-gold focus:border-brand-gold"
                >
                <span class="absolute left-3 top-2.5 text-brand-muted text-xs">&phone;</span>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center gap-2">
                
                <!-- Category Select -->
                <select name="category" class="text-xs px-3 py-2 rounded-lg border border-brand-stone bg-white text-brand-charcoal focus:outline-none focus:border-brand-gold">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ $selectedCategory === $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>

                <!-- Featured Filter -->
                <select name="featured" class="text-xs px-3 py-2 rounded-lg border border-brand-stone bg-white text-brand-charcoal focus:outline-none focus:border-brand-gold">
                    <option value="">All Articles</option>
                    <option value="1" {{ $featuredFilter === '1' ? 'selected' : '' }}>Featured Only</option>
                    <option value="0" {{ $featuredFilter === '0' ? 'selected' : '' }}>Non-Featured</option>
                </select>

                <button type="submit" class="px-4 py-2 rounded-lg bg-brand-navy text-white text-xs font-medium hover:bg-brand-charcoal transition-colors">
                    Filter
                </button>

                @if($searchQuery || $selectedCategory || $featuredFilter !== null)
                    <a href="{{ route('admin.insights.index') }}" class="px-3 py-2 rounded-lg border border-brand-stone text-brand-muted hover:text-brand-navy text-xs transition-colors">
                        Clear
                    </a>
                @endif

            </div>

        </form>
    </div>

    <!-- Insights Table Card -->
    <div class="bg-white rounded-2xl border border-brand-stone/80 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-brand-parchment/60 border-b border-brand-stone/70 text-[10px] uppercase tracking-wider text-brand-navy font-semibold">
                        <th class="py-3.5 px-6">Article Details</th>
                        <th class="py-3.5 px-4">Category</th>
                        <th class="py-3.5 px-4">Published Date</th>
                        <th class="py-3.5 px-4">Read Time</th>
                        <th class="py-3.5 px-4">Status</th>
                        <th class="py-3.5 px-6 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-brand-stone/60">
                    @forelse($insights as $insight)
                        <tr class="hover:bg-brand-cream/40 transition-colors">
                            
                            <!-- Title & Excerpt -->
                            <td class="py-4 px-6 max-w-md">
                                <div class="space-y-1">
                                    <h3 class="font-serif text-base font-medium text-brand-navy hover:text-brand-gold-dark">
                                        <a href="{{ route('admin.insights.edit', $insight) }}">
                                            {{ $insight->title }}
                                        </a>
                                    </h3>
                                    <p class="text-brand-muted line-clamp-1 font-light text-[11px]">
                                        {{ $insight->summary }}
                                    </p>
                                    <span class="text-[10px] text-brand-stone font-mono block">
                                        /insights/{{ $insight->slug }}
                                    </span>
                                </div>
                            </td>

                            <!-- Category -->
                            <td class="py-4 px-4 whitespace-nowrap">
                                <span class="px-2.5 py-1 rounded bg-brand-cream text-brand-gold-dark font-medium border border-brand-gold/30 text-[11px]">
                                    {{ $insight->category }}
                                </span>
                            </td>

                            <!-- Date -->
                            <td class="py-4 px-4 whitespace-nowrap text-brand-charcoal">
                                {{ $insight->published_date->format('M d, Y') }}
                            </td>

                            <!-- Read Time -->
                            <td class="py-4 px-4 whitespace-nowrap text-brand-muted font-light">
                                {{ $insight->read_time }}
                            </td>

                            <!-- Status / Featured -->
                            <td class="py-4 px-4 whitespace-nowrap">
                                @if($insight->is_featured)
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-brand-gold/20 text-brand-gold-dark font-semibold text-[10px] uppercase tracking-wider border border-brand-gold/40">
                                        <span class="w-1.5 h-1.5 rounded-full bg-brand-gold"></span>
                                        Featured
                                    </span>
                                @else
                                    <span class="text-brand-muted text-[11px]">Standard</span>
                                @endif
                            </td>

                            <!-- Actions -->
                            <td class="py-4 px-6 whitespace-nowrap text-right">
                                <div class="inline-flex items-center gap-2">
                                    <a
                                        href="{{ route('insights.show', $insight->slug) }}"
                                        target="_blank"
                                        class="px-2.5 py-1 rounded border border-brand-stone text-brand-muted hover:text-brand-navy hover:border-brand-gold transition-colors text-[11px]"
                                        title="View live article"
                                    >
                                        Live &nearr;
                                    </a>
                                    <a
                                        href="{{ route('admin.insights.edit', $insight) }}"
                                        class="px-3 py-1 rounded bg-brand-navy text-white hover:bg-brand-charcoal transition-colors font-medium text-[11px]"
                                    >
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('admin.insights.destroy', $insight) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you certain you wish to delete this insight? This action cannot be undone.');"
                                        class="inline-block"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            type="submit"
                                            class="px-2 py-1 rounded text-red-600 hover:bg-red-50 hover:text-red-800 transition-colors text-[11px]"
                                            title="Delete insight"
                                        >
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-sm text-brand-muted">
                                No insights found matching the criteria.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($insights->hasPages())
            <div class="p-4 border-t border-brand-stone/70 bg-brand-parchment/30">
                {{ $insights->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
