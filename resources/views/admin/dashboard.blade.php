@extends('layouts.admin')

@section('title', 'Executive Dashboard')

@section('content')
<div class="space-y-8">
    
    <!-- Top Welcome Banner -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-brand-stone/70">
        <div>
            <span class="text-[10px] uppercase tracking-[0.25em] text-brand-gold-dark font-bold">Executive Control &bull; Modupe Olusoga</span>
            <h1 class="font-serif text-3xl sm:text-4xl text-brand-navy font-normal mt-1">
                Executive Platform Pulse
            </h1>
            <p class="text-xs sm:text-sm text-brand-muted font-light mt-1">
                Oversee your thought leadership journal, mentorship cohort applicants, and institutional engagements.
            </p>
        </div>
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.insights.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg bg-brand-gold text-brand-navy font-semibold text-xs uppercase tracking-wider hover:bg-brand-gold-light transition-all shadow-sm">
                <span>+ Write New Insight</span>
            </a>
            <a href="{{ route('insights.index') }}" target="_blank" class="inline-flex items-center gap-1.5 px-4 py-2.5 rounded-lg bg-white border border-brand-stone text-brand-navy font-medium text-xs hover:border-brand-gold transition-colors">
                <span>View Live Journal</span>
                <span class="text-brand-gold">&nearr;</span>
            </a>
        </div>
    </div>

    <!-- Executive Metrics Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        
        <!-- Metric 1: Insights -->
        <a href="{{ route('admin.insights.index') }}" class="p-5 rounded-xl bg-white border border-brand-stone/80 hover:border-brand-gold transition-all shadow-sm group">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-muted">Published Insights</span>
                <span class="text-brand-gold text-xs group-hover:translate-x-0.5 transition-transform">&rarr;</span>
            </div>
            <div class="font-serif text-3xl font-normal text-brand-navy">
                {{ $metrics['total_insights'] }}
            </div>
            <p class="text-[11px] text-brand-gold-dark font-medium mt-1">
                {{ $metrics['featured_insights'] }} Featured essays
            </p>
        </a>

        <!-- Metric 2: Mentorship Applications -->
        <a href="{{ route('admin.submissions.mentorship') }}" class="p-5 rounded-xl bg-white border border-brand-stone/80 hover:border-brand-gold transition-all shadow-sm group">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-muted">Mentorship Cohort</span>
                <span class="text-brand-gold text-xs group-hover:translate-x-0.5 transition-transform">&rarr;</span>
            </div>
            <div class="font-serif text-3xl font-normal text-brand-navy">
                {{ $metrics['mentorship_applications'] }}
            </div>
            <p class="text-[11px] text-brand-muted font-light mt-1">
                Registered applicants
            </p>
        </a>

        <!-- Metric 3: Speaking Enquiries -->
        <a href="{{ route('admin.submissions.speaking') }}" class="p-5 rounded-xl bg-white border border-brand-stone/80 hover:border-brand-gold transition-all shadow-sm group">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-muted">Speaking &amp; Keynotes</span>
                <span class="text-brand-gold text-xs group-hover:translate-x-0.5 transition-transform">&rarr;</span>
            </div>
            <div class="font-serif text-3xl font-normal text-brand-navy">
                {{ $metrics['speaking_enquiries'] }}
            </div>
            <p class="text-[11px] text-brand-muted font-light mt-1">
                Institutional invitations
            </p>
        </a>

        <!-- Metric 4: Book Waitlist -->
        <a href="{{ route('admin.submissions.book-waitlist') }}" class="p-5 rounded-xl bg-white border border-brand-stone/80 hover:border-brand-gold transition-all shadow-sm group">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-muted">Book Waiting List</span>
                <span class="text-brand-gold text-xs group-hover:translate-x-0.5 transition-transform">&rarr;</span>
            </div>
            <div class="font-serif text-3xl font-normal text-brand-navy">
                {{ $metrics['book_waitlist'] }}
            </div>
            <p class="text-[11px] text-brand-muted font-light mt-1">
                Pre-order subscribers
            </p>
        </a>

        <!-- Metric 5: Newsletter Subscribers -->
        <a href="{{ route('admin.submissions.subscribers') }}" class="p-5 rounded-xl bg-white border border-brand-stone/80 hover:border-brand-gold transition-all shadow-sm group">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] uppercase tracking-wider font-semibold text-brand-muted">Journal Readers</span>
                <span class="text-brand-gold text-xs group-hover:translate-x-0.5 transition-transform">&rarr;</span>
            </div>
            <div class="font-serif text-3xl font-normal text-brand-navy">
                {{ $metrics['newsletter_subscribers'] }}
            </div>
            <p class="text-[11px] text-brand-muted font-light mt-1">
                Subscribed executives
            </p>
        </a>

    </div>

    <!-- Main Content Split: Insights & Ledger -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Left: Recent Insights Management (2 Columns) -->
        <div class="lg:col-span-2 space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="font-serif text-xl font-normal text-brand-navy">Recent Insights &amp; Articles</h2>
                    <p class="text-xs text-brand-muted">Manage your latest publications and essays</p>
                </div>
                <a href="{{ route('admin.insights.index') }}" class="text-xs font-semibold uppercase tracking-wider text-brand-gold-dark hover:underline">
                    View All ({{ $metrics['total_insights'] }}) &rarr;
                </a>
            </div>

            <div class="bg-white border border-brand-stone/80 rounded-2xl overflow-hidden shadow-sm">
                <div class="divide-y divide-brand-stone/60">
                    @forelse($recentInsights as $insight)
                        <div class="p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4 hover:bg-brand-cream/30 transition-colors">
                            <div class="space-y-1.5 min-w-0">
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="text-[10px] uppercase tracking-wider font-semibold px-2 py-0.5 rounded bg-brand-cream text-brand-gold-dark border border-brand-gold/30">
                                        {{ $insight->category }}
                                    </span>
                                    @if($insight->is_featured)
                                        <span class="text-[9px] uppercase tracking-widest font-bold px-2 py-0.5 rounded bg-brand-gold text-brand-navy">
                                            Featured
                                        </span>
                                    @endif
                                    <span class="text-[11px] text-brand-muted">&bull; {{ $insight->published_date->format('M d, Y') }}</span>
                                    <span class="text-[11px] text-brand-muted">&bull; {{ $insight->read_time }}</span>
                                </div>
                                <h3 class="font-serif text-base font-normal text-brand-navy truncate">
                                    <a href="{{ route('admin.insights.edit', $insight) }}" class="hover:text-brand-gold-dark hover:underline">
                                        {{ $insight->title }}
                                    </a>
                                </h3>
                                <p class="text-xs text-brand-charcoal/70 line-clamp-1 font-light">
                                    {{ $insight->summary }}
                                </p>
                            </div>

                            <div class="flex items-center gap-2 shrink-0 pt-2 sm:pt-0">
                                <a href="{{ route('insights.show', $insight->slug) }}" target="_blank" class="p-2 rounded-lg text-brand-muted hover:text-brand-navy hover:bg-brand-cream transition-colors text-xs border border-transparent hover:border-brand-stone" title="View on live website">
                                    Live &nearr;
                                </a>
                                <a href="{{ route('admin.insights.edit', $insight) }}" class="px-3 py-1.5 rounded-lg bg-brand-navy text-white text-xs font-medium hover:bg-brand-charcoal transition-colors">
                                    Edit
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="p-8 text-center text-sm text-brand-muted">
                            No insights published yet. Click "+ Write New Insight" to start publishing.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Right: Recent Activity Stream (1 Column) -->
        <div class="space-y-6">
            
            <!-- Mentorship Applicants Box -->
            <div class="bg-white border border-brand-stone/80 rounded-2xl p-5 shadow-sm space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-brand-stone/60">
                    <div>
                        <h3 class="font-serif text-lg font-normal text-brand-navy">Mentorship Applicants</h3>
                        <p class="text-[11px] text-brand-muted">Recent cohort submissions</p>
                    </div>
                    <a href="{{ route('admin.submissions.mentorship') }}" class="text-[11px] font-semibold uppercase tracking-wider text-brand-gold-dark hover:underline">
                        All &rarr;
                    </a>
                </div>

                <div class="space-y-3">
                    @forelse($recentMentorships as $applicant)
                        <div class="text-xs space-y-0.5 p-2.5 rounded-lg bg-brand-cream/40 border border-brand-stone/40">
                            <div class="flex items-center justify-between font-semibold text-brand-navy">
                                <span>{{ $applicant->full_name }}</span>
                                <span class="text-[10px] text-brand-muted font-normal">{{ $applicant->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-brand-charcoal/80 text-[11px] font-light">{{ $applicant->current_role }} &bull; {{ $applicant->organisation }}</p>
                            <p class="text-brand-muted text-[10px] line-clamp-1 italic">"{{ $applicant->six_month_objective }}"</p>
                        </div>
                    @empty
                        <p class="text-xs text-brand-muted py-2">No mentorship applications received yet.</p>
                    @endforelse
                </div>
            </div>

            <!-- Speaking Enquiries Box -->
            <div class="bg-white border border-brand-stone/80 rounded-2xl p-5 shadow-sm space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-brand-stone/60">
                    <div>
                        <h3 class="font-serif text-lg font-normal text-brand-navy">Speaking Enquiries</h3>
                        <p class="text-[11px] text-brand-muted">Recent invitations &amp; keynotes</p>
                    </div>
                    <a href="{{ route('admin.submissions.speaking') }}" class="text-[11px] font-semibold uppercase tracking-wider text-brand-gold-dark hover:underline">
                        All &rarr;
                    </a>
                </div>

                <div class="space-y-3">
                    @forelse($recentSpeaking as $enquiry)
                        <div class="text-xs space-y-0.5 p-2.5 rounded-lg bg-brand-cream/40 border border-brand-stone/40">
                            <div class="flex items-center justify-between font-semibold text-brand-navy">
                                <span>{{ $enquiry->organisation }}</span>
                                <span class="text-[10px] text-brand-gold-dark font-medium">{{ $enquiry->engagement_type }}</span>
                            </div>
                            <p class="text-brand-charcoal/80 text-[11px] font-light">{{ $enquiry->full_name }} &bull; {{ $enquiry->job_title }}</p>
                            <p class="text-brand-muted text-[10px]">{{ $enquiry->proposed_date ?? 'Flexible' }} &bull; {{ $enquiry->location_type }}</p>
                        </div>
                    @empty
                        <p class="text-xs text-brand-muted py-2">No speaking enquiries yet.</p>
                    @endforelse
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
