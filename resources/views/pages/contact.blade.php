@extends('layouts.app')

@section('title', 'Book a Session & Executive Enquiries | Modupe Olusoga')
@section('meta_description', 'Executive office enquiries for advisory sessions, partner retreats, mentorship inquiries, speaking requests, or institutional collaborations with Modupe Olusoga.')

@section('content')

{{-- ============================================================
     HERO — left-aligned, no frosted card
     ============================================================ --}}
<section class="pt-32 pb-16 sm:pb-20 border-b border-brand-stone/60 bg-brand-cream">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="max-w-2xl">
            <span class="gold-rule"></span>
            <p class="section-label text-brand-gold-dark mb-4" data-reveal-hero>Executive Office &bull; Concierge</p>
            <h1
                class="font-serif font-bold text-brand-navy leading-[1.02] tracking-tight mb-5"
                style="font-size: clamp(2.4rem, 5vw, 4.8rem);"
                data-hero-heading
            >
                Book a Session &amp; Advisory Enquiries
            </h1>
            <p class="text-base text-brand-charcoal leading-[1.8]" data-reveal-hero>
                To protect focus and ensure strategic alignment, all engagements are scheduled following preliminary review by Modupe's executive team.
            </p>
        </div>
    </div>
</section>

{{-- ============================================================
     CONTACT GRID — info panel + form
     ============================================================ --}}
<section class="py-16 sm:py-24 bg-brand-cream border-b border-brand-stone/60">
    <div class="max-w-screen-xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

            {{-- Left: info + mentorship callout --}}
            <div class="lg:col-span-4 space-y-8" data-reveal>

                <div class="space-y-5">
                    <div>
                        <span class="gold-rule"></span>
                        <p class="section-label text-brand-gold-dark mb-1">Executive Office</p>
                        <h2 class="font-serif text-xl font-bold text-brand-navy">Engagement Concierge</h2>
                    </div>

                    <p class="text-sm text-brand-charcoal leading-relaxed">
                        Please use this channel for confidential enquiries regarding:
                    </p>

                    <div class="divide-y divide-brand-stone/50">
                        @foreach([
                            'Keynote speaking &amp; panel moderation',
                            'Law firm partner retreats &amp; offsites',
                            'Institution-building &amp; governance advisory',
                            'Succession &amp; leadership pipeline design',
                            'Press, podcasts &amp; strategic interviews',
                        ] as $item)
                        <div class="py-2.5 flex items-start gap-3">
                            <span class="text-brand-gold shrink-0 mt-0.5">&bull;</span>
                            <span class="text-sm text-brand-charcoal">{!! $item !!}</span>
                        </div>
                        @endforeach
                    </div>

                    <div class="pt-4 border-t border-brand-stone/60 space-y-4">
                        @foreach([
                            ['Executive Email',   '<a href="mailto:office@modupeolusoga.com" class="text-brand-navy font-medium hover:text-brand-gold-dark transition-colors">office@modupeolusoga.com</a>'],
                            ['Primary Base',      'Lagos, Nigeria &bull; Available for global and virtual engagements'],
                            ['Response Horizon',  'Typically within 2 business days'],
                        ] as [$label, $value])
                        <div>
                            <span class="section-label text-brand-muted block mb-1">{{ $label }}</span>
                            <span class="text-sm text-brand-charcoal">{!! $value !!}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Mentorship callout — no shadow card, dark strip --}}
                <div class="bg-brand-navy text-white p-6 space-y-3" style="border-radius:2px;">
                    <p class="section-label text-brand-gold">Individual Mentorship</p>
                    <p class="text-sm text-white/75 leading-relaxed">
                        Looking to join the 6-Month Mentorship Programme (February–July)? Please submit via the dedicated questionnaire.
                    </p>
                    <a href="{{ route('mentorship') }}#apply" class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-brand-gold hover:text-white transition-colors">
                        <span>Open Mentorship Application</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>

            {{-- Right: form --}}
            <div class="lg:col-span-8" data-reveal data-delay="0.1">
                <form action="{{ route('speaking.enquire') }}" method="POST" class="space-y-6 bg-white border border-brand-stone/60 p-7 sm:p-10" style="border-radius:2px;">
                    @csrf

                    <div class="pb-4 border-b border-brand-stone/60">
                        <h3 class="font-serif text-xl font-bold text-brand-navy">Submit Engagement Request</h3>
                        <p class="text-sm text-brand-muted mt-1">Please supply complete particulars so we can properly review and schedule your session.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        @foreach([
                            ['full_name',    'text',  'Your Full Name *',         'e.g. Modupe Olusoga',          true],
                            ['email',        'email', 'Professional Email *',     'office@organisation.com',      true],
                            ['phone',        'text',  'Phone / WhatsApp',         '+234 ...',                     false],
                            ['organisation', 'text',  'Organisation / Body *',    'e.g. Nigerian Bar Association',true],
                        ] as [$name, $type, $label, $ph, $req])
                        <div>
                            <label for="{{ $name }}" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">{{ $label }}</label>
                            <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
                                {{ $req ? 'required' : '' }} value="{{ old($name) }}" placeholder="{{ $ph }}"
                                class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                                style="border-radius:2px;"
                            >
                            @error($name)<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                        @endforeach

                        <div class="sm:col-span-2">
                            <label for="engagement_type" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">Nature of Engagement *</label>
                            <select id="engagement_type" name="engagement_type" required
                                class="w-full text-sm px-4 py-3 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                                style="border-radius:2px;"
                            >
                                <option value="">Select Engagement Type...</option>
                                <option>Conference / Keynote Address</option>
                                <option>Panel Participation &amp; Moderation</option>
                                <option>Partner &amp; Leadership Retreat Facilitation</option>
                                <option>Law Firm / Strategy Session</option>
                                <option>Governance &amp; Succession Advisory</option>
                                <option>Organisational Workshop</option>
                                <option>Podcast or Media Interview</option>
                                <option>Strategic Collaboration</option>
                            </select>
                            @error('engagement_type')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label for="topic_objectives" class="block text-xs font-semibold uppercase tracking-wider text-brand-charcoal mb-2">Session Objectives or Request Brief *</label>
                        <textarea id="topic_objectives" name="topic_objectives" rows="4" required
                            placeholder="Please describe the core objectives, context, or expected outcomes for this session."
                            class="w-full text-sm p-4 border border-brand-stone bg-brand-cream/50 focus:outline-none focus:border-brand-gold focus:bg-white transition-colors"
                            style="border-radius:2px;"
                        >{{ old('topic_objectives') }}</textarea>
                        @error('topic_objectives')<p class="text-xs text-red-500 mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="btn-base btn-primary w-full justify-center">
                            <span>Submit Engagement Request</span>
                            <span aria-hidden="true">&rarr;</span>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
